<?php
  // 쿠키 설정
  setcookie("username", "JohnDose", time() + (86400 * 30), path:"/");

  if(isset($_COOKIE["username"])) {
    echo "Hello, " . $_COOKIE["username"];
  }  else {
    echo "Not Setting Cookie!";
  }
  // 쿠키 삭제
  setcookie("username", "", time() - 3600, "/"); // 쿠키 삭제
?>