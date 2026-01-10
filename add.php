<?php
include 'db.php';

if (isset($_POST['add_recipe'])) {
    $title = $_POST['title'];
    $chef = $_POST['chef'];
    $category = $_POST['category'];
    $time = $_POST['time'];
    $calories = $_POST['calories'];
    $image_url = $_POST['image_url'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO recipes (title, chef, category, cook_time, calories, image_url, description) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $title, $chef, $category, $time, $calories, $image_url, $description);

    if ($stmt->execute()) {
        echo "<script>alert('Recipe added successfully!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Failed to add recipe.'); window.location='index.php';</script>";
    }
} else {
    header("Location: index.php");
}
?>
