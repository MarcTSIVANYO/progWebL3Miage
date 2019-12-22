<?php
   try
	{
	 	$dbtype ='mysql'; 
	    $host = 'localhost'; 
	    $user = 'root'; 
	    $pass = ''; 
	    $database = 'messagerie_db'; 
	    $dns = $dbtype.':dbname='.$database.";host=".$host; 
	    $dbh = new PDO( $dns, $user, $pass ); 
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
?>

