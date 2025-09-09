<?php
class Db {
    private static $instance;

    protected static function getInstance(){
        try {
            self::$instance = new PDO("mysql:host=localhost;dbname=pokedigamma","root","root"); // chaine de connexion a la bdd
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // je set la facon dont PDO gerera les erreurs
            
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
        return self::$instance;   
    }

    protected static function disconnect(){
        self::$instance = null;
    }
}