<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    
     
<div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">

                <?php 
                $page = $_SERVER['PHP_SELF']; 
                    if ($_SESSION['user']['role']=="ADMIN") {
                   
                 ?>
              <li class="app-sidebar__heading">Paramétrage</li>
                <li>
                    <a href="liste_adherant.php" <?php if($page=="liste_adherant.php") echo "class='mm-active'" ?>>
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Adhérents
                    </a>
                </li>

                <li>
                    <a href="liste_donateurs.php">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Donateurs
                    </a>
                </li>  

                <li>
                    <a href="projets.php">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Projets
                    </a>
                </li>  

                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Partenaires
                    </a>
                </li>  


                <?php 
                    }
                    if ($_SESSION['user']['role']=="USER") {
                         
                    }

                 ?>

            </ul>
        </div>
    </div>             
</div> 