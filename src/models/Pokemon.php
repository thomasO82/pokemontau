<?php 

class Pokemon extends PokemonRepository {
    private string $name;
    private bool $isCaptured;
    private int $id;

    public function __construct($name, $isCaptured, $id = null) {
        $this->setName($name);
        $this->setIsCaptured($isCaptured);
        $this->setId($id);
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getIsCaptured(){
        return $this->isCaptured;
    }

    public function setIsCaptured($isCaptured){
        $this->isCaptured = $isCaptured;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
    
}