<?php 
    include("config.php");
    if(count($_POST))
    {
        $email_user=$_POST['email_user'];
        $pwd_user=$_POST['password_user'];
        $connectReq = $dbh->query("select * from coc_user where COC_USER_email='$email_user' and COC_USER_motdepasse ='$pwd_user' "); 
        //$connectReq=$classuser->Login($_POST['email_user'],$_POST['password_user']);  
        if($connectReq->rowCount()>0)
        {
             $tabses=$connectReq->fetch();  
             $dbh->query("update coc_user set   COC_USER_status=1  where COC_USER_id=".$tabses['COC_USER_id']); 
             $_SESSION['user']['COC_USER_email']=stripslashes($tabses['COC_USER_email']);
             $_SESSION['user']['COC_USER_id']=$tabses['COC_USER_id']; 
             $_SESSION['user']['type']=$tabses['COC_USER_type'];  
             if($tabses['COC_USER_type']=="ADMIN"){

                header("location:support-admin.php"); 
             }

              if($tabses['COC_USER_type']=="CLIENT"){
                header("location:contact.php"); 
             }
             exit(); 
             
        }else{
            $notification="Login ou Mot de passe incorrect";  
        } 
    }  

 ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Login - Messagerie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="./main.8d288f825d8dffbbe55e.css" rel="stylesheet"></head>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/logo_courscenter.jpg');"></div>
                                        <div class="slider-content"><h3>Perfect Balance</h3>
                                            <p>ArchitectUI is like a dream. Some think it's too good to be true! Extensive collection of unified React Boostrap Components and Elements.</p></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/citynights.jpg');"></div>
                                        <div class="slider-content"><h3>Scalable, Modular, Consistent</h3>
                                            <p>Easily exclude the components you don't require. Lightweight, consistent Bootstrap based styles across all elements and components</p></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-sunny-morning" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/citydark.jpg');"></div>
                                        <div class="slider-content"><h3>Complex, but lightweight</h3>
                                            <p>We've included a lot of components that cover almost all use cases for any type of application.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <h2>Connexion</h2>
                           <!--  <div class="app-logo"></div>  -->
                            
                            <h4 class="mb-0"> 
                                <span>Bienvenue sur le portail de connexion</span>
                            </h4>  
                            <div class="divider row"></div>
                            <div>
                                <form action="" class="login-wrapper" method="post">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="exampleEmail" class="">Email</label><input name="email_user" id="exampleEmail" placeholder="Email..." type="email" class="form-control"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="examplePassword" class="">Password</label><input name="password_user" id="examplePassword" placeholder="Password..." type="password" class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Keep me logged in</label></div>
                                    <div class="divider row"> 
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <?php if($notification){ ?>
                                            <button class="mb-2 mr-2 btn btn-danger"><?php echo $notification; ?></button>
                                        <?php } ?>
                                        <div class="ml-auto"><a href="javascript:void(0);" class="btn-lg btn btn-link">Recover Password</a>
                                            <button class="btn btn-primary btn-lg">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript" src="assets/scripts/main.8d288f825d8dffbbe55e.js"></script></body>
</html>
