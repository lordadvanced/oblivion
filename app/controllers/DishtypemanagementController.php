<?php
use Phalcon\Mvc\View, Phalcon\Mvc\Controller;
class DishTypeManagementController extends DishController
{
    public function initialize()
    {
        // $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Welcome to dishtype page!');
        parent::initialize();
    }
    public function adddishtypeAction()
    {
        try {
            $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->dishtype;
            $data = array(
                        'dtype_name' => $this->request->get('dishtype_name'),
                        'dtype_description' => $this->request->get('dishtype_desc')
                    );
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request($data, $url, $header, 'post');
            $data_dishtype = $this->objectToArray(json_decode($return));
            if (isset($data_dishtype['message'])) {
                if (strpos($data_dishtype['message']['0'], "1062")) {
                    echo json_encode(array("message" => 1));
                    die;
                }
            }
            if ($data_dishtype['dtype_id']) {
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
    }
    public function allAction()
    {
            $data_dishtype_list  = $this->getdishtypebyid(null);
            $this->view->setVar("dish_list", $data_dishtype_list);
    }
     public function loaddishtypeAction(){
        try {
            $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->dishtype;
            $dishtype_id = $this->request->get("dtype_id");
            $url = $url . "/" . $dishtype_id;
            //                echo $url;
            //                echo"<br>";
            $data = array();
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request($data, $url);
            $data_dishtype_list = $this->objectToArray(json_decode($return));
            $this->view->setVar("list", $data_dishtype_list);
            
        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            //    $view->error_messages = $message;
        }
    }
    public function updateAction()
    {
        try {
            $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->dishtype;
            $url = $url."/".$this->request->getPost('dtype_id');
            $data = array(
                        'dtype_name' => $this->request->getPost('dishtype_name'),
                        'dtype_description' => $this->request->getPost('dishtype_desc')
                    );
            $header = $this->session->get("accessCode");
          //  echo $header;
//            die;
            $return = $this->get_server_request($data, $url, $header, 'put');
            $data_dishtype = $this->objectToArray(json_decode($return));
            if (!isset($data_dishtype)) {
                    echo json_encode(array("message" => 1));
            }
            if ($data_dishtype['dtype_id']) {
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
    }

}
