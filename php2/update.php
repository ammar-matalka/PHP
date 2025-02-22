<?php
require '/xampp/htdocs/php2/data.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = (int) $_POST['age'];

    if (!empty($name) && !empty($email) && $age > 0) {
        try {
            $stmt = $pdo->prepare("UPDATE students SET name = :name, email = :email, age = :age WHERE id = :id");
            $stmt->execute(['name' => $name, 'email' => $email, 'age' => $age, 'id' => $id]);

            echo "Student updated successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "All fields are required!";
    }
}
?>
