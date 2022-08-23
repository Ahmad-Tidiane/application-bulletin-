<?php
 
 
 
require('connect.php');
 
 
 
 
if(isset($_POST['code_Competences'],$_POST['date_Evaluer'],$_POST['code_uea'],$_POST['Matricule_Formateurs'],$_POST['matricule_Apprenants'],$_POST['note_Evaluer'],$_POST['note_Integration'],$_POST['semestre_Evaluer'],$_POST['commentaire_Evaluer'])){
 
$date = $_POST['date_Evaluer'];
 
$comp = $_POST['code_Competences'];

$code_uea = $_POST['code_uea'];

$matform = $_POST['Matricule_Formateurs'];
 
$matapp = $_POST['matricule_Apprenants'];

$note = $_POST['note_Evaluer'];

$noteInte = $_POST['note_Integration'];

$sem = $_POST['semestre_Evaluer'];
 
$comment = $_POST['commentaire_Evaluer'];
 

 
 
 
$save = "INSERT  INTO evaluer(Matricule_Formateurs,matricule_Apprenants,code_uea,code_Competences,date_Evaluer,note_Evaluer,note_Integration,semestre_Evaluer,commentaire_Evaluer) VALUES(?,?,?,?,?,?,?,?,?)";
 
$ps = $pdo->prepare($save);
 
$ps->execute([$matform,$matapp,$code_uea,$comp,$date,$note,$noteInte,$sem,$comment]);
 
 
 
header('Location:ajout_note.php');
 
}