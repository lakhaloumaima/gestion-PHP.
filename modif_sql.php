<?php
// Récupérer l'id à modifier (depuis la page précédente)
$id = $_REQUEST['dd'] ;
// Connexion à la bdd
include("connexion.php") ;
// Récupérer toutes les données de medicament relatif à l'ID récupéré
$res = $cnx->query("SELECT * FROM medicaments WHERE idm=$id");
$med = $res->fetch(); // Ceci est UN SEUL medicament
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Modifier un medicament</title>
</head>
<body>
 <h1>Modifier une fiche medicament</h1>
 <form action="modif_sql_action.php">
 ID : <?php echo $id; ?><br/>
 Nom : <input type="text" name="nom" value=" <?php echo $med['nom']; ?>"></br>
 Prix : <input type="text" name="prix" value=" <?php echo $med['prix']; ?>"></br>
 Categorie : <input type="text" name="categorie" value=" <?php echo $med['categorie']; ?>"></br>
 <input type="hidden" name="idm" value="<?php echo $med[0] ;?>">
 <input type="submit" value="Modifier" name="modifier" href='modif_sql_action.php?dd=$item[0]' >
 </form>
</body>
</html>