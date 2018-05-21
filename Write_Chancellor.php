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
        <title>To Chancellor</title>
    </head>
    <body style="background-image: url(Images/9.jpg)">
        <div class="container">
            <h3>To Chancellor</h3>
        <div class="jumbotron">
            <p>Message:</p>
            <form method="post" action="writecon_submit.php">
                <textarea cols="80" rows="5" name="suggestion"></textarea><br><br>
                <input type="submit" value="Submit" class="btn btn-primary">
            </form>
        </div>
        </div>    
    </body>
</html>
<?php
include 'Footer.php';
?>