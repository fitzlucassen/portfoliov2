<?php
     /*
	Class : ErrorController
	Déscription : Permet de gérer les actions en relation avec le groupe de page Error
     */
    class ErrorController extends Controller {
	public function __construct($action, $manager) {
	    parent::__construct("error", $action, $manager);
	}
	
	/*************
	 * CONNEXION *
	 *************/
	public function noConnexionAvailable(){
	    // Une action commencera toujours par l'initilisation de son modèle
	    // Cette initialisation doit obligatoirement contenir la connexion PDO et la langue.
	    $Model = new ErrorModel($this->_repositoryManager);
	    
	    // Une action finira toujours par un $this->_view->ViewCompact contenant : 
	    // - La clef "Model" contenant le modèle de données à fournir à la vue
	    $this->_view->ViewCompact($this->_controller, $this->_action, array('Model' => $Model));
	}
	
	public function noHeaderTableFound(){
	    $Model = new ErrorModel($this->_repositoryManager);
	    
	    $this->_view->ViewCompact($this->_controller, $this->_action, array('Model' => $Model));
	}
	
	public function noRewritingFound(){
	    $Model = new ErrorModel($this->_repositoryManager);
	    
	    $this->_view->ViewCompact($this->_controller, $this->_action, array('Model' => $Model));
	}
	
	public function noMultilingueFound(){
	    $Model = new ErrorModel($this->_repositoryManager);
	    
	    $this->_view->ViewCompact($this->_controller, $this->_action, array('Model' => $Model));
	}
	
	/********
	 * VIEW *
	 ********/
	public function noModelProvided($params){
	    $Model = new ErrorModel($this->_repositoryManager, $params);
	    
	    $Model->_controllerTarget = $params[0];
	    $Model->_modelTarget = $params[1];

	    $this->_view->ViewCompact($this->_controller, $this->_action, array('Model' => $Model));
	}
	
	/**************
	 * CONTROLLER *
	 **************/
	public function controllerClassDoesntExist($params){
	    $Model = new ErrorModel($this->_repositoryManager, $params);
	    
	    $Model->_controllerTarget = $params[0];
	    
	    $this->_view->ViewCompact($this->_controller, $this->_action, array('Model' => $Model));
	}
	
	public function controllerInstanceFailed($params){
	    $Model = new ErrorModel($this->_repositoryManager, $params);
	    
	    $Model->_controllerTarget = $params[0];
	    
	    $this->_view->ViewCompact($this->_controller, $this->_action, array('Model' => $Model));
	}
	
	public function actionDoesntExist($params){
	    $Model = new ErrorModel($this->_repositoryManager, $params);
	    
	    $Model->_controllerTarget = $params[0];
	    $Model->_modelTarget = $params[1];

	    $this->_view->ViewCompact($this->_controller, $this->_action, array('Model' => $Model));
	}
    }