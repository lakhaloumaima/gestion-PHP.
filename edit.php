<?php
require_once("medicaments.php") ; //import ?>
<!doctype html> 
<html> 
<head>
<title>consultution des medicaments</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
 crossorigin="anonymous"> 
</head>
<body>
<h1>consultation </h1>
<h2>les médicaments récéntes : </h2>
 => ci-dessous la liste des médicaments : <br> 
 <?php
 $medicaments = new medicaments() ;
 $les_medicaments=$medicaments->editAll() ;
echo "<table class='table table-striped'>";
echo"<tr><th>id</th><th>nom</th><th>prix</th>
<th> categorie</th><th>suppression</th><th>modifier</th><th>voir details</th></tr>" ;

foreach ($les_medicaments as $item) {
echo  "<tr><td>" . $item[0] ."</td><td>".$item[1].
"</td><td>" . $item[2]."</td><td>".$item[3]."</td>
<td><a href='supp_sql.php?dd=$item[0]' > 
<span class='glyphicon glyphicon-trash' style='color:red' ></span></a></td>
<td><a href='modif_sql.php?dd=$item[0]'><span class='glyphicon glyphicon-pencil' style='color:bleu'></span></a></td>
<td><a class='btn btn-primary' href='details.php?dd=$item[0]'>voir</a></td></tr>";
}
echo "</table>" ;
?>

</body>
</html>