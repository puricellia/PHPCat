<?php

  class cat {

    protected $userId = null;
    protected $catId = null;
    public $catName = null;
    protected $catBreed = null;
    protected $catHealth = null;
    protected $catHunger = null;
    protected $catStatus = null;

    function getBreed($catBreed) {
          return $this->catBreed;
    }

    function getCatName() {
      return $this->catName;
    }

    public function getHunger() {
      return $this->catHunger;
    }

    public function getHealth() {
      return $this->catHealth;
    }

    function getHappiness() {
      return ($this->catHealth + $this->catHunger) /2;
    }
  }
