<?php
    require 'conf.php';

    $id = 0;

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = stripslashes($_GET['id']);
    }

    if(isset($_POST['nome']) && !empty($_POST['nome'])){
        $nome = stripslashes($_POST['nome']);
        
        
        $query = $pdo->prepare("UPDATE usuarios SET nome = :nome WHERE id = :id");
        $query->execute([
            'id' => $id,
            'nome' => $nome
        ]);

        header("Location: index.php");
    }    
$query = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
$query->execute([
    'id' => $id
]);

    if($query->rowCount() > 0) {
        $dado = $query->fetch();
    } else {
        header("Location: index.php");
    }

?>

<form method="POST">
        Nome: <br><br>
        <input type="text" name="nome" value="<?php echo $dado['nome']; ?>"><br><br>

        <input type="submit" value="Atualizar">
</form>