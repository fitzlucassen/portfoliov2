<?php
     /*
	Class : HomeController
	Déscription : Permet de gérer les actions en relation avec le groupe de page Home
     */
    class HomeController extends Controller {
	public function __construct($action, $manager) {
	    parent::__construct("home", $action, $manager);
	}
	
	public function Index(){
	    // Une action commencera toujours par l'initilisation de son modèle
	    // Cette initialisation doit obligatoirement contenir la connexion PDO et la langue.
	    $Model = new HomeModel($this->_repositoryManager);
	    
	    $SkillRepository = $this->_repositoryManager->get('Skills');
	    $ProjectRepository = $this->_repositoryManager->get('Project');
	    $skills = $SkillRepository->getAll();
	    $projects = $ProjectRepository->getAll();
	    
	    $Model->_skillsCategories = $this->GetCategories($skills);
	    $Model->_skills = $skills;
	    $Model->_skillsCategoriesColor = $this->GetCategoriesColor($Model->_skillsCategories);
	    
	    $Model->_projects = $projects;
	    
	    // Une action finira toujours par un $this->_view->ViewCompact contenant : 
	    // - La clef "Model" contenant le modèle de données à fournir à la vue
	    $this->_view->ViewCompact($this->_controller, $this->_action, array('Model' => $Model));
	}
	
	public function Error404(){
	    $Model = new HomeModel($this->_repositoryManager);
	    $this->_view->ViewCompact($this->_controller, $this->_action, array('Model' => $Model));
	}
	
	
	private function GetCategories($skills){	    
	    return ArrayAdapter::Distinct(ArrayAdapter::Order(ArrayAdapter::Select($skills, 'category', 2)));
	}
	
	private function GetCategoriesColor($array){
	    $temp = array();
	    $cpt = 0;
	    foreach ($array as $a){
		switch($cpt){
		    case 0:
			$temp[$a] = "#2c3e50";
			break;
		    case 1:
			$temp[$a] = "#4e5f72";
			break;
		    case 2:
			$temp[$a] = "#34495e";
			break;
		    case 3:
			$temp[$a] = "#566b7f";
			break;
		    case 4:
			$temp[$a] = "#6f7f94";
			break;
		}
		$cpt++;
	    }
	    return $temp;
	}
    }