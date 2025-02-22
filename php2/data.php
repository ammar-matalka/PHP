<?php //
// اتصال بقاعدة البيانات باستخدام PDO
$host = 'localhost';
$dbname = 'school';
$username = 'root'; // غيّره إذا كان مختلفًا
$password = ''; // غيّره إذا كان مختلفًا

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("فشل الاتصال بقاعدة البيانات: " . $e->getMessage());
}
?>
