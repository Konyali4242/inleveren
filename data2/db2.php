<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['naam']) || empty($_POST['achternaam']) || empty($_POST['geboortedatum']) || empty($_POST['email']) || empty($_POST['telefoonnummer'])){
        echo "Vul alstublieft alle velden in";
    } else {

        $naam = $_POST["naam"];
        $achternaam = $_POST["achternaam"];
        $geboortedatum = $_POST["geboortedatum"];
        $email = $_POST["email"];
        $telefoonnummer = $_POST["telefoonnummer"];

        $sql = "INSERT INTO deklant (ID, naam, achternaam, geboortedatum, email, telefoonnummer) VALUES (NULL, :naam, :achternaam, :geboortedatum, :email, :telefoonnummer)";
        // : zijn named parameters
        $stmt= $pdo->prepare($sql);

        $data = [
        'naam' => $naam,
        'achternaam' => $achternaam,
        'geboortedatum' => $geboortedatum,
        'email' => $email,
        'telefoonnummer' => $telefoonnummer,
        ];
       $stmt->execute($data);
       echo "Gegevens opgeslaan!" . "<br>";
    }   
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacten</title>
    <link rel="stylesheet" href="sems.css">
</head>

<body>
    
    <div class="box">
        <table>
          <tr>
            <th>ID</th>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Geboortedatum</th>
            <th>Email</th>
            <th>Number</th>
            <th>Action</th>
          </tr>
          
          <?php
          $stmt = $pdo->query("SELECT * FROM deklant");
          $result = $stmt->fetchAll();
          foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['naam'] . "</td>";
            echo "<td>" . $row['achternaam'] . "</td>";
            echo "<td>" . $row['geboortedatum'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['telefoonnummer'] . "</td>";
            echo "<td> <a href=''>Edit</a> <a href=''>Delete</a></td>";
            echo "</tr>";
          }
          ?>
        </table>
    </div>

    <div class="deform">
        <form method="POST">
            <input type="text" name="naam" placeholder="Naam">
            <input type="text" name="achternaam" placeholder="Achternaam">
            <input type="date" name="geboortedatum" placeholder="Geboortedatum">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="telefoonnummer" placeholder="Telefoonnummer">
            <input type="submit" name="knopje" value="Verzend">
        </form>
    </div>

</body>

</html>