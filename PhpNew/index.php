<?php require '/xampp/htdocs/PhpNew/data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Student</title>
</head>
<body>
    <h2>Enter Student Information</h2>
    <form action="insert.php" method="POST">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Age:</label>
        <input type="number" name="age" required><br><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>
