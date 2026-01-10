<?php
include 'db.php';

if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $stmt = $conn->prepare("DELETE FROM recipes WHERE id=?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Recipe deleted successfully!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Failed to delete.'); window.location='index.php';</script>";
    }
} else {
    header("Location: index.php");
}
?>
