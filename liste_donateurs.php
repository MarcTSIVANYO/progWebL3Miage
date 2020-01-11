<?php include("topheader.php");
    $tab_donateurs=$classdonateurs->liste(); 
?>
 
<div class="app-main__inner p-0">
    <div class="app-inner-layout">
        <div class="app-inner-layout__header bg-heavy-rain">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                            </i>
                        </div>
                        <div>Donateurs
                            <div class="page-title-subheading">Listes des Donateurs
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                       
                </div>    
            </div>
            
        </div>                
    </div>
 
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
                        <h4 class="mb-0">Liste des Donateurs</h4> 
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
                    <div class="table-responsive dataTables_wrapper dt-bootstrap4">
                        <table class="text-nowrap table-lg mb-0 table table-hover" id="example_wrapper">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width:10%">#</th>
                                    <th style="width:30%">Nom et prénoms</th>
                                    <th style="width:30%">email</th>
                                    <th style="width:10%">Montant</th> 
                                    <th style="width:20%">Projet</th>
                                    <th style="width:10%">Date</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                    $i=1;
                                    foreach($tab_donateurs as $value){
                                        $thisAdherant=$classadherant->this_adherant($value["adherant_id"]); 
                                        $thisProjet=$classprojet->this_projet($value["projet_id"]); 
                                        $id=$value["id"]; 
                                        $nom=stripslashes($thisAdherant["nom"]);
                                        $titre=stripslashes($thisProjet["titre"]);
                                        $prenoms=stripslashes($thisAdherant["prenoms"]);
                                        $email=stripslashes($thisAdherant["email"]);

                                        //$role=stripslashes($value["role"]); 
                                ?>
                            <tr>
                                <td class="text-center">
                                    <?php echo $i; ?>
                                </td> 
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            
                                            <div class="widget-content-left">
                                                <div class="widget-heading">
                                                    <?php echo $nom; ?>   
                                                </div>
                                                <div class="widget-subheading">
                                                    <?php echo $prenoms; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left"><?php echo $email; ?></td>
                                <td class="text-left"><?php echo $value["montant"]; ?></td>
                                <td>
                                     <?php echo $titre; ?>
                                </td>
                                <td> 
                                    <?php echo strftime('%d/%m/%Y',strtotime(stripslashes($value["created_at"])));  ?>
                                </td>
                            </tr> 
                                  <?php  $i++;  }  ?> 
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div> 
    </div>
</div>
</div>  
 
<?php
include("footer.php");
?>
