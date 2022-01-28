<!DOCTYPE html>
<html>
<head>
<style>
    form{
    margin-left:auto;
    margin-right:auto;
    width:500px;
    }
    .xyz{
 font-size:14px;
 font-family:verdana;
 color:green;
    }
</style>
<title>details medicaments</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

<form action="" method="post">
<?php
require_once("medicaments.php");
if(isset($_REQUEST['dd']))
{
$num=$_REQUEST['dd'];
?>
 <?php echo "<center><b><span style='color:blue;font-size:2em'>Détails du Job Num: $num</span></b></center>"; ?> 
<ul>  
<?php
 $medicament=new medicaments();
 $item=$medicament->editBy($num);
 echo  "<li><div class='xyz'>nom du medicament : $item[0]</div><br>";
 echo  "<Li><div class='xyz'>prix du medicament : $item[1]</div><br>";
 echo  "<li><div class='xyz'>categorie du medicament : $item[2]</div></ul><br>";

}
else
echo "spécifier le code du medicaments";
?>
</body>
</html>