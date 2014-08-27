<?php
use Phalcon\Mvc\View, Phalcon\Mvc\Controller;
class DishController extends BaseController
{
    public function initialize()
    {
        // $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Dish Control Page');
        parent::initialize();
    }
    public function getdishbyid($dish_id){
        try {
            $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->dish_list;
            $url = $url . "/" . $dish_id;
            //                echo $url;
            //                echo"<br>";
            $data = array();
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request($data, $url);
            $data_dish_list = $this->objectToArray(json_decode($return));
            return $data_dish_list;
            
        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            //    $view->error_messages = $message;
        }
    }
    public function getdishtypebyid($dishtype_id){
        try {
            $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->dishtype;
            $url = $url . "/" . $dishtype_id;
            //                echo $url;
            //                echo"<br>";
            $data = array();
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request($data, $url);
            $data_dishtypes = $this->objectToArray(json_decode($return));
            // print_r($data_dishtypes);
            return $data_dishtypes;

        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            //    $view->error_messages = $message;
        }
    }
    
    
    public function indexAction()
    {
        try {
            $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->foodtype_list;
            //                echo $url;
            //                echo"<br>";
            $data = array();
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request($data, $url, $header);
            $data_login = $this->objectToArray(json_decode($return));
            print_r($data_login);
            die;
            if (isset($data_login['message'])) {
                if (strpos($data_login['message']['0'], "1062")) {
                    echo json_encode(array("message" => 1));
                    die;
                }
            }
            if ($data_login['food_type_id']) {
                echo json_encode(array("message" => 2));
                die;
            } else {
                echo json_encode(array("message" => 3));
                die;
            }
        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            //    $view->error_messages = $message;
        }
        //if (!$this->request->isPost()) {
        //            $this->flash->notice('This is a sample application of the Phalcon PHP Framework.
        //                Please don\'t provide us any personal information. Thanks');
        //        }
    }


    public function getdishtypeAction()
    {
            $data_dishtypes = $this->getdishtypebyid(null);
            $this->view->setVar("dishtypes", $data_dishtypes);
    }
    public function getonedishtypeAction()
    {
       $dishtype_id = $this->request->get("dishtype_id"); 
       $data_dishtypes = $this->getdishtypebyid($dishtype_id);
       $this->view->setVar("dishtypes", $data_dishtypes);
    }

    public function getalldishAction()
    {
            $data_dish_list  = $this->getdishbyid(null);
            $this->view->setVar("dish_list", $data_dish_list);
    }

    public function getonedishAction()
    {
         if($this->request->get("dish_id")){
         $dish_id = $this->request->get("dish_id");
         $data_dish_list= $this->getdishbyid($dish_id);
         $this->view->setVar("dish_list", $data_dish_list);
         }
    }

    
    public function gethotdishAction()
    {
         $data_dish_list  = $this->getdishbyid(null);
         $this->view->setVar("dish_list", $data_dish_list);
    }

    public function getdishfororderAction()
    {
        if($this->request->get("dish_id")){
         $dish_id = $this->request->get("dish_id");
         $data_dish_list= $this->getdishbyid($dish_id);
         $this->view->setVar("dish_list", $data_dish_list);
         }
    }
    public function getoptionAction(){
          try {
            $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->dish_option;
            $data = array();
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request(null, $url,$header,'get');
            $data = $this->objectToArray(json_decode($return));
            print_r($data);
            die;
            $this->view->setVar("option_data", $data);
            
        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            //    $view->error_messages = $message;
        }
    }
    public function listdishesAction(){
        $data_dish = $this->getdishbyid(null);
        $data_dtype = $this->getdishtypebyid(null);
        $data= array();
        $i=0;
        foreach($data_dtype as $dtype){ 
            $dtype['data']= array();
            foreach($data_dish as $dish){
                if($dish['dtype_detail']['dtype_id']==$dtype['dtype_id'])
                {
                   $dtype['data'][] = $dish;
                }
            }
            $data[] = $dtype;
        }
        $this->view->setVar("dish_data", $data);
    }
}
