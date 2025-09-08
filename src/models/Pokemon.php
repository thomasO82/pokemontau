<?php 

class Pokemon extends PokemonRepository {
    private int $id;
    private string $name;
    private bool $isCaptured;

    public function __construct(string $_name, bool $_isCaptured, ?int $_id = null) {
        $this->id = $_id;
        $this->name = $_name;
        $this->isCaptured = $_isCaptured;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getIsCaptured()
    {
        return $this->isCaptured;
    }

    public function setIsCaptured($isCaptured)
    {
        $this->isCaptured = $isCaptured;

        return $this;
    }
}