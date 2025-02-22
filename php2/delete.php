<?php
require '/xampp/htdocs/php2/data.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perform soft delete by updating the `deleted_at` column
    $stmt = $pdo->prepare("UPDATE students SET deleted_at = NOW() WHERE id = :id");
    $stmt->execute(['id' => $id]);

    echo "Student soft-deleted successfully!";
}
?>
