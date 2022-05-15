<?php
function getConnexion(){
    return mysqli_connect("localhost","root","","basemessagerie");
}
function getAllMessageReceive($idUser){
    $cnx=getConnexion();
    $req=mysqli_query($cnx,"select * from message where user_rec_id={$idUser} and del_rec=0");
    $tab=[];
    while($d=mysqli_fetch_array($req)){
        $tab[]=$d;
    }
    return $tab;
}
function getAllMessageReceiveNotRead($idUser){
    $cnx=getConnexion();
    $req=mysqli_query($cnx,"select * from message where user_rec_id={$idUser} and read_message=0 and del_rec=0");
    $tab=[];
    while($d=mysqli_fetch_array($req)){
        $tab[]=$d;
    }
    return $tab;
}
function getAllMessageSend($idUser){
    $cnx=getConnexion();
    $req=mysqli_query($cnx,"select * from message where user_send_id={$idUser}");
    $tab=[];
    while($d=mysqli_fetch_array($req)){
        $tab[]=$d;
    }
    return $tab;
}
function getAllUser(){
    $cnx=getConnexion();
    $req=mysqli_query($cnx,"select * from user ");
    $tab=[];
    while($d=mysqli_fetch_array($req)){
        $tab[]=$d;
    }
    return $tab;
}
function getMessageById($id){
    $cnx=getConnexion();
    $req=mysqli_query($cnx,"select * from message where id={$id}");
    $d=mysqli_fetch_array($req);
    return $d;

}
function sendMessage($sujet,$contenu,$user_send,$user_rec){
    $cnx=getConnexion();
    $da=date("d-m-Y H:i:s");
    $req=mysqli_query($cnx,"insert into message values(null,'{$sujet}','{$contenu}',{$user_send},{$user_rec},0,0,0,'{$da}')");

}
function deleteMessageSend($id){
    $cnx=getConnexion();
    $req=mysqli_query($cnx,"update  message SET del_send=1 where id={$id}");
}
function deleteMessageReceive($id){
    $cnx=getConnexion();
    $req=mysqli_query($cnx,"update  message SET del_rec=1 where id={$id}");
}

function getNameById($idUser){
    $cnx=getConnexion();
    $req=mysqli_query($cnx,"select * from user where id={$idUser}");
    $d=mysqli_fetch_array($req);
    return $d["nom"];

}

function getEmailById($idUser){
    $cnx=getConnexion();
    $req=mysqli_query($cnx,"select * from user where id={$idUser}");
    $d=mysqli_fetch_array($req);
    return $d["email"];

}
function readMessage($id){
    $cnx=getConnexion();
    $req=mysqli_query($cnx,"update  message SET read_message=1 where id={$id}");
}
?>