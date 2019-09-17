<?php

	namespace fitzlucassen\FLFramework\Website\MVC\Controller;
	
	use fitzlucassen\FLFramework\Library\Core;
	
	/*
		Class : Controller
		Déscription : Permet de gérer la classe mère de tous les controllers
	*/
	class Controller {
		protected $_repositoryManager = null;
		protected $_view = null;
		protected $_lang = null;
		
		public function __construct($controller, $action, $lang, $manager) {	
			$this->_repositoryManager = $manager;
			$this->_view = new Core\View();
			$this->setLang($lang);
			$this->setController($controller);
			$this->setAction($action);
		}
		
		/***********
		 * SETTERS *
		 ***********/
		public function setController($controller){
			$this->_view->setController($controller);
		}
		public function setAction($action){
			$this->_view->setAction($action);
		}
		public function setLayout($layout){
			$this->_view->setLayout($layout);
		}
		public function setLang($lang){
			$this->_view->setLang($lang);
		}
		
		/***********
		 * GETTERS *
		 ***********/
		public function getController(){
			return $this->_view->getController();
		}
		public function getAction(){
			return $this->_view->getAction();
		}
		public function getLayout(){
			return $this->_view->getLayout();
		}
	}