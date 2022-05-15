<div class="col-3">
            <div class="list-group">
                <a href="accueil.php" class="list-group-item list-group-item-action active">
                    <span class="fa fa-envelope"></span>
                    Messages réçus
                   
                        <?php
                        echo '<span class="badge badge-pill badge-warning">';
                        if( sizeof(getAllMessageReceive($_SESSION["id_user"]))>0){
                            echo sizeof(getAllMessageReceive($_SESSION["id_user"]));
                        }
                        echo'</span>';
                        ?>
                   
                </a>
                <a href="sendMessages.php" class="list-group-item list-group-item-action">
                    <span class="fa fa-paper-plane"></span>
                    Messages envoyés
                   
                    <?php
                    echo '<span class="badge badge-pill badge-info">';
                        if( sizeof(getAllMessageSend($_SESSION["id_user"]))>0){
                            echo sizeof(getAllMessageSend($_SESSION["id_user"]));
                        }
                        echo'</span>';
                        ?>
                   
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <span class="fa fa-th-large"></span>
                    Messages Archivés
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <span class="fa fa-trash"></span>
                    Messages Spams
                </a>
            </div>
        </div>