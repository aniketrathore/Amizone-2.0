<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width:device-width, initial-scal=1.0">
        <link rel="stylesheet" type="text/css" href="Classes/bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="Classes/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="Classes/jquery-3.2.1.min.js"></script>
        <title>Amizone</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="news.css">
    </head>
    <body>
        <div>
            <video controls="false" autoplay muted loop id="vide"><source src="AmityUniversity.MKV"></video>
        </div>
        <nav class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href=""><p style="font-family: Comic Sans MS; font-size: 40px;">Amizone</p></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li><a href="https://en.wikipedia.org/wiki/Amity_University" target="_blank"><span class="glyphicon glyphicon-log-in"></span> About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row" style="margin-top:100px; width: 80%;">
            <div class="col-xs-4 col-xs-offset-2" style="margin-top: 45px">
                <div class="panel panel-primary">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <form method="post" action="varification.php">
                            <div class="form-group">
                                <input type="text" class="form-control"  name="id" placeholder="User Name">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  name="password" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-default" value=”registration_submit” style="margin-bottom:10px;">Login</button>
                           
                            <div class="panel panel-primary" style="margin-top:10px;">
                                <div class="panel-body">Login as <a href="admin.php" style="color:navy">Admin</a>?</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 col-xs-offset-1"style="padding-top:0px" >
                <video controls="false" autoplay muted loop width="600px" height="400px"><source src="Amity.MKV"></video>
                <script>var vids = $("video"); 
                $.each(vids, function(){
                this.controls = false; 
                });</script>
            </div>
        </div>
        <footer style="margin-top: 120px; background-color: white;">
    <div class="container-fluid">
        <div class="col-xs-2 col-xs-offset-2">
            <div class="panel-body" id="footer">
                <ul type="none" class="list-group">
                    <li style="font-family: Times New Roman"><b>Campuses</b></li>
                        <div id="item">
                            <li ><a href="http://www.amity.edu/index.aspx" target="_blank">Noida</a></li>
                            <li><a href="http://www.amity.edu/gurgaon/" target="_blank">Gurgaon</a></li>
                            <li><a href="http://www.amity.edu/lucknow/" target="_blank">Lucknow</a></li>
                            <li><a href="http://amity.edu/Jaipur/" target="_blank">Jaipur</a></li>
                            <li><a href="http://www.amity.edu/mumbai/" target="_blank">Mumbai</a></li>
                        </div>
                </ul>
            </div>
        </div>
        <div class="col-xs-2 col-xs-offset-1">
                    <div class="panel-body" id="footer">
                        <ul type="none" class="list-group">
                            <li style="font-family: Times New Roman"><b>Social Media</b></li>
                        <div id="item">
                        <li ><a href="https://www.facebook.com/amityuni/?fref=ts" target="_blank">Facebook</a></li>
                        <li><a href="https://www.instagram.com/amitygurgaon/" target="_blank">Instagram</a></li>
                        <li><a href="https://twitter.com/amityuni?lang=en" target="_blank">Twitter</a></li>
                        </div>
                    </ul>
                    </div>
                 </div>
            <div class="col-xs-4 col-xs-offset-1">
                    <div class="panel-body" id="footer">
                        <ul type="none" class="list-group">
                            <li style="font-family: Times New Roman"><b>Registered Office</b></li>
                           <div id="items">
                            <li>Amity University Noida</li>
                            <li>Sector-124,Noida-201313(U.P.)</li>
                            <li>Contact No:-0120-4392000</li>
                            <li><a href="https://www.google.co.in/maps/place/Amity+University/@28.3155903,76.9131455,17z/data=!4m12!1m6!3m5!1s0x390d3955acb56711:0x306f1f59fc894af!2sDepartment+Store+Amity+University+Haryana!8m2!3d28.3155903!4d76.9153342!3m4!1s0x0:0xfeb54e790052ee13!8m2!3d28.3174108!4d76.915884?hl=en" style="color: #cccccc;" target="_blank">Maps<span class="glyphicon glyphicon-map-marker"></span></a></li>
                        </ul>
                    </div>
            </div>
        </div><hr style="margin:0px 0px 10px 0px;">
            <div class="container-fluid">
                <div>
                    <center>
                        <p style="font-family: Times New Roman">Copyright &copy; 2017 Amizone.net. All Rights Reserved  |  Contact Us: +911202445252</p>
                        <p style="font-family: Times New Roman">Desinged And Developed By <a href="https://www.instagram.com/aniketrathore16/?hl=en" target="_blank">Aniket Rathore</a>.</p>
                    </center>
                    
                </div>
            </div>    
        </footer>
    </body>
</html>
