<?php
use Phalcon\Mvc\View, Phalcon\Mvc\Controller;
$config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
$path = $config->application->basePath;
require_once ($path . '/app/plugins/recaptchalib.php');
class UsersController extends BaseController
{
    public function initialize()
    {
        // $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Welcome');
        parent::initialize();

    }

    public function signupAction()
    {
        $privatekey = "6LdKPfQSAAAAACV18UzIyX2CPQORAMGxNdhnd_O7";
        $resp = recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"],
            $_POST["recaptcha_response_field"]);

        if (!$resp->is_valid) {
            //   What happens when the CAPTCHA was entered incorrectly
            $this->flashSession->error("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
                "(reCAPTCHA said: " . $resp->error . ")");
            return $this->response->redirect("users/login");
        } else {
            try {
                $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
                $client_id = $config->Oauth->clientId;
                $url = $config->utdgame->signup;
                $data = array(
                    'user_email' => $this->request->getPost('email'),
                    'user_password' => $this->request->getPost('password'),
                    'display_name' => $this->request->getPost('name')
                );
                $return = $this->get_server_request($data, $url, null, 'post');
                $data_login = $this->objectToArray(json_decode($return));
                if ($data_login['error'] == "exist_email") {
                    $this->flashSession->error("Your register email have been existed!");
                    return $this->response->redirect("users/login");
                } else
                    if ($data_login['message'] == "check_your_email") {
                        $this->flashSession->success("Your register is successful!Please check your email for confirm!");
                        return $this->response->redirect("users/login");
                    } else {
                        $this->flashSession->error('Services Die');
                        return $this->response->redirect("users/login");
                    }
            }
            catch (ErrorException $e) {
                $message = $e->getMessage();
                $view->error_messages = $message;
            }
        }
    }
    public function loginAction()
    {
        $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
        $path = $config->application->basePath;
        require_once ($path . '/app/plugins/recaptchalib.php');
        if (isset($session_username)) {
            $this->response->redirect('home/index');
        }

        if ($this->request->isPost() == true) {

            try {
                $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
                $url = $config->utdgame->login;
                $data = array('user_email' => $this->request->getPost('username'), 
                              'user_password' => $this->request->getPost('password'));
                        
                $return = $this->get_server_request($data, $url, null, 'post');
                $data_login = $this->objectToArray(json_decode($return));
                if ($data_login['api-token'] != "") {
                    $user_detail = $data_login['user_detail'];
                    $user_metadata = $data_login['user_metadata'];
                    $data_profile = array(
                        'user_id' =>  $user_detail['user_id'],
                        'name' => $user_detail['display_name'],
                        'email' => $user_detail['user_email'],
                        'balance' => $user_detail['user_balance'],
                    );
                    foreach($user_metadata as $meta){
                        if($meta['meta_key']=="profile_image") $data_profile['avatar'] = $meta['meta_value'];
                        if($meta['meta_key']=="gender") $data_profile['gender'] = $meta['meta_value'];
                        if($meta['meta_key']=="access_code") $data_profile['access_code'] = $meta['meta_value'];
                        if($meta['meta_key']=="date_of_birth") $data_profile['date_of_birth'] = $meta['meta_value'];
                        if($meta['meta_key']=="language") $data_profile['language'] = $meta['meta_value'];
                    }

                    if($data_profile['avatar']=="" || $data_profile['avatar']==null)
                    $data_profile['avatar'] = "/assets/img/noavatar.jpg";
                    $this->session->set("role", $user_detail['user_role']);
                    $this->session->set("accessCode", $data_login['api-token']);
                    $this->session->set("user_profile", $data_profile);
                    return $this->response->redirect("home/index");
                } else {
                    $this->flashSession->error("Your login detail is incorrect!");
                    //                   $this->session->set("role", "manager");
                    //                     $this->session->set("accessCode", "test");
                    //                      $this->session->set("name", "Nguyen DUc Tien");
                    return $this->response->redirect("users/login");
                }
            }
            catch (ErrorException $e) {
                $message = $e->getMessage();
                $view->error_messages = $message;
            }
        }

    }
    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect("/home/index", true)->send();
    }
    public function accessAction()
    {
        if (isset($session_username)) {
            $this->response->redirect('/home/index');
        }
        try {
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $client_id = $config->Oauth->clientId;
            $redirect_url = $config->Oauth->redirectUri;
            $state = md5(rand());
            $hd = $config->Oauth->hd;
            $url = "https://accounts.google.com/o/oauth2/auth?client_id=$client_id&redirect_uri=$redirect_url&response_type=code&scope=openid%20email&state=$state&hd=$hd";
            $this->response->redirect($url, true)->send();

        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            $view->error_messages = $message;
        }
    }
    
    public function getusersAction()
    {
        try {
            $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->list_users;
            //                echo $url;
            //                echo"<br>";
            $data = array();
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request($data, $url, $header);
            $data_login = $this->objectToArray(json_decode($return));
            foreach ($data_login as $data) {
                if ($data['avatar'] == null || $data['avatar'] == "")
                    $data['avatar'] = "/assets/img/noavatar.jpg";
            }
            $this->view->setVar("users", $data_login);
        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            //    $view->error_messages = $message;
        }
    }
    public function confirmAction(){
        $token = $this->request->get('confirm_token');
        $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
        $url = $config->utdgame->user_confirm;
        $url = $url."/".$token;
        $data= array();
        $return = $this->get_server_request($data, $url);
        $data_return = $this->objectToArray(json_decode($return));
        if($data_return['error']!= null || $data_return['error']!= ""){
            $this->flashSession->error("Your confirm token is invalid! Please try again!");
            return $this->response->redirect("users/login");
        }else if($data_return['message']!= null || $data_return['message']!= ""){
            $this->flashSession->success("Your confirm token is successful!");
            return $this->response->redirect("users/login");
        }else {
            $this->flashSession->error("Unknown Error");
            return $this->response->redirect("users/login");
        }
         
    }


}
