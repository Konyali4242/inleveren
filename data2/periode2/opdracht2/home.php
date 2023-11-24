<?php 

include 'db.php';
$db = new Database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $db->data($_POST["naam"], $_POST["achternaam"], $_POST["leeftijd"], $_POST["land"]);
        echo "Gelukt";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="naam" placeholder="Naam">
        <input type="text" name="achternaam" placeholder="Achternaam">
        <input type="text" name="leeftijd" placeholder="Leeftijd">
        <input type="text" name="land" placeholder="Land">
        <input type="submit" name="knopje" value="Verzend">
    </form>
</body>
</html>