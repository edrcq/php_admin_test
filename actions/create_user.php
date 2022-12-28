<?php 

require_once __DIR__ . '/../init/db.php';

// verifier les champs recu avec $_POST
// Creer en BDD

if (!isset($_POST['username'], $_POST['password'])) {
    // header('Location: ../users.php?error=create_user_empty');
    echo json_encode(['error' => 'empty_fields']); // {"error": "empty_fields"}
    die();
}

$username = $_POST['username'];
$password = hash('sha256', $_POST['password']);

if (strlen($username) < 2) {
    // header('Location: ../users.php?error=create_user_short_username');
    echo json_encode(['error' => 'username_is_too_short']);
    die();
}

$stmt = $db->prepare('INSERT INTO users (username, password) VALUES(?, ?)');
$stmt->execute([$username, $password]);

// header('Location: ../users.php?success_create=ok')
echo json_encode(['success' => 'ok']);

?>
