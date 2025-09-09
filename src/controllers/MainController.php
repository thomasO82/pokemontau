<?php 

class MainController {
    public function index(){
    
        $pokeCaptured = [];
        $pokes = Pokemon::getAllPokeCaptured();
        if ($pokes != null) {
            foreach($pokes as $poke){
            $pokTemp = new Pokemon($poke['name'], $poke["isCaptured"], $poke['id']);
            array_push($pokeCaptured, $pokTemp);
            }
        }

        $pokeRandom = Pokemon::getRandomPoke();
        $pokeAleat = new Pokemon($pokeRandom['name'], $pokeRandom["isCaptured"], $pokeRandom['id']);
        
        
        include_once '../views/home.php';

    }
}