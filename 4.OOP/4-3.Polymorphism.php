<?
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
  
  $myCar = new Car("Red", "Benz");
 
    function printCarInfo(Car $car) {
        echo $car->displayInfo();
    }
    printCarInfo($myCar);
?>