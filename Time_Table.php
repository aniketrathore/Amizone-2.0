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
        <title>Time Table</title>
    </head>
    <body style="background-image: url(Images/9.jpg)">
        <div class="container">
            <h3>Time Table</h3>
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Day</th>
                    <th>Lecture:1(9:30-10:25)</th>
                    <th>Lecture:2(10:25-11:20)</th>
                    <th>Lecture:3(11:20-12:15)</th>
                    <th>Lecture:4(12:15-13:09)</th>
                    <th>Break</th>
                    <th>Lecture:6(14:00-14:55)</th>
                    <th>Lecture:7(14:55-15-50)</th>
                    <th>Lecture:8(15:50-16:45)</th>
                </tr>
                <?php
                $con= mysqli_connect("localhost", "root","","amizone");
                $query="SELECT * FROM time_table";
                $result= mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result))
                {?>
                <tr>
                    <td><b><?php echo $row['day'];?></b></td>
                    <td><?php echo $row['a'];?></td>
                    <td><?php echo $row['b'];?></td>
                    <td><?php echo $row['c'];?></td>
                    <td><?php echo $row['d'];?></td>
                    <td><?php echo $row['e'];?></td>
                    <td><?php echo $row['f'];?></td>
                    <td><?php echo $row['g'];?></td>
                    <td><?php echo $row['h'];?></td>
                </tr>
                <?php }?>
            </table>
        </div>
    </body>
</html>
<?php
include 'Footer.php';
?>