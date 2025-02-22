<?php
   class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
       $this->color = $color;
       $this->model = $model;
    }

    public function displayInfo() {
       return "차량의 모델: $this->model, 색상: $this->color";
    }
    

  }
  class ElectricCar extends Car {
       public $batteryCapacity;
       
       public function __construct($color, $model, $batteryCapacity) {
        parent:: __construct($color, $model);
        $this->batteryCapacity = $batteryCapacity;
       }

       public function displayInfo() {
        return parent::displayInfo() . ", 배터리의 용량: $this->batteryCapacity k\h";
       }
    }
    $myElectricCar  = new ElectricCar("blue", "Tesla", 200);
    echo $myElectricCar ->displayInfo();
?>