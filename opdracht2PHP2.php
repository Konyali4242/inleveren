<?php
/*
$variabele1 = 10;
$variabele2 = 10;

if($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
}






$variabele1 = 10;
$variabele2 = 10;

if($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
}   else {
    echo "de twee waarden zijn ongelijk";
}






$variabele1 = 10;
$variabele2 = 10;

if($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
} else {
    echo "De twee waarden zijn ongelijk";
}
*/
$naam = $_POST["naam"];
$wachtwoord = $_POST["wachtwoord"];

if(isset($_POST['submit'])) {
    echo $naam . " " . $wachtwoord;
}

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

    <input type="text" name="naam" placeholder="Username">
    <input type="text" name="wachtwoord" placeholder="Password">
    <input type="submit" name="submit" value="Submit">

<form>


</body>


</html>
