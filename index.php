<?php
  function __autoload($class_name) {
    include 'classes/' . $class_name . '.class' . '.php';
  }

  $cat = new cat('Freddles');
  $cat->breed(1);
  echo "Name: " . $cat->name;
  $cat->getHunger();
  $cat->getHealth();
  echo "Happiness: " . $cat->getHappiness();
?>
