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
        <title>Digital Library</title>
    </head>
    <body style="background-image: url(Images/9.jpg)">
        <div class="container">
            <h3>Digital Library</h3>
        <div class="jumbotron">
            <center>
                <p>To Access Digital Library <a href="http://amizone.net/amizone/WebForms/DigitalLibrary/digitalLibrary.aspx" target="_blank">Click Here</a>...</p>
            </center>
        </div>
        </div>
    </body>
</html>
<?php
include 'Footer.php';
?>