<?php
use Phalcon\Mvc\View, Phalcon\Mvc\Controller;
class DishManagementController extends DishController
{
    public function initialize()
    {
        // $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Welcome');
        parent::initialize();
    }
    public function insertdishAction()
    {
        //check if there is any filei
       	$config = new Phalcon\Config\Adapter\Ini(__DIR__ . '/../config/config.ini');
        $baseurl = $config->utdgame->linkUrl;
        $url = $config->utdgame->dish_add;
        if ($this->request->hasFiles() == true) {
            $isUploaded = false;
            $path=null;
            //for a loop handle each file individually
            foreach ($this->request->getUploadedFiles() as $upload) {
                $path = $baseurl.'/assets/img/dish/' . md5(uniqid(rand(), true)) . '-' . strtolower($upload->
                    getName());
                ($upload->moveTo($config->application->basePath."/public".$path)) ? $isUploaded = true : $isUploaded = false;
            }
            if($isUploaded==true) {
            $data = array(
                "dish_name"=>$this->request->getPost("dish_name"),
                "dish_description"=>$this->request->getPost("dish_desc"),
                "dish_image"=>$path,
                "dtype_id"=>$this->request->getPost("dish_type")
            );
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request($data, $url, $header, 'post');
            $data_dish = $this->objectToArray(json_decode($return));
            if ($data_dish['dish_id']) {
                echo json_encode(array("message" => 1));
                die;
            } else {
                echo json_encode(array("message" => 2));
                die;
            }
            }
        } else {
            echo json_encode(array("message" => 3));
            die;
        }
    }
    public function loaddishAction(){
        try {
            $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->dish_list;
            $dish_id = $this->request->get("dish_id");
            $url = $url . "/" . $dish_id;
            //                echo $url;
            //                echo"<br>";
            $data = array();
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request($data, $url);
            $data_dish_list = $this->objectToArray(json_decode($return));
            $this->view->setVar("dish_list", $data_dish_list);
            
        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            //    $view->error_messages = $message;
        }
    }
    public function updatedishAction()
    {
        $isUploaded = false;
        //check if there is any filei
       	$config = new Phalcon\Config\Adapter\Ini(__DIR__ . '/../config/config.ini');
        $url = $config->utdgame->dish_add;
        $dish_id  = $this->request->getPost("dish_id");
        $url = $url."/".$dish_id;
        if ($this->request->hasFiles() == true) {
            $path=null;
            //for a loop handle each file individually
            foreach ($this->request->getUploadedFiles() as $upload) {
                $path = $baseurl.'/assets/img/dish/' . md5(uniqid(rand(), true)) . '-' . strtolower($upload->
                    getName());
                ($upload->moveTo($config->application->basePath."/public".$path)) ? $isUploaded = true : $isUploaded = false;
            }
        }
         $data = array(
                "dish_name"=>$this->request->getPost("dish_update_name"),
                "dish_description"=>$this->request->getPost("dish_update_desc"),
                "dish_image"=>$this->request->getPost("old_img"),
                "dtype_id"=>$this->request->getPost("dish_type")
         );
        if($isUploaded==true) $data['dish_image'] = $path;           
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request($data, $url, $header, 'put');
            $data_dish = $this->objectToArray(json_decode($return));
            if ($data_dish['dish_id']) {
                echo json_encode(array("message" => 1));
                die;
            }else {
                echo json_encode(array("message" => 2));
                die;
            }
            
    }
 public function deletedishAction()
    {
        $config = new Phalcon\Config\Adapter\Ini(__DIR__ . '/../config/config.ini');
        $url = $config->utdgame->dish_list;
        $dish_id = $this->request->get("dish_id");
        $url = $url . "/" . $dish_id;
        $header = $this->session->get("accessCode");
        $data=null;
        if ($this->request->isPost() == true) {
             $url = $config->utdgame->dish_add;
             $dish_id = $this->request->get("dish_id");
             $url = $url . "/" . $dish_id;
            $return_data = $this->get_server_request($data,$url,$header,"DELETE");
            $data_dish = $this->objectToArray(json_decode($return_data));
             $this->response->redirect('management');
        }
        {
            $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
              //get the data of delete
             $return_data = $this->get_server_request($data, $url);
                $data_dish = $this->objectToArray(json_decode($return_data));
                $this->view->setVar("dish_list", $data_dish);
        }
        
        
    }
    
}
