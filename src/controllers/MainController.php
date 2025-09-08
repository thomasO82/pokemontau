<?php 

class MainController {
    public function index(){
    

        $pokes = Pokemon::getAllPokeCaptured();
        $pokeRandom = Pokemon::getRandomPoke();

        var_dump($pokes);
        var_dump($pokeRandom);
        
        include_once '../views/home.php';

    }
}