<?php

use Phalcon\Events\Event,
	Phalcon\Mvc\User\Plugin,
	Phalcon\Mvc\Dispatcher,
	Phalcon\Acl;

/**
 * Security
 *
 * This is the security plugin which controls that users only have access to the modules they're assigned to
 */
class Security extends Plugin
{

	public function __construct($dependencyInjector)
	{
		$this->_dependencyInjector = $dependencyInjector;
	}

	public function getAcl()
	{
	   
		if (!isset($this->persistent->acl)) {
          
			$acl = new Phalcon\Acl\Adapter\Memory();
          
			$acl->setDefaultAction(Phalcon\Acl::DENY);
           
			//Register roles
			$roles = array(
                'guest' => new Phalcon\Acl\Role('guest'),
				'user' => new Phalcon\Acl\Role('user'),
				'manager' => new Phalcon\Acl\Role('manager'),
                'administrator' => new Phalcon\Acl\Role('administrator')
			);
			foreach ($roles as $role) {
				$acl->addRole($role);
			}
            //Public area resources
			$publicResources = array(
				'home' => array('index'),
   	            'users' => array('index','login','logout','getusers','confirm','forgotpwd','resetpassword'),
                'dish' => array('listdishes','index','getdishfororderAction','getdishtype','getonedishtype','getalldish','getonedish','gethotdish','getdishfororder','getoption'),
                'combo'=>array('getcombobyid','gethomepagecombo','getcombofororder'),
               
			);
			foreach ($publicResources as $resource => $actions) {
				$acl->addResource(new Phalcon\Acl\Resource($resource), $actions);
			}
            //Users Area resources
            $usersResources = array(
           	    'account'=> array('index'),
                'payment' => array('index', 'addfund', 'confirm'),
                'feedback' => array('index', 'search', 'new', 'edit', 'save', 'create', 'delete'),
                'account' => array('index','updateuser'),
                'cart'=>array('addcart','showcart','clearcart'),
                'orders'=>array('add','index','all'),

			);
            foreach ($usersResources as $resource => $actions) {
				$acl->addResource(new Phalcon\Acl\Resource($resource), $actions);
			}
            
			//Manager area resources
			$privateResources = array(
	           	'home' => array('index'),
   	            'users' => array('index','login','logout'),
                'payment' => array('index', 'addfund', 'confirm'),
                'feedback' => array('index', 'search', 'new', 'edit', 'save', 'create', 'delete'),
                'account' => array('index', 'search', 'new', 'edit', 'save', 'create', 'delete'),
                'management' => array('index', 'search', 'new', 'edit', 'save', 'create'),
                'orders'=>array('add','index','all'),
            );
			foreach ($privateResources as $resource => $actions) {
				$acl->addResource(new Phalcon\Acl\Resource($resource), $actions);
			}
            //Admin area resoure
           	$adminResources = array(
		       	'home' => array('index'),
   	            'users' => array('index','login','logout','getusers','changepwd'),
                'payment' => array('index', 'addfund', 'confirm'),
                "dishmanagement"=>array("insertdish",'loaddish','deletedish','updatedish'),
                'dishtypemanagement' => array('index','adddishtype','all','getdishtype','loaddishtype','update'),
                'combomanagement'=>array('addform','allcombo','edit','add','delete','del','editform'),
                'feedback' => array('index', 'search', 'new', 'edit', 'save', 'create', 'delete'),
                'account' => array('index', 'updateuser'),
                'management' => array('index', 'search', 'new', 'edit', 'save', 'create', 'delete'),
                'cart'=>array('addcart','showcart','clearcart'),
                'orders'=>array('add','index','all'),
			);
			foreach ($adminResources as $resource => $actions) {
				$acl->addResource(new Phalcon\Acl\Resource($resource), $actions);
			}
	

			//Grant access to public areas to both users and guests
			foreach ($roles as $role) {
				foreach ($publicResources as $resource => $actions) {
					$acl->allow($role->getName(), $resource, '*');
				}
			}
            //Grant acess to private area to role Users
			foreach ($usersResources as $resource => $actions) {
				foreach ($actions as $action){
					$acl->allow('user', $resource, $action);
				}
			}
			//Grant acess to private area to role Users
			foreach ($privateResources as $resource => $actions) {
				foreach ($actions as $action){
					$acl->allow('manager', $resource, $action);
				}
			}
            //Grant acess to admin area to role Admins
			foreach ($adminResources as $resource => $actions) {
				foreach ($actions as $action){
				//    echo $resource;
                 //   echo $action;
					$acl->allow('administrator', $resource, $action);
				}
			}
            //Grant acess to admin area to role Admins

         
			//The acl is stored in session, APC would be useful here too
			$this->persistent->acl = $acl;
		}

		return $this->persistent->acl;
	}

	/**
	 * This action is executed before execute any action in the application
	 */
	public function beforeDispatch(Event $event, Dispatcher $dispatcher)
	{
        
		$auth = $this->session->get('role');
		if (!$auth){
			$role = 'guest';
		} else {
			$role = $auth;
		}
       // echo $role;
		$controller = $dispatcher->getControllerName();
		$action = $dispatcher->getActionName();

		$acl = $this->getAcl();

		$allowed = $acl->isAllowed($role, $controller, $action);

		if ($allowed != Acl::ALLOW) {
			$this->flash->error("You don't have access to this module");
			$dispatcher->forward(
				array(
					'controller' => 'home',
					'action' => 'index'
				)
			);
			return false;
		}

	}

}
