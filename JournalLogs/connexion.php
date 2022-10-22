<?php
session_start();
$login = $_POST["login"];
$mdp = $_POST["mdp"];

$id = mysqli_connect("127.0.0.1","root","","hopital");
mysqli_query($id,"SET NAMES 'utf8'");
$requete = "select * from user where login='$login' and mdp='$mdp'";
$reponse = mysqli_query($id, $requete);


if(mysqli_num_rows($reponse)>0)
{
    
    $ligne = mysqli_fetch_assoc($reponse);
    $_SESSION["login"] = $login;
    $_SESSION["niveau"] = $ligne["niveau"];
    header("location:PageClientAdmin.php");
    $req = "insert into logs (idm,Login,DateDebut,DateFin) values (null,'$login',now(),null)";
    mysqli_query($id,$req); 
    
} else {
    echo "Connexion refusée retour à la page login .";
    header("refresh:3;url=PageLogin.php");
}



?>