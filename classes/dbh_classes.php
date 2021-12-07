<?php
class Dbh{

    protected function connect()
    {
        $host='localhost';
        $dbname='voyage';
        $charset='utf8';
        $idUsername='root';
        $dbPassword='';
            try{
                $bdd= new PDO ("mysql:host=$host;dbname=$dbname;charset=$charset;", $idUsername, $dbPassword,
                [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
                return $bdd;
            }catch (Exception $e){
                echo 'ERREUR: '. $e->getMessage();
            }


    }
}