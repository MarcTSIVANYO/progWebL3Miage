<?php 
 		include('config.php');
        //$classuser->update_etre_connecte($_SESSION['user']['id_user'],'n');
 		 $dbh->query("update coc_user set 	COC_USER_status=0  where COC_USER_id=".$_SESSION['user']['COC_USER_id']); 
        @session_destroy();
        header("location:index.php");
        exit(); 

?>