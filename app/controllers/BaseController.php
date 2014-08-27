<?php

class BaseController extends Phalcon\Mvc\Controller
{

    protected function initialize()
    {
        Phalcon\Tag::prependTitle('Oblivion | ');
        $this->view->setVar("t", $this->_getTranslation());
    }

    protected function forward($uri)
    {
        $uriParts = explode('/', $uri);
        return $this->dispatcher->forward(array('controller' => $uriParts[0], 'action' =>
                $uriParts[1]));
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
    static function get_server_request($postfields, $url, $header = null, $type = null)
    {
//        print_r($postfields);
//        echo "<br>".$url."<br>";
//        echo $header."<br>";
//        echo $type."<br>";
//        die;
        $ch = curl_init();
        if ($header) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
                    'api-token: ' . $header));
        } else
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_COOKIESESSION, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        if ($type != null) {
            if ($type == "post" || $type=="POST") {
                curl_setopt($ch, CURLOPT_POST, 1);
            } else
                if ($type == "put") {
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                } else
                    if ($type == "DELETE" || $type == "delete") {
                        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
                    }else if($type=="get" || $type=="GET")
                    {
                     curl_setopt($ch, CURLOPT_POST, 0);
                    }
             //print_r(json_encode($postfields));
            if ($postfields != null || $postfields != "")
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postfields));
        } else
            curl_setopt($ch, CURLOPT_POST, 0);
        $ret = curl_exec($ch);
        return $ret;
    }
    protected function _getTranslation()
    {

        //Ask browser what is the best language
        // $language = $this->request->get('lang');
        $language = "en";
        $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
        $path = $config->application->basePath;
        //Check if we have a translation file for that lang
        if (file_exists($path . "/app/messages/" . $language . ".php")) {
            require $path . "/app/messages/" . $language . ".php";
        } else {
            // fallback to some default
            require $path . "/app/messages/en.php";
        }

        //Return a translation object
        return new \Phalcon\Translate\Adapter\NativeArray(array("content" => $messages));

    }
    public function getuserinfo(){
        $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
        $url = $config->utdgame->user_profile;
         $header = $this->session->get("accessCode");
        $return  = $this->get_server_request(null, $url, $header, 'get');
        $data_login = $this->objectToArray(json_decode($return));
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
                    $this->session->set("user_profile", $data_profile);
    }

}
