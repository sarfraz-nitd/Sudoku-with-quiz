<?php
$em = "";
	if(isset($_GET['user'])){
		$em = $_GET['user'];
	}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
   <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  
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
top: 22%;
width: 35%;
left: 34%;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }
.t{
	color:white;
	font-size: 5em;
	padding: 0;
	margin : 0;
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
@media screen and (max-width : 768px){
.login {
    position: absolute;
    top: 22%;
    width: 98%;
    left: 5px;
}
	.t {
	    color: white;
	    font-size: 1em;
	    padding: 0;
	    margin: 0;
	}
	#ques-sec {
	    width: 100%;
	    background-color: darkslategrey;
	    height: 90%;
	    position: relative;
	    top: 68%;
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
 <center>
  <div class="login">
	
	<table cellspacing="12" class="t">
		<tr style="text-align: center;">
			<td id ="d"></td>
			<td id="h"></td>
			<td id="m"></td>
			<td id="s"></td>
		</tr>
		<tr style="text-align: center;">
			<td id="df"></td>
			<td id="hf"></td>
			<td id="mf"></td>
			<td id="sf"></td>
		</tr>
	</table>
   
    <span><p style="color:white" id="msg">We Appreciate Your Curiousity. Just Wait Buddy. Game has not started yet.</p></span><br><br>

    <p style="color:white">Team Terra Technica'17</p>

	<button class="btn btn-primary btn-block btn-large hidden" onclick="play()" style="display:none">Start Playing</button>
   </div>
   </center>
 
<div id="ques-sec">
		<center><p class="header-1">Rules</p></center>
		<ul style="color: white;font-family: 'Raleway','sans-serif';line-height: 2em;overflow: auto;height: 88%;">
		<li style="font-weight: 600;font-size:1.3em">You are not allowed to refresh page/ change / leave / switch between browser tabs.Doing so will result in automatically end your game and any request will not be entertained in any case.</li>
		<li>You have to answer some questions to open the hidden numbers.</li>
		<li>There is a time limit of 90 seconds for each question.</li>
		<li>For each question, if you give a correct answer, the number will be revealed</li>
		<li>For each question, if you give a wrong answer then the number will be revealed but you will get a penalty (equivalent to 120 seconds) for each wrong answer.</li>
		<li>If you open the question but the time limit gets over for that particular question, you will receive a penalty and the number will be revealed.</li>
		<li>The winner will be declared on the basis of minimum time taken for completing the sudoku. If no user is able to solve the sudoku, then the one with maximum no of questions solved in minimum time will be declared as the winner.</li>
		<li>Taking help of any kind will result in immediate disqualification.</li>
			<center><span style="font-size: 1.4em;">How to play</span></center>
		<li>Reveal the hidden numbers in sudoku by clicking on the '?' Symbol that will lead you to a question which you need to answer. </li>
		<li>After revealing all the hidden numbers, solve the sudoku.</li>
		<li>You can check whether you solved correctly or not by clicking on the 'Check My Sudoku' button</li>
		<li>After solving, Click on the 'Finish Game' button and confirm your submission.</li>
		<li>You are done</li>
		</ul>

	</div>
    <script src="js/index.js"></script>
	
</body>
<script>
var distance = 9999999999;
// Set the date we're counting down to
//var countDownDate = new Date("March 24, 2017 14:00:00").getTime();
var countDownDate = new Date("April 18, 2017 14:15:00").getTime();
// Update the count down every 1 second
var x = setInterval(function() {


    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("d").innerHTML = ("00"+Math.floor(days)).slice(-2) +" :";
    document.getElementById("h").innerHTML = ("00"+Math.floor(hours)).slice(-2)+" :";
    document.getElementById("m").innerHTML = ("00"+Math.floor(minutes)).slice(-2)+" :";
    document.getElementById("s").innerHTML = ("00"+Math.floor(seconds)).slice(-2);
    document.getElementById("df").innerHTML = "d";
    document.getElementById("hf").innerHTML = "h";
    document.getElementById("mf").innerHTML = "m";
    document.getElementById("sf").innerHTML =  "s";

    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        $(".btn").show();
        $("#msg").hide();
        document.getElementById("d").innerHTML = "00 :";
	    document.getElementById("h").innerHTML = "00 :";
	    document.getElementById("m").innerHTML = "00 :";
	    document.getElementById("s").innerHTML = "00 ";
	    document.getElementById("df").innerHTML = "d";
	    document.getElementById("hf").innerHTML = "h";
	    document.getElementById("mf").innerHTML = "m";
	    document.getElementById("sf").innerHTML =  "s";
    }
}, 1000);
function play(){
	if(distance>0){
		alert("We Appreciate Your Curiousity. Just Wait Buddy. Game has not started yet.")
		$(".btn").hide();
	}else{
		
		window.location.href = "index.php";
	}
}
$(document).ready(function(){
	
	$(".btn").hide();
	if(distance>0){
		$(".btn").hide();
	}else{
		$(".btn").show();
		$("#msg").hide();
	}
});

</script>
</html>
