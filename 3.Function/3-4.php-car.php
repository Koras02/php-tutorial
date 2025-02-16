<?php

  class Vehicle {
     public function start() {
        return "Booster on!";
     } 
  }

  class Car extends Vehicle {
    public function drift() {
        return "Drift!";
    }
  }

  $myCar = new Car();
  echo $myCar->start(); // Booster On
  echo $myCar->drift(); // Drift!
?>
