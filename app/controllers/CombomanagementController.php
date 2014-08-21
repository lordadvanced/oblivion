<?php
use Phalcon\Mvc\View, Phalcon\Mvc\Controller;
class CombomanagementController extends ComboController
{
    public function allcomboAction()
    {
        $data_combo = $this->getcombobyid(null);
        $this->view->setVar("combo_list", $data_combo);
    }
    public function addAction()
    {
        try {
            $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->combo_list;
            $dish_list = $this->request->getPost('dish_list');
            $data = array(
                'combo_name' => $this->request->getPost('combo_name'),
                'combo_description' => $this->request->getPost('combo_desc'),
                'combo_price' => $this->request->getPost('combo_price'),
                'combo_value' => $dish_list);
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request($data, $url, $header, 'POST');
            $data_out = $this->objectToArray(json_decode($return));
            if (isset($data_out['combo_id'])) {
                echo json_encode(array("message" => 1));
            } else {
                echo json_encode(array("message" => 2));
            }
        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            //    $view->error_messages = $message;
        }
    }
    public function addformAction()
    {
        $list_dish = DishController::getdishbyid(null);
        $this->view->setVar("dish_list", $list_dish);
    }
    public function editformAction()
    {
        $combo_id =  $this->request->get('combo_id');
        $data_combo = $this->getcombobyid($combo_id);
        $list_dish = DishController::getdishbyid(null);
        $this->view->setVar("combo_list", $data_combo);
        $this->view->setVar("dish_list", $list_dish);
    }
    public function loadcomboAction()
    {
        $combi_id = $this->request->get('combo_id');
        $data_combo = $this->getcombobyid($combi_id);
        $this->view->setVar("combo", $data_combo);
    }
    public function editAction()
    {
        
         try {
            $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->combo_list;
            $combo_id = $this->request->getPost('combo_id');
            $url = $url."/".$combo_id;
            $dish_list = $this->request->getPost('dish_list');
            $data = array(
                'combo_name' => $this->request->getPost('combo_name'),
                'combo_description' => $this->request->getPost('combo_desc'),
                'combo_price' => $this->request->getPost('combo_price'),
                'combo_value' => $dish_list);
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request($data, $url, $header, 'put');
            $data_out = $this->objectToArray(json_decode($return));
            if (isset($data_out['combo_id'])) {
                echo json_encode(array("message" => 1));
                die;
            } else {
                echo json_encode(array("message" => 2));
                die;
            }
        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            //    $view->error_messages = $message;
        };
    }
    public function deleteAction()
    {
            $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->combo_list;
            $combo_id = $this->request->get("combo_id");
            $url = $url . "/" . $combo_id;
            $header = $this->session->get("accessCode");
            $data = null;

            //get the data of delete
            $return_data = $this->get_server_request($data, $url);
            $data_dish = $this->objectToArray(json_decode($return_data));
            $this->view->setVar("combo_list", $data_dish);
        
    }
    public function delAction(){
        try{
              $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);

            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->combo_list;
            $combo_id = $this->request->getPost("combo_id");
            $url = $url . "/" . $combo_id;
            $header = $this->session->get("accessCode");
            $data = null;
            $return_data = $this->get_server_request($data, $url, $header, "DELETE");
            $data_out = $this->objectToArray(json_decode($return_data));
            if (isset($data_out['message']) == "delete_success") {
                echo json_encode(array("message" => 1));
                die;
            } else {
                echo json_encode(array("message" => 2));
                die;
            }
        }catch(exception $e){
            
        }
    }
}
