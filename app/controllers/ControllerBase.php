<?php

class ControllerBase extends Phalcon\Mvc\Controller
{

    protected function initialize()
    {
        Phalcon\Tag::prependTitle('Phalcon | ');
        
    }

    protected function forward($uri){
    	$uriParts = explode('/', $uri);
    	return $this->dispatcher->forward(
    		array(
    			'controller' => $uriParts[0], 
    			'action' => $uriParts[1]
    		)
    	);
    }
    protected function _getTranslation()
  {

    //Ask browser what is the best language
   // $language = $this->request->get('lang');
   $language ="en";
     $config = new Phalcon\Config\Adapter\Ini(__dir__ . '/../config/config.ini');
    $path = $config->application->basePath;
    //Check if we have a translation file for that lang
    if (file_exists($path."/app/messages/".$language.".php")) {
       require $path."/app/messages/".$language.".php";
    } else {
       // fallback to some default
       require $path."/app/messages/en.php";
    }

    //Return a translation object
    return new \Phalcon\Translate\Adapter\NativeArray(array(
       "content" => $messages
    ));

  }
    
}
