<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About us</title>
</head>
<body>
    <header>
        <div class="banner"><img src="images/ix_banner.jpg" alt="Banner Missing :(" class="bannerimg"></div>
        <div class="statusbar">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="gallery.php">Gallery</a>
            <a href="founder.php">Founder</a>
            <a href="vc.php">Vice Chancellor</a>
            <a href="highlights.php">Highlights</a>
        </div>
    </header>
    <div class="images">
        <div class="image-container">
            <img src="images/g1.jpg" alt="Image 1">
            <div class="caption">Caption for Image 1</div>
        </div>
        <div class="image-container">
            <img src="images/g2.jpg" alt="Image 2">
            <div class="caption">Caption for Image 2</div>
        </div>
        <div class="image-container">
            <img src="images/g3.jpg" alt="Image 3">
            <div class="caption">Caption for Image 3</div>
        </div>
        <div class="image-container">
            <img src="images/g4.jpg" alt="Image 4">
            <div class="caption">Caption for Image 4</div>
        </div>
    </div>
</body>
</html>


<style type="text/css">

body {
    margin: 0;
    font-family: "Roboto", sans-serif;
}header {
    display: flex;
    flex-direction: column;
    background-color: rgb(234, 234, 234);
}.statusbar {
    display: flex;
    justify-content: space-between;
    margin-left: 5px;
    margin-right: 5px;
}.statusbar a {
    background-color: #2a69a9;
    width: 16%;
    height: 30px;
    border-style: none;
    text-decoration: none;
    color: white;
    text-align: center;
    font-size: 14px;
    line-height: 30px;
    margin-bottom: 5px;
    border-radius: 3px;
}.banner {
    text-align: center;
}.bannerimg {
    width: 100%;
}.images {
    display: flex;
    flex-wrap: wrap;
}.image-container {
    width: 48%;
    position: relative;
    margin: 1%;
}.image-container img {
    width: 100%;
    height: 100%;
}.caption {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 30px;
    background-color: rgb(234, 234, 234);
    color: #2a69a9;
    font-size: 12px;
    line-height: 30px;
    text-align: center;
    font-weight: bold;
}

</style>