<?php

class CaptureController{
    public function index(){
      try {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
            if (isset($_POST['id_poke'])) {
               
                Pokemon::capturePokemon($_POST['id_poke']);
            }
        }
      } catch (PDOException $er) {
        echo($er->getMessage());
      }  
      header('Location: /') ;   
    }
}