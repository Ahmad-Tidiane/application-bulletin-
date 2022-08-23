<?php
 
try{
 
$pdo = new  PDO('mysql:host=localhost;dbname=bulletin','root',);
 
}catch(PDOException  $ex){
 
$message = "Erreur de connexion";
 
echo  $message  .  ''  .$ex->getMessage();
 
}