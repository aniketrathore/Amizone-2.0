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
        <title>Fees</title>
    </head>
    <body style="background-image: url(Images/9.jpg)">
        <div class="container">
            <h3>Fee Structure</h3>
            <div class="col-lg-6">
            <center><h4>Academic Fee</h4></center>
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>Semester</th>
                    <th>Fees</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>90500</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>90500</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>95000</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>95000</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>100500</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>100500</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>100600</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>100600</td>
                </tr>
            </table>
            </div>
            <div class="col-lg-6">
            <center><h4>Hostel Fee</h4></center>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Type</th>
                    <th>Amount</th>
                </tr>
                <tr>
                    <td>AC</td>
                    <td>100000</td>
                </tr>
                <tr>
                    <td>Non AC</td>
                    <td>65000</td>
                </tr>
            </table>
            </div>
        </div>
    </body>
</html>
<?php
include 'Footer.php';
?>