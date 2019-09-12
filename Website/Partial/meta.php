<?php
    $urlsByLang = fitzlucassen\FLFramework\Library\Core\Router::GetUrlByLang($this->_controller, $this->_action, $this->Model->_params);

?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
		
<meta name="keywords" content="<?php echo isset($this->Model->_headerInformations) ? $this->Model->_headerInformations->getMetaKeywords() : ""; ?>" />
<meta name="author" content="Website made with love by Thibault" />
<meta name="revisit-after" content="3 days">
<meta name="publisher" content="Thibault dulon">
<meta name="generator" content=".NET Engineer, HTML5/CSS3 Integrator">
<meta name="robots" content="index, follow, all">
<meta name="rating" content="general">
<meta name="language" content="<?php echo $this->_lang; ?>">
<meta name="msapplication-tap-highlight" content="no">

<meta name="description" content="<?php echo isset($this->Model->_headerInformations) ? $this->Model->_headerInformations->getMetaDescription() : ""; ?>" >

<meta property="og:title" content="Thibault - Freelance web developer" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
<meta property="og:image" content="http://www.thibaultdulon.com/favicon.ico" />
<meta property="og:description" content="<?php echo isset($this->Model->_headerInformations) ? $this->Model->_headerInformations->getMetaDescription() : ""; ?>" />

<link rel="canonical" href="http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
<link rel="alternate" hreflang="en" href="http://<?php echo $_SERVER["HTTP_HOST"] . $urlsByLang["en"]["pattern"]; ?>" />
<link rel="alternate" hreflang="fr" href="http://<?php echo $_SERVER["HTTP_HOST"] . $urlsByLang["fr"]["pattern"]; ?>" />
<link rel="alternate" hreflang="x-default" href="http://<?php echo $_SERVER["HTTP_HOST"] . $urlsByLang["en"]["pattern"]; ?>" />

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="/favicon.ico">
<link rel="icon" type="images/png" href="/favicon.ico" />
<!--[if IE]>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
<![endif]-->

<link rel="apple-touch-icon" href="/favicon57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="/favicon72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="/favicon114.png" />

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
<!-- Animate.css -->
<link rel="stylesheet" href="/<?php echo __css_directory__; ?>/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="/<?php echo __css_directory__; ?>/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="/<?php echo __css_directory__; ?>/bootstrap.css">
<!-- Owl Carousel -->
<link rel="stylesheet" href="/<?php echo __css_directory__; ?>/owl.carousel.min.css">
<link rel="stylesheet" href="/<?php echo __css_directory__; ?>/owl.theme.default.min.css">
<!-- Magnific Popup -->
<link rel="stylesheet" href="/<?php echo __css_directory__; ?>/magnific-popup.css">

<link rel="stylesheet" href="/<?php echo __css_directory__; ?>/style.css">

<!-- Modernizr JS -->
<script src="/<?php echo __js_directory__; ?>/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="/<?php echo __js_directory__; ?>/respond.min.js"></script>
<![endif]-->
    
<?php
	include(__partial_directory__ . "/tracking.php");
?>