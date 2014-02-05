<?php
     /*
      Class : HomeModel
      Déscription : Model de donnée pour les pages du controller home
     */
    class HomeModel extends Model{
	public $_skills = null;
	public $_skillsCategories = null;
	public $_skillsCategoriesColor = null;
	
	public function __construct($manager) {
	    parent::__construct($manager);
	}
    }
