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
<body>
    <center>
        <h1>Bonjour <?=$_SESSION["login"]?></h1> 
<?php 

        if($_SESSION["niveau"] == 1)  
        echo "<a href=leslogs.php /a>"

?>

            <h1>Page Privée</h1>

            <a href=Deconnexion.php> Deconnexion</a>
</center>
</body>
</html>