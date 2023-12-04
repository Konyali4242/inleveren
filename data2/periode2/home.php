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
    <title>php - - - Document - - - php</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="naam" placeholder="Naam">
        <input type="text" name="achternaam" placeholder="Achternaam">
        <input type="text" name="leeftijd" placeholder="Leeftijd">
        <input type="text" name="land" placeholder="Land">
        <input type="submit" name="knopje" value="Verzend">
    </form>

    <table border="2">
        <tr>
            <th>ID</th>
            <th>naam</th>
            <th>achternaam</th>
            <th>leeftijd</th>
            <th>land</th>
        </tr>

        <tr> <?php
           $user = $db->select(1); ?>
            <td> <?php echo $user['ID']?> </td>
            <td> <?php echo $user['naam']?> </td>
            <td> <?php echo $user['achternaam']?> </td>
            <td> <?php echo $user['leeftijd']?> </td>
            <td> <?php echo $user['land']?> </td>
            <td> <a href=''>edit</a> </td>
            <td> <a href=''>Delete</a> </td>
        </tr>
    </table>
</body>
</html>