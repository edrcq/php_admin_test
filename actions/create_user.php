<?php 

require_once __DIR__ . '/../init/db.php';






if (isset($_POST['name'])) {
    
    $prepsql = $db->prepare('SELECT * FROM users WHERE username = ?');
    $prepsql->execute(array(
       $_POST['name']
    ));
 
    $users = $prepsql->fetchAll();
 
    // si utilisateur a ete trouver, redirect, ne pas continuer register
    if (count($users) > 0) {
       echo 'username existe deja';
       die();
    }
 
    // si aucun user a ete trouve
    $stm = $db->prepare('INSERT INTO users("name,password") VALUES(?,?)');
    $stm->execute([$_POST['name'],$_POST['passewordbdd']]);
    
    $id = $db->lastInsertId();
 
    $_SESSION['registered'] = true;
 
 
 
 }


// verifier les champs recu avec $_POST
// Creer en BDD

?>
