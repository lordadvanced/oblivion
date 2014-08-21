<?php
use Phalcon\Mvc\View, Phalcon\Mvc\Controller;
class PaymentController extends BaseController 
{
    public function initialize()
    {
        // $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Welcome to payment Page!');
        parent::initialize();
    }
    public function indexAction()
    {
        $session_username = $this->session->get("accessCode");
    }
    public function addfundAction(){
         try {
            $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->payment_link;
            $data = array(
                "amount"=> $this->request->get('amount'),
                "method"=> $this->request->get("method")
            );
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request($data, $url,$header,"post");
            $data_list = $this->objectToArray(json_decode($return));
            $this->view->setVar("data_list", $data_list);
            
        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            //    $view->error_messages = $message;
        }
    }
    public function paymenthistoryAction(){
         try {
            $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $url = $config->utdgame->list_transaction;
            $data = array();
            $header = $this->session->get("accessCode");
            $return = $this->get_server_request($data, $url,$header,null);
            $data_list = $this->objectToArray(json_decode($return));
            print_r($data_list);
            die;
            $this->view->setVar("data_list", $data_list);
            
            
        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            //    $view->error_messages = $message;
        }
    }
}
