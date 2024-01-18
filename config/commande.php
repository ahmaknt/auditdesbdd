<?php
require('connexion.php');
function afficher(){
    if(require("connexion.php")){
        $req = $access->prepare("select *from pilote");
        $req -> execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }
}