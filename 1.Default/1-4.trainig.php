<?php 
   $students = [
    "철수" => 95, 
    "영희" => 75,
    "재원" => 60
   ];


foreach ($students as $name => $score) {
      $grade = ""; 

      if ($score >= 100) {
        $grade = "A+ 합격";
      } elseif ($score >= 90) {
        $grade = "A 합격";
      } elseif ($score >= 80) {
        $grade = "B 합격";
      } elseif ($score >= 70) {
        $grade = "C 과락";
      } elseif ($score >= 60) {
        $grade = "D 재시험!";
      } else {
        $grade = "F 정학!";
      }

      echo "$name 의 점 수는 $score 점으로 결과는 $grade.  <br> \n";
    } 
?>