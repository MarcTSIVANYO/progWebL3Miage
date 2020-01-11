
<?php 

    include("topheader.php");

        if(count($_POST)){ 
            if(isset($_POST['password']) && !empty($_POST['password'])){
               $password=sha1($_POST['password1']);
            }else{
                $password=$thisAdherant["password"];
            }
            $options=array("civilite"=>addslashes($_POST['civilite']),
                           "nom"=>addslashes($_POST['nom']),
                           "prenoms"=>addslashes($_POST['prenoms']),
                           "email"=>addslashes($_POST['email']), 
                           "date_naissance"=>$_POST['date_naissance'],
                           "adresse"=>addslashes($_POST['adresse']),
                           "telephone"=>addslashes($_POST['telephone']),
                           "ville"=>addslashes($_POST['ville']),
                           "codepostal"=>addslashes($_POST['codepostal']),
                           "password"=>$password, 
                           "role"=>addslashes($_POST['role']), 
                           "id"=>$_POST['id']);  
              $etatMAJ=$classadherant->modification_adherant($options);  
             
            if($etatMAJ){  
                $notification="<div class='alert alert-success fade show' role='alert'>Modification effectu&eacute;e avec succ&egrave;s!</div>";

            }else{ 
                $notification="<div class='alert alert-danger fade show' role='alert'>Aucune op&eacute;ration effectu&eacute;e.</div>";  
            }     
        } 
    $thisAdherant=$classadherant->this_adherant($_SESSION['user']['id']); 
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
                        <div>Compte
                            <div class="page-title-subheading">Modification
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                       
                </div>    
            </div>
            
        </div>                
    </div>

    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                
                <div class="card-body"><h5 class="card-title">Enrégistements</h5>
                        <div id="notification" style="display: none;"> 
                          <div class="alert alert-danger" role="alert">
                            <strong>Erreur!</strong> Les deux mots de passe ne condordent pas!
                          </div> 
                        </div>
                    <form class="" method="post"onSubmit="return verify(this.password1, this.password2)" action="">
                        <div class="form-row">
                            <div class="col-md-12"><?php echo $notification ?></div>
                            <div class="col-md-2">
                                <input name="id" type="hidden"  value="<?php echo stripslashes($thisAdherant["id"]) ?>"> 
                                <input name="role" type="hidden"  value="<?php echo stripslashes($thisAdherant["role"]) ?>"> 
                                <input name="email" type="hidden"  value="<?php echo stripslashes($thisAdherant["email"]) ?>"> 
                                <div class="position-relative form-group"><label for="exampleSelect" class="">Civilité</label>
                                    <select name="civilite"  class="form-control" required="">
                                        <option value=""> </option>
                                        <option value="Mlle" <?php if($thisAdherant["civilite"]=='Mlle') echo "selected=selected"?> >Mlle</option>
                                        <option value="Mme" <?php if($thisAdherant["civilite"]=='Mme') echo "selected=selected"?>>Mme</option>
                                        <option value="M."<?php if($thisAdherant["civilite"]=='M.') echo "selected=selected"?>>M.</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="col-md-5">
                                <div class="position-relative form-group"><label for="exampleEmail11" class="">Nom <span  style="color: red;">*</span></label><input name="nom" placeholder="Nom " type="text" class="form-control" required="" value="<?php echo stripslashes($thisAdherant["nom"]) ?>"></div>
                            </div>
                            <div class="col-md-5">
                                <div class="position-relative form-group"><label for="examplePassword11" class="">Prénoms <span  style="color: red;">*</span> </label><input name="prenoms" placeholder="Prénoms" type="text" class="form-control" required="" value="<?php echo stripslashes($thisAdherant["prenoms"]) ?>"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="exampleEmail11" class="">Date de naissance <span  style="color: red;">*</span></label><input name="date_naissance" placeholder="Date de naissance " type="text" max="31/12/2019" class="form-control" required="" value="<?php echo strftime('%d/%m/%Y',strtotime(stripslashes($thisAdherant["date_naissance"])));  ?>"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="exampleZip" class="">Téléphone<span  style="color: red;">*</span></label><input name="telephone" id="exampleZip" type="text" class="form-control" required="" placeholder="+33 6 99 99 99 99" required="" value="<?php echo stripslashes($thisAdherant["telephone"]) ?>"></div>
                            </div>
                             
                        </div>
                        <div class="position-relative form-group">
                            <label for="exampleAddress" class="">Adresse <span  style="color: red;">*</span></label><input name="adresse" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control" required="" value="<?php echo stripslashes($thisAdherant["adresse"]) ?>">
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="exampleCity" class="">Ville <span  style="color: red;">*</span></label><input name="ville" id="exampleCity" type="text" class="form-control" placeholder="Paris" required="" value="<?php echo stripslashes($thisAdherant["ville"]) ?>"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="exampleState" class="">Code Postal</label><input name="codepostal"  type="text" class="form-control" value="<?php echo stripslashes($thisAdherant["codepostal"]) ?>"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="exampleEmail11" class="">Email</label><input name="email" id="exampleEmail11"  disabled="" type="email" class="form-control" value="<?php echo stripslashes($thisAdherant["email"]) ?>"></div>
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <h5>Changement de mot de passe</h5>
                        </div>
                        <div class="form-row"> 
                            
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="examplePassword11" class="">Nouveau</label><input name="password1"  value="" type="password" class="form-control"/></div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="examplePassword11" class="">Confirmer </label><input name="password2"   value="" type="password" class="form-control" /></div>
                            </div>
                        </div>    
                       <!--  <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Check me out</label></div> -->
                        <button class="mt-2 btn btn-primary">Modifier</button>
                    </form>
                </div>
            </div> 
        </div> 
    </div>
</div>
</div>   
<?php
    include("footer.php");
?>

<script type="text/javascript">  
function verify(element1, element2)
// La fonction reçois en paramètre les 2 éléments
 {
  var passed=false
// On va donner à la variable passed la valeur false (fausse).

   if (element1.value!='' || element2.value!=''){
      if (element1.value!=element2.value) { 
        document.getElementById('notification').style.display = 'block';
        element1.select() 
   }

   else
   passed=true
   return passed
 }
 }
// fin du script -->
</script>
 