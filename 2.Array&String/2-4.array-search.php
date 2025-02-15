<?php
    $fruits = array("사과", "딸기", "포도", "복숭아", "수박");

    // in_array()
    // if (in_array("딸기", $fruits)) {
    //     echo "딸기가 있습니다";
    // }

    // array_search()
    // $key = array_search("포도", $fruits); // key는 2

    // echo $key;

    // array_keys()
    $keys = array_keys($fruits);

    print_r($keys);

    // array_values()
    $values = array_values($fruits);

    print_r($values);

?>