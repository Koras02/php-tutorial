<?php
    // 정수 Integer
   $age = 20;
   echo "나이: " . $age . "<br>";
   
    // 실수(Float)
   $pi = 3.14;
   echo "원주율: " . $pi . "<br>"; 

   // 문자열 (String) 변수 선언
   $name = "Kim";
   echo "Name is " . $name . "<br>";

   // 불리언 (Boolean) 변수 선언
   $isDog = false;
   echo "Molly: " . ($isDog ? "Yes" : "Noop") . "<br>";


   // 배열(Array) 변수 선언과 할당
   $fruits = array("Apple", "Tomato", "Orange");
   echo "과일: " . $fruits[0] . ", " . $fruits[1] . "," . $fruits[2] . "<br>";

   // NuLL 값 선언
   $nullVariable = null;
   echo "NULL 변수: " . var_export($nullVariable, true) . "<br>";
?>