<?php
class FoodController extends ControllerBase
{
    public function initialize()
    {
        // $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Welcome');
        parent::initialize();
        $this->view->setVar("t", $this->_getTranslation());
    }

    public function objectToArray($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map(array($this, 'objectToArray'), $object);
    }

    public function get_server_request_bypost($postfields, $url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_COOKIESESSION, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postfields));
        $ret = curl_exec($ch);
        return $ret;
    }
    public function get_server_request_byget($postfields, $url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_COOKIESESSION, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPGET, 1);
        $ret = curl_exec($ch);
        return $ret;
    }
    public function testAction()
    {
        $url = "http://utdgame.com/user/login";
        $data = array('email' => 'demo@yahoo.com', 'password' => '12345');
        print_r(json_decode($this->get_server_request($data, $url)));

    }
    public function indexAction()
    {

        //if (!$this->request->isPost()) {
        //            $this->flash->notice('This is a sample application of the Phalcon PHP Framework.
        //                Please don\'t provide us any personal information. Thanks');
        //        }
    }
    public function listfoodAction()
    {
        try {
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $client_id = $config->Oauth->clientId;
            $url = $config->utdgame->food_list;
            $data = array();
            $return = $this->get_server_request_byget($data, $url);
            $data_return = $this->objectToArray(json_decode($return));
            print_r($data_return);

            die;

        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            $view->error_messages = $message;
        }
    }
    public function addfoodAction()
    {

    }

    public function listfoodtypeAction()
    {

    }

    public function addfoodtypeAction()
    {

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
