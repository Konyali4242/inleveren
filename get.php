<?php
$naam = $_GET["naam"];
$achternaam = $_GET["achtermaa,"];
$leeftijd = $_GET["leeftijd"];
$adres = $_GET["adres"];
$email = $_GET["emial"];


echo $naam . " " . $achternaam . " " . $leeftijd . " " . $adres . " " . $email;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



<form method="POST">

<input type="text" name="naam" placeholder="Firstname">
<input type="text" name="achternaam" placeholder="Lastname">
<input type="text" name="leeftijd" placeholder="Age">
<input type="text" name="adres" placeholder="Adress">
<input type="email" name="email" placeholder="Mail">

<form>

</body>

</html>