<?php
try{
    $access = new PDO("mysql:host=localhost;dbname=vols;charset=utf8","ahma","ahmadaknt12.");
    $access -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}catch(Exception $e){
    $e->getMessage();
}
?>