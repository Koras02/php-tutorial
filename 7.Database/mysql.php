<?php 
// 데이터베이스 연결 정보 설정
$host = "localhost"; // 데이터베이스 호스트
$db  = 'php'; // 데이터베이스 이름
$user = 'pace'; // 사용자 이름
$pass = '1234'; // 비밀번호
$charset = 'utf8mb4'; // 문자 집합

// DSM(Data Source Name) 생성
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    // PD0 객체 생성
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "데이터베이스에 성공적으로 연결되었습니다.<br>";

    // 테이블 생성
    $sqlCreate = "CREATE TABLE IF NOT EXISTS person_table (
      id INT AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(255) NOT NULL,
      age INT NOT NULL
    )";

    $pdo->exec($sqlCreate);
    echo "테이블이 생성되었습니다. <br>";

    // 데이터 삽입
    $sql = "INSERT INTO person_table (name, age) VALUES (:name, :age)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => 'koras02', 'age' => 27]);
    echo "데이터가 성공적으로 삽입되었습니다.<br>";

    // 데이터 조회
    $sql = "SELECT * FROM person_table";
    $stmt = $pdo->query($sql);
    while ($row = $stmt->fetch()) {
        echo "ID: " . $row['id'] . " - Name: " . $row['name'] . "<br>";
    }

} catch(\PDOException $e) {
    echo "데이터베이스 연결 실패: " . $e->getMessage();
}
?>