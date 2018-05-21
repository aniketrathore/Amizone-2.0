<?php
if(isset($_POST['id']) && !empty($_POST['id']) AND isset($_POST['password']) && !empty($_POST['password'])){
$id=$_POST['id'];
$password=$_POST['password'];
$con= mysqli_connect("localhost","root","","amizone");
$query= "SELECT * FROM users";
$result= mysqli_query($con, $query);
$row= mysqli_fetch_array($result);
if($row['id']==$id && $row['password']==$password){
    session_start();
    $_SESSION['id']=$id;
    header('Location: Home.php');
}
 else {
    $msg = "Invalid ID or Password!!!";
    echo "<script type='text/javascript'>alert('$msg');window.location='index.php';</script>";  
}
}
else
{
    
    $msg = "Enter Username And Password!!!";
    echo "<script type='text/javascript'>alert('$msg');window.location='index.php';</script>";
    
    
}

?>