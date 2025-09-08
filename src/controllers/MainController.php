<?php 

class MainController {
    public function index(){
    

        $pokes = Pokemon::getAllPokeCaptured();
        $pokeRandom = Pokemon::getRandomPoke();
        
        include_once '../views/home.php';

    }
}