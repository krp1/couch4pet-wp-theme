<header id="header">
    <div class="header-top">
        <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-12 col-sm-12 col-12 header-top-right">
                <div class="header-social">
                    <a href="https://www.instagram.com/couch4pet/"><i class="fa fa-instagram"></i></a>
                    <!-- <a href="#"><i class="fa fa-facebook"></i></a> -->
                </div>
              </div>
          </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" height="30px" /></a>
          </div>
          <nav id="nav-menu-container">
          <?php 
            $menu_args = array(
                'menu_class' => 'nav-menu'
            );
            wp_nav_menu($menu_args);
          ?>
          </nav>
        </div>
    </div>
</header>