<?php
session_start();
require_once("functions.php");
$cnx=getConnexion();
$email=$_POST["email"];
$pass=$_POST["pass"];
$req=mysqli_query($cnx,"select * from user where email='{$email}'");
$exist=0;
while($d=mysqli_fetch_array($req)){
    if (password_verify($pass,$d["password"])){
        $_SESSION["user"]=$d["nom"];
        $_SESSION["id_user"]=$d["id"];
        $da=date("d-m-Y H:i:s");
        $req2=mysqli_query($cnx,"update user SET date_access='{$da}' where id={$d["id"]}");
        $exist=1;
    }
}
if ($exist==0){
    $_SESSION["erreur"]="verifier Mr/Mlle votre email ou mot de passe!!";
    $_SESSION["type"]="warning";
    header("location:connection.php");
}else{
    header("location:accueil.php");  
}
?>       