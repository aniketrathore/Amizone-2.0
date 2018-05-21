<?php
session_start();
if(empty($_SESSION['id'])){
    header('Location: index.php');
}
include 'Navbar.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Achievment</title>
    </head>
    <body style="background-image: url(Images/9.jpg);" >
        <div class="container">
            <h3>Achievments</h3>
        <div class="jumbotron">
            <center>
                <a>Add New</a><p>Achievements...</p>
            </center>
        </div>
            <h4>Current Achievements</h4>
            <div class="jumbotron"><center>Null</center></div>
        </div>
    </body>
</html>
<?php
include 'Footer.php';
?>