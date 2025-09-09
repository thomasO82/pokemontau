<?php

class PokemonRepository extends Db
{
    private static function request($request)
    {
        $db = self::getInstance();
        $result = $db->query($request);
        self::disconnect();
        return $result;
    }
    static function getRandomPoke(){
        return self::request("SELECT * FROM pokemon WHERE isCaptured = 0 ORDER BY RAND() limit 1")->fetch(PDO::FETCH_ASSOC);
    }

    static function capturePokemon($id){
        return self::request("UPDATE pokemon SET isCaptured = 1 WHERE id = $id");
    } 

    static function getAllCaturedPoke(){
        return self::request("SELECT * FROM pokemon WHERE isCaptured = 1")->fetchAll(PDO::FETCH_ASSOC);
    }

    static function releasePokemon($id){
        return self::request("UPDATE pokemon SET isCaptured = 0 WHERE id = $id");
    } 

}
