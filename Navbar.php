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
                    <a class="navbar-brand" href="Home.php"><p style="font-family: Comic Sans MS; font-size: 40px;">Amizone</p></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                        <li class="dropdown-toggle" data-toggle="dropdown"><a href=""><span class="glyphicon glyphicon-user"></span>
                            <?php
                            $usr=$_SESSION['id'];
                            $con= mysqli_connect("localhost","root","","amizone");
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
        <div class="navbar" id="homebar" style="margin-bottom: 0px;">
            <div class="container" style="padding:0px 0px 0px 0px; margin: 0px 30px 0px 80px;">
                <ul class="nav navbar-nav " style= li a{border: 1px solid;}>
                    
                    <li><a href="Home.php"> Home</a></li>
                    <li><a href="My_Course.php">My Course</a></li>
                    <li><a href="Time_Table.php">Time Table</a></li>
                    <li><a href="Faculty.php">Faculty</a></li>
                    <li><a href="Calender.php">Calender</a></li>
                    <li><a href="Examination.php">Examination</a></li>
                    <li><a href="Placement.php">Placement</a></li>
                    <li><a href="Digital_Library.php">Digital Library</a></li>
                    <li><a href="Fees.php">Fees</a></li>
                    <li><a href="Achievment.php">Achievement</a></li>
                    <li><a href="Suggestion.php">Suggestion</a></li>
                    <li><a href="Write_Chancellor.php">Write To Chancellor</a></li>
                        
                </ul>
            </div>
        </div><hr style="margin:0px 0px 0px 0px;">
    </body>
</html>