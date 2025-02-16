<?php 
    function greet($name = "Guest") {
        return "Hello. " . $name;
    }
   
    echo greet() . "<br>"; // Hello, Guest 
    echo greet("Road"); 
?>