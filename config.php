<?php 
	session_start();
    ini_set("display_errors", "1");
    error_reporting(E_ALL ^ E_NOTICE);
    date_default_timezone_set('UTC');
	include("class/database.php");
	include("include/fonction.php");
	include("class/class_adherant.php");
	include("class/class_projet.php");
	include("class/class_donateurs.php");
    define('DOSSIER_FICHIER','fichiers/');
?>