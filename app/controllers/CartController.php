<?php
use Phalcon\Mvc\View, Phalcon\Mvc\Controller;
class CartController extends DishController
{
    public function initialize()
    {
        // $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Welcome to Dish Control');
        parent::initialize();
    }
    public function getadminoption(){
          try {
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->dish_option;
            $data = array();
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request(null, $url,null,'get');
            $data = $this->objectToArray(json_decode($return));
            if(isset($data['option_value'])) return $data['option_value']; else return null;
            
        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            //    $view->error_messages = $message;
        }
    }
    public function check_rule($dish_id){
         $admin_option = $this->session->get('admin_option');
         if(!isset($admin_option)){
            $admin_option = $this->getadminoption();
         }
         //print_r($admin_option);
        $dtype_list = $this->session->get("dtype_list");
        $dish_info = DishController::getdishbyid($dish_id);
        $dtype_id = $dish_info['dtype_detail']['dtype_id'];
        $dtype_list[] = $dtype_id;
        //print_r($dtype_list);
        $temp_admin_option = array();
        $isChanged = false;
        $hasNext = 0;
        //$check_admin_option = sizeof($admin_option);
        //echo "leng of admin option is ".$check_admin_option;
        foreach($admin_option as $option){
            if(isset($admin_option[1])){
                $hasNext = 1;
            }else{
                $hasNext = 0;   
            }
            //echo "array has ".$hasNext ;
            $temp_option = $option;
            $check=0;
            for($i=sizeof($temp_option['dtypes'])-1; $i>=0;$i--){
                if(isset($temp_option['dtypes'][$i]) ){
                   // echo $temp_option['dtypes'][$i] ."|". $dtype_id;
                  if($temp_option['dtypes'][$i] == $dtype_id && $check<1  ){
                   // echo $check." lan";
                    
                    unset($temp_option['dtypes'][$i]);
                    $check++;
                    
                  }
                }
            }
            //echo "temp_option <br>";
           // print_r($temp_option);
           // echo "option <br>";
           // print_r($option);
            if(sizeof($temp_option['dtypes']) != sizeof($option['dtypes'])){
            if(isset($temp_option['dtypes'])){
                //echo "size of temp_option ";
                //print_r(sizeof($temp_option['dtypes']));
                $isChanged = true;
                $temp_admin_option [] = $temp_option;
            }
            }
            
        }
        
       // print_r($temp_admin_option);
       // print_r(isset($temp_admin_option));
        //echo "size of temp_admin_option";
       // print_r(sizeof($temp_admin_option));
        if(sizeof($temp_admin_option)>0)
        $this->session->set('admin_option',$temp_admin_option);
        if($isChanged==true) return true;
        else return false;
    }
    public function addCartAction(){
        
         $header = $this->session->get('accessCode');
         if(isset($header)){
            if ($this->request->getPost('dish_id')) {
                $sesion_cart = $this->session->get('cart');
                if($sesion_cart==null || $sesion_cart==""){
                    $data = array(
                        'dish_id'=> array()
                     ); 
                }else{
                    $data = $this->session->get('cart');
                }
                $dish_id=$this->request->get('dish_id');
                $check = $this->check_rule($dish_id);
                $admin_option = $this->session->get('admin_option');
                //print_r($admin_option);
                if(sizeof($admin_option)>0){
                    if(isset($admin_option[0]['dtypes'][0]))
                    $dtype_info =  DishController::getdishtypebyid($admin_option[0]['dtypes'][0]);
                    else{
                        $dtype_info['dtype_name'] ="none";
                    }
                } 
                $data_return = array(
                    'price'=>$admin_option[0]['price'],
                    'dtype_name'=>$dtype_info['dtype_name'],
                    
                );  
                if($check=="true"){
                    $data['dish_id'][] = $dish_id;
                    $this->session->set('cart',$data);
                    $data_return['cart_quantity'] = sizeof($data['dish_id']);
                    //print_r($this->session->get('dtype_list'));
                    echo json_encode(array("message" => 1,"data"=>$data_return));
                    die;
                }else
                {
                    $data_return['cart_quantity'] = sizeof($data);
                    echo json_encode(array("message" => 2,"data"=>$data_return));
                    die;
                }        
               
                
            }
         }
    }
    
    public function showcartAction(){
        $cart = $this->session->get('cart');
        $cart_data = array();
        $dish_list_id = "";
        foreach($cart['dish_id'] as $dish){
            $cart_data[]=$this->getdishbyid($dish);
            if($dish_list_id == "") $dish_list_id = $dish;
            else $dish_list_id = $dish_list_id."|".$dish;
        }
        $this->view->setVar("dish_list", $cart_data);
        $this->view->setVar("dish_id_list", $dish_list_id);
    }
    
    public function clearCartAction(){
        $this->session->set('admin_option',$this->getadminoption());
        $this->session->set('cart',null);
        $this->session->set('dtype_list',null);
         return $this->response->redirect("home");
    }
}