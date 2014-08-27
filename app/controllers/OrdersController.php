<?php
use Phalcon\Mvc\View, Phalcon\Mvc\Controller;
class OrdersController extends CartController
{
    public function initialize()
    {
      // $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Welcome');
        parent::initialize();
    }
    public function getorderlist($order_id,$header){
        $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->order_link;
            $url = $url."/".$order_id;
            $header = $this->session->get("accessCode");
           
            $return = $this->get_server_request(null, $url,$header,'get');
            $order_detail = $this->objectToArray(json_decode($return));
            return $order_detail;
    }
    public function delorder($order_id){
            try {
             $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->order_link;
            $url = $url."/".$order_id;
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request(null, $url,$header,'delete');
            $order_detail = $this->objectToArray(json_decode($return));
            return $order_detail;
            
        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            //    $view->error_messages = $message;
        }
    }
    public function sendorder($data){
         try {
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->order_link;
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request($data, $url,$header,'post');
            $order_detail = $this->objectToArray(json_decode($return));
             //print_r($header);
            
            return $order_detail;
            
        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            //    $view->error_messages = $message;
        }
    }
    public function indexAction()
    {
       
    }
    public function loadformAction(){
        $order_id = $this->request->get("order_id");
        $header = $this->session->get("accessCode");
        $order_detail = $this->getorderlist($order_id,$header);
        $this->view->setVar("order_detail", $order_detail);
    }
    public function delAction(){
        $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
        $order_id = $this->request->get("order_id");
        $order_id_del = $this->request->getPost("order_id_del");
        $cancel_detail = $this->delorder($order_id_del);
        if(isset($cancel_detail['message'])){
              echo json_encode(array("message" => 1));
            die; 
        }else if(isset($cancel_detail['error']))
            echo json_encode(array("message" => 2));
        die;
        
    }
    public function addAction(){
        $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
        $data =  array(
            'apply_date'=>date("Y-m-d",strtotime($this->request->getPost('apply_date'))),
            'apply_shift'=>$this->request->getPost('apply_shift'),
            'order_note'=>$this->request->getPost('combo_note'),
        );
        $combo_id = $this->request->getPost('combo_id');
        if($combo_id !="" || $combo_id!=null){
        $data['combo_id'] =  $this->request->getPost('combo_id');
        }
        $dishes = $this->request->getPost('dishes');
        if($dishes !="" || $dishes !=null){
            $data_list = ($this->request->getPost('dishes'));
            $data['dishes'] = explode("|",$data_list);
        }
        //print_r($data);
        
        $order_detail = $this->sendorder($data);
        
        //print_r($order_detail);
        if(isset($order_detail['order_id'])){
            $this->getuserinfo();
            CartController::clearcart();
            echo json_encode(array("message" => 1));
            die;
        }else if(isset($order_detail['error'])){
            if($order_detail['error']=="apply_date_invalid")
            echo json_encode(array("message" => 2));
            if($order_detail['error']=="insufficience_balance")
            echo json_encode(array("message" => 3));
             die;
        }else {
            echo json_encode(array("message" => 4));
             die;
        }
    }
    public function allAction(){
        $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
        $user_info = $this->session->get("user_profile");
        $user_id = $user_info['user_id'];
        $header = $this->session->get("accessCode");
        $list_order = $this->getorderlist(null,$header);
        $this->view->setVar("order_list", $list_order);
        
        
    }
   
}
