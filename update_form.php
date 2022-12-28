<?php 

require_once __DIR__ . '/init/db.php';

// id de l'utilisateur a update
if (isset($_GET['id'])) {
    $id_to_update = $_GET['id'];
} else {
    // Redirection si pas d'ID dans l'url.. on ne peut pas mettre a jour RIEN.
    header('Location: users.php');
    die();
}

// Recuperer l'utilisateur a mettre a jour avec PDO et une requete SQL
$stmt = $db->prepare('SELECT * FROM users WHERE id = ?');
$stmt->execute([$_GET['id']]);
$user = $stmt->fetch();

if (!$user) {
    header('Location: users.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mettre a jour un utilisateur</title>
</head>
<body>
    <!-- Afficher un formulaire avec les data de l'utilisateur -->
    <form method="POST" action="actions/update_user.php?id=<?= $user['id'] ?>">
        <input type="hidden" name="old_username" value="<?= $user['username'] ?>">
        <input type="text" name="username" value="<?= $user['username'] ?>">
        <input type="password" name="new_password" value="">
        <input type="submit" value="Update now!">
    </form>
</body>
</html>
