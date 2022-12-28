<?php 

require_once __DIR__ . '/../init/db.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: ../users.php?error=delete_not_numeric');
    die();
}

// id de l'utilisateur a supprimer
$id_to_delete = $_GET['id'];

$stmt = $db->prepare('DELETE FROM users WHERE id = ?');
$stmt->execute([
    $id_to_delete
]);

header('Location: ../users.php?success_delete=' . $id_to_delete);

?>
