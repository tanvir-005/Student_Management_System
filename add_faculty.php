<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="headtxt">Faculty Information</h1>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Full Name">
        <input type="text" name="phone" placeholder="Phone Number">
        <input type="email" name="email" placeholder="Email address">
        <input type="text" name="room" placeholder="Room no">
        <input type="text" name="designation" placeholder="Designation">
        <input type="text" name="password" placeholder="Password for Faculty Access">
        <input type="submit" value="Submit Entry" class="submit">
    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    // Sanitize input values (to prevent SQL injection)
    $conn = new mysqli("localhost", "root", "", "smsdb");
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $room = mysqli_real_escape_string($conn, $_POST['room']);
    $designation = mysqli_real_escape_string($conn, $_POST['designation']);
    
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "INSERT INTO faculty(name, email, phone, room, designation)
        VALUES ('{$name}', '{$email}', '{$phone}', '{$room}', '{$designation}')";

    $conn->query($query);
    $id = mysqli_insert_id($conn);

    $newq = "INSERT INTO `login` VALUES ('{$id}', '{$password}', 3)";
    $conn->query($newq);
    
    $conn->close();

    // $rslt = $conn->query("select count(id) from student");
    // echo($rslt);
}

?>


</body>
</html>

<style>
    *{
        font-family: helvetica;
    }body{
        margin: 0;
    }h1{
        text-align: center;
        background-color:#2a69a9;
        color: white;
        padding: 20px 0;
        margin: 0;
        font-size: 1.5em;
    }form{
        margin: auto;
        background-color:rgb(234, 234, 234);
        display: flex;
        flex-direction: column;
        width: 400px;
        height: auto;
        border-radius: 5px;
        align-items: center;
        margin-top: 20px;
        /* justify-content: center; */
    }form input{
        width: 80%;
        border-style: none;
        margin-top: 20px;
        height: 30px;
        border-radius: 5px;
        text-align: center;
        font-size: .95em;
    }.submit{
        margin-bottom: 20px;
        background-color:#2a69a9;
        color: white;
        font-weight: bold;
    }
</style>