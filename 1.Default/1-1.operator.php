<?php 
   $a = 10;
   $b = 15;

   $sum = $a + $b;
   echo "10 + 15를 더한 결과: " . $sum . "<br>"; // 25

   $subtraction = $b - $a;
   echo "15 - 10은?: " . $subtraction . "<br>"; // 5

   $multiplication = $a * $b;
   echo "10 x 15는?" . "=" . $multiplication . "<br>"; // 150

   $division = $a / $b;
   echo "10 / 15는" . "=" . $division . "<br>";  //0.66666666666667

   $modulus = $a % $b;
   echo "10 % 15의 나머지는?" . "=" . $modulus . "<br>"; // 10

   
   $ten = 10; 
   $nin = 9;
   $six = 6;
   $eleven = 7;
   $twenty = 20;
   $five = 5;

   $total = $ten + ($nin + $six) / $five;

   echo "10 + (9 + 6) / 5는?" . "=" . $total .  "<br>" ; // 13

   // 대입 연산
   $three = 3;
   $three += 2;
   echo "3을 2에 += 대입한 결과:" .$three . "<br>"; // 5

   // 비교 연산자
   $e = 5;
   $f = 3;

   $equalTo = ($e == $f);
   echo "비교: " . var_export($equalTo, true) . "<br>"; // false 

   $notEqual = ($e != $f);
   echo "같지 않음: " . var_export($notEqual, true) . "<br>"; // true 

   $greatEqual = ($e > $f);
   echo "e가 f보다 크다:" . var_export($greatEqual, true) . "<br>"; // true 

   $lessThan = ($e < $f);
   echo "f가 e보다 크다:" . var_export($lessThan, true) . "<br>"; // false

   // 논리 연산자 
   $g = true;
   $h = false;

   $andResult = ($g && $h);
   echo "논리 AND: true 인가 false인가:" . var_export($andResult, true) . "<br>";

   $orResult = ($g || $h);
   echo "논리 OR:true 또는 false:" . var_export($orResult, true) . "<br>";  

   $notResult = !$g;
   echo "논리 NOT 아니다!: " .var_export($notResult, true) . "<br>";


   // 문자열 연산자
   $name = "James";
   $greeting = "Hello, " . $name . "!";
   echo $greeting . "<br>"; // Hello,  James!

   // 증감 연산자
   $i = 10;
   $i++;

   echo "증가: " . $i . "<br>"; // 11

   // 감소
   $i--;
   echo "감소: " . $i . "<br>";  // 10

   // 조건부 연산자
   $score = 90;
   $result = ($score >= 80) ? "합격" : "불합격";
   echo "시험 결과: " . $result . "<br>";

?>