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
        <title>Placement</title>
    </head>
    <body style="background-image: url(Images/9.jpg)">
        <div class="container">
            <h3>Placement Portal</h3>
            <div class="jumbotron">
                <center>Student Must Be In Final Year For Placement.....</center>
            </div>
        </div>
    </body>
</html>
<?php
include 'Footer.php';
?>