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
        <input type="text" name="code" placeholder="Course Code">
        <input type="text" name="name" placeholder="Course Name">
        <input type="number" name="credit" placeholder="Credit Hour">
        <input type="submit" value="Submit Entry" class="submit">
    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    // Sanitize input values (to prevent SQL injection)
    $conn = new mysqli("localhost", "root", "", "smsdb");
    $code = mysqli_real_escape_string($conn, $_POST['code']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $cr = mysqli_real_escape_string($conn, $_POST['credit']);

    $query = "INSERT INTO courses(ccode, cname, credit) VALUES ('{$code}', '{$name}', '{$cr}')";

    $conn->query($query);
    $id = mysqli_insert_id($conn);
    
    $conn->close();
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