<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="headtxt">Student Information</h1>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Full Name">
        <input type="text" name="phone" placeholder="Phone Number">
        <input type="email" name="email" placeholder="Email address">
        <div class="dob">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob">
        </div>
        <div class="gender">
            <label>Gender</label>
            <div class="genders">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="male" value="M">
                <label for="female">Female</label>
                <input type="radio" name="gender" id="female" value="F">
            </div>
        </div>
        <input type="text" name="address" placeholder="Full Address">
        <input type="text" name="password" placeholder="Password for Student Access">
        <input type="submit" value="Submit Entry" class="submit">
    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $gen = "Male";
    if($_POST['gender']=='F'){
        $gen = "Female";
    }

    $birthdate = $_POST['dob'];
    $today = date("Y-m-d");
    $age = date_diff(date_create($birthdate), date_create($today))->y;

    // echo($age);

    // Sanitize input values (to prevent SQL injection)
    $conn = new mysqli("localhost", "root", "", "smsdb");
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "INSERT INTO student(name, email, phone, dob, age, gender, address)
        VALUES ('{$name}', '{$email}', '{$phone}', '{$dob}', '{$age}', '{$gen}', '{$address}')";

    $conn->query($query);
    $id = mysqli_insert_id($conn);

    $newq = "INSERT INTO `login` VALUES ('{$id}', '{$password}', 2)";
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
    }.gender{
        /* background-color: blue; */
        width: 80%;
        justify-content: center;
        margin-top: 20px;
        text-align: center;
        display: flex;
        flex-direction: row;
    }.gender label{
        /* font-size: 20px;
        line-height: 30px;
        width: 120px;
        height: 30px;
        background-color: teal;
        margin: 0 0 5px 0; */

        
        font-size: 1em;
        line-height: 30px;
        margin: 0 20px 0 0;
    }.genders{
        background-color: white;
        padding: 0 15px;
        border-radius: 5px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }.genders label{
        height: 20px;
        line-height: 20px;
        margin: 0 5px;
        font-size: .9em;
        /* background-color: yellow; */
    }.genders input{
        height: 20px;
        margin: 0 5px;
        /* background-color: white; */
    }#male{
        margin-right: 20px;
    }.dob{
        /* background-color: yellow; */
        height: 30px;
        width: 80%;
        margin-top: 20px;
        display: flex;
        flex-direction: row;
        justify-content: center;
    }.dob label{
        font-size: 1em;
        line-height: 30px;
        margin: 0 10px;
    }.dob input{
        width: 150px;
        padding-right: 10px;
        margin: 0 10px;
    }.submit{
        margin-bottom: 20px;
        background-color:#2a69a9;
        color: white;
        font-weight: bold;
    }
</style>