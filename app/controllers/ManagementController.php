<?php
use Phalcon\Mvc\View,
    Phalcon\Mvc\Controller;
class ManagementController extends BaseController
{
    public function initialize()
    {
        // $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Welcome');
        parent::initialize();
    }

    public function indexAction()
    {
        $session_username = $this->session->get("accessCode");
    }
}

