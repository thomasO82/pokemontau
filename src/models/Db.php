<?php

class Db{
    
private static $instace;

protected static function getInstance(){
    try {
        self::$instace = new PDO("mysql:host=localhost;dbname=pokedigamma", "root", "root");
        self::$instace->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $err) {
      echo $err->getMessage();
    }
    return self::$instace;
}

protected static function disconnect(){
    self::$instace = null;
}


    
}