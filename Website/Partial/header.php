<?php    
    $urlsByLang = fitzlucassen\FLFramework\Library\Core\Router::GetUrlByLang($this->Model->_controller, $this->Model->_action, $this->Model->_params);
    $action = $this->Model->_action;
?>

<nav id="colorlib-main-nav" role="navigation">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
    <div class="js-fullheight colorlib-table">
        <div class="colorlib-table-cell js-fullheight">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul>
                            <li class="<?php echo $action == "index" ? "active" : "" ?>"><a href="/en/"><span>Home</span></a></li>
                            <li class="<?php echo $action == "about" ? "active" : "" ?>"><a href="/en/about.html"><span>About</span></a></li>
                            <li class="<?php echo $action == "services" ? "active" : "" ?>"><a href="/en/services.html"><span>Services</span></a></li>
                            <li class="<?php echo $action == "work" ? "active" : "" ?>"><a href="/en/work.html"><span>Work</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>