<?php 

  // 파일 이름
  $file = 'example.txt';

  // 파일 쓰기
  $handle = fopen($file, 'w'); // 쓰기 모드로 열기
    
  if ($handle) {
    $data = "안녕하세요, PHP의 파일 입출력입니다!";
    fwrite($handle, $data); // 데이터 쓰기
    fclose($handle); // 파일 닫기
    echo "데이터가 파일에 성공적으로 저장되었습니다.<br>";
  } else {
    echo "파일 열에 실패. <br>";
  }

  // 파일 읽기
  $handle = fopen($file, "r"); // 읽기 모드로 파일 열기
  if ($handle) {
    $content = fread($handle, filesize($file)); // 파일 내용 읽기
    fclose($handle); // 파일 닫기
    echo "파일 내용:<br><pre>", htmlspecialchars($content) . "</pre>";
  } else {
    echo "파일 읽기 실패";
  }
?>