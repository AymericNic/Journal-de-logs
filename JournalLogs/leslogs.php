<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("location:connexion.php");
    }
$id = mysqli_connect("127.0.0.1","root","","hopital");
mysqli_query($id,"SET NAMES 'utf8'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<center>
<h1>Journal des logs</h1>

<table>
       <tr><th> ID </th><th> LOGIN </th><th> DATEDEBUT</th><th> DATEFIN</th></tr>
    <?php
    $requete = "select * from connexions";
    $reponse = mysqli_query($id, $requete);
    while($ligne = mysqli_fetch_assoc($reponse))
    {
    echo "<tr><td>".$ligne["idc"]."</td><td>"
        .$ligne["login"]."</td><td>"
        .$ligne["dateDeb"]."</td><td>"
        .$ligne["dateFin"]."</td></tr>";
    }

    ?>
    </table>
    <a href=Deconnexion.php>Deconnexion</a>
    
</center>
<body>
    
</body>
</html>