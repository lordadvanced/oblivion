<?php
use Phalcon\Mvc\View, Phalcon\Mvc\Controller;
class ComboController extends BaseController
{
    public function initialize()
    {
        // $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Welcome to Dish Control');
        parent::initialize();
    }
    public function getsuggestcombo(){
         try {
            $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->suggest_combo;
            $combo_id = $this->request->get("combo_id");
            //$url = $url . "/" . $combo_id;
            //                echo $url;
            //                echo"<br>";
            $data = array();
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request(null, $url,$header,'get');
            $data_combo_list = $this->objectToArray(json_decode($return));
            return $data_combo_list;

        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            //    $view->error_messages = $message;
        }
    }
     public function getcombobyid($combo_id){
         try {
            $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->combo_list;
            $combo_id = $this->request->get("combo_id");
            $url = $url . "/" . $combo_id;
            //                echo $url;
            //                echo"<br>";
            $data = array();
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request($data, $url);
            $data_combo_list = $this->objectToArray(json_decode($return));
            return $data_combo_list;

        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            //    $view->error_messages = $message;
        }
    }
    public function gethomepagecomboAction()
    {
            $data_combo_list = $this->getcombobyid(null);
            $this->view->setVar("combo_list", $data_combo_list);
    }
     public function suggestcomboAction()
    {
            $data_combo_list = $this->getsuggestcombo();
            //print_r($data_combo_list);
            //die;
           
            $this->view->setVar("combo_list", $data_combo_list);
    }
    public function getcombofororderAction(){
          $combo_id = $this->request->get('combo_id');
          $data_combo_list = $this->getcombobyid($combo_id);
          $this->view->setVar("combo_list", $data_combo_list);
    }
    public function ordersuggestAction(){
          $suggest_id = $this->request->get('suggest_id');
          $data_combo_list = $this->getsuggestcombo();
          $suggest_combo_detail = array();
          $list_dish = "";
          foreach($data_combo_list as $combo){
             if($combo['suggest_id']==$suggest_id){
                foreach($combo['dish_detail'] as $dish){
                    if($list_dish =="" || $list_dish ==null)
                        $list_dish = $dish['dish_id'];
                        else $list_dish = $list_dish ."|" . $dish['dish_id'];
                }
                $suggest_combo_detail = $combo;
                $suggest_combo_detail['dish_list']= $list_dish;
             }
             break;
          }
          $this->view->setVar("combo_list", $suggest_combo_detail);
    }

}