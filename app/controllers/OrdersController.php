<?php
require_once('/../app/plugins/recaptchalib.php');
class OrdersController extends ControllerBase
{
    public function initialize()
    {
      // $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Welcome');
        parent::initialize();
        $this->view->setVar("t", $this->_getTranslation());
    }
    
    public function objectToArray( $object )
    {
        if( !is_object( $object ) && !is_array( $object ) )
        {
            return $object;
        }
        if( is_object( $object ) )
        {
            $object = get_object_vars( $object );
        }
        return array_map(array($this, 'objectToArray'), $object );
    }
    
    public function get_server_request($postfields,$url){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
        curl_setopt($ch, CURLOPT_URL, $url );
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE );
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_COOKIESESSION, FALSE );
        curl_setopt($ch, CURLOPT_HEADER, FALSE );
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postfields));
        $ret = curl_exec($ch);
        return $ret;
    }
    public function testAction(){
        $url = "http://utdgame.com/user/login";
        $data = array(
            'email'=> 'demo@yahoo.com',
            'password'=>'12345'
        );  
        print_r( json_decode ($this->get_server_request($data,$url)));
        
    }
    public function indexAction()
    {
        
        //if (!$this->request->isPost()) {
//            $this->flash->notice('This is a sample application of the Phalcon PHP Framework.
//                Please don\'t provide us any personal information. Thanks');
//        }
    }
    public function signupAction(){
        $privatekey = "6LdKPfQSAAAAACV18UzIyX2CPQORAMGxNdhnd_O7";
          $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
  //   What happens when the CAPTCHA was entered incorrectly
    $this->flashSession->error ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
    return $this->response->redirect("users/login");     
  } else {
         try {
   	        $config = new Phalcon\Config\Adapter\Ini(__DIR__ . '/../config/config.ini');
			         $client_id= $config->Oauth->clientId;
        $url = $config->utdgame->signup;
        $data = array(
            'email'=> $this->request->getPost('email'),
            'password'=>$this->request->getPost('password'),
            'name'=>$this->request->getPost('name'),
            'rollno'=>$this->request->getPost('rollno'),
            'phone'=>$this->request->getPost('phone')
        );      
        $return = $this->get_server_request($data,$url);
        $data_login = json_decode($return);
		} catch ( ErrorException $e ) {
			$message = $e->getMessage ();
			$view->error_messages = $message;
		}
    }
    }
    public function loginAction(){
        require_once('/../plugins/recaptchalib.php');
        if(isset($session_username)){
            $this->response->redirect('index/index');
        }
        
    if ($this->request->isPost() == true) {
        
         try {
   	        $config = new Phalcon\Config\Adapter\Ini(__DIR__ . '/../config/config.ini');
			         $client_id= $config->Oauth->clientId;
        $url = $config->utdgame->login;
        $data = array(
            'email'=> $this->request->getPost('email'),
            'password'=>$this->request->getPost('password')
        );      
        $return = $this->get_server_request($data,$url);
        $data_login =  $this->objectToArray(json_decode($return));
        if($data_login['message']=="LOGIN_SUCCESS"){
        $token = array('authToken'=>$data_login['authToken']);
        $url_get_profile = $config->utdgame->user_profile;
        $user_info  = $this->get_server_request($token,$url_get_profile);
        die;
        return $this->response->redirect("index/index");
        }else{
             $this->flashSession->error("Your login detail is incorrect!");
             return $this->response->redirect("users/login");
        }
		} catch ( ErrorException $e ) {
			$message = $e->getMessage ();
			$view->error_messages = $message;
		}
        }
    
    }
    public function logoutAction(){
        $this->session->destroy();
        $this->response->redirect("/index/login",true)->send();
    }
    public function accessAction(){
         if(isset($session_username)){
            $this->response->redirect('index/index');
        }
   	    try {
   	        $config = new Phalcon\Config\Adapter\Ini(__DIR__ . '/../config/config.ini');
			         $client_id= $config->Oauth->clientId;
        $redirect_url = $config->Oauth->redirectUri;
        $state = md5(rand());
        $hd = $config->Oauth->hd;
        $url ="https://accounts.google.com/o/oauth2/auth?client_id=$client_id&redirect_uri=$redirect_url&response_type=code&scope=openid%20email&state=$state&hd=$hd";
         $this->response->redirect($url,true)->send();
        
		} catch ( ErrorException $e ) {
			$message = $e->getMessage ();
			$view->error_messages = $message;
		}
    }
}