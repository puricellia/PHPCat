<?php
  function __autoload($class_name) {
    include 'classes/' . $class_name . '.class' . '.php';
  }

  $cat = new cat('Freddles');
  $cat->breed(1);
  $cat->getHunger();
  $cat->getHealth();

  echo "Name: " . $cat->name;
  echo "Happiness: " . $cat->getHappiness();
?>
