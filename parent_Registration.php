<?php 
    date_default_timezone_set('Asia/Calcutta');

    include_once("config.php");
        
    $error=" ";
    $success=" ";

    if (isset($_POST['submit']))
    {
        $first = $_POST['first'];
        $middle = $_POST['middle'];
        $last = $_POST['last'];
        $email_id_1 = $_POST['email_id_1'];
        $email_id_2 = $_POST['email_id_2'];
        $mobile_no= $_POST['mobile_no'];
        $tele_no= $_POST['tele_no'];
        $dob= $_POST['dob'];
        $student_reg= $_POST['student_reg'];
        $password= $_POST['password'];
        $reg_date=date("Y-m-d h:i:s");
        $current_date=date("Ymd");

        $parent_check = "select * from Parent where Student_Reg_Id = '$student_reg'";
        $parent_dup_check = mysqli_query($mysqli, $parent_check) or die(mysqli_error($mysqli));
        $row1 = mysqli_fetch_array($parent_dup_check);
        
        $seq= "select nextval(Sequence_Student_Registration) as nextSequence";
        $seq_check = mysqli_query($mysqli, $seq) or die(mysqli_error($mysqli));
        
    
        while($row2 = mysqli_fetch_array($seq_check))
                {
                    $parent_seq=$row2['nextSequence'];
                }
        $parent_reg_id="REG"."$current_date"."$parent_seq";
    
            if($row1['Student_Reg_Id']==$student_reg)
            {
                $error= "Sorry! You are already registered with entered Student Registration ID! <br> <br>";
            }
            else
            {
                $parent_register = "insert into Parent values('$parent_reg_id', '$password', '$first', '$middle', '$last', '$email_id_1', '$email_id_2', '$mobile_no', '$tele_no', '$dob','$reg_date',NULL, '$student_reg',NULL)";
                    
                $parent_register_check= mysqli_query($mysqli, $parent_register) or die(mysqli_error($mysqli));
                
                $success= "You are successfully registered! Now Login! <br> <br>";
            }
    }
?>

<!DOCTYPE html>
<head>
	<title>Parent Registration</title>
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
	<!-- //font-awesome icons -->
    
   <script src="js/jquery2.0.3.min.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>
     
	<div class="reg-w3">
	<div class="w3layouts-main">
	     <center>
           <b><h4 style="color: red;"><?php echo $error; ?></h4></b>
           <b><h4 style="color: green;"><?php echo $success ; ?></h4></b>
         </center>
		<h2>Register Now</h2>
			<form method="post">
				<input type="text" class="ggg" name="first" placeholder="First Name" required="true">

				<input type="text" class="ggg" name="middle" placeholder="Middle Name" >

				<input type="text" class="ggg" name="last" placeholder="Last Name" required="true">

				<input type="email" class="ggg" name="email_id_1" placeholder="Primary Email Id" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9-.-]+\.[a-z]{2,3}$">

				<input type="email" class="ggg" name="email_id_2" placeholder="Secondary Email Id" pattern="[a-z0-9._%+-]+@[a-z0-9-.-]+\.[a-z]{2,3}$">

				<input type="tel" class="ggg" name="mobile_no" placeholder="Mobile No." required="true" pattern="[0-9]{10}">

				<input type="tel" class="ggg" name="tele_no" placeholder="Telephone No." pattern="[0-9]{10}">
Date of Birth
				<input type="date" class="form-control input-sm m-bot15" name="dob" placeholder="Date of Birth." required="true">
 

				<input type="text" class="ggg" name="student_reg" placeholder="Student Registration Id" required="true">

				<input type="password" class="ggg" name="password" placeholder="Password" required="true" pattern=".{5,}">

				<h4><input type="checkbox"  required="true" />I agree to the Terms of Service and Privacy Policy</h4>
				
					<div class="clearfix"></div>
					<input type="submit" value="submit" name="submit">
			</form>
			
			<p>Already Registered.<a href="parent_Login.php">Login</a></p>
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
