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
   $myCar = new Car("빨간색", "소나타");
   echo $myCar->displayInfo(); // 출력: 차량 모델: 소나타, 색상: 빨간색

?>