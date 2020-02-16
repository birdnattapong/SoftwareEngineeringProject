<?php
try {
$pdo = new PDO("mysql:host=localhost;dbname=20s2_g6;charset=utf8", "20S2_g6", "xNib9gFf");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo "เกิดข้อผิดพลาด : " . $e->getMessage();
}
?>