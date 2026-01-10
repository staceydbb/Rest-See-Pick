<?php
include 'db.php';

if (isset($_POST['update_recipe'])) {
    $id = $_POST['edit_id'];
    $title = $_POST['edit_title'];
    $chef = $_POST['edit_chef'];
    $category = $_POST['edit_category'];
    $time = $_POST['edit_time'];
    $calories = $_POST['edit_calories'];
    $image_url = $_POST['edit_image_url'];
    $description = $_POST['edit_description'];

    $stmt = $conn->prepare("UPDATE recipes SET title=?, chef=?, category=?, cook_time=?, calories=?, image_url=?, description=? WHERE id=?");
    $stmt->bind_param("sssssssi", $title, $chef, $category, $time, $calories, $image_url, $description, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Recipe updated successfully!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Failed to update.'); window.location='index.php';</script>";
    }
} else {
    header("Location: index.php");
}
?>
