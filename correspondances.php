<?php
include("include/connexion_start_inc.php");

?><!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Ma Messagerie Par Partenaire Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
 <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

<link href="./main.8d288f825d8dffbbe55e.css" rel="stylesheet"></head>
<body>

<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    
            <?php include("topheader.php");
         ?>
         
         
                 <?php //include("layout.php");
         ?>
    
   <div class="app-main">
           
                
                       <?php
                       include("menu.php");
                       ?>
                
                
                
                
                
           
            
            
               <div class="app-main__outer">
                <div class="app-main__inner p-0">
        
                    <div class="app-inner-layout">
                        <div class="app-inner-layout__header bg-heavy-rain">
                            <div class="app-page-title">
                                <div class="page-title-wrapper">
                                    <div class="page-title-heading">
                                        <div class="page-title-icon">
                                            <i class="pe-7s-power icon-gradient bg-mixed-hopes">
                                            </i>
                                        </div>
                                        <div>Mes collaborateurs
                                            <div class="page-title-subheading">Communiquez avec vos collaborateurs
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page-title-actions">
                                       
                                       
                                        <div class="d-inline-block dropdown">
                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                                    <i class="fa fa-business-time fa-w-20"></i>
                                                </span>
                                                Actions (A venir)
                                            </button>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link">
                                                            <i class="nav-link-icon lnr-inbox"></i>
                                                            <span>
                                                                Exporter
                                                            </span>
                                                            <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link">
                                                            <i class="nav-link-icon lnr-book"></i>
                                                            <span>
                                                                Imprimer
                                                            </span>
                                                            <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                        </a>
                                                    </li>
                                                  
                                                  
                                                </ul>
                                            </div>
                                        </div>
                                    </div>    </div>
                            </div>                </div>
                        <div class="app-inner-layout__wrapper">
                            <div class="app-inner-layout__content card">
                                <div>
                                    <div class="app-inner-layout__top-pane">
                                        <div class="pane-left">
                                            <div class="mobile-app-menu-btn">
                                                <button type="button" class="hamburger hamburger--elastic">
                                                    <span class="hamburger-box">
                                                        <span class="hamburger-inner"></span>
                                                    </span>
                                                </button>
                                            </div>
                                            <h4 class="mb-0">Boite de réception</h4>
                                            <div class="btn-group dropdown">
                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-link">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-night-fade">
                                                            <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/city5.jpg');"></div>
                                                            <div class="menu-header-content text-dark">
                                                                <h5 class="menu-header-title">Settings</h5>
                                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid-menu grid-menu-xl grid-menu-2col">
                                                        <div class="no-gutters row">
                                                            <div class="col-sm-6">
                                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-license btn-icon-wrapper btn-icon-lg mb-3"> </i>Primary</button>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-map btn-icon-wrapper btn-icon-lg mb-3"> </i>Secondary</button>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-music-note btn-icon-wrapper btn-icon-lg mb-3"> </i>Success</button>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-heart btn-icon-wrapper btn-icon-lg mb-3"> </i>Info</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-divider nav-item"></li>
                                                        <li class="nav-item-btn text-center nav-item">
                                                            <button class="btn-shadow btn btn-primary btn-sm">Submit</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pane-right">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-search fa-w-16 "></i>
                                                    </div>
                                                </div>
                                                <input placeholder="Rechercher..." type="text" class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="bg-white">
                                        <div class="table-responsive">
                                            <table class="text-nowrap table-lg mb-0 table table-hover">
                                                <tbody>
                                                <tr>
                                                    <td class="text-center" style="width: 78px;">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" id="eCheckbox1" class="custom-control-input">
                                                            <label class="custom-control-label" for="eCheckbox1">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="text-left pl-1">
                                                        <i class="fa fa-star"></i>
                                                    </td>
                                                    <td>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Alina Mcloughlin</div>
                                                                    <div class="widget-subheading">Last seen online 15 minutes ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left">Nullam dictum felis eu pede mollis pretium.</td>
                                                    <td>
                                                        <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                    </td>
                                                    <td class="text-right">
                                                        <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                        7 Dec
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="width: 78px;">
                                                        <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox12" class="custom-control-input"><label class="custom-control-label" for="eCheckbox12">&nbsp;</label></div>
                                                    </td>
                                                    <td class="text-left pl-1">
                                                        <i class="fa fa-star"></i>
                                                    </td>
                                                    <td>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">John Smith</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left">But I must explain to you how all this mistaken idea of denouncing pleasure ...</td>
                                                    <td>
                                                        <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                    </td>
                                                    <td class="text-right">
                                                        <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                        7 Dec
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="width: 78px;">
                                                        <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox13" class="custom-control-input"><label class="custom-control-label" for="eCheckbox13">&nbsp;</label></div>
                                                    </td>
                                                    <td class="text-left pl-1">
                                                        <i class="fa fa-star"></i>
                                                    </td>
                                                    <td>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Eliot Huber</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left">But I must explain to you how all this mistaken idea of denouncing pleasure ...</td>
                                                    <td>
                                                        <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                    </td>
                                                    <td class="text-right">
                                                        <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                        7 Dec
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="width: 78px;">
                                                        <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox14" class="custom-control-input"><label class="custom-control-label" for="eCheckbox14">&nbsp;</label></div>
                                                    </td>
                                                    <td class="text-left pl-1">
                                                        <i class="fa fa-star"></i>
                                                    </td>
                                                    <td>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Ella-Rose Henry</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left">Create stunning UIs for your pages with these layout components...</td>
                                                    <td>
                                                        <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                    </td>
                                                    <td class="text-right">
                                                        <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                        7 Dec
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="width: 78px;">
                                                        <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox15" class="custom-control-input"><label class="custom-control-label" for="eCheckbox15">&nbsp;</label></div>
                                                    </td>
                                                    <td class="text-left pl-1">
                                                        <i class="fa fa-star"></i>
                                                    </td>
                                                    <td>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Vinnie Wagstaff</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left">Etiam sit amet orci eget eros faucibus...</td>
                                                    <td>
                                                        <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                    </td>
                                                    <td class="text-right">
                                                        <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                        7 Dec
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="width: 78px;">
                                                        <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox16" class="custom-control-input"><label class="custom-control-label" for="eCheckbox16">&nbsp;</label></div>
                                                    </td>
                                                    <td class="text-left pl-1">
                                                        <i class="fa fa-star"></i>
                                                    </td>
                                                    <td>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/6.jpg" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Alina Mcloughlin</div>
                                                                    <div class="widget-subheading">Last seen online 15 minutes ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left">Nullam dictum felis eu pede mollis pretium.</td>
                                                    <td>
                                                        <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                    </td>
                                                    <td class="text-right">
                                                        <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                        5 mins ago
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="width: 78px;">
                                                        <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox17" class="custom-control-input"><label class="custom-control-label" for="eCheckbox17">&nbsp;</label></div>
                                                    </td>
                                                    <td class="text-left pl-1">
                                                        <i class="fa fa-star"></i>
                                                    </td>
                                                    <td>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/7.jpg" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Eliot Huber</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left">But I must explain to you how all this mistaken idea of denouncing pleasure ...</td>
                                                    <td>
                                                        <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                    </td>
                                                    <td class="text-right">
                                                        <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                        7 Dec
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="width: 78px;">
                                                        <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox18" class="custom-control-input"><label class="custom-control-label" for="eCheckbox18">&nbsp;</label></div>
                                                    </td>
                                                    <td class="text-left pl-1">
                                                        <i class="fa fa-star"></i>
                                                    </td>
                                                    <td>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/8.jpg" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Eliot Huber</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left">But I must explain to you how all this mistaken idea of denouncing pleasure ...</td>
                                                    <td>
                                                        <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                    </td>
                                                    <td class="text-right">
                                                        <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                        7 Dec
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="width: 78px;">
                                                        <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox19" class="custom-control-input"><label class="custom-control-label" for="eCheckbox19">&nbsp;</label></div>
                                                    </td>
                                                    <td class="text-left pl-1">
                                                        <i class="fa fa-star"></i>
                                                    </td>
                                                    <td>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Ella-Rose Henry</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left">Create stunning UIs for your pages with these layout components...</td>
                                                    <td>
                                                        <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                    </td>
                                                    <td class="text-right">
                                                        <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                        7 Dec
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="app-inner-layout__bottom-pane d-block text-center">
                                            <nav class="" aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Previous"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                                                    <li class="page-item"><a href="javascript:void(0);" class="page-link">1</a></li>
                                                    <li class="page-item active"><a href="javascript:void(0);" class="page-link">2</a></li>
                                                    <li class="page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
                                                    <li class="page-item"><a href="javascript:void(0);" class="page-link">4</a></li>
                                                    <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                                                    <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Next"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-inner-layout__sidebar card">
                                <ul class="nav flex-column">
                                    <li class="pt-4 pl-3 pr-3 pb-3 nav-item">
                                        <button class="btn-pill btn-shadow btn btn-primary btn-block">Rédiger un nouveau message</button>
                                    </li>
                                   
                                   
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Reçus</span>
                                        <div class="ml-auto badge badge-pill badge-info">8</div>
                                    </a></li>
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Envoyés</span></a></li>
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Tous les Messages</span>
                                        <div class="ml-auto badge badge-success">Nouveau</div>
                                    </a></li>
                                    <li class="nav-item-divider nav-item"></li>
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Corbeille</span></a></li>
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Autres</span>
                                        <div class="ml-auto badge badge-warning">512</div>
                                    </a></li>
                                    <li class="nav-item-divider nav-item"></li>
                                    <li class="nav-item-header nav-item">Collaborateurs connectés</li>
                                    <li class="text-center p-2 nav-item">
                                        <div>
                                            <div class="avatar-icon-wrapper">
                                                <div class="badge badge-primary badge-dot badge-dot-lg"></div>
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/1.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper">
                                                <div class="badge badge-focus badge-dot badge-dot-lg"></div>
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/2.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper">
                                                <div class="badge badge-warning badge-dot badge-dot-lg"></div>
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/3.jpg"
                                                        alt=""></div>
                                            </div>
                                          
                                          
                                          
                                            <div class="avatar-icon-wrapper">
                                                <div class="badge badge-warning badge-dot badge-dot-lg"></div>
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/8.jpg"
                                                        alt=""></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item-btn text-center nav-item">
                                        <button class="btn-wide btn-pill btn btn-success btn-sm">Démarrer une nouvelle Conversation</button>
                                    </li>
                                  
                                  
                                   
                                   
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include("footer.php"); ?>
                   </div>
    </div>
</div>

<?php
include("serveurstatus.php");
?>
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="./assets/scripts/main.8d288f825d8dffbbe55e.js"></script></body>
</html>
