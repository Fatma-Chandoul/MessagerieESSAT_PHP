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
                <div class="card">
                    <div class="card-header bg-primary">Envoyer un message</div>
                   <form action="add.php" method="POST">
                       <div class="form-group">
                           <label for="">Sujet</label>
                           <input type="text" class="form-control" name="sujet">
                       </div>
                       <div class="form-group">
                           <label for="">Contenu</label>
                           <textarea  class="form-control" name="contenu"> </textarea>
                       </div>
                       <div class="form-group">
                           <label for="">Choix user send:</label>
                           <select name="user_send" class="form_control">
                               <?php
                               $users=getAllUser();
                               foreach($users as $k=>$v){
                                   echo"<option value='{$v["id"]}'>{$v["nom"]}</option>";  }
                                   ?>
                           </select>

                       </div>
                       </div>
                       <div class="form-group">
                          
                           <input  class="btn btn-primary" type="submit" value="Envoyer"> 
                       </div>
                   </form>
                </div>

            </div>


        </div>

    </div>

</div>


</body>
</html>