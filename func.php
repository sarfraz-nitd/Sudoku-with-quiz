<?php
require('connect.php');
function getFilledCount($c,$r){
	$ct=0;
	for($i=0;$i<9;$i++){
		if($r[$i][$c]!='') $ct++;
	}
	return $ct;
}
function getFSecretRaw($j,$raw){
	/*$fc = getFilledCount($j, $raw);
	$place = 8 % $fc;
	$t=-1;
	for($i=0;$i<9;$i++){
		if($raw[$i][$j]!='') $t++;
		if($t==$place) return $i;
	}*/
	for($i=0;$i<9;$i++){
		if($raw[$i][$j]!='') return $i;
	}
}
function getSSecretRaw($j,$raw){
	/*$fc = getFilledCount($j, $raw);
	$place =  $fc-1;
	$t=-1;
	for($i=0;$i<9;$i++){
		if($raw[$i][$j]!='') $t++;
		if($t==$place) return $i;
	}*/
	for($i=8;$i>=0;$i--){
		if($raw[$i][$j]!='') return $i;
	}
}

function user_exist($email){
	global $mysqli;
	$query = "SELECT * FROM `user` WHERE  `email` = '".$email."'";
	if($query_run = mysqli_query($mysqli, $query)){
		if(mysqli_num_rows($query_run) >=1){
			return true;
		}
	}
	return false;
}
function checkMySudoku($r){
    if(!RowCheck($r) || !ColumnCheck($r) || !SquareCheck($r)) return false;
	else return true;
}


function check($y){       //1 D array
	for($i=0;$i<9;$i++){
		for($j = $i+1; $j<9;$j++){
			if($y[$j]==$y[$i]) return false;

		}

	}
	return true;
}

function RowCheck($x){        //2 D array

	$temp = array();
	for($i=0;$i<9;$i++){
		for($j=0;$j<9;$j++){
			$temp[$j]= $x[$i][$j];
		}
		if(!check($temp)) return false;
	}
	return true;
}
function ColumnCheck($x){    // 2D array
	$temp = array();
	 for($i=0;$i<9;$i++){
		 for($j=0;$j<9;$j++){
			 $temp[$j]= $x[$j][$i];
		 }
		  if(!check($temp)) return false;
	 }
   return true;
}

function SquareCheck($x){      // 2D array

	$temp = array();
	  for($column=0; $column <= 6 ; $column += 3){
			for($row=0; $row<=6; $row+= 3){
				$k=0;
				for($i=0; $i<3; $i++ ){

					for($j=0;$j<3;$j++){
						$temp[$k++]= $x[$row + $i][$column + $j];
					}
				}
				if(!check($temp)) return false;
			}
		}
		return true;
}


function send_ver_mail($name, $email, $link){
	$msg = "<html><table><tr><td>
				Hey $name,<br>
				You have successfully registered for Sudoku.. <br><br>
				Please click on the link to confirm your registration.<br><br>
				".$link."
				<h3>Terra Technica'17</h3>
				Event Name - Sudoku <br><br>
				Venue - National Institute Of Technolgy, Delhi.
				<br><br>
				For any further query, contact :<br>
				Sarfraz Ahmad (7065152946)<br>
				Tarun Talreja (7042073946)

		</tr></td></table>
				</html>";

		$subject = 'Sudoku Registration';
		$from = 'noreply@terratechnica.in';
		$to = $email;
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.$from."\r\n".
		    'X-Mailer: PHP/' . phpversion();

		// Compose a simple HTML email message
		if(mail($to, $subject, $msg, $headers)){
		    return true;
		} else{
		    return false;
		}
}

function getUserId($email){
	global $mysqli;
	$query = "SELECT * FROM `user` WHERE `email` = '$email'";
	if($query_run = mysqli_query($mysqli, $query)){
		if(mysqli_num_rows($query_run)>=1){
			$row = mysqli_fetch_assoc($query_run);
			return $row['id'];
		}
	}
	return false;
}
	$r = array(
			array('8','1','6','7','9','3','2','4','5'),
			array('5','2','7','4','6','8','3','9','1'),
			array('3','9','4','5','2','1','7','6','8'),
			array('9','4','2','6','1','7','5','8','3'),
			array('7','6','5','8','3','9','4','1','2'),
			array('1','3','8','2','4','5','6','7','9'),
			array('4','5','1','3','8','6','9','2','7'),
			array('2','7','9','1','5','4','8','3','6'),
			array('6','8','3','9','7','2','1','5','4'),
		);
		/*if(checkMySudoku($r)) echo 'yes';
		else echo 'no';*/

?>
