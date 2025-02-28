<?php
   try {
    $pdo = new PDO('mysql:host=localhost;dbname=php', 'pace', '1234');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $result = $stmt->fetchAll();
   } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
   } 
?>