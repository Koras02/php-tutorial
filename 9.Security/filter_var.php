
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Email</title>
</head>
<body>
    <form method="post" action="">
        <label for="email">이메일 주소:</label>
        <label for="username">닉네임:</label>
        <input type="text" name="email" id="email" required>
        <button type="submit">제출</button>
    </form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // 사용자 입력 검증
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo "유효하지 않는 이메일 주소입니다.";
  } else {
    echo "유효한 이메일 주소 입니다:" . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
  }
}
?>
</body>
</html>