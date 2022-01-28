<?php 
require_once("destributeur.php") ; //import
$vnom =$_POST['nom'] ;
$vadresse =$_POST['adresse'];
//echo ("$vnom ,$vadresse ") ;

$destributeur= new destributeur() ;
$destributeur ->setNom($vnom) ;
$destributeur ->setAdresse($vadresse) ;

$retour=$destributeur->ajouter() ;


header("location:insert_destributeur_form.php?retour=$retour") ;
?>