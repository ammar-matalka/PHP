<?php
require '/xampp/htdocs/php2/data.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM students WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $student = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $student['id'] ?>">
        
        <label>Name:</label>
        <input type="text" name="name" value="<?= $student['name'] ?>" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?= $student['email'] ?>" required><br><br>

        <label>Age:</label>
        <input type="number" name="age" value="<?= $student['age'] ?>" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
