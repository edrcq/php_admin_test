<?php

require_once __DIR__ . '/init/db.php';

// if pour la story 4
if (isset($_GET['username'])) {
    $search_username = $_GET['username'];
}

// Story 0: request to find all username
/*
$stmt = ... 
$stmt->execute();
$users = $stmt->fetchAll();
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
</head>

<body>
    <!-- Input Search -->
    <div>

    </div>

    <!-- Table des Utilisateurs -->
    <div>
        <input type="text" placeholder="Username" name="name">
        <input type="password" placeholder="Mot de passe" name="passewordbdd">
        <?php
        
        require __DIR__. '/actions/create_user.php';
        ?>
        <input type="submit" value="finaliser le compte" name="submit">

    </div>
</body>
</html>
