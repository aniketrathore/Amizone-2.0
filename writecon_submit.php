<?php
session_start();
?>
<?php
$message=$_POST['suggestion'];
$usr=$_SESSION['id'];
$con= mysqli_connect("localhost","root","","amizone");
$query= "INSERT INTO chancellor (user,message) VALUES('$usr','$message')";
$result= mysqli_query($con, $query);
$msg = "SUCCESSFULL POSTED!!";
echo "<script type='text/javascript'>alert('$msg');window.location='Suggestion.php';</script>";
?>