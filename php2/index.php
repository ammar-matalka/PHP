<?php
require '/xampp/htdocs/php2/data.php';

// Get all students who are NOT soft-deleted
$stmt = $pdo->query("SELECT * FROM students WHERE deleted_at IS NULL ORDER BY created_at DESC");
$students = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    <h2>Students</h2>
    <a href="create.php"><button>Add New Student</button></a>
    <table border="1">
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Age</th><th>Actions</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student['id'] ?></td>
                <td><?= $student['name'] ?></td>
                <td><?= $student['email'] ?></td>
                <td><?= $student['age'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $student['id'] ?>">Edit</a> |
                    <a href="javascript:void(0);" onclick="confirmDelete(<?= $student['id'] ?>)">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <script>
        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this student?")) {
                window.location.href = "delete.php?id=" + id;
            }
        }
    </script>
</body>
</html>
