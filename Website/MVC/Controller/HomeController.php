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

class HomeController extends Controller
{
	public function __construct($action, $manager)
	{
		// Initialisation de la session
		$this->_session = new Helper\Session();
		$this->_lang = $this->_session->Read("lang");
		parent::__construct("home", $action, $this->_lang, $manager);
	}

	public function Index()
	{
		// Une action commencera toujours par l'initilisation de son modèle
		// Cette initialisation doit obligatoirement contenir le repository manager
		$Model = new Model\HomeModel($this->_lang, $this->_repositoryManager);

		if (Core\Request::isPost()) {
			$data = Core\Request::cleanRequest();

			if (!isset($data["email"]) || empty($data["email"]) || !isset($data["name"]) || empty($data["name"]))
				$Model->_message = "Please fill your e-mail and your name";
			else {
				$Email = new Helper\Email();
				$Email->from($data['email']);
				$Email->to('thibault.dulon@gmail.com');
				$Email->subject($data['name'] . " vous a envoyé un message");
				$Email->fromName('thibaultdulon.com');
				$Email->buildHeaders();

				$Email->vars(array(
					'text' =>
					'Une personne vient de vous contacter sur votre portfolio thibaultdulon.com.<br/>
		    		Voici son message : <br/><br/>' . $data['message']
				));
				$Email->send();

				$Model->_message = 'Your message has been sent!';
			}
		}

		$Model->_projects = Repository\ProjectRepository::getAll($this->_repositoryManager->getConnection());

		// Une action finira toujours par un $this->_view->ViewCompact contenant : 
		// cette fonction prend en paramètre le modèle
		$this->_view->view($Model);
	}

	public function Services()
	{
		// Une action commencera toujours par l'initilisation de son modèle
		// Cette initialisation doit obligatoirement contenir le repository manager
		$Model = new Model\HomeModel($this->_lang, $this->_repositoryManager);

		// Une action finira toujours par un $this->_view->ViewCompact contenant : 
		// cette fonction prend en paramètre le modèle
		$this->_view->view($Model);
	}

	public function About()
	{
		// Une action commencera toujours par l'initilisation de son modèle
		// Cette initialisation doit obligatoirement contenir le repository manager
		$Model = new Model\HomeModel($this->_lang, $this->_repositoryManager);

		$skills = Repository\SkillsRepository::getAll($this->_repositoryManager->getConnection());
		$Model->_skillsCategories = $this->GetCategories($skills);
		$Model->_skills = $skills;

		$Model->_companies = Repository\CompanyRepository::getAll($this->_repositoryManager->getConnection());
		$Model->_studies = Repository\DegreeRepository::getAll($this->_repositoryManager->getConnection());

		// Une action finira toujours par un $this->_view->ViewCompact contenant : 
		// cette fonction prend en paramètre le modèle
		$this->_view->view($Model);
	}

	public function Work()
	{
		// Une action commencera toujours par l'initilisation de son modèle
		// Cette initialisation doit obligatoirement contenir le repository manager
		$Model = new Model\HomeModel($this->_lang, $this->_repositoryManager);

		$Model->_projects = Repository\ProjectRepository::getAll($this->_repositoryManager->getConnection());

		// Une action finira toujours par un $this->_view->ViewCompact contenant : 
		// cette fonction prend en paramètre le modèle
		$this->_view->view($Model);
	}

	public function Error404()
	{
		$Model = new Model\HomeModel($this->_lang, $this->_repositoryManager);

		http_response_code(404);
		$this->_view->view($Model);
	}

	private function GetCategories($skills)
	{
		return Adapter\ArrayAdapter::Distinct(Adapter\ArrayAdapter::Order(Adapter\ArrayAdapter::Select($skills, 'category', 2)));
	}
}
