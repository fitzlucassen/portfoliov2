<?php 
	/**********************************************************
	 **** File generated by fitzlucassen\DALGenerator tool ****
	 * All right reserved to fitzlucassen repository on github*
	 ************* https://github.com/fitzlucassen ************
	 **********************************************************/
	namespace fitzlucassen\FLFramework\Data\Entity;

	use fitzlucassen\FLFramework\Library\Core as cores;

	class Project {
		private $_id;
		private $_title;
		private $_description;
		private $_link;
		private $_image;
		private $_dCrea;
		private $_keywords;
		private $_queryBuilder;

		public function __construct($id = "", $title = "", $description = "", $link = "", $image = "", $dCrea = "", $keywords = ""){
			$this->_queryBuilder = new cores\QueryBuilder(true);
			$this->fillObject(array("id" => $id, "title" => $title, "description" => $description, "link" => $link, "image" => $image, "dCrea" => $dCrea, "keywords" => $keywords));
		}

		/***********
		 * GETTERS *
		 ***********/
		public function getId() {
			return $this->_id;
		}
		public function getTitle() {
			return $this->_title;
		}
		public function getDescription() {
			return $this->_description;
		}
		public function getLink() {
			return $this->_link;
		}
		public function getImage() {
			return $this->_image;
		}
		public function getDCrea() {
			return $this->_dCrea;
		}
		public function getKeywords() {
			return $this->_keywords;
		}
		/*******
		 * END *
		 *******/

		public function fillObject($properties) {
			if(!empty($properties["id"]))
				$this->_id = $properties["id"];
			if(!empty($properties["title"]))
				$this->_title = $properties["title"];
			if(!empty($properties["description"]))
				$this->_description = $properties["description"];
			if(!empty($properties["link"]))
				$this->_link = $properties["link"];
			if(!empty($properties["image"]))
				$this->_image = $properties["image"];
			if(!empty($properties["dCrea"]))
				$this->_dCrea = $properties["dCrea"];
			if(!empty($properties["keywords"]))
				$this->_keywords = $properties["keywords"];
		}
	}
