<?php
  require 'animal.class.php';
  class cat extends animal {
    protected $breed;
    function breed($catBreed) {
      $this->breed = $catBreed;
    }
  }
