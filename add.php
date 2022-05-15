<?php
session_start();
require_once("functions.php");
$sujet=$_POST["sujet"];
$contenu=$_POST["contenu"];
$user2=$_POST["user_send"];
$user1=$_SESSION["id_user"];
sendMessage($sujet,$contenu,$user1,$user2);
header("location:accueil.php");

?>