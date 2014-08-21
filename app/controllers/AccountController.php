<?php
//require_once ('/../app/plugins/LightOpenID/openid.php');
class AccountController extends BaseController
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
        $user_profile = $this->session->get("user_profile");
        $this->view->setVar("user_profile", $user_profile);    
    }
    public function updateuserAction(){
         $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
         $url = $config->utdgame->user_profile;
         $user_profile = $this->session->get("user_profile");
          $header = $this->session->get("accessCode"); 
         $path=$user_profile['avatar'];
         if ($this->request->hasFiles() == true) {
            $isUploaded = false;
            //for a loop handle each file individually
            foreach ($this->request->getUploadedFiles() as $upload) {
                $path = '/assets/img/users_avatar/' . md5(uniqid(rand(), true)) . '-' . strtolower($upload->
                    getName());
                ($upload->moveTo($config->application->basePath."/public".$path)) ? $isUploaded = true : $isUploaded = false;
            }
         }
         
          $data = array(
                "name"=>$this->request->getPost("full_name"),
                "dob"=>$this->request->getPost("dob"),
                "gender"=>$this->request->getPost("gender"),
                "avatar"=>$path
          );
          $return = $this->get_server_request($data, $url, $header, 'put');
          $data_update = $this->objectToArray(json_decode($return));
          if($data_update['user_id']){
                 echo json_encode(array("message" => 1));
                 die;
          }else{
                 echo json_encode(array("message" => 2));
                 die;
          }
          
    }
   
    
   
}
