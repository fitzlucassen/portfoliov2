<?php

    namespace fitzlucassen\FLFramework\Website\MVC\Controller;
    
    use fitzlucassen\FLFramework\Library\Core as cores;
    
     /*
	Class : Controller
	Déscription : Permet de gérer la classe mère de tous les controllers
     */
    class Controller {
		protected $_repositoryManager = null;
		protected $_view = null;
		
		public function __construct($controller, $action, $manager) {	
		    $this->_repositoryManager = $manager;
		    $this->_view = new cores\View();
		    
		    $this->setController($controller);
		    $this->setAction($action);
		}
		
		/***********
		 * SETTERS *
		 ***********/
		public function setController($controller){
		    $this->_view->SetController($controller);
		}
		public function setAction($action){
		    $this->_view->SetAction($action);
		}
		public function setLayout($layout){
		    $this->_view->SetLayout($layout);
		}
		
		/***********
		 * GETTERS *
		 ***********/
		public function getController(){
		    return $this->_view->GetController();
		}
		public function getAction(){
		    return $this->_view->GetAction();
		}
		public function getLayout(){
		    return $this->_view->GetLayout();
		}
    }