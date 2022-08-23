<?php
 
 
 
require('connect.php');
 
 
 
 
if(isset($_POST['code_Competences'],$_POST['libelle_Competences'])){
 
$code = $_POST['code_Competences'];
 
$libelle = $_POST['libelle_Competences'];
 

 
 
 
$save = "INSERT  INTO competences(code_Competences,libelle_competences) VALUES(?,?)";
 
$ps = $pdo->prepare($save);
 
$ps->execute([$code, $libelle]);
 
 
 
header('Location:ajout_comp.php');
 
}