<?php 
  // 모든 오류 보고 설정
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  try {
    // 예외가 발생할 수 있는 코드
    $result = 10 / 0; // 제로라 나누기
  } catch (DivisionByZeroError  $e) {
    // 예외 처리
    echo "예외 발생: " . $e->getMessage();
  }
?>