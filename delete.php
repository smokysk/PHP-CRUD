<?php
    require 'conf.php';

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = stripslashes($_GET['id']);
        $query = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
        $query->execute([
            'id' => $id
        ]);
        header("Location: index.php");

    } else {
        header("Location: index.php");
    }

?>