<?php
 
 
 
require('connect.php');
 
 
 
 
if(isset($_POST['code_Competences'],$_POST['code_uea'],$_POST['libelle_uea'])){
 
$code = $_POST['code_Competences'];

$code_uea = $_POST['code_uea'];
 
$libelle = $_POST['libelle_uea'];

 

 
 
 
$save = "INSERT  INTO uea(code_uea,libelle_uea,code_Competences) VALUES(?,?,?)";
 
$ps = $pdo->prepare($save);
 
$ps->execute([$code_uea, $libelle,$code]);
 
 
 
header('Location:ajout_uea.php');
 
}