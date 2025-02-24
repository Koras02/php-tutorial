<?php 
  // 파일 이름
  $file = 'example.txt';

  // 파일에 데이터 쓰기 
  $data = "Hello PHP!";
  if(file_put_contents($file,$data) !== false) {
    echo "데이터가 파일에 성공적으로 저장되었습니다.<br>";
  } else {
    echo "파일 저장에 실패했습니다.<br>";
  }

  // 파일에 데이터 읽기
  $content = file_get_contents($file);
  if ($content !== false) {
    echo "파일 내용:<br><pre>" . htmlspecialchars($content) . "</pre>";
  } else {
    echo "파일 읽기에 실패했습니다.";
  }
?>