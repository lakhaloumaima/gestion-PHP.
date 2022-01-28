<?php
require_once("medicaments.php") ; //import
//verifier si le formulaire a été envoyé
$medicaments = new medicaments() ;
$idm=$_REQUEST['dd'] ;
$r=$medicaments->supprimer($idm) ;
if($r)
    header("location:edit.php") ;
    else
    echo "erreur de suppression "
?>