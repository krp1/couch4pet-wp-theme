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
            <a href="index.html"></a>
          </div>
          <nav id="nav-menu-container">
          <?php 
            $menu_args = array(
                'menu_class' => 'nav-menu'
            );
            wp_nav_menu($menu_args);
          ?>
<!--           
            <ul class="nav-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html">Find a place</a></li>
                <li><a href="earn.html">Earn as a host</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul> -->
          </nav>
        </div>
    </div>
</header>