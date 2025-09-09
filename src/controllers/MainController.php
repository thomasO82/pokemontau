<?php 


class MainController {
    public function index(){
        $pokeRandom = Pokemon::getRandomPoke();
        $pokes = Pokemon::getAllCaturedPoke();

        require_once '../views/home.php';


    } 
}