<?php
//require_once ('/../app/plugins/LightOpenID/openid.php');
class PaymentController extends PaymentManagementController
{
    public function indexAction()
    {
        $session_username = $this->session->get("accessCode");
    } 
}

?>