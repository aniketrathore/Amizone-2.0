<?php
session_start();
if(empty($_SESSION['id'])){
    header('Location: admin.php');
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
        <h3>Notice</h3>
        <div class="jumbotron">
            <h4>Current Notice Published</h4>
                 <?php
                $con= mysqli_connect("localhost","root","","admin");
                $query= "SELECT * FROM notice";
                $result= mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result))
                {?>
                        <li class="list-group-item"><?php echo $row['notice'];?><span class="badge">New</span></li>
                <?php }?>
            
        </div> 
        <div class="jumbotron">
            <h4>Publish New Notice</h4>
            <form method="post" action="publishnotice.php">
                <input type="text" name="noticep" placeholder="200 Words">
                <input type="submit" value="Publish">
            </form>
        </div>
        </div>
    </body>
</html>
<?Php
include 'Footer.php';
?>