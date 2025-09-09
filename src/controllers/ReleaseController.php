<?php 

class ReleaseController {
    public function index(){
        Pokemon::releasePoke($_POST['id']);
        header("Location: /");
    }
}