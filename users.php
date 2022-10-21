<?php

require_once __DIR__ . '/init/db.php';

// if pour la story 4
if (isset($_GET['username'])) {
    $search_username = $_GET['username'];
}

// Story 0: request to find all username

$stmt = $db->prepare('SELECT * FROM users');
$stmt->execute();
$users = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <style>
        .flex-ct {
            display: flex;
            flex-direction: column;
        }

        .flex-row: {
            margin-top: 20px;
            margin-bottom: 20px;
            display: row;
        }

        .flex-row a {
            background-color: grey;
            color: white;
            padding: 3px;
            margin: 3px;
        }

        .flex-row a:visited {
            background-color: grey;
            color: yellow;
        }

        .error {
            background-color: red;
        }

        .success {
            background-color: green;
        }
    </style>
</head>
<body>
    <!-- Message erreur et success -->
    <?php 
    if (isset($_GET['success_delete'])) { ?>
    <div class="flex-ct success">
        <p>User deleted</p>
    </div>
    <?php
    }
    if (isset($_GET['success_create'])) { ?>
    <div class="flex-ct success">
        <p>User created</p>
    </div>
    <?php } ?>

    <div>
        <h2>Creer un user</h2>
        <form method="POST" action="actions/create_user.php">
            username: <input type="text" name="username" /><br />
            password : <input type="password" name="password" /><br />
            <input type="submit" value="Create now!">
        </form>
    </div>

    <!-- Input Search -->
    <div>
        <h2>Chercher un user</h2>
        <form action="users.php" method="GET">
            Username: <input type="text" name="id"><input type="submit" value="Search" />
        </form>
    </div>

    <!-- Table des Utilisateurs -->
    <div class="flex-ct">
        <h2>Tableau des users</h2>
        <?php for($i = 0; $i < count($users); $i++) { ?>
        <div class="flex-row">
            <div>
                User: <?= $users[$i]['username'] ?>
                <a href="update_form.php?id=<?= $users[$i]['id'] ?>">Edit</a>
                <a href="actions/delete_user.php?id=<?= $users[$i]['id'] ?>">Delete</a>
            </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>
