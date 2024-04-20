<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link href = "style.css" type = "text/css" rel = "stylesheet"> -->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>About us</title>
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
    <div class = "abttxt">
        <p>Institute X started its journey on February 22, 2024.</p>
        <p>It is a very good institution</p>
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
}.abttxt{
    margin: 50px;
    font-size: 15px;
    font-family: times new roman;
}

</style>