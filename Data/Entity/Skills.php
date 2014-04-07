<?php 
	/**********************************************************
	 **** File generated by fitzlucassen\DALGenerator tool ****
	 * All right reserved to fitzlucassen repository on github*
	 ************* https://github.com/fitzlucassen ************
	 **********************************************************/
	class Skills {
		private $_id;
		private $_title;
		private $_mark;
		private $_category;
		private $_dCrea;

		public function __construct($id = "", $title = "", $mark = "", $category = "", $dCrea = ""){
			$this->fillObject(array("id" => $id, "title" => $title, "mark" => $mark, "category" => $category, "dCrea" => $dCrea));
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
		public function getMark() {
			return $this->_mark;
		}
		public function getCategory() {
			return $this->_category;
		}
		public function getDCrea() {
			return $this->_dCrea;
		}
		/*******
		 * END *
		 *******/

		public function fillObject($properties) {
			if(!empty($properties["id"]))
				$this->_id = $properties["id"];
			if(!empty($properties["title"]))
				$this->_title = $properties["title"];
			if(!empty($properties["mark"]))
				$this->_mark = $properties["mark"];
			if(!empty($properties["category"]))
				$this->_category = $properties["category"];
			if(!empty($properties["dCrea"]))
				$this->_dCrea = $properties["dCrea"];
		}
	}
?>