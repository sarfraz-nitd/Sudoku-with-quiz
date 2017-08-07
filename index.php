<?php

      // header("Location: home.php");
        //exit();
	require('func.php');
	require 'nothing_here.php';
	session_start();
	$msg="";
	$startTime = strtotime("18:10:00");
	$endTime = strtotime("22:30:00");						// 9:30(UTC) == 3:00(IST)
	
	
	
	

        $p_id="";
	$p_name = "";
	$p_email = "";
	$p_year = "";
	$p_college = "";
	$assigned =0;
	/*if(!isset($_SESSION['login'])){
		header('Location: home.php');
	}*/
	 //$_SESSION['login'] = $email;

	 if(!isset($_SESSION['login'])){
		 header("Location: login.php");
		 exit();
	 }
	 if(isset($_SESSION['login']) && !user_exist($_SESSION['login'])){
		 header("Location: register.php");
		 exit();
	 }
	 if($_SESSION['status']=='2'){
		 session_destroy();
		 header("Location: played.php");
		 exit();
	 }

	 $email = $_SESSION['login'];
	/* if (time() < $startTime) {
	  header("Location: home.php");
	  exit();
	}*/
	//header("Location: home.php");
        //exit();



	$query = "SELECT * from  `user` where `email` = '$email' ";
	if($query_run = mysqli_query($mysqli, $query)){
		if(mysqli_num_rows($query_run)>=1){
			$row = mysqli_fetch_assoc($query_run);
			$p_email = $email;
			$p_year = $row['year'];
			$p_college = $row['college'];
			$p_name = $row['name'];
			$assigned = $row['assigned_sudoku'];
			$p_id = $row['id'];
		}
	}
	$raw = $mainArray[$assigned];

	$prev_penal =0;
	$prev_score =0;
	$old_player = false;
	$out = "";
	$query = "SELECT * FROM `game` WHERE `user_id`='$p_id'";
	if($query_run = mysqli_query($mysqli, $query)){
		if(mysqli_num_rows($query_run)>=1){
		$old_player = true;
			$row = mysqli_fetch_assoc($query_run);
			$prev_penal = $row['penalty'];
			$prev_score = $row['correct_ans'];
			$out = $row['output_sudoku'];
		}
	}
	
	//echo $total_pd = $prev_penal + $prev_score;
	
	
	if($old_player){
			$outp = json_decode($out);
			for($i=0;$i<9;$i++){
			$q.= "<tr>";
			for($j=0;$j<9;$j++){
				$data = $raw[$i][$j];
				if($data==''){
					if($outp[$i][$j]=='')
						$q .= "<td><input class='input_field' name='inp_".$i.$j."' id='".$i.$j."' type='text'   maxlength='1' style='' required/></td>";
					else
					 	$q .= "<td><input class='input_field' name='inp_".$i.$j."' id='".$i.$j."' type='text'  maxlength='1' value='".$outp[$i][$j]."' style='' required/></td>";
					 
				}else{
					//$q .= "<td>".$raw[$i][$j]."</td>";
					if($i ==  getFSecretRaw($j,$raw) || $i ==  getSSecretRaw($j,$raw)){
						$q .= "<td class='secret' ><input class='input_field' name='inp_".$i.$j."' id='".$i.$j."' type='text' value='".$outp[$i][$j]."' onclick='setVar(".$i.",".$j.")' data-popup-open='popup-1' maxlength='1' style='color:red;' required readonly/></td>";
					}else
						$q .= "<td><input class='input_field' name='inp_".$i.$j."' id='".$i.$j."' type='text' value='".$outp[$i][$j]."' maxlength='1' style='color:blue; cursor:not-allowed' required readonly/></td>";
	
				}
			}
			$q.="</tr>";
		}
	}else{
		for($i=0;$i<9;$i++){
			$q.= "<tr>";
			for($j=0;$j<9;$j++){
				$data = $raw[$i][$j];
				if($data==''){
					/*if(isset($_POST['inp_'.$i.$j])){
						$v = $_POST['inp_'.$i.$j];
						$q .= "<td><input name='inp_".$i.$j."' id='".$i.$j."' value='".$v."' type='text' maxlength='1' style='width:30px; height:30px;font-size:1em; font-style:italic' required/></td>";
					}
	
					else*/
						$q .= "<td><input class='input_field' name='inp_".$i.$j."' id='".$i.$j."' type='text'  maxlength='1' style='' required/></td>";
				}else{
					//$q .= "<td>".$raw[$i][$j]."</td>";
					if($i ==  getFSecretRaw($j,$raw) || $i ==  getSSecretRaw($j,$raw)){
						$q .= "<td class='secret' ><input class='input_field' name='inp_".$i.$j."' id='".$i.$j."' type='text' value='?' onclick='setVar(".$i.",".$j.")' data-popup-open='popup-1' maxlength='1' style='color:red;' required readonly/></td>";
					}else
						$q .= "<td><input class='input_field' name='inp_".$i.$j."' id='".$i.$j."' type='text' value='".$raw[$i][$j]."' maxlength='1' style='color:blue; cursor:not-allowed' required readonly/></td>";
	
				}
			}
			$q.="</tr>";
		}
	}


	


?>
<!DOCTYPE html>
<html>
<head>
<title>Sudoku</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="index.css"/>
 <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg, #670d10 0%,#092756 100%)
}
h2{
	font-size: 2em;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	color: white;
	margin-right: auto;
	margin-left: auto;
	margin-top: 2%;
	margin-bottom: 2%;
}
#time-sec, #ques-sec{
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg, #670d10 0%,#092756 100%);
}
#user_msg{
	position: relative;
	top: 30px;
	color: black;
	font-size: 1.3em;
	width: 30%;
}
.input_field{
	width:30px; height:30px;font-size:1em; font-style:italic;
}
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
    #submit_game{
    	width: 253px;height: 42px;background-color: gainsboro;font-style: italic;font-size: 1.3em;border-style: outset;border-radius: 18px;position: absolute;top: 80%;right: 8%;
    }
    #finish_game{
    	width: 253px;height: 42px;background-color: gainsboro;font-style: italic;font-size: 1.3em;border-style: outset;border-radius: 18px;position: absolute;top: 81%;left:8%;
    }
    #saving-outer{
    	margin-left: 23%;width: 11%;
    }
    @media screen and (max-width : 768px){
    	#ques-sec{
    		display:none;
    	}
    	
    	.input_field{
		width:20px; height:20px;font-size:1em; font-style:italic;
	}
	
	#main-body{
	    width: 36%;
	    height: 400px;
	    position: relative;
	    top: -70px;
	    border-collapse: collapse;
	
	}
	
	#main-body  td{
	        text-align: center;
	        font-size: 1em;
	        font-style: italic;
	    }
	#submit_game{
	    	width: 253px;height: 42px;background-color: gainsboro;font-style: italic;font-size: 1.3em;border-style: outset;border-radius: 18px;position: relative;top: 460px;right: 0%;
	    }
	    #finish_game{
	    	width: 253px;height: 42px;background-color: gainsboro;font-style: italic;font-size: 1.3em;border-style: outset;border-radius: 18px;position: relative;top: 490px;left:0%; 
	    }
	   #user_msg {
	    position: relative;
	    top: -61px;
	    color: black;
	    font-size: 1em;
	    width: 100%;
	}
	
	#time-sec {
    width: 97%;
    background-color: darkslategrey;
    height: 90%;
    position: relative;
    top: 0%;
    border-radius: 21px;
    border-style: groove;
    right: 0px;
}
#player-info, #pp{ display:none; }
    	.header-1 {
	    font-size: 1em;
	    color: white;
	    border-style: groove;
	    border-radius: 21px;
	    margin: 0;
	    padding: 3px;
	    font-family: Arial, Sans-Serif;
	}
	.popup, .popup-inner{
		overflow-y: auto;
	}
	
	.popup {
	    width: 100%;
	    height: 130%;
	    display: none;
	    position: fixed;
	    top: 0px;
	    left: 0px;
	    background: rgba(0,0,0,0.75);
	}
	#reset-btn {
	    position: relative;
	    left: 155px;
	    top: -42px;
	}
	#submit-btn {
	    position: relative;
	    left: 0;
	}
	#question{margin-top: 70px;}
	 #saving-outer{
    	margin-left: 23%;width: 40%;
    }
	h3{display:none;}
    }
</style>
</head>
<body>
	<script>
		var x,y;
		var totalAns = 0;
		var penalty= <?php echo $prev_penal; ?>;
		var my_score= <?php echo $prev_score; ?>;;
		var js_array = <?php echo json_encode($raw); ?>;
		var hs='';
		var cur_i;
		var cur_j;
		var ans_indx = 0;
		var qt=30;
		var mt = 200;
		var maxTime = 200;
		
		
		
		function setVar(i,j){

			cur_i = i;
			cur_j = j;

		}

		function submit_opt(){
		if(s_id ==  0){
			$("#alert_msg").html("Please Select any option");
		}else{

			if(hs==s_id){
				$("#alert_msg").html("");
				//var r = JSON.parse(js_array);
				//document.write(js_array[cur_i][cur_j]);
				//alert('Correct Answer');
				var pr = js_array[cur_i][cur_j];
				$('#'+cur_i+''+cur_j).val(pr);
				$('#'+cur_i+''+cur_j).css("color","red");
				$('#cancel-btn').click();
				$("#reset-btn").click();
				clearInterval(x);
				my_score++;
				$('#score').text(my_score);

       	                        document.getElementById("rem_time").innerHTML = "";
			}else{
				//alert('Wrong Answer');
				$("#alert_msg").html("");
				$('#cancel-btn').click();
				$("#reset-btn").click();
				var pr = js_array[cur_i][cur_j];
				$('#'+cur_i+''+cur_j).val(pr);
				clearInterval(x);
				penalty++;
				var pas = document.getElementById('penal');
				$('#penal').text(penalty);

        		        document.getElementById("rem_time").innerHTML = "";
				//document.getElementById(pas).innerHTML=penalty;
			}
			$('#reset-btn').click();
			totalAns++;
			if(totalAns >=1){
				var email = "<?php echo $_SESSION['login']; ?>";
				var p_id = "<?php echo $p_id; ?>";

				saveQuizData(p_id, penalty, my_score);
				saveState();

			}
			document.getElementById("question").innerHTML = "Loading..";
			document.getElementById("op1").innerHTML = "Loading..";
			document.getElementById("op2").innerHTML = "Loading..";
			document.getElementById("op3").innerHTML = "Loading..";
			document.getElementById("op4").innerHTML = "Loading..";
		}
	}

	function saveQuizData(pid, penalty, my_score){

			$.post("saveQuizData.php",
		        {
				id : pid,
		          	pen : penalty,
		          	sc  : my_score,
		          	save : "yes"
		        },
		        function(data,status){
		        	//alert(data);
		        });
		        
		        
		        

	}

	</script>
	<!--Leaderboard section-->
	<div id="ques-sec">
		<center><p class="header-1">Rules</p></center>
		<ul style="color: white;font-family: 'Raleway','sans-serif';line-height: 2em;overflow: auto;height: 76%;">
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

	<!--time section-->
	<div id="time-sec">
		<center><p class="header-1">Time Remaining</p></center>
		<center><p class="hea2" id="main_rem_time" style="color:white;font-size:1.4em;margin: 3% auto;">0</p></center>
		<center><p class="header-1">Correct Answers</p></center>
		<center><p class="hea2" id="score" style="color:white;margin: 3% auto;">0</p></center>
		<center><p class="header-1">Penalties</p></center>
		<center><p class="hea2" id="penal" style="color:white;margin: 3% auto;">0</p></center>

		<!--div id="time-run">

		</div-->
		<center><p class="header-1" id="pp">Player's Profile</p></center>
		<div id="player-info">
			<span id="p_name"><?echo $p_name;?></span><br>
			<span id="p_year">Year : <?php echo $p_year; ?></span><br>
			<span id="p_email">Email : <?php echo $p_email; ?></span><br>
			<span id="p_college">College : <?php echo $p_college; ?></span><br>
		</div>
	</div>

<center>
	<h2 >Untangle The Tangle</h2>


<div id="gameboard">
	<div id="saving-outer"><div id="saving" style=" background-color: yellow;opacity:0;">saving..</div></div>
	
	<table id="main-body" border="8 solid black" cellpadding="5" cellspacing="5">
		<?php echo $q;?>
		<input type="Submit" id="submit_game" name="submit_game"  Value="Check My Sudoku" style="">
		<input type="Submit" id="finish_game" name="finish_game"  Value="Finish Game" style="">
	</table>
</div>
<div id="user_msg" ><?php echo $msg;?></div>
</center>



<script>
var answered = new Array([]);
function start_timer(){
	qt=89;

	x = setInterval(function() {

	    document.getElementById("rem_time").innerHTML = "Remaining Time : "+qt+" s";
	    if (qt <= 0) {
	        clearInterval(x);
	        $("#user_msg").html("Time's up");
	        setTimeout(function(){$("#user_msg").html(""); }, 3000);
	        $('#cancel-btn').click();
					$("#reset-btn").click();
	        var pr = js_array[cur_i][cur_j];
					$('#'+cur_i+''+cur_j).val(pr);
					penalty++;
					$('#penal').html(penalty);
		        document.getElementById("rem_time").innerHTML = "Remaining Time : "+qt;
		        document.getElementById("question").innerHTML = "Loading..";
			document.getElementById("op1").innerHTML = "Loading..";
			document.getElementById("op2").innerHTML = "Loading..";
			document.getElementById("op3").innerHTML = "Loading..";
			document.getElementById("op4").innerHTML = "Loading..";
	    }
	    qt--;
	}, 1000);
}
function start_main_timer(){
	var r = <?php echo $endTime - time();?>;
	mt = Number(r);
	
	var m,s;
	
	
	y = setInterval(function() {
		m = ("00"+Math.floor(mt/60)).slice(-2);
		s = ("00"+Math.floor(mt%60)).slice(-2);
	    
	    if (mt <= 0) {
	        clearInterval(y);
					window.onbeforeunload = null;
					saveState();
					logout();
					alert("Times Up ...");

	                                 window.location.href = "played.php";
	    }
	    document.getElementById("main_rem_time").innerHTML = m+":"+s;
	    mt--;
	}, 1000);
}
function saveSolved(p_id, value){ 
	$.post("save_state.php",
	{
		save_solved : "true",
		status : value,
		id : p_id

	},
	function(data,status){
			
	});
}
function saveState(){
		//$("#saving").css("visibility","visible");
		$('#saving').fadeTo( 0, 1 );
		var i,j;
		var a = new Array();
		for(i=0;i<9;i++){
			var b = new Array();
			for(j=0;j<9;j++){
				b[j] = $("#"+i+""+j).val();
			}
			a[i]=b;
		}
		var json = JSON.stringify(a);
		var inp = <?php echo json_encode($raw); ?>;
		var inps = JSON.stringify(inp);
		var p_id = "<?php echo $p_id; ?>";

		$.post("save_state.php",
		{
			submit_game: "true",
			i_sud : inps,
		        o_sud : json,
			id : p_id

		},
		function(data,status){
				//alert(data);
				//$("#saving").css("visibility","hidden");
				//$("#saving").hide(2000);
				$('#saving').fadeTo( 500, 0 );
		});
		
		//save Sudoku Solved
			var a = new Array();
			for(i=0;i<9;i++){
				flag=0;
				var b = new Array();
				for(j=0;j<9;j++){
					b[j] = $("#"+i+""+j).val();
					var e = b[j];
					if(!( e=='1' || e=='2' || e=='3' || e=='4' || e=='5'|| e=='6'|| e=='7'|| e=='8'|| e=='9' )){ 
						saveSolved(p_id, "0");
						return;
					} 
				}
				
				a[i]=b;
			}
			var json = JSON.stringify(a);
			
			$.post("save_state.php",
			{
				check_sudoku: "true",
				o_sud : json

			},
			function(data,status){
					var r = JSON.parse(data);
					var res = r[0];
					if(res=="yes"){
						saveSolved(p_id, "1");
					}else{
						saveSolved(p_id, "0");
					}
			});

}


function logout() {
   
	$.post("logout.php",
	{
		logout: "true"

	},
	function(data,status){
			
	});
	alert('Submitted');
    /*var xhr = new XMLHttpRequest();
    xhr.onload = function() {
        document.location = 'played.php';
    }
    xhr.open('GET', 'logout.php', true);
    xhr.send();*/
}
</script>

<div class="popup" data-popup="popup-1">
    <div class="popup-inner">

    	<p id="rem_time" style="float:right; right: 40px;">Remaining Time :</p>
        <h3>Answer me and proceed happily..!!</h3>
        <!--p>Q. What is your name ?</p-->

        <p id="question">Loading...</p>

        <p>
        	<table border="1" id="option-sec" cellpadding="5" cellspacing="5">
        		<tr>
        			<td onclick="select_fun('1')" id="op1">Loading...</td>
        			<td onclick="select_fun('2')" id="op2">Loading...</td>
        		</tr>
        		<tr>
        			<td onclick="select_fun('3')" id="op3">Loading...</td>
        			<td onclick="select_fun('4')" id="op4">Loading...</td>
        		</tr>
        	</table>
        	<span id="alert_msg" style="color:red"></span>


        <!--a data-popup-close="popup-1" href="#">Close</a--></p>
        <p id="btn-sec">
        	<button class="btn" id="submit-btn" onclick="submit_opt()">Submit</button>
        	<button style="visibility:hidden" class="btn" id="cancel-btn" data-popup-close="popup-1">Cancel</button>
        	<button class="btn" id="reset-btn" onclick="reset_opt()">Reset</button>
        </p>
        <!--a class="popup-close" data-popup-close="popup-1" href="#">x</a-->
    </div>
</div>
<script>
function initArr(){
	var m,n;
	var old_p = <?php  if($old_player) echo '1'; else echo '0'; ?>;
	if(old_p=='1'){
		var id = '<?php echo $p_id; ?>';
		
		$.post("get_data.php",
		{
			action : "get_it",
			pid : id
	
		},
		function(data,status){
			answered = JSON.parse(data);
			for(m=0;m<9;m++){
				for(n=0;n<9;n++){
					if(answered[m][n]=="1"){
						$("#"+m+n).removeAttr("data-popup-open");
					}
				}
				
			}
		});
		
	}else{
		for(m=0;m<9;m++) {
			var d = new Array();
			for(n=0;n<9;n++) {
				d[n]=0;
			}
			answered[m]=d;
		}
	}
	
	
}


$(document).ready(function(){

	if(window.innerHeight <= 768){
		$('tr').attr('style', 'height:10px;');
	} else {
		$('tr').attr('style', 'height:30px;');
	}

	initArr();
	start_main_timer();
	
	$('#score').text(my_score);
	$('#penal').text(penalty);

	

	//Disable cut copy paste
	 $('body').bind('cut copy paste', function (e) {
			 e.preventDefault();
	 });

	 //Disable mouse right click
	 $("body").on("contextmenu",function(e){
			 return false;
	 });


    $(".secret").click(function(){
    	
    	if(answered[cur_i][cur_j] == 0){
    		$("#submit-btn").prop('disabled', true);
    		answered[cur_i][cur_j]=1;
	    	
	        $.post("temp.php",
	        {
	          name: "question"
	        },
	        function(data,status){
	            var d = jQuery.parseJSON(data);
	            var q = document.getElementById('question');
	            q.innerHTML = d[0];
	            var ans = d[1];
	             var op1 = document.getElementById('op1');
	            op1.innerHTML = ans[0];
	             var op2 = document.getElementById('op2');
	            op2.innerHTML = ans[1];
	             var op3 = document.getElementById('op3');
	            op3.innerHTML = ans[2];
	             var op4 = document.getElementById('op4');
	            op4.innerHTML = ans[3];
	            hs = d[2];
	            $("#submit-btn").prop('disabled', false);
	            start_timer();
	        });
	        $("#"+cur_i+cur_j).removeAttr("data-popup-open");
	    }

    });


    $("#finish_game").click(function(){
    	
		 window.onbeforeunload = null;
		 saveState();
		 logout();
		 
         	window.location.href ='played.php';

       
       
    });

		$("#submit_game").click(function(){
			var i,j;
			
			var a = new Array();
			for(i=0;i<9;i++){
				flag=0;
				var b = new Array();
				for(j=0;j<9;j++){
					b[j] = $("#"+i+""+j).val();
					var e = b[j];
					if(!( e=='1' || e=='2' || e=='3' || e=='4' || e=='5'|| e=='6'|| e=='7'|| e=='8'|| e=='9' )){ 
						var flag = 6;
						var nt = setInterval(function(){
							$("#user_msg").html("Oops..You Missed it.");
							$("#user_msg").css("color","white");
							if(flag==1) {
								clearInterval(nt);
								$("#user_msg").html("");
								$("#user_msg").css("color","white");
							}
							flag--;
						},500);
						return;
						
					} 
				}
				
				a[i]=b;
			}
			var json = JSON.stringify(a);
			
			$.post("save_state.php",
			{
				check_sudoku: "true",
				o_sud : json

			},
			function(data,status){
					
					var r = JSON.parse(data);
					var res = r[0];
					if(res=="yes"){
							$("#user_msg").html("Hurrey... Successfully Solved..");
							$("#user_msg").css("color","white");
					}else{

						var flag = 6;
						var nt = setInterval(function(){
							$("#user_msg").html("Oops..You Missed it.");
							$("#user_msg").css("color","white");
							if(flag==1) {
								clearInterval(nt);
								$("#user_msg").html("");
								$("#user_msg").css("color","white");
							}
							flag--;
						},500);


					}
			});
		});

	});
	
	
	
		$(function() {
	    //----- OPEN
	    $('[data-popup-open]').on('click', function(e)  {
	        var targeted_popup_class = jQuery(this).attr('data-popup-open');
	        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

	        e.preventDefault();

		    });

	    //----- CLOSE
	    $('[data-popup-close]').on('click', function(e)  {
	        var targeted_popup_class = jQuery(this).attr('data-popup-close');
	        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

	        e.preventDefault();
	    });
	});

	function select_fun(id){
		$("td").removeClass("option-selected");
		$("#op"+id).addClass("option-selected");
		s_id = id;

	}
	function reset_opt(){
		$("td").removeClass("option-selected");
		s_id=0;
	}
	/*window.onbeforeunload = function() {
	  return 'You have not yet saved your work.Do you want to continue? Doing so, may cause loss of your work' ;
	}*/
	$(window).blur(function(e) {
		window.onbeforeunload = null;
		saveState();
		logout();
		alert("Game over due to violation of rule (You have switched between tabs) ...");

                 window.location.href = "played.php";
	});
	
        
	

</script>
</body>
</html>
