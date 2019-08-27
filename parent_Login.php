<?php
    session_start();
    include_once("config.php");

    $error=" ";

    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $login_query = "select * from Parent where Email_Id_Primary= '$email' and password= '$password'";
        $login_query_check = mysqli_query($mysqli, $login_query) or die(mysqli_error($mysqli));
        $row = mysqli_fetch_array($login_query_check);


        if ($row['Email_Id_Primary']== $email && $row['Password']== $password) 
           {
                
                $_SESSION['email']= $email;
                $_SESSION['password']= $password;
                echo '<script type="text/javascript">
           window.location = "masterPageParent.php"
      </script>';
           }   
        else
            {
                $error ="Invalid Email Id. or Password! Try again! <br> <br>";
            }
                
    }
?>

<!DOCTYPE html>
<head>
<title>Login</title>
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
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
    <center>
           <b><h4 style="color: red;"><?php echo $error;?></h4></b>
         </center>
         
	<h2>Sign In Now</h2>
		<form method="post">
			<input type="eamil" class="ggg" name="email" placeholder="E-MAIL ID" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9-.-]+\.[a-z]{2,3}$">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="true">
			<span><input type="checkbox" />Remember Me</span>
			<h6><a href="#">Forgot Password?</a></h6>
			
			
        
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="submit">
		</form>
		<p>Don't Have an Account ?<a href="registration.html">Create an account</a></p>
</div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>