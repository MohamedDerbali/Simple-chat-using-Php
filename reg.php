<?php
include_once "Classes/userc.php";
include_once "entities/user.php";
$userc=new UserC();
//if(isset($_POST['register'])){
var_dump($_POST['nom']);
$nom=$_POST['nom'];

$prenom=$_POST['prenom'];
$age=$_POST['age'];
$userr=new user($nom,$prenom,$age);
var_dump($userr);
$userc->adduser($userr);
//header('Location: register.php');
?>