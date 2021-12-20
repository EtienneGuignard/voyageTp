<?php
class Dbh{
    protected $pdo;
    protected $host='localhost';
    protected $dbname='voyage';
    protected $charset='utf8';
    protected $idUsername='root';
    protected $dbPassword='';

    protected function __construct()
    {
        
            try{
            $this->pdo= new PDO ("mysql:host=$host;dbname=$dbname;charset=$charset;", $idUsername, $dbPassword,
                [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
                return $this->pdo;
            }catch (Exception $e){
                echo 'ERREUR: '. $e->getMessage();
            }


    }
}