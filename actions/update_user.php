<?php 

require_once __DIR__ . '/../init/db.php';

if (!isset($_GET['id'])) {
    header('Location: ../users.php');
    die();
}

$stmt = $db->prepare('SELECT * FROM users WHERE id = ?');
$stmt->execute([$_GET['id']]);
$user = $stmt->fetch();

if (!$user) {
    header('Location: ../users.php');
    die();
}

// verifier les champs recu avec $_POST
// Mettre a jour en BDD

$password = $user['password'];
if (isset($_POST['password'])) {
    $password = hash('sha265', $_POST['password']);
}
$username = $user['username'];
if (isset($_POST['username'])) {
    $username = $_POST['username'];
}

$stmt = $db->prepare('UPDATE users SET username = ?, password = ? WHERE id = ?');
$stmt->execute([
    $username,
    $password,
    $_GET['id']
]);

header('Location: ../users.php?success_update=' . $_GET['id']);

?>
