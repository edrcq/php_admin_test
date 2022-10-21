<?php 

require_once __DIR__ . '/../init/db.php';

// verifier les champs recu avec $_POST
// Creer en BDD

if (!isset($_POST['username'], $_POST['password'])) {
    header('Location: ../users.php?error=create_user_empty');
    die();
}

$username = $_POST['username'];
$password = hash('sha256', $_POST['password']);

if (strlen($username) < 2) {
    header('Location: ../users.php?error=create_user_short_username');
    die();
}

$stmt = $db->prepare('INSERT INTO users (username, password) VALUES(?, ?)');
$stmt->execute([$username, $password]);

header('Location: ../users.php?success_create=ok')

?>
