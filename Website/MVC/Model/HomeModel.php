<?php

    namespace fitzlucassen\FLFramework\Website\MVC\Model;
    
     /*
      Class : HomeModel
      Déscription : Model de donnée pour les pages du controller home
     */
    class HomeModel extends Model{
        public $_skills = array();
        public $_skillsCategories = array();
        public $_companies = array();
        public $_studies = array();
        public $_projects = array();
        public $_message = '';

        public function __construct($lang, $manager) {
            parent::__construct($lang, $manager);
        }
    }
