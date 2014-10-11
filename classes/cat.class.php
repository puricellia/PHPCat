<?php
  class cat {

    public $name;
    protected $breed;
    protected $health;
    protected $hunger;

    function __construct($animalName) {
      $this->name = $animalName;
    }

    function breed($catBreed) {
      $this->breed = $catBreed;
    }

    public function getHunger() {
      return $this->hunger = 100;
    }

    public function getHealth() {
      return $this->health = 100;
    }

    function getHappiness() {
      return ($this->health + $this->hunger) /2;
    }
  }
