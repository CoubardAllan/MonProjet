<?php

namespace App\requete;

class connexion{
    private static $connexion;
    private function __construct()
    {

    }
    public static function getConnexion(){
            try{
                self::$connexion = new \PDO('mysql:host=localhost;dbname=blog','root','');
            }catch (\PDOException $e){
                echo '<br>'.$e->getMessage();
            }
            return self::$connexion;
    }
}