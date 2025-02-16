<?php 
   
   class Car {
      public $color;
      public $model;

      // 생성자 
      public function __construct($color, $model) {
        $this->color=$color;
        $this->model=$model;
      }

      // 메소드
      public function getDetails() {
        return "모델명: ". $this->model . ", 색상: " . $this->color;
      }
   }

   // 객체 생성
   $myCar = new Car("Red", "머스탱");
   echo $myCar->getDetails(); // 모델명: 머스탱, 색상: Red
?>