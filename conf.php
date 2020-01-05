<?php
   $dsn = "mysql:dbname=CRUD;host=127.0.0.1";
   $dbuser = "admin";
   $dbpass = "dascandangas";

   try {
       $pdo = new PDO($dsn,$dbuser, $dbpass);
       $sql = $pdo->query($sql);

       //code...
   } catch (PDOexception $e) {
       echo "Error: ".$e->getMessage();
   }
?>