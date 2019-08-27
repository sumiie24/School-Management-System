<?php

    session_start();
    include_once("config.php");
 
?>
<!DOCTYPE html>

<head>

    <title>Result Analysis</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/bg.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/style-responsive.css" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css"/>
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <link rel="stylesheet" href="css/morris.css" type="text/css"/>
    <!-- calendar -->
    <link rel="stylesheet" href="css/monthly.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    
    <script src="js/jquery2.0.3.min.js"></script>
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.js"></script>

</head>
<body>
    <section id="container">
    <!--header start-->
    
        <header class="header fixed-top clearfix">
        
        <!--logo start-->
            <div class="brand">
                <a href="masterPageParent.php" class="logo">
                   <?php echo  $_SESSION['First_Name']; ?>
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->
            
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-success">8</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <li>
                                <p class="">You have pending tasks</p>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="task-info clearfix">
                                        <div class="desc pull-left">
                                            <h5>Update Profile</h5>
                                            <p>Update your details</p>
                                        </div>
                                                <span class="notification-pie-chart pull-right" data-percent="90">
                                        <span class="percent"></span>
                                        </span>
                                    </div>
                                </a>
                            </li>

                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->

                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-important">4</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <li>
                                <p class="red">You have some Mails</p>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="images/2.png"></span>
                                            <span class="subject">
                                            <span class="from">Principal</span>
                                            <span class="time">2 hour ago</span>
                                            </span>
                                            <span class="message">
                                                Hi 
                                            </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->

                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-warning">3</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <li>
                                <p>Notifications</p>
                            </li>

                            <li>
                                <div class="alert alert-success clearfix">
                                    <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                    <div class="noti-info">
                                        <a href="#"> Notification 1</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>

            <div class="top-nav clearfix">
            <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="images/2.png">
                            <span class="username"><?php echo  $_SESSION['First_Name']; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="parent_View_Profile.php"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="parent_Update_Profile.php"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="index.html"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                <!-- user login dropdown end -->
                </ul>
                 <!--search & user info end-->
            </div>
        </header>
        <!--header end-->

        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="masterPageParent.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        
                        <li class="sub-menu">
		                    <a>
		                        <i class="fa fa-user"></i>
		                        <span>Profile</span>
		                    </a>

		                    <ul class="sub">
								<li><a href="parent_View_Profile.php">View Profille</a></li>
								<li><a href="parent_Update_Profile.php">Update Profile</a></li>
		                    </ul>

		                </li>
                        
                        <li class="sub-menu">
                            <a href="parent_Check_Attendance.php">
                                <i class="fa fa-book"></i>
                                <span>Attendence</span>
                            </a>
                        </li>

                        <li>
                            <a href="parent_Student_Marks.php">
                                <i class="fa fa-newspaper-o"></i>
                                <span>Student Result</span>
                            </a>
                        </li>
                       
                        <li class="sub-menu">
                            <a href="parent_Result_Analysis.php">
                                <i class="fa fa-area-chart"></i>
                                <span>Result Analysis</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="parent_Fee_Details.php">
                                <i class="  fa fa-credit-card"></i>
                                <span>Fee Details</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="parent_Academic_Calendar.php">
                                <i class=" fa fa-calendar"></i>
                                <span>Academic Calendar</span>
                            </a>
                        </li>
                      
                    </ul>           
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

        <!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <div class="form-w3layouts">
     <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    RESULT ANALYSIS
                </header>
            <section class="panel">
                  <div class="panel-body">
                        <form class="form-horizontal bucket-form" method="get">
                  <div class="col-md-12 stats-info stats-last widget-shadow">
                  <div class="stats-last-agile">
                    <form class="form-horizontal bucket-form" method="get">
                  <div class="form-group">
                    <br>
                    <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Select Class</label>
                        <div class="col-lg-6">
                            <select class="form-control input-sm m-bot15">
                                <option>Class</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>
                    </div>
                </form>    
                
                <form class="form-horizontal bucket-form" method="get"> 
                    <div class="form-group">
                    <br>    
                    <label class="col-sm-3 control-label">Select Section</label>
                        <div class="col-lg-6">
                        <select class="form-control input-sm m-bot15">
                                <option>Section</option>
                                <option>A</option>
                                <option>B</option>
                        </select>
                        </div>
                    </div>
                </form>        
                   
                <form class="form-horizontal bucket-form" method="get"> 
                    <div class="form-group">
                    <br>    
                        <label class="col-sm-3 control-label">Select Term</label>
                        <div class="col-lg-6">
                        <select class="form-control input-sm m-bot15">
                                <option>Term</option>
                                <option>1st Term</option>
                                <option>Final</option>
                        </select>
                        </div>
                    </div>
                </form>        
                       <form class="form-horizontal bucket-form" method="get"> 
                   <div class="form-group">
                    <div class="col-lg-offset-3 col-lg-10">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="submit" class="btn btn-danger">Reset</button>
                    </div>
                   </div>   
                </form>
               
        </section>
        </section>
        </div>
        </div>
        </div>
        </section>
      <section class="panel">
        <div class="panel-body">
            <div class="agileits-w3layouts-stats">
                    
                    <div class="col-md-12 stats-info stats-last widget-shadow">
                        <div class="stats-last-agile">
                            <table class="table stats-table ">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Marks</th>
                                        <th>Avg Marks</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Math</th>
                                        <td>55</td>
                                        <td><h5>60 <i class="fa fa-level-up"></i></h5></td>
                                        <td><span class="label label-success">Below Avg</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">English</th>
                                        <td>80</td>                                     
                                        <td><h5>75 <i class="fa fa-level-up"></i></h5></td>
                                        <td><span class="label label-warning">Good</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Hindi</th>
                                        <td>90</td>
                                        <td><h5 class="down">60 <i class="fa fa-level-down"></i></h5></td>
                                        <td><span class="label label-danger">Very Good</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">History</th>
                                        <td>90</td>
                                        <td><h5 class="down">80 <i class="fa fa-level-down"></i></h5></td>
                                        <td><span class="label label-danger">Very Good</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Geography</th>
                                        <td>90</td>
                                        <td><h5 class="down">70 <i class="fa fa-level-down"></i></h5></td>
                                        <td><span class="label label-danger">Very Good</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Science</th>
                                        <td>90</td>
                                        <td><h5 class="down">80 <i class="fa fa-level-down"></i></h5></td>
                                        <td><span class="label label-danger">Very Good</span></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
        </div>          
    </section>
        <!-- footer -->
            <div class="footer">
                <div class="wthree-copyright">
                    <p>© 2019 NewSchoolSystem. All rights reserved</p> 
                </div>
            </div>
        <!-- / footer -->

        </section>
        <!--main content end-->
    </section>
    
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="js/jquery.scrollTo.js"></script>
    <!-- morris JavaScript -->  
    <script>
        $(document).ready(function() {
            //BOX BUTTON SHOW AND CLOSE
           jQuery('.small-graph-box').hover(function() {
              jQuery(this).find('.box-button').fadeIn('fast');
           }, function() {
              jQuery(this).find('.box-button').fadeOut('fast');
           });
           jQuery('.small-graph-box .box-close').click(function() {
              jQuery(this).closest('.small-graph-box').fadeOut(200);
              return false;
           });
           
            //CHARTS
            function gd(year, day, month) {
                return new Date(year, month - 1, day).getTime();
            }
            
            graphArea2 = Morris.Area({
                element: 'hero-area',
                padding: 10,
            behaveLikeLine: true,
            gridEnabled: false,
            gridLineColor: '#dddddd',
            axes: true,
            resize: true,
            smooth:true,
            pointSize: 0,
            lineWidth: 0,
            fillOpacity:0.85,
                data: [
                    {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
                    {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                    {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                    {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                    {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                    {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                    {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                    {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                    {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
                
                ],
                lineColors:['#eb6f6f','#926383','#eb6f6f'],
                xkey: 'period',
                redraw: true,
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });
            
           
        });
        </script>
    <!-- calendar -->
        <script type="text/javascript" src="js/monthly.js"></script>
        <script type="text/javascript">
            $(window).load( function() {

                $('#mycalendar').monthly({
                    mode: 'event',
                    
                });

                $('#mycalendar2').monthly({
                    mode: 'picker',
                    target: '#mytarget',
                    setWidth: '250px',
                    startHidden: true,
                    showTrigger: '#mytarget',
                    stylePast: true,
                    disablePast: true
                });

            switch(window.location.protocol) {
            case 'http:':
            case 'https:':
            // running on a server, should be good.
            break;
            case 'file:':
            alert('Just a heads-up, events will not work when run locally.');
            }

            });
        </script>
        <!-- //calendar -->
</body>
</html>