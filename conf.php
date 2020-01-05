<?php
   $dsn = "mysql:dbname=CRUD;host=127.0.0.1";
   $dbuser = "admin";
   $dbpass = "dascandangas";

   try {
       $pdo = new PDO($dsn,$dbuser, $dbpass);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       //code...
   } catch (PDOexception $e) {
       echo "Error: ".$e->getMessage();
   }
?>