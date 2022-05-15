<?php
session_start();
require_once("functions.php");
if(!isset($_SESSION["user"])){
    $_SESSION["erreur"]="Vous n'avez pas le droit d'acceder!";
    $_SESSION["type"]="danger";
    header("location:connection.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="bootstrap4/css/bootstrap.min.css"  rel="stylesheet" >
    <script type="text/javascript" src="bootstrap4/js/jquery.min.js" ></script>
    <script type="text/javascript" src="bootstrap4/js/bootstrap.min.js" ></script>
    <link href="fontawesome/css/all.css" rel="stylesheet">

</head>
<body>
<div class="container">
<?php
include_once("top.php");

?>

    <div class="row" style="margin-top:5px;">
    <?php
       include_once("left.php");
?>
        <div class="col-9">
           
            <div class="col">
                <div class="card text-white">
                    <div class="card-header bg-primary"> Detail message</div>
                   <?php
$id=$_GET["id"];
$m=getMessageById($id);
readMessage($id);
                   ?>

                    <div class="alert alert-warning">
                <h3> De :<?=getNameById($m["user_send_id"]) ?></h3>
                <h5> Sujet : <?=$m["sujet"] ?></h5>
                <h6> Date : Le <?=$m["date_send"] ?></h6>
            </div>
            <div class="alert alert-info">
            <?=$m["contenu"] ?>

            </div>


                </div>

            </div>


        </div>

    </div>

</div>


</body>
</html>