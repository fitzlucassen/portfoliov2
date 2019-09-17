<?php    
    $urlsByLang = fitzlucassen\FLFramework\Library\Core\Router::getUrlsByLang($this->_controller, $this->_action, $this->Model->_params);

    $homeRoute = fitzlucassen\FLFramework\Library\Core\Router::GetUrl("home", "index", null, $this->_lang);
    $aboutRoute = fitzlucassen\FLFramework\Library\Core\Router::GetUrl("home", "about", null, $this->_lang);
    $servicesRoute = fitzlucassen\FLFramework\Library\Core\Router::GetUrl("home", "services", null, $this->_lang);
    $workRoute = fitzlucassen\FLFramework\Library\Core\Router::GetUrl("home", "work", null, $this->_lang);

    $action = $this->_action;
?>

<nav id="colorlib-main-nav" role="navigation">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
    <div class="js-fullheight colorlib-table">
        <div class="colorlib-table-cell js-fullheight">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul>
                            <li class="<?php echo $action == "index" ? "active" : "" ?>"><a href="<?php echo $homeRoute; ?>"><span><?php echo _("Home"); ?></span></a></li>
                            <li class="<?php echo $action == "about" ? "active" : "" ?>"><a href="<?php echo $aboutRoute; ?>"><span><?php echo _("About"); ?></span></a></li>
                            <li class="<?php echo $action == "services" ? "active" : "" ?>"><a href="<?php echo $servicesRoute; ?>"><span><?php echo _("Services"); ?></span></a></li>
                            <li class="<?php echo $action == "work" ? "active" : "" ?>"><a href="<?php echo $workRoute; ?>"><span><?php echo _("Work"); ?></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>