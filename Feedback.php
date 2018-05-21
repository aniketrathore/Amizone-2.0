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
        <title>Feedback</title>
    </head>
    <body style="background-image: url(Images/9.jpg)">
        <div class="container">
            <h3>Feedback</h3>
        <div class="jumbotron">
            <p>Message:</p>
            <form method="post" action="suggestion_submit.php">
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