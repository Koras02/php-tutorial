<?php

// 문자열 연결
//    $fruits = array("사과", "바나나", "키위");
//    $fruitString = implode(" , ", $fruits);

//    print_r($fruitString); // "사과", "바나나", "키위"

// 문자열을 배열로 변환
$fruitString = "사과, 바나나, 오렌지";
$fruits = explode(", ", $fruitString); // 배열 생성

print_r($fruits);
?>