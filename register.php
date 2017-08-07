<?php
require('connect.php');
require('func.php');
$msg = '';
	if(isset($_POST['submit_btn'])){
		$name = mysqli_real_escape_string($mysqli,$_POST['name']);
		$email = mysqli_real_escape_string($mysqli,$_POST['email']);
		$phone = mysqli_real_escape_string($mysqli,$_POST['phone']);
		$year = mysqli_real_escape_string($mysqli,$_POST['year']);
		$roll = mysqli_real_escape_string($mysqli,$_POST['roll']);
		$college =mysqli_real_escape_string($mysqli, $_POST['college']);
		$pass = mysqli_real_escape_string($mysqli,$_POST['password']);
		$cpass = mysqli_real_escape_string($mysqli,$_POST['cpassword']);

		if($pass != $cpass){
			$msg = "<p style='color:red' >Password Mismatched..!!</p>";
		}
		else if(user_exist($email)){
			$msg = "<p style='color:red' >User with this email already exist..!!</p>";
		}else{
			$as = rand(0,21);
			$key = md5(rand(0,1000));
			$link = "http://www.emsplus.co.in/sudoku/verify_email.php?email=".urlencode($email)."&key=".urlencode($key)."";
			$query = "INSERT INTO `user`(`id`, `name`, `email`,`pass`, `phone`, `rollno`, `year`, `college`, `assigned_sudoku`, `status`)
						VALUES ('','$name','$email','$pass','$phone','$roll','$year','$college','$as','1')";
			if($query_run = mysqli_query($mysqli, $query)){
				/*if(send_ver_mail($name, $email, $link)){
					$query = "INSERT INTO `email_act`(`id`, `email`, `key`) VALUES ('','$email','$key')";
					if($query_run = mysqli_query($mysqli, $query)){
						$msg = "<p style='color:green' >An email has been sent to you, please check it out to complete your registeration</p>";
					}else{
						$msg = "<p style='color:red' >Registration failed1..!!</p>";
					}
				}else{
					$msg = "<p style='color:red' >Registration failed2..!!</p>";
				}*/
				$msg = "<p style='color:green' >Registration Done...!!</p>";
				$msg .= "<p ><a style='color:white' href='login.php'> Login Now</a></p>";
			}else{
				$msg = "<p style='color:red' >Registration failed...!!</p>";
			}
		}




	}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Register</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
   <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Open+Sans);
.btn { display: inline-block; *display: inline; *zoom: 1; padding: 4px 10px 4px; margin-bottom: 0; font-size: 13px; line-height: 18px; color: #333333; text-align: center;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); vertical-align: middle; background-color: #f5f5f5; background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6); background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6)); background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6); background-image: -o-linear-gradient(top, #ffffff, #e6e6e6); background-image: linear-gradient(top, #ffffff, #e6e6e6); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0); border-color: #e6e6e6 #e6e6e6 #e6e6e6; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); border: 1px solid #e6e6e6; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); cursor: pointer; *margin-left: .3em; }
.btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
.btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
.btn:hover { color: #333333; text-decoration: none; background-color: #e6e6e6; background-position: 0 -15px; -webkit-transition: background-position 0.1s linear; -moz-transition: background-position 0.1s linear; -ms-transition: background-position 0.1s linear; -o-transition: background-position 0.1s linear; transition: background-position 0.1s linear; }
.btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
.btn-primary.active { color: rgba(255, 255, 255, 0.75); }
.btn-primary { background-color: #4a77d4; background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
.btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
.btn-block { width: 100%; display:block; }

* { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

html { width: 100%; height:100%;  }

body {
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: #092756;
	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}
.login {
	position: absolute;
	top: 33%;
	left: 41%;
	margin: -150px 0 0 -150px;
	width:30%;
	height:300px;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }
#ques-sec{
        width: 28%;
        background-color: darkslategrey;
        height: 90%;
        position: fixed;
        top: 3%;
        border-radius: 21px;
        border-style: groove;
        left: 18px;

    }
    .header-1 {
	    font-size: 2em;
	    color: white;
	    border-style: groove;
	    border-radius: 21px;
	    margin: 0;
	    padding: 3px;
	    font-family: Arial, Sans-Serif;
	}
input {
	width: 100%;
	margin-bottom: 25px;
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
	-webkit-transition: box-shadow .5s ease;
	-moz-transition: box-shadow .5s ease;
	-o-transition: box-shadow .5s ease;
	-ms-transition: box-shadow .5s ease;
	transition: box-shadow .5s ease;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }
@media screen and (max-width : 768px){
	.login {
	    position: relative;
	    top: 72%;
	    width: 81%;
	    height: 300px;
	    margin: 0 auto;
	    display: block;
	    left:0;
	}
	#ques-sec {
	    width: 100%;
	    background-color: darkslategrey;
	    height:67%;
	    position: absolute;
	    top:0;
	    border-radius: 11px;
	    border-style: groove;
	    left: 0px;
	}
	.header-1 {
	    font-size: 1em;
	    color: white;
	    border-style: groove;
	    border-radius: 21px;
	    margin: 0;
	    padding: 3px;
	    font-family: Arial, Sans-Serif;
	}
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="login">
	<h1>Register</h1>
    <form method="post" action="register.php">
    	<input type="text" name="name" placeholder="Name" required="required" />
        <input type="email" name="email" placeholder="Email" required="required" />
        <input type="phone" name="phone" placeholder="Mobile No." required="required" />
        <input type="year" name="year" placeholder="Year of Study" required="required" />
        <input type="roll" name="roll" placeholder="Roll No." required="required" />
        <input type="college" name="college" placeholder="College" required="required" />
				  <input type="password" name="password" placeholder="Password" required="required" />
					  <input type="password" name="cpassword" placeholder="Confirm Password" required="required" />

        <button type="submit" name="submit_btn" class="btn btn-primary btn-block btn-large">Register</button>
    </form>
    <span><?php echo $msg; ?></span>
		<p style="float:right; color:white" >Already Have account? <a href="login.php" style="color:red">Login Here</a></p>
</div>


<div id="ques-sec">
		<center><p class="header-1">Important</p></center>
		<ul style="color: white;font-family: 'Raleway','sans-serif';line-height: 2em;overflow: auto;height: 88%;">
		<li style="font-weight: 400;">You are not allowed to refresh page/ change / leave / switch between browser tabs.Doing so will result in automatically end your game and any request will not be entertained in any case.</li>
		<li>Information provided must be correct to claim for prizes. Same will be verified.</li>
		</ul>

	</div>
    <script src="js/index.js"></script>

</body>
</html>
