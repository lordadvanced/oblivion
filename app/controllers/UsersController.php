<?php

use Phalcon\Mvc\View, Phalcon\Mvc\Controller;
$config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
$path = $config->application->basePath;
require_once ($path . '/app/plugins/recaptchalib.php');
require_once ($path . '/app/plugins/qrlib/qrlib.php');
class UsersController extends BaseController
{
    public function initialize()
    {
        // $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Welcome');
        parent::initialize();

    }
    public function userdetail($data_login)
    {
        $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
        $basePath = $config->application->basePath;
        $user_detail = $data_login['user_detail'];
        $user_metadata = $data_login['user_metadata'];
        $data_profile = array(
            'user_id' => $user_detail['user_id'],
            'name' => $user_detail['display_name'],
            'email' => $user_detail['user_email'],
            'balance' => $user_detail['user_balance'],
            );
        foreach ($user_metadata as $meta) {
            if ($meta['meta_key'] == "profile_image")
                $data_profile['avatar'] = $meta['meta_value'];
            if ($meta['meta_key'] == "gender")
                $data_profile['gender'] = $meta['meta_value'];
            if ($meta['meta_key'] == "access_code")
                $data_profile['access_code'] = $meta['meta_value'];
            if ($meta['meta_key'] == "date_of_birth")
                $data_profile['date_of_birth'] = $meta['meta_value'];
            if ($meta['meta_key'] == "language")
                $data_profile['language'] = $meta['meta_value'];
            if ($meta['meta_key'] == "nationality")
                $data_profile['nationality'] = $meta['meta_value'];
            if ($meta['meta_key'] == "religion")
                $data_profile['religion'] = $meta['meta_value'];
            if($meta['meta_key']=="phone_number")
                $data_profile['mobile_phone'] =$meta['meta_value'];
        }
        //echo $data_profile['access_code'];
        $image = $data_profile['email'] . '.png';
        $path =  $basePath.'/public/assets/img/barcode/' . $image;
        QRcode::png($data_profile['access_code'], $path, 1, 7,2);
        if ($data_profile['avatar'] == "" || $data_profile['avatar'] == null || $data_profile['avatar'] ==
            "profile.png")
            $data_profile['avatar'] = "/assets/img/noavatar.jpg";
        $this->session->set("role", $user_detail['user_role']);
        $this->session->set("user_profile", $data_profile);
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
                    'display_name' => $this->request->getPost('name'));
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
        if ($this->session->get('accessCode') != null) {
            return $this->response->redirect("home/index");
        }

        if ($this->request->isPost() == true) {

            try {
                $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
                $url = $config->utdgame->login;
                $data = array('user_email' => $this->request->getPost('username'),
                        'user_password' => $this->request->getPost('password'));
                $remember_me = $this->request->getPost('remember');
                $return = $this->get_server_request($data, $url, null, 'post');
                $data_login = $this->objectToArray(json_decode($return));
               
                if ($data_login['api-token'] != "") {
                    $this->session->set('accessCode', $data_login['api-token']);
                    $this->userdetail($data_login);
                    return $this->response->redirect("home/index");
                } else {
                    $this->flashSession->error("Your login detail is incorrect!");
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
        $this->session->set('accessCode',null);
        $header = $this->session->get('accessCode');
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
    public function confirmAction()
    {
        $token = $this->request->get('confirm_token');
        $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
        $url = $config->utdgame->user_confirm;
        $url = $url . "/" . $token;
        $data = array();
        $return = $this->get_server_request($data, $url);
        $data_return = $this->objectToArray(json_decode($return));
        if ($data_return['error'] != null || $data_return['error'] != "") {
            $this->flashSession->error("Your confirm token is invalid! Please try again!");
            return $this->response->redirect("users/login");
        } else
            if ($data_return['message'] != null || $data_return['message'] != "") {
                $this->flashSession->success("Your confirm token is successful!");
                return $this->response->redirect("users/login");
            } else {
                $this->flashSession->error("Unknown Error");
                return $this->response->redirect("users/login");
            }

    }
    public function changepwdAction()
    {
        $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
        $url = $config->utdgame->change_pwd;
        $header = $this->session->get("accessCode");
        $old_pwd = $this->request->getPost('old_pwd');
        $new_pwd = $this->request->getPost('new_pwd');
        $data = array('current_password' => $old_pwd, 'new_password' => $new_pwd);
        $return = $this->get_server_request($data, $url, $header, 'put');
        $data_return = $this->objectToArray(json_decode($return));
        if (isset($data_return['messgae'])) {
            echo json_encode(array("message" => 1));
            die;
        } else
            if (isset($data_return['error'])) {
                if ($data_return['error'] == "current_password_invalid")
                    echo json_encode(array("message" => 2));
                else
                    echo json_encode(array("message" => 3));
                die;
            }
    }
    public function forgotpwdAction()
    {
        $email = $this->request->getPost('email_reset');
        $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
        $url = $config->utdgame->forgot_pwd;
        $data = array('user_email' => $email);
        $return = $this->get_server_request($data, $url, null, 'POST');
        $data_return = $this->objectToArray(json_decode($return));
        if (isset($data_return['message'])) {
            $this->flashSession->success("Please check your email for get the new password !");
            return $this->response->redirect("users/login");
        } else
            if (isset($data_return['error'])) {
                if ($data_return['error'] == "email_not_exist")
                    $this->flashSession->error("Your email is not exist!");
                return $this->response->redirect("users/login");
            }
    }
    public function resetpasswordAction()
    {
        $token = $this->request->get('confirm_token');
        $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
        $url = $config->utdgame->forgot_pwd;
        $url = $url . "/" . $token;
        $return = $this->get_server_request(null, $url, null, 'get');
        $data_return = $this->objectToArray(json_decode($return));
        if (isset($data_return['message'])) {
            $this->flashSession->success("You new password is " . $data_return['message'] .
                " ! Please login and change it!");
            return $this->response->redirect("users/login");
        } else {
            $this->flashSession->error("Your token is invalid!");
            return $this->response->redirect("users/login");
        }
    }
}
