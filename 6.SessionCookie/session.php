<?php
  session_start(); // 세션 시작
  // 세션 변수 설정
  $_SESSION["username"] = 'Koras02';

  if (isset($_SESSION["username"])) {
    echo "Hello, " , $_SESSION["username"]; 
  } else {
    echo "no Session Setting!";
  }

  // 세션 삭제
  session_unset(); // 모든 세션 변수 삭제
  session_destroy(); // 세션 종료
?>