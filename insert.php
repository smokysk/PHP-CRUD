<?php
    require 'conf.php';

    if (isset($_POST['nome']) && empty($_POST['nome'])==false) {
        $nome = addcslashes($_POST['nome']);
        $email = addcslashes($_POST['email']);
        $senha = md5(addcslashes($_POST['senha']));

        $sql = "INSERT INTO usuarios(nome,email,senha) VALUES('$nome','$email','$senha')";
        $sql = $pdo->query($sql);

        header("Location: index.php");
   
    }
    else{
        echo "ERROR";
    }

?>

<form method="POST">
        Nome: <br><br>
        <input type="text" name="nome" placeholder="nome"><br><br>
        Email: <br>
        <input type="email" name="email" placeholder="email"><br><br>  
        Senha: <br>
        <input type="password" name="senha" placeholder="senha"><br><br>
        <br>
        <input type="submit" value="Cadastrar">
</form>

