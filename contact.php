<?php  include("config.php"); ?>

<!doctype html>
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
    
            <?php include("topheader.php"); ?>
           
                 <?php //include("layout.php"); ?>
    
                <div class="app-main">
           
                
                    <?php
                       include("menu.php");
                       ?>
                 
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-science icon-gradient bg-happy-itmeo">
                                    </i>
                                </div>
                                <div>Vos contacts chez Partenaire CENTER
                                    <div class="page-title-subheading">Pour toutes questions, n'hésitez pas à nous contacter.
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>           
                    
                    <div class="row">
                            <?php 
                                $facturation = $dbh->query("SELECT * FROM coc_admin WHERE COC_ADMIN_correspondant='Facturation' ")->fetch();

                                $planification = $dbh->query("SELECT * FROM coc_admin WHERE COC_ADMIN_correspondant='Planification' ")->fetch();

                                $support = $dbh->query("SELECT * FROM coc_admin WHERE COC_ADMIN_correspondant='Support' ")->fetch();
                            ?>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="card-shadow-primary card-border mb-3 card">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner bg-dark">
                                        <div class="menu-header-content">
                                            <div class="avatar-icon-wrapper mb-3 avatar-icon-xl">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/contact1.jpg"
                                                        alt="Avatar 5"></div>
                                            </div>
                                            <div><h5 class="menu-header-title"><?php echo $facturation["COC_ADMIN_nom"]."  ".$facturation["COC_ADMIN_prenom"]?> </h5><h6 class="menu-header-subtitle">Facturation</h6></div>
                                            <div class="menu-header-btn-pane pt-1">
                                                <button class="btn-icon btn btn-warning btn-sm"  onclick="document.location.href='support.php?corresp=Facturation'">Envoyer un message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <ul class="list-group list-group-flush">
                                    <li class="bg-warm-flame list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                
                                                <div class="widget-content-left">
                                                    <div class="widget-heading text-dark opacity-7" style="text-align:center;">
                                                        <?php echo $facturation["COC_ADMIN_tel"] ?></div> 
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </li>
                                  
                                </ul>
                                <div class="p-3"><h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Derniers messages</h6>
                                    <ul class="rm-list-borders list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <img width="42" class="rounded-circle"
                                                            src="assets/images/avatars/1.jpg" alt=""></div>
                                                    <!-- <div class="widget-content-left">
                                                        <div class="widget-heading">Vous</div>
                                                        <div class="widget-subheading">Demande d'informations</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="font-size-xlg text-muted">
                                                            <small class="opacity-5 pr-1">Aout </small>
                                                            <span>19</span>
                                                            <small class="text-danger pl-2">
                                                                <i class="fa fa-angle-down ">
        
                                                                </i>
                                                            </small>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </li>
                                       
                                       
                                       
                                     
                                     
                                        <!-- <li class="list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/contact1.jpg" alt=""></div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Amanda</div>
                                                        <div class="widget-subheading">Réponse à votre message</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="font-size-xlg text-muted">
                                                            <small class="opacity-5 pr-1">Aout</small>
                                                            <span>20</span>
                                                            <small class="text-info pl-2">
                                                                <i class="fa fa-angle-up ">
        
                                                                </i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> -->
                                    </ul>
                                </div>
                                <!-- <div class="text-center d-block card-footer">
                                    <button class="btn btn-info" onclick="document.location.href='support.php'">Voir les autres messages</button>
                                </div> -->
                            </div>
                        </div>


                        <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="card-shadow-primary card-border mb-3 card">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner bg-dark">
                                        <div class="menu-header-content">
                                            <div class="avatar-icon-wrapper mb-3 avatar-icon-xl">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/contact2.jpg"
                                                        alt="Avatar 5"></div>
                                            </div>
                                            <div><h5 class="menu-header-title">
                                                <?php echo $planification["COC_ADMIN_nom"]."  ".$planification["COC_ADMIN_prenom"]?>
                                                    
                                                </h5><h6 class="menu-header-subtitle">Planification</h6></div>
                                            <div class="menu-header-btn-pane pt-1">
                                                <button class="btn-icon btn btn-warning btn-sm" onclick="document.location.href='support.php?corresp=Planification'"> 
                                                    Envoyer un message
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <ul class="list-group list-group-flush">
                                    <li class="bg-warm-flame list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper"> 
                                                <div class="widget-content-left">
                                                    <div class="widget-heading text-dark opacity-7" style="text-align:center;"> <?php echo $planification["COC_ADMIN_tel"] ?></div> 
                                                </div> 
                                            </div>
                                        </div>
                                    </li>
                                  
                                </ul>  
                            </div>
                        </div>
                        
                        <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="card-shadow-primary card-border mb-3 card">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner bg-primary">
                                        <div class="menu-header-content">
                                            <div class="avatar-icon-wrapper mb-3 avatar-icon-xl">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/contact3.jpg"
                                                        alt="Avatar 5"></div>
                                            </div>
                                            <div><h5 class="menu-header-title"><?php echo $support["COC_ADMIN_nom"]."  ".$support["COC_ADMIN_prenom"]?></h5><h6 class="menu-header-subtitle">Support Technique</h6></div>
                                            <div class="menu-header-btn-pane pt-1">
                                                <button class="btn-icon btn btn-warning btn-sm" onclick="document.location.href='support.php?corresp=Support'">Envoyer un message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <ul class="list-group list-group-flush">
                                    <li class="bg-warm-flame list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                
                                                
                                                <div class="widget-content-left">
                                                    <div class="widget-heading text-dark opacity-7" style="text-align:center;"> <?php echo $support["COC_ADMIN_tel"] ?></div>
                                                    
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </li>
                                  
                                </ul> 
                            </div> 
                        </div>
                    </div>
                            
                           
             </div>             
                    
                  <?php include("footer.php"); ?>
              <?php
              
               //include("wrapperfooter.php")   ;
              ?>


   </div>
    </div>
</div>

<?php
include("serveurstatus.php");
?>
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="./assets/scripts/main.8d288f825d8dffbbe55e.js"></script></body>
</html>
