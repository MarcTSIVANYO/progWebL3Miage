<?php 
	session_start();
    ini_set("display_errors", "1");
    error_reporting(E_ALL ^ E_NOTICE);
    date_default_timezone_set('UTC');
	include("include/connexion_start_inc.php");
	include("include/fonction.php");
	include("include/class_user.php");
?>