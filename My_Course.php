<?php
session_start();
if(empty($_SESSION['id'])){
    header('Location: index.php');
}
include 'Navbar.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Classes/bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="Classes/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="Classes/jquery-3.2.1.min.js"></script>  
        <link rel="stylesheet" type="text/css" href="index.css">
        <title>My Course</title>
    </head>
    <body style="background-image: url(Images/9.jpg)">
        <div class="container" style="margin-bottom:30px">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" >  
    <ol class="carousel-indicators" style="bottom: -40px;">  
        <li data-target="#myCarousel" data-slide-to="0" class="active" style="border: 1px solid #000"></li>  
        <li data-target="#myCarousel" data-slide-to="1" style="border: 1px solid #000"></li>  
        <li data-target="#myCarousel" data-slide-to="2" style="border: 1px solid #000"></li>  
    </ol>  
    <div class="carousel-inner" role="listbox">  
      <div class="item active">
          <h3>Semester: 1</h3>
         <table class="table table-bordered table-hover">
                <tr>
                        <th>S.No</th>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Credit</th>
                        <th>Type</th>
                        <th>Syllabus</th>
                        <th>Session Plan</th>
                        <th>Attendance</th>
                    </tr>
                <?php 
                $con= mysqli_connect("localhost","root","","amizone");
                $query= "SELECT * FROM course";
                $result= mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) { ?>
                    
                    <tr>
                        <td><?php echo $row['no'];?></td>
                        <td><?php echo $row['course_code'];?></td>
                        <td><?php echo $row['course_name'];?></td>
                        <td><?php echo $row['credit'];?></td>
                        <td><?php echo $row['type'];?></td>
                        <td><a><?php echo $row['syllabus'];?></a></td>
                        <td><a><?php echo $row['session_plan'];?></a></td>
                        <td><?php echo $row['attendance'];?></td>
                    </tr>
                    
             <?php }?>
                </table> 
      </div>
        <div class="item">
            <h3>Semester: 2</h3>
            <table class="table table-bordered table-hover">
                   <tr>
                        <th>S.No</th>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Credit</th>
                        <th>Type</th>
                        <th>Syllabus</th>
                        <th>Session Plan</th>
                        <th>Attendance</th>
                    </tr>
                <?php 
                $con= mysqli_connect("localhost","root","","amizone");
                $query= "SELECT * FROM course1";
                $result= mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) { ?>
                    
                    <tr>
                        <td><?php echo $row['no'];?></td>
                        <td><?php echo $row['course_code'];?></td>
                        <td><?php echo $row['course_name'];?></td>
                        <td><?php echo $row['credit'];?></td>
                        <td><?php echo $row['type'];?></td>
                        <td><a><?php echo $row['syllabus'];?></a></td>
                        <td><a><?php echo $row['session_plan'];?></a></td>
                        <td><?php echo $row['attendence'];?></td>
                    </tr>
                    
             <?php }?>
                </table>
        </div>
        <div class="item">
            <h3>Semester: 3</h3>
            <table class="table table-bordered table-hover">
                    <tr>
                        <th>S.No.</th>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Type</th>
                        <th>Syllabus</th>
                        <th>Session Plan</th>
                        <th>Attendance</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
           </div>
    </div>  
</div>  
</div>  
</body>
</html>
<?php
include 'Footer.php';
?>