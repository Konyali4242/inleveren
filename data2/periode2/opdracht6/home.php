<?php 
include 'db.php';
$db = new Database();

if (isset($_SESSION['ID'])) {
    echo "Ingelogd als: " . $_SESSION['ID'];
    echo "<br><a href=logout.php>Logout</a>";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $db->data($_POST["email"], $_POST["wachtwoord"],);
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
    <a href='aanmelden.php'>aanmelden</a> 
    <form method="POST">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="wachtwoord" placeholder="Wachtwoord">
        <input type="submit" name="knopje" value="Verzend">
    </form>

    <table border="2">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Wachtwoord</th>
        </tr>

        <tr> <?php
            $users = $db->selectAllUsers(); 
            if ($users) { 
                foreach ($users as $user) {?>
            <td><?php echo $user['ID'];?></td>
            <td><?php echo $user['email']?></td>
            <td><?php echo $user['wachtwoord']?></td>
           <td><a href="update.php?ID=<?php echo $user['ID']; ?>">Edit</a></td>
           <td><a href="delete.php?ID=<?php echo $user['ID']; ?>">Delete</a></td>
           <td></td>
        </tr> <?php } }?>
        </tr>
    </table>
</body>
</html>