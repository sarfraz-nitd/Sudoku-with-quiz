<?php
require('func.php');
require 'nothing_here.php';
if(isset($_POST['action'])){
	$id = $_POST['pid'];
	$ans = array();
	$query = "SELECT * from  `user` where `id` = '$id' ";
	if($query_run = mysqli_query($mysqli, $query)){
		if(mysqli_num_rows($query_run)>=1){
			$row = mysqli_fetch_assoc($query_run);
			$assigned = $row['assigned_sudoku'];
			$raw = $mainArray[$assigned];
			
			$query = "SELECT * FROM `game` WHERE `user_id`='$id'";
			if($query_run = mysqli_query($mysqli, $query)){
				if(mysqli_num_rows($query_run)>=1){
					$row = mysqli_fetch_assoc($query_run);
					$out = $row['output_sudoku'];
					$outp = json_decode($out);
					
					for($i=0;$i<9;$i++){
						$ar = array();
						for($j=0;$j<9;$j++){
							if($raw[$i][$j]==''){
								$ar[$j] = 0;
							}else{
								if($outp[$i][$j]=='?'){
									$ar[$j] = 0;
								}else{
									$ar[$j] = 1;
								}
							}
						}
						$ans[$i] = $ar;
					}
					echo json_encode($ans);
					
				}
			}
			
		}
	}
}

?>