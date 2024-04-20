<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
</head>

<?php
    session_start();
    $user = $_SESSION['username'];
?>

<body>
    <a href="add_student.php">New Murgi Entry</a>
    <a href="add_faculty.php">New Sheyal Entry</a>
    <a href="add_course.php">New Course Entry</a>
</body>