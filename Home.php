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
        
        <title>Home</title>
        
    </head>
    <body style="background-image: url(Images/9.jpg)">
        <div>
        <div class="col-lg-6" style="margin-top: 10px;">
            <div class="panel panel-primary" style="min-height:400px">
                <div class="panel-heading">Time Table</div>
                <div>
                <?php
                $con= mysqli_connect("localhost","root","","amizone");
                $query= "SELECT * FROM time_table WHERE day='wednesday'";
                $result= mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result))
                {?>
                    <div class="panel-body">
                    <center><h4><b>Day :<b> <?php echo $row['day'];?></h4></center>
                                    <marquee direction="up">
                                        <marquee direction="down">
                                <h5> <b>  9:30-10:25 :</b><?php echo " ".$row['a'];?></h5><hr style="margin:0px;">
                                <h5> <b>  10:25-11:20 :</b><?php echo " ".$row['b'];?></h5><hr style="margin:0px;">
                                <h5> <b>  11:20-12:15</b><?php echo " ".$row['c'];?></h5><hr style="margin:0px;">
                                <h5> <b>  12:15-13:10 :</b><?php echo " ".$row['d'];?></h5><hr style="margin:0px;">
                                <h5> <b>  13:10-14:00 :</b><?php echo " ".$row['e'];?></h5><hr style="margin:0px;">
                                <h5> <b>  14:00-14:55 :</b><?php echo " ".$row['f'];?></h5><hr style="margin:0px;">
                                <h5> <b>  14:55-15:50 :</b><?php echo " ".$row['g'];?></h5><hr style="margin:0px;">
                                <h5> <b>  15:50-16:45 :</b><?php echo " ".$row['h'];?></h5>
                                        </marquee></marquee></div>
                </div>
                <?php }?>
            </div>
        </div>
        
            <div class="col-lg-6" style="margin-top: 10px;">
            <div class="panel panel-primary" style="min-height:400px">
                <div class="panel-heading">Calender</div>
                
                <?php include 'Calender1.php';?>
                
            </div>
            </div>
        </div>
        <div>
            <div class="col-lg-5">
                <div class="panel panel-primary"">
                    <div class="panel-heading">Notice</div>
                    <div class="panel-body" style="max-height: 200px; overflow-y: scroll;">
                    <ul class="list-group" type="circle">
                        <?php
                $con= mysqli_connect("localhost","root","","admin");
                $query= "SELECT * FROM notice";
                $result= mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result))
                {?>
                        <li class="list-group-item"><?php echo $row['notice'];?><span class="badge">New</span></li>
                <?php }?>     
                        
                    </ul>
                    </div>
                    </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-primary" style="min-height: 200px;">
                    <div class="panel-heading">Happening @ Amity</div>
                    <div class="panel-body" style="max-height: 200px; overflow-y: scroll;">
                        <ul class="list-group" type="circle">
                        <li class="list-group-item">Amity Institute of Biotechnology, Gurgaon organized Guest Lecture on Leishmaniadonovani by Prof.Chinmay Mukhopadhyay, JNU on 27th May, 2016 ( May 27 2016 )<span class="badge"></span></li>
                        <li class="list-group-item">AMITY COLLEGE OF NURSING AMITY UNIVERSITY, HARYANA ORGANIZED HEALTH AWARENESS PROGRAMME ANTI-TOBACCO DAY 2016 ( May 26 2016 )<span class="badge"></span></li>
                        
                        
                    </ul>
                    </div>
                        
                    
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-primary" style="min-height: 200px;">
                    <div class="panel-heading">Amizone Email</div>
                    <div class="panel-body" style="max-height: 200px; overflow-y: scroll;">
                        <center><h4><b>Amizone:My Email <span class="glyphicon glyphicon-envelope"> </span></b></h4></center>
                        <h5><b>Email ID:</b></h5>
                        <h4>aniket.rathaur@student.amity.edu</h4>
                        <details style="margin-bottom: 55px;">
                            <summary>Password Show:</summary>
                            <p>123456789</p>
                        </details>
                        
                        
                </div>
            </div>
        
        </div>
    </body>
</html>
<?php
include 'Footer.php';
?>