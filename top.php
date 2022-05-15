
  
  <div class="row" style="margin-top:10px;">
        <div class="col-12">
            <div class="card bg-primary text-white">
                <div class="card-header">
                    <h1>Boite de Messagerie @ESSAT</h1><br/>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top:10px;">
        <div class="col">
            <div class="alert alert-info">
                <h5>Bienvenue Mr/Mlle <?=$_SESSION["user"] ?> 
                <a href="dec.php">(se déconnecter)</a>
                </h5>
                <a href="sendMessage.php" class="btn btn-success">Envoyez un message</a>
            </div>
        </div>
    </div>
