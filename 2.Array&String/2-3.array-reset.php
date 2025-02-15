<?php 
    $fruits = array("사과", "바나나", "딸기");
    $code = ["<a> 태그", "<li> 태그", "<div> 태그"];

    // push
    // array_push($fruits, "망고"); // ["사과", "바나나", "딸기", "망고"]

    // pop 
    // $lastFruit = array_pop($fruits);  // ["사과", "바나나"]

    // unshift
    // array_unshift($fruits, "수박"); // ["수박", "사과", "바나나", "딸기"]

    // shift
    array_shift($fruits); // "사과"
    // ["바나나", "딸기"]

    // 배열 검색 수정
    // in_array()


    echo '<pre>';
    print_r($fruits);  
    echo '</pre>';

    // 배열 추가 array_push()

?>