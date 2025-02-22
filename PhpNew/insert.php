<?php
require '/xampp/htdocs/PhpNew/data.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = (int) $_POST['age'];

    if (!empty($name) && !empty($email) && $age > 0) {
        try {
            $stmt = $pdo->prepare("INSERT INTO students (name, email, age) VALUES (:name, :email, :age)");
            $stmt->execute(['name' => $name, 'email' => $email, 'age' => $age]);
            echo "Student added successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "All fields are required!";
    }
}
?>
