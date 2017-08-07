<?
require('connect.php');
require('func.php');
date_default_timezone_set('Asia/Kolkata');
$date = time(); //date("Y/m/d h:i:s a");
	if($_POST['save']){
		$pen = $_POST['pen'];
		$score = $_POST['sc'];
		$id = $_POST['id'];


			$query = "SELECT * FROM `game` WHERE `user_id` = '$id'";
			if($query_run = mysqli_query($mysqli, $query)){
				if(mysqli_num_rows($query_run)>=1){
					$query = "UPDATE `game` SET `total_time`='$date',`correct_ans`='$score',`penalty`='$pen' WHERE  `user_id` = '$id'";
				}else{
					//$query = "INSERT INTO `game`(`user_id`,`total_time`, `correct_ans`, `penalty`) VALUES ($id','$date','$score','$pen')";
					echo $query = "INSERT INTO `game`( `user_id`, `total_time`, `correct_ans`, `penalty`) VALUES ('$id','$date','$score','$pen')";
				}
				if($query_run = mysqli_query($mysqli, $query)){
					echo 'done';
				}
			}
	}

	
?>
