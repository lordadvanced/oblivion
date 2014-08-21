<?php
//require_once ('/../app/plugins/LightOpenID/openid.php');
class FeedbackController extends BaseController
{
    public function initialize()
    {
        // $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Welcome to feedback management');
        parent::initialize();
    }

    public function indexAction()
    {
        $session_username = $this->session->get("accessCode");
    }
   
}
