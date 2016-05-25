<?php

    namespace fitzlucassen\FLFramework\Website\MVC\Controller;
    
    use fitzlucassen\FLFramework\Website\MVC\Model;
    use fitzlucassen\FLFramework\Library\Helper;
    use fitzlucassen\FLFramework\Library\Adapter;
    use fitzlucassen\FLFramework\Data\Repository;
    use fitzlucassen\FLFramework\Library\Core;
    
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
		    // Cette initialisation doit obligatoirement contenir le repository manager
		    $Model = new Model\HomeModel($this->_repositoryManager);

		    if(Core\Request::isPost()){
		    	$data = Core\Request::cleanRequest();

		    	$Email = new Helper\Email();
		    	$Email->from($data['email']);
		    	$Email->to('thibault.dulon@gmail.com');
		    	$Email->subject($data['name'] . " vous a envoyé un message");
		    	$Email->fromName('thibaultdulon.com');
		    	$Email->buildHeaders();

		    	$Email->vars(array('text' =>
		    		'Une personne vient de vous contacter sur votre portfolio thibaultdulon.com.<br/>
		    		Voici son message : <br/><br/>' . $data['message']
		    	));
		    	$Email->send();

		    	$Model->_message = 'Votre message a bien été envoyé !';
		    }

		    $skills = Repository\SkillsRepository::getAll($this->_repositoryManager->getConnection());
		    $Model->_companies = Repository\CompanyRepository::getAll($this->_repositoryManager->getConnection());
		    $Model->_studies = Repository\DegreeRepository::getAll($this->_repositoryManager->getConnection());
		    $Model->_projects = Repository\ProjectRepository::getAll($this->_repositoryManager->getConnection());

		    $Model->_skillsCategories = $this->GetCategories($skills);
	    	$Model->_skills = $skills;
		    		    
		    // Une action finira toujours par un $this->_view->ViewCompact contenant : 
		    // cette fonction prend en paramètre le modèle
		    $this->_view->ViewCompact($Model);
		}
		
		public function Error404(){
		    $Model = new Model\HomeModel($this->_repositoryManager);
		    
		    $this->_view->ViewCompact($Model);
		}

		private function GetCategories($skills){	    
		    return Adapter\ArrayAdapter::Distinct(Adapter\ArrayAdapter::Order(Adapter\ArrayAdapter::Select($skills, 'category', 2)));
		}
    }