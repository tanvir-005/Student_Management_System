<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
</head>

<?php
    session_start();
    $user = $_SESSION['username'];
    $conn = new mysqli("localhost", "root", "", "smsdb");
    $info = $conn->query("SELECT * FROM `student` WHERE id = '$user'");
    $var = $info->fetch_assoc();
    $arr = array();

    foreach ($var as $key => $value) {
        $arr[$key] = $value;
    }
    // echo($arr['address']);
    
?>

<body>
    <h1>Welcome <?php echo($user); ?>!</h1>
</body>