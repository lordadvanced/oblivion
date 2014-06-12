<?php
require_once ('/../app/plugins/LightOpenID/openid.php');
class HomeController extends ControllerBase
{
    public function initialize()
    {
        // $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Welcome');
        parent::initialize();
        $this->view->setVar("t", $this->_getTranslation());
    }

    public function indexAction()
    {
        $session_username = $this->session->get("accessCode");
//                if(!isset($session_username)){
//                    $this->response->redirect("users/login");
//                }
        
        //if (!$this->request->isPost()) {
        //            $this->flash->notice('This is a sample application of the Phalcon PHP Framework.
        //                Please don\'t provide us any personal information. Thanks');
        //        }
    }
    public function loginAction()
    {


    }
    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect("/home/index", true)->send();
    }
    public function accessAction()
    {
        if (isset($session_username)) {
            $this->response->redirect('index/index');
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
}
