<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

        session_start();
        // include '../login.php';

    ?>

</head>
<body>
    <?php
        if (!isset($_SESSION['email'])) {
            header('Location: ../index.php');
        } else if (isset($_SESSION['email'])) {
            echo '<h1>Profile</h1>';
            echo '<a href="../backend/logout.php">Sair</a>';
        }
    ?>
</body>
</html>