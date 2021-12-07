<?php
$host='localhost';
$dbname='voyage';
$charset='utf8';
$idUsername='root';
$dbPassword='';
try{
    $bdd= new PDO ("mysql:host=$host;dbname=$dbname;charset=$charset;", $idUsername, $dbPassword,
    [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
}catch (Exception $e){
    echo 'ERREUR: '. $e->getMessage();
}

