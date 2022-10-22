<?php
session_start();
$id = mysqli_connect("127.0.0.1","root","","hopital");
mysqli_query($id,"SET NAMES 'utf8'");
$requete = "select max(idc) as maxi from connexions";
//$requete = "select max(idm) from logs where login $_SESSION[login]";
$reponse = mysqli_query($id, $requete);
$ligne = mysqli_fetch_assoc($reponse);
$idm=$ligne["maxi"];
$req="update logs set dateFin=now() where idc = '$idc'";

$rep = mysqli_query($id,$req);
echo"<h1>Deconnexion en cours....</h1>";

session_destroy();
header("refresh:0.1;url=PageLogin.php");
?>