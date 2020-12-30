<?php
     
    namespace fitzlucassen\FLFramework\Library\Helper;

    /*
      Class : Rss
      Déscription : Permet de générer un flux RSS.
     */
    class Recaptcha extends Helper {
		private $_secret = "6LfGjQcaAAAAABqRxCzNhVAclKFLq7CzOoSAsCIe";
		private $_verifyUrl = "https://www.google.com/recaptcha/api/siteverify";

		/*
		  Constructeur
		 */
		public function __construct() {
		    parent::__construct();
		}

		public function Verify($sentCaptcha) {
			$data = array(
				'secret' => $this->_secret,
				'response' => $sentCaptcha
			);
			$options = array(
				'http' => array(
					'method' => 'POST',
					'content' => http_build_query($data)
				)
			);
			$context  = stream_context_create($options);
			$verify = file_get_contents($this->_verifyUrl, false, $context);
			$captcha_success = json_decode($verify);
	
			return $captcha_success;
		}
    }