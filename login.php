<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <?php
    $conn = new mysqli("localhost", "root", "", "smsdb");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $query = "SELECT * FROM login WHERE username='$user' AND password='$pass'";
        $result = $conn->query($query);

        if ($result->num_rows>0) {
            $entry = $result -> fetch_row();
            $account_type = $entry[2];

            // echo($account_type);
            session_start();
            $_SESSION['username'] = $user;

            if($account_type==1){
                header("Location: admin_dashboard.php");
            }else if($account_type==2){
                header("Location: dashboard.php");
            }else{
                header("Location: fac_dashboard.php");
            }
            exit();
        } else {?>
            <div class="login_failed">Wrong Credentials</div><?php
        }
    }

    $conn->close();
?>


    <div class="return"><a href="index.php"><div>◀ Go Back</div></a></div>
    <div class="login_form">
        <form action="#" method="POST">
            <div class="log">
                <h1>Login</h1>
                <h2>Please Enter Login Credentials</h2>
                <input type="text" name="username" placeholder="University ID" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Log In" class="button">
            </div>
        </form>
    </div>
</body>
</html>

<style type="text/css">
        body{
            margin:0;
            font-family: roboto;
        }
        .return{
            width:100%;
        }
        .return a{
            text-decoration: none;
        }
        .return a div{
            margin:auto;
            margin-top:50px;
            text-align:center;
            color:white;
            font-size:12px;
            height:30px;
            line-height:30px;
            width:200px;
            background-color:#2a69a9;
            border-radius:5px;
            
        }
        .login_form{
            width:100%;
            background:transparent;
        }
        .log{
            display: flex;
            flex-direction: column;
            background-color:rgb(234, 234, 234);
            width:300px;
            height:300px;
            margin:auto;
            margin-top:50px;
            align-items: center;
            border-radius:5px;
        }
        .log h1{
            margin:12px;
            margin-top:35px;
            font-size:20px;
            text-align: center;
        }
        .log h2{
            margin: 10px 5px 20px 5px;
            font-size: 12px;
            text-align: center;
        }
        .log input{
            width:80%;
            height:30px;
            border-style: none;
            border-radius: 5px;
            padding-left: 10px;
            padding-right: 10px;
            color: #2a69a9;
            font-size:12px;
            margin:5px;
        }
        .log input::placeholder{
            font-size:12px;
            color:rgb(120, 120, 120);
        }
        .log .button{
            width:45%;
            height: 30px;
            margin-bottom: 20px;
            margin-top:20px;
            background-color:#2a69a9;
            border-style: none;
            border-radius: 5px;
            color:white;
            font-size:15px;
        }
        .log .button:hover{
            width:260px;
            height:70px;
            margin-top:10px;
            transition:0.25s;
            font-weight:bold;
        }
        .db_status{
            height: 20px;
            width: 20px;
            background-color: rgb(234, 234, 234);
            position: absolute;
            bottom: 50px;
            right: 50px;
            text-align: center;
            font-weight: bold;
            border-radius: 3px;
        }
        .db_on{
            color: green;
        }
        .db_off{
            color: red;
        }
        .login_failed{
            height: 20px;
            width: 200px;
            border-style: 2px solid;
            border-radius: 3px;
            position: absolute;
            right: 100px;
            bottom: 50px;
        }
    </style>