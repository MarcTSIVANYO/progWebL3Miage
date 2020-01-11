<?php include("topheader.php");

if(isset($_GET['supp'])){
             $classprojet->supprimer($_GET['supp']); 
              echo '<script type="text/javascript">
                         opener.location.reload();
                        self.close()
                    </script>';   
    }else{
        if(isset($_GET['mod'])) $mod=$_GET['mod'];
        if(count($_POST)){  
                    $SQLfichier_name='';
                    $fichier =$_FILES["fichier"];           
                    if($fichier['size']>0)
                    { 
                        $fichier_name = $fichier['name'];
                        list($name,$extension) = explode(".",$fichier_name); 
                        $type = $fichier['type'];
                        $fichier_name=preg_replace("#[^a-zA-Z]#", "", str_replace(' ','',$_POST['titre_menu'])).time().".".$extension;                       
                        $upload_dir = DOSSIER_FICHIER; 
                        if(move_uploaded_file($fichier['tmp_name'], $upload_dir.$fichier_name))
                        {
                            $reussie= true;
                            $SQLfichier_name=$fichier_name; 
                        }else{
                            echo "<p>";
                            echo "Erreur de chargement du fichier";
                            echo "</p>";
                            $fichier_name ='';
                        }
                    } 

                    $options=array("titre"=>addslashes($_POST['titre']),
                                   "description"=>$_POST['description'], 
                                   "montant"=>addslashes($_POST['montant']), 
                                   "ville"=>addslashes($_POST['ville']), 
                                   "fichier"=>$SQLfichier_name,
                                   "nom_organisation"=>addslashes($_POST['nom_organisation']),
                                   "email_organisation"=>addslashes($_POST['email_organisation']),
                                   "user_id"=>addslashes($_POST['user_id']), 
                                   "id"=>$_POST['mod']); 
                    if(intval($_POST['mod'])>0){ 
                      $etatMAJ=$classprojet->modification_projet($options);
                    }else{  
                      $etatMAJ=$classprojet->insertion_projet($options); 
                    }
         
                    if($etatMAJ){  
                        $notification="<div class='alert alert-success fade show' fichier='alert'>Op&eacute;ration effectu&eacute;e avec succ&egrave;s!</div>";

                    }else{ 
                        $notification="<div class='alert alert-danger fade show' fichier='alert'>Aucune op&eacute;ration effectu&eacute;e.</div>";
                    }
                } 
         }
        if($_GET['mod']){
            $thisprojet=$classprojet->this_projet($_GET['mod']); 
        }
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
                        <div>Projets
                            <div class="page-title-subheading">Projets
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                       
                    </div>    
                </div> 
            </div>                
        </div>


    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" fichier="tabpanel">
            <div class="main-card mb-3 card">
                
                <div class="card-body"><h5 class="card-title">Enrégistements</h5> 
                    <form class="" method="post" action="" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-12"><?php echo $notification ?></div> 
                            <div class="col-md-6">
                                <input name="user_id" type="hidden"  value="<?php echo $_SESSION['user']['id'] ?>"> 
                                <input type="hidden" class="input-long" name="mod" <?php if(intval($mod)<1) echo 'disabled=""'?> value="<?php echo $mod ?>" />
                                <div class="position-relative form-group">
                                    <label for="exampleemail_organisation11" class="">Titre du projet <span  style="color: red;">*</span></label>
                                    <input name="titre" placeholder="Titre du projet " type="text" class="form-control" required="" value="<?php echo stripslashes($thisprojet["titre"]) ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="examplePassword11" class="">Description <span  style="color: red;">*</span> </label><input name="description" placeholder="Description du projet" type="text" class="form-control" required="" value="<?php echo stripslashes($thisprojet["description"]) ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row"> 
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="exampleZip" class="">Montant<span  style="color: red;">*</span></label><input name="montant" id="exampleZip" type="text" class="form-control" required="" placeholder="Montant du projet" required="" value="<?php echo stripslashes($thisprojet["montant"]) ?>"></div>
                            </div>
                              
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="exampleCity" class="">Ville <span  style="color: red;">*</span></label><input name="ville" id="exampleCity" type="text" class="form-control" placeholder="Ville (Pays) " required="" value="<?php echo stripslashes($thisprojet["ville"]) ?>"></div>
                            </div>
                        </div>
                        
                        <div class="position-relative form-group">
                            <label for="exampleAddress" class="">Fichier <span  style="color: red;">*</span></label><input name="fichier" id="exampleAddress"   type="file" class="form-control" value="<?php echo stripslashes($thisprojet["fichier"]) ?>">
                        </div>
  
                        <div class="col-md-12">
                            <h5>Informations sur l'organisation</h5>
                        </div>
                        <div class="form-row"> 
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="examplePassword11" class="">Nom <span  style="color: red;">*</span></label><input name="nom_organisation" type="text" class="form-control" value="<?php echo stripslashes($thisprojet["nom_organisation"]) ?>"/></div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="examplePassword11" class="">Email <span  style="color: red;">*</span></label><input name="email_organisation"  type="email_organisation" class="form-control" value="<?php echo stripslashes($thisprojet["email_organisation"]) ?>"/></div>
                            </div>
                        </div>     
                        <button class="mt-2 btn btn-primary">Valider</button>
                    </form>
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
                        <h4 class="mb-0">Liste des projets</h4> 
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
                                    <th style="width:30%">Titre</th>
                                    <th style="width:20%">Organisation</th>
                                    <th style="width:20%">Email</th>
                                    <th style="width:10%">Fichier</th> 
                                    <th style="width:20%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                    
                                    if ($_SESSION['user']['role']=="ADMIN") {
                                       $tab_projets=$classprojet->liste(0); 
                                     }else{
                                        $tab_projets=$classprojet->liste($_SESSION['user']['id']);
                                     } 
                                    $i=1; 
                                    foreach($tab_projets as $value){
                                    $id=$value["id"];
                                    $titre=stripslashes($value["titre"]);
                                    $nom_organisation=stripslashes($value["nom_organisation"]);
                                    $email_organisation=stripslashes($value["email_organisation"]);
                                    $fichier=stripslashes($value["fichier"]); 
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
                                                    <?php echo $titre; ?>   
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left"><?php echo $nom_organisation; ?></td>
                                <td class="text-left"><?php echo $email_organisation; ?></td>
                                <td>
                                    <a href="<?php echo DOSSIER_FICHIER."".$fichier; ?>" title="Télécharger" target="_blank" > <i class="fa fa-download opacity-6 mr-2"></i></a>
                                     
                                </td>
                                <td class="text-right">

                                    <a class="mb-2 mr-2 btn btn-warning active"  data-original-title="" title="Modifier" href="?mod=<?php echo $id ?>" class="btn btn-warning">
                                        <i class="fa fa-edit opacity-6 mr-2"></i>Editer
                                    </a> 

                                   <a href="         javascript:if(confirm('Voulez vous effectuer cette op&eacute;ration?')) window.open('projets.php?supp=<?php echo $id ?>',20,40,false)"
                                    class="mb-2 mr-2 btn btn-danger active">
                                        <i class="fa fa-trash opacity-4 mr-2"></i>
                                        Supprimer
                                    </a>
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
