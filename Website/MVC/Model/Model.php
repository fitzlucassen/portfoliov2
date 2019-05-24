<?php

		namespace fitzlucassen\FLFramework\Website\MVC\Model;
		
    use fitzlucassen\FLFramework\Data\Repository;
    
    /*
	Class : Model
	Déscription : Model de donnée pour les pages du site
     */
    class Model {
		public $_headerInformations = null;
		public $_controller = "home";
		public $_action = "index";
		public $_params = array();
		
		public function __construct($manager, $params = array()) {
				$headers = Repository\HeaderRepository::getAll($manager->getConnection());

				foreach ($headers as $key => $value) {
					if($value->getLang() == "en")
						$this->_headerInformations = $value;
				}
		    // Les configuration de base générale pour le site en BDD
		    $this->_params = $params;
		}
    }
