<?php
session_start();
?>
<?php
$message=$_POST['noticep'];
$usr=$_SESSION['id'];
$con= mysqli_connect("localhost","root","","admin");
$query= "INSERT INTO notice (notice) VALUES('$message')";
$result= mysqli_query($con, $query);
$msg = "SUCCESSFULL POSTED!!";
echo "<script type='text/javascript'>alert('$msg');window.location='notice.php';</script>";
?>