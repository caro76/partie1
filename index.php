<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <?php
 $objet ='exercice php :';
 $message = 'lire les consignes';
 echo $objet . ' ' . $message;
 ?>
  <p><?= $objet . ' ' . $message ?></p>
 <hr>
 <?php
 $lastName = 'Chery';
 $firstName = 'Caroline';
 $age = 42 ;
 ?>
 <p><?= $lastName . ' '. $firstName . ' '. $age ?></p>
 <hr>
 <?php
 $km = 1 ;
 echo $km . ' ' ;
 $km = 3 ;
 echo $km . ' ' ;
 $km = 125 ;
 echo $km . ' ' ;
 ?>
 <hr>

 <?php
$name = 'Caroline' ;

?>
<p>Bonjour <?=  $name ?> Comment vas tu ?</p>

<hr>

<?php

$answer = 'yes' ;
if ($answer == 'yes')
{
    echo "Vous avez répondu oui";
}
else 
{
    echo "Vous avez répondu non";
}
?>

<hr>

<?php
$number = 140 ;
?>
<p><?= ($number + 30)  / 2  ?></p>
</body>
</html>