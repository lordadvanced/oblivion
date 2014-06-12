<?php
use Phalcon\Mvc\View,
    Phalcon\Mvc\Controller;
class ManagementController extends ControllerBase
{
    public function initialize()
    {
        // $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Welcome');
        parent::initialize();
        $this->view->setVar("t", $this->_getTranslation());
    }

    public function indexAction()
    {
        $session_username = $this->session->get("accessCode");
//                if(!isset($session_username)){
//                    $this->response->redirect("users/login");
//                }
        
        //if (!$this->request->isPost()) {
        //            $this->flash->notice('This is a sample application of the Phalcon PHP Framework.
        //                Please don\'t provide us any personal information. Thanks');
        //        }
    }
    public function listusersAction()
    {
         $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
         echo '<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>User
							</div>
							<div class="tools">
								<a class="collapse" href="#">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form class="form-horizontal form-bordered" action="#">
								<div class="form-body">
									<div class="form-group ">
										<div class="col-md-2">
										<img class="img-responsive" alt="" src="/assets/img/avatar_medium.jpg">
										</div>
										<div class="col-md-4">
											<input type="text" readonly="" placeholder="Thanh Yey Cai Dep" class="form-control">
											<input type="text" readonly="" placeholder="yeycaidep@gmail.com" class="form-control">
										</div>
										<div class="col-md-2">
											<div class="radio-list">
												
												<input type="radio" checked="" value="option1"> Active						
												<input type="radio" value="option2"> Inactive
											</div>
										</div>
										<div class="col-md-2">
											<a href="#l" class="order">
												Change Order
											</a>
										</div>
										<div class="col-md-2">
											<a href="#l" class="order">
												Change Money
											</a>
										</div>
									</div>
									<div class="form-group ">
										<div class="col-md-2">
										<img class="img-responsive" alt="" src="/assets/img/avatar_medium2.jpg">
										</div>
										<div class="col-md-4">
											<input type="text" readonly="" placeholder="John" class="form-control">
											<input type="text" readonly="" placeholder="Yeaygwefe@gmail.com" class="form-control">
										</div>
										<div class="col-md-2">
											<div class="radio-list">
												
												<input type="radio" checked="" value="option3"> Active						
												<input type="radio" value="option4"> Inactive
											</div>
										</div>
										<div class="col-md-2">
											<a href="#l" class="order">
												Change Order
											</a>
										</div>
										<div class="col-md-2">
											<a href="#l" class="order">
												Change Money
											</a>
										</div>
									</div>
									<div class="form-group ">
										<div class="col-md-2">
										<img class="img-responsive" alt="" src="/assets/img/avatar_medium3.jpg">
										</div>
										<div class="col-md-4">
											<input type="text" readonly="" placeholder="Pleangg" class="form-control">
											<input type="text" readonly="" placeholder="homnaytroimuatothat@gmail.com" class="form-control">
										</div>
										<div class="col-md-2">
											<div class="radio-list">
												<input type="radio" value="option5"> Active						
												<input type="radio" checked="" value="option6"> Inactive
											</div>
										</div>
										<div class="col-md-2">
											<a href="#l" class="order">
												Change Order
											</a>
										</div>
										<div class="col-md-2">
											<a href="#l" class="order">
												Change Money
											</a>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>';
    }
    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect("/home/index", true)->send();
    }
    public function accessAction()
    {
        if (isset($session_username)) {
            $this->response->redirect('index/index');
        }
        try {
            $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
            $client_id = $config->Oauth->clientId;
            $redirect_url = $config->Oauth->redirectUri;
            $state = md5(rand());
            $hd = $config->Oauth->hd;
            $url = "https://accounts.google.com/o/oauth2/auth?client_id=$client_id&redirect_uri=$redirect_url&response_type=code&scope=openid%20email&state=$state&hd=$hd";
            $this->response->redirect($url, true)->send();

        }
        catch (ErrorException $e) {
            $message = $e->getMessage();
            $view->error_messages = $message;
        }
    }
}
