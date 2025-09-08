<?php

class PokemonRepository extends Db
{
    private static function request(string $request)
    {
        $db = self::getInstance();
        $result = $db->query($request);
        self::disconnect();
        return $result;
    }

    static function getAllPoke()
    {
        $sql = "SELECT * FROM pokemon";
        return self::request($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    static function getAllPokeCaptured()
    {
        $sql = "SELECT * FROM pokemon WHERE isCaptured=1";
        return self::request($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    static function getRandomPoke()
    {
        $sql = "SELECT * FROM pokemon where isCaptured = 0 order by RAND() LIMIT 1";
    }
    static function capturePoke($id)
    {
        $sql = "UPDATE pokemon SET isCaptured = 1 where id = $id";
        return self::request($sql)->fetch();
    }



    // capturer pokemon
    //liberer pokemon 
    //recuperer un pokemon aleatoir
    //recuoperer tous les pokemon capturé
}
