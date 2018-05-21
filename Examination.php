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
        <title>Examination</title>
    </head>
    <body style="background-image: url(Images/9.jpg)">
        <div class="container" style="margin-bottom:30px">
            <h3>Exam Result</h3>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" >  
    <ol class="carousel-indicators" style="bottom: -40px;">  
        <li data-target="#myCarousel" data-slide-to="0" class="active" style="border: 1px solid #000"></li>  
        <li data-target="#myCarousel" data-slide-to="1" style="border: 1px solid #000"></li>  
        <li data-target="#myCarousel" data-slide-to="2" style="border: 1px solid #000"></li>  
    </ol>  
    <div class="carousel-inner" role="listbox">  
      <div class="item active">
          <center><h4>Semester: 1</h4></center>
         <table class="table table-bordered table-hover">
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>CE</th>
                        <th>Max CE</th>
                        <th>EE</th>
                        <th>Max EE</th>
                        <th>Total</th>
                        <th>Max Total</th>
                        <th>ACU</th>
                        <th>GO</th>
                        <th>GP</th>
                        <th>CP</th>
                        <th>ECU</th>
                    </tr>
                    <?php 
                    $con= mysqli_connect("localhost","root","","amizone");
                    $query="SELECT * FROM examination";
                    $result= mysqli_query($con, $query);
                    while($row= mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['course_code'];?></td>
                        <td><?php echo $row['course_title'];?></td>
                        <td><?php echo $row['ce'];?></td>
                        <td><?php echo $row['max_ce'];?></td>
                        <td><?php echo $row['ee'];?></td>
                        <td><?php echo $row['max_ee'];?></td>
                        <td><?php echo $row['total'];?></td>
                        <td><?php echo $row['max_total'];?></td>
                        <td><?php echo $row['acu'];?></td>
                        <td><?php echo $row['go'];?></td>
                        <td><?php echo $row['gp'];?></td>
                        <td><?php echo $row['cp'];?></td>
                        <td><?php echo $row['ecu'];?></td>
                    </tr>
                    <?php }?>
                    
                </table> 
      </div>
        <div class="item">
            <center><h4>Semester: 2</h4></center>
            <table class="table table-bordered table-hover">
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>CE</th>
                        <th>Max CE</th>
                        <th>EE</th>
                        <th>Max EE</th>
                        <th>Total</th>
                        <th>Max Total</th>
                        <th>ACO</th>
                        <th>GO</th>
                        <th>GP</th>
                        <th>CP</th>
                        <th>ACU</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
        </div>
        <div class="item">
            <center><h4>Semester: 3</h4></center>
            <table class="table table-bordered table-hover">
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>CE</th>
                        <th>Max CE</th>
                        <th>EE</th>
                        <th>Max EE</th>
                        <th>Total</th>
                        <th>Max Total</th>
                        <th>ACO</th>
                        <th>GO</th>
                        <th>GP</th>
                        <th>CP</th>
                        <th>ACU</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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
        <div class="container">
            <table class="table table-bordered table-hover" >
                <tr>
                    <th>Semester</th>
                    <th>SGPA</th>
                    <th>CGPA</th>
                    <th>Backlog</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>7.7</td>
                    <td></td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>7.4</td>
                    <td>7.3</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>8.1</td>
                    <td>7.8</td>
                    <td>0</td>
                </tr>
            </table>
        </div>
</body>
</html>
<?php
include 'Footer.php';
?>