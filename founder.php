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
    <div class = "founder">
        <h1>Person X</h1>
        <h2>Founder, Institute X</h2>
        <img src="images/founder.jpg" alt="Founder lost!">
        <h2>Founder's Message</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
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
}.founder{
    width: 60%;
    height: auto;
    padding: 20px;
    background-color: rgb(234,234,234);
    margin: auto;
    margin-top: 50px;
    margin-bottom: 50px;
    text-align: center;
    border-radius: 5px;
}.founder h1{
    font-size: 20px;
}.founder h2{
    font-size: 15px;
}.founder p{
    font-size: 12px;
    margin: 10px 30px;
    text-align: justify;
}.founder img{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 2px solid #2a69a9;
}

</style>