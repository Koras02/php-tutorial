<?php
 
  try {
    // 예외가 발생할 수 있는 코드
    $result = 10 / 0; // 제로로 나누기 
  } catch (Exception $e) {
    // 예외 처리
    echo "예외 발생: " . $e->getMessage();

  }
?>