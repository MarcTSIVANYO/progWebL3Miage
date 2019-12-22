<?php 


 function addSpace($value='',$taille='')
 { 
 	$taille=(int)$taille; 
 	if (strlen($value)<$taille) {
    	$value=$value." ".str_repeat("&nbsp;",$taille-strlen($value)); 
   	}

    return $value;
 }



 ?>