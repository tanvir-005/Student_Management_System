<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link href = "style.css" type = "text/css" rel = "stylesheet"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Home - Institute X</title>
</head>
<body>
    <header>
        <div class = "banner"><img src = "images/ix_banner.jpg" alt = "Banner Missing :(" class = "bannerimg"></div>
        <div class = "statusbar">
            <a href = "index.php">Home</a>
            <a href = "about.php">About Us</a>
            <a href = "gallery.php">Gallery</a>
            <a href = "founder.php">Founder</a>
            <a href = "vc.php">Vice Chancellor</a>
            <a href = "highlights.php">Highlights</a>
        </div>
    </header>
    <div class = "login">
        <div class = "login_child">
            <a href = "login.php"><div>Log In</div></a>
            <p class = "login_comment">Sign in for further info</p>
        </div>
    </div>

    
</body>
</html>


<style type="text/css">

body{
    margin:0;
    font-family: Roboto;
    /*background-color:red;*/
}header{
    display: flex;
    flex-direction: column;
    background-color: rgb(234, 234, 234);
}.statusbar{
    display:flex;
    justify-content:space-between;
    margin-left: 5px;
    margin-right: 5px;
}.statusbar a{
    background-color: #2a69a9;
    width:16%;
    height:30px;
    border-style:none;
    text-decoration: none;
    color: white;
    text-align:center;
    font-size: 14px;
    line-height: 30px;
    margin-bottom: 5px;
    border-radius: 3px;
}.banner{
    text-align:center;
}.bannerimg{
    width: 100%;
}.login{
    height: 300px;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
}.login_child{
    /*align-items:center;*/
    width: 300px;
    height: 75px;
    padding: 20px 0px;
    text-align: center;
    background-color: rgb(234, 234, 234);
    border-radius: 5px;
}.login_child a {
    text-decoration: none;
}.login_child a div{
    background-color:#124980;
    color: white;
    width:250px;
    height:40px;
    margin:auto;
    align-self: center;
    text-align: center;
    font-size: 15px;
    line-height: 40px;
    border-radius: 5px;
}.login_comment{
    font-size:15px;
    text-align: center;
}

</style>