<?php
require('connect.php');
require('func.php');
date_default_timezone_set('Asia/Kolkata');
$date = time();
if(isset($_POST['submit_game'])){
	    $id = $_POST['id'];
			$i_sud = $_POST['i_sud'];
			$o_sud = $_POST['o_sud'];
			


			$query = "SELECT * FROM `game` WHERE `user_id`= '$id'";
			if($query_run = mysqli_query($mysqli, $query)){
				if(mysqli_num_rows($query_run)>=1){
					$row = mysqli_fetch_assoc($query_run);
					$penalty = $row['ans_completed'];
					$ret = 2*$penalty + $date;
					$query1 = "UPDATE `game` SET `input_sudoku`='$i_sud',`output_sudoku`='$o_sud',`total_time`='$date', `ans_completed` = '$ret'  WHERE `user_id`= '$id'";
				}else{
					$query1 = "INSERT INTO `game`(`user_id`, `input_sudoku`, `output_sudoku`, `total_time`) VALUES ('$id','$i_sud','$o_sud','$date')";
				}
				$query_run = mysqli_query($mysqli, $query1);
			}
}

if(isset($_POST['check_sudoku'])){
	$r = $_POST['o_sud'];
	$s = json_decode($r);
	
	if(checkMySudoku($s)){
		$r = array("yes");
		echo json_encode($r);
	}else{
		$r = array("no");
		echo json_encode($r);
	}
}

if(isset($_POST['save_solved'])){
	$status = $_POST['status'];
	$id = $_POST['id'];
	$query = "UPDATE `game` SET `sudoku_solved`= '$status' WHERE `user_id`= '$id'";
	if(mysqli_query($mysqli,$query)){
		echo 'saved';
	}else{
		echo 'failed';
	}
}
?>
