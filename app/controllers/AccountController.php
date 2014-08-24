<?php
//require_once ('/../app/plugins/LightOpenID/openid.php');
class AccountController extends UsersController
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
         $url = $config->utdgame->update_user;
         $user_profile = $this->session->get("user_profile");
         $baseurl = $config->application->linkUrl;
          $header = $this->session->get("accessCode"); 
          $data_result= array();
         $path=$user_profile['avatar'];
         $isUploaded = false;
         if ($this->request->hasFiles() == true) {
            
            //for a loop handle each file individually
            foreach ($this->request->getUploadedFiles() as $upload) {
                $image= md5(uniqid(rand(), true)) . '-' . strtolower($upload->getName());
                $path = $baseurl.'/assets/img/users_avatar/' . $image;
                ($upload->moveTo($config->application->basePath."/public/assets/img/users_avatar/".$image)) ? $isUploaded = true : $isUploaded = false;
            }
         }
          $dob = $this->request->getPost('dob');
          if($dob!="" || $dob!=null){
             $url_dob = $url."/date_of_birth";
             $data = array('meta_value'=>$dob);
             $return = $this->get_server_request($data, $url_dob, $header, 'put');
             $data_result[] = json_decode($return);
          }
          $gender = $this->request->getPost('gender');
          if($gender!="" || $gender!=null){
             $url_gender = $url."/gender";
             $data = array('meta_value'=>$gender);
             $return = $this->get_server_request($data, $url_gender, $header, 'put');
              $data_result[] = json_decode($return);
          }
          $nationality = $this->request->getPost('nationality');
          if($nationality!="" || $nationality!=null){
             $url_nationality = $url."/nationality";
             $data = array('meta_value'=>$nationality);
             $return = $this->get_server_request($data, $url_nationality, $header, 'put');
              $data_result[] = json_decode($return);
          }
          $phone_number  = $this->request->getPost('mobile_number');
          if($phone_number!="" || $phone_number!=null){
             $url_phone_number = $url."/phone_number";
             $data = array('meta_value'=>$phone_number);
             $return = $this->get_server_request($data, $url_phone_number, $header, 'put');
              $data_result[] = json_decode($return);
          }
          
          $religion = $this->request->getPost('religion');
          if($religion!="" || $religion!=null){
             $url_religion = $url."/religion";
             $data = array('meta_value'=>$religion);
             $return = $this->get_server_request($data, $url_religion, $header, 'put');
              $data_result[] = json_decode($return);
          }
           $access_code = $this->request->getPost('access_code');
          if($access_code!="" || $access_code!=null){
             $url_access_code = $url."/access_code";
             $data = array('meta_value'=>$access_code);
             $return = $this->get_server_request($data, $url_access_code, $header, 'put');
              $data_result[] = json_decode($return);
          }
          if($isUploaded==true){
             $url_image = $url."/profile_image";
             $data = array('meta_value'=>$path);
             $return = $this->get_server_request($data, $url_image, $header, 'put');
              $data_result[] = json_decode($return);
          }
         // print_r($data_result);
          if(sizeof($data_result)>0){
                 $data_user = $this->get_server_request(null,$config->utdgame->user_profile,$header,'get');
                 UsersController::userdetail($this->objectToArray(json_decode($data_user)));
                 echo json_encode(array("message" => 1));
                 die;
          }else{
                 echo json_encode(array("message" => 2));
                 die;
          }
          
    }
   
    
   
}
