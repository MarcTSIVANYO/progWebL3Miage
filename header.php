<?php  
    $table=$_SESSION['user']['type']; 
    $user = $dbh->query("SELECT * FROM coc_".strtolower($_SESSION['user']['type'])." WHERE COC_USER_id=".$_SESSION['user']['COC_USER_id'])->fetch(); 
    $nom=$user["COC_".$table."_nom"];
    $prenom=$user["COC_".$table."_prenom"];
    //$service=$user["COC_".$table."_correspondant"];
    $email=$user["COC_".$table."_email"]; 
    $profile=$user["COC_".$table."_file"];  
    $_SESSION['client']['id']=$user["COC_".$table."_id"];
?>

<div class="app-header__content">
            <div class="app-header-left">   </div>
            <div class="app-header-right">
                <!-- deb log-->
                    <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                        <img width="42" class="rounded-circle" src="assets/images/avatars/<?php echo $profile ?>" alt="">
                                        <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                    </a>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-info">
                                                <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                                <div class="menu-header-content text-left">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle"
                                                                     src="assets/images/avatars/<?php echo $profile ?>"
                                                                     alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">
                                                                    <?php echo $prenom." ".$nom ?>
                                                                </div>
                                                                <div class="widget-subheading opacity-8"> 
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-right mr-2">
                                                                <button class="btn-pill btn-shadow btn-shine btn btn-focus" ><a href="logout.php"<font style="color: #ffffff;">Déconnexion</a></font>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="scroll-area-xs" style="height: 150px;">
                                            <div class="scrollbar-container ps">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-header nav-item">Mon compte
                                                    </li> 
                                                    <li class="nav-item">
                                                        <a href="moncompte.php" class="nav-link">Mon profil
                                                        </a>
                                                    </li>
                                                    <li class="nav-item-header nav-item">Messagerie
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">Settings
                                                            <div class="ml-auto badge badge-success">New
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">Messages
                                                            <div class="ml-auto badge badge-warning">512
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">Logs
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item-divider mb-0 nav-item"></li>
                                        </ul>
                                        <div class="grid-menu grid-menu-2col">
                                            <div class="no-gutters row">
                                                <div class="col-sm-6">
                                                    <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning" onclick="document.location.href='correspondances.php'">
                                                        <i class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                        Messages de mes collaborateurs
                                                    </button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger" onclick="document.location.href='support.php'">
                                                        <i class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                        <b>Messages de mon partenaire</b>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item-divider nav-item">
                                            </li>
                                            <li class="nav-item-btn text-center nav-item">
                                                <button class="btn-wide btn btn-primary btn-sm" onclick="document.location.href='correspondances.php'">
                                                    Lire mes Messages
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left  ml-3 header-user-info">
                                <div class="widget-heading">
                                    <?php echo $prenom." ".$nom ?>
                                </div>
                                <div class="widget-subheading"> 
                                </div>
                            </div>
                   
                        </div>
                    </div>
                </div>
                <!-- end log-->
                <div class="header-btn-lg">
                    <button type="button" class="hamburger hamburger--elastic open-right-drawer">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>        
            </div>
        </div>