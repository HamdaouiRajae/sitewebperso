<?php 


//Variables de connexion à la BD

require_once 'connect.php'; //d'importer une fois seulement un fichier même s'il y'a plusieurs tentatives d'importation du fichier dans la page
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  if (!$dbc)
  {
    trigger_error('Connexion ?a BDD impossible : ' . mysqli_connect_error() );
    exit();
  }

$nom=$_POST["nom"];
$email=addslashes($_POST["email"]);
$commentaire=$_POST["commentaire"];


            $sql = "insert into contact (nom,email,commentaire) values('$nom','$email','$commentaire')";
            $result2 = @mysqli_query($dbc,$sql)or die( "Erreur SQL !.");
            header("location:index.php") ;


?>