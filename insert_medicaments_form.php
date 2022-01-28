<!DOCTYPE html>
<html>
<head>
<style>
    form{
    margin-left:auto;
    margin-right:auto;
    width:500px;
    }
</style>
<title>insert medicaments</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

<form action="insert_medicaments_form_action.php" method="post">
<h1>Ajout d'une nouvelle medicaments</h1>
  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom"  placeholder="Enter le nom" name="nom">  
  </div>
  <div class="form-group">
    <label for="prix">Prix</label>
    <input type="text" class="form-control" id="prix" name="prix" placeholder="Entrez votre prix">
  </div>
  <div class="form-group">
    <label for="categorie">Categorie</label>
    <input name="categorie"  id="categorie" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
if(isset($_REQUEST['retour']))
{
  $res=$_REQUEST['retour'];
  if($res)
  echo "<center><b><span style='color:green'>ajout avec succés</span></b></center>";
  else
  echo "<center><b><span style='color:red'>erreu d'insertion</span></b></center>";
}
?>
</body>
</html>