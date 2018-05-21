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
        <title>Faculty</title>
    </head>
    <body style="background-image: url(Images/9.jpg)">
        <div class="container">
            <h3 style="padding-left: 15px;">Faculty</h3>
            <center><p>No feedback currently available for you.</p></center>
            <div>
            <div class="col-lg-3">
                <div class="thumbnail">
                    <img src="Images/Unknown.jpg">
                        <div class="caption">
                            <center>
                                <p style="margin-bottom:5px">Mr. Anuj Kumar</p>
                                <p style="margin-bottom:5px">1. Analysis And Design Of Algorithm</p>
                                <a>Feedback</a><hr style="margin: 5px;">
                                <a>Post Message</a>
                            </center>
                        </div>
                </div>
            </div>
                <div class="col-lg-3">
                <div class="thumbnail">
                    <img src="Images/Unknown.jpg">
                        <div class="caption">
                            <center>
                                <p style="margin-bottom:5px">Mr. Anuj Kumar</p>
                                <p style="margin-bottom:5px">2. ADA Lab</p>
                                <a>Feedback</a><hr style="margin: 5px;">
                                <a>Post Message</a>
                            </center>
                        </div>
                </div>
            </div>
                <div class="col-lg-3">
                <div class="thumbnail">
                    <img src="Images/Unknown.jpg">
                        <div class="caption">
                            <center>
                                <p style="margin-bottom:5px">Ms. Juhi Singh</p>
                                <p style="margin-bottom:5px">3. Artificial Intelligence</p>
                                <a>Feedback</a><hr style="margin: 5px;">
                                <a>Post Message</a>
                            </center>
                        </div>
                </div>
            </div>
                <div class="col-lg-3">
                <div class="thumbnail">
                    <img src="Images/Unknown.jpg">
                        <div class="caption">
                            <center>
                                <p style="margin-bottom:5px">Ms. Juhi Singh</p>
                                <p style="margin-bottom:5px">4. Artificial Intelligence Lab</p>
                                <a>Feedback</a><hr style="margin: 5px;">
                                <a>Post Message</a>
                            </center>
                        </div>
                </div>
            </div>
                <div class="col-lg-3">
                <div class="thumbnail">
                    <img src="Images/Unknown.jpg">
                        <div class="caption">
                            <center>
                                <p style="margin-bottom:5px">Ms. Aman Jatain</p>
                                <p style="margin-bottom:5px">5. DWDM</p>
                                <a href="Feedback.php">Feedback</a><hr style="margin: 5px;">
                                <a>Post Message</a>
                            </center>
                        </div>
                </div>
            </div>
                <div class="col-lg-3">
                <div class="thumbnail">
                    <img src="Images/Unknown.jpg">
                        <div class="caption">
                            <center>
                                <p style="margin-bottom:5px">Ms. Aman Jatain</p>
                                <p style="margin-bottom:5px">6. DWDM Lab</p>
                                <a>Feedback</a><hr style="margin: 5px;">
                                <a>Post Message</a>
                            </center>
                        </div>
                </div>
            </div>
                <div class="col-lg-3">
                <div class="thumbnail">
                    <img src="Images/Unknown.jpg">
                        <div class="caption">
                            <center>
                                <p style="margin-bottom:5px">Ms. Aman Jatain</p>
                                <p style="margin-bottom:5px">7. DWDM Tut</p>
                                <a>Feedback</a><hr style="margin: 5px;">
                                <a>Post Message</a>
                            </center>
                        </div>
                </div>
            </div>
                <div class="col-lg-3">
                <div class="thumbnail">
                    <img src="Images/Unknown.jpg">
                        <div class="caption">
                            <center>
                                <p style="margin-bottom:5px">Ms. Poonam Sharma</p>
                                <p style="margin-bottom:5px">8. Relationship Management</p>
                                <a>Feedback</a><hr style="margin: 5px;">
                                <a>Post Message</a>
                            </center>
                        </div>
                </div>
            </div>
                <div class="col-lg-3">
                <div class="thumbnail">
                    <img src="Images/Unknown.jpg">
                        <div class="caption">
                            <center>
                                <p style="margin-bottom:5px">Mr. Rajbir</p>
                                <p style="margin-bottom:5px">9. Simulation</p>
                                <a>Feedback</a><hr style="margin: 5px;">
                                <a>Post Message</a>
                            </center>
                        </div>
                </div>
            </div>
                <div class="col-lg-3">
                <div class="thumbnail">
                    <img src="Images/Unknown.jpg">
                        <div class="caption">
                            <center>
                                <p style="margin-bottom:5px">Dr. Rishu Sharma</p>
                                <p style="margin-bottom:5px">10. Spanish</p>
                                <a>Feedback</a><hr style="margin: 5px;">
                                <a>Post Message</a>
                            </center>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
<?php
include 'Footer.php';
?>