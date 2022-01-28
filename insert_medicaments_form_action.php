<?php 
require_once("medicaments.php") ; //import
$vnom =$_POST['nom'] ;
$vprix =$_POST['prix'];
$vcategorie =$_POST['categorie'] ;

//echo ("$vnom ,$vprix ,$vcategorie ") ;

$medicaments= new medicaments() ;

$medicaments ->setNom($vnom) ;
$medicaments ->setPrix($vprix) ;
$medicaments ->setCategorie($vcategorie) ;

$retour=$medicaments->ajouter() ;


header("location:insert_medicaments_form.php?retour=$retour") ;




?>