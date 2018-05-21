<?php
session_start();
if(empty($_SESSION['id'])){
    header('Location: index.php');
}
?>
<!doctype>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Classes/bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="Classes/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="Classes/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
        
    </head>
    <body>
        <nav class="navbar" style="margin-bottom: 0px; border: none;">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="adminhome.php"><p style="font-family: Comic Sans MS; font-size: 40px;">Admin</p></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                        <li class="dropdown-toggle" data-toggle="dropdown"><a href=""><span class="glyphicon glyphicon-user"></span>
                            <?php
                            $usr=$_SESSION['id'];
                            $con= mysqli_connect("localhost","root","","admin");
                            $query= "SELECT name FROM users WHERE id='$usr'";
                            $result= mysqli_query($con, $query);
                            $row= mysqli_fetch_array($result);
                            echo $row[0];
                             ?>
                             </a></li>
                        <ul class="dropdown-menu" style="right: auto;">
                            <li><a href="">My Profile</a></li>
                            <li><a href="">Registration</a></li>
                            <li><a href="">Change Password</a></li>
                            </ul>
                        </li>
                        
                        
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div><hr style="margin:10px 0px 0px 0px;">
        </nav>
        <div class="container">
        <h3>Update And View Notice</h3>
        <div class="jumbotron">
            <ul>
                <li><a href="notice.php">Notice</a></li>
                <li><a href="event.php">Event</a></li>
                <li><a href="register.php">Register Student</a></li>
            </ul>
        </div> 
        </div>
    </body>
</html>
<?Php
include 'Footer.php';
?>