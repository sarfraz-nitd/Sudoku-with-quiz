<?php

require('connect.php');
$res = array();
$query = "SELECT * FROM `game` WHERE `sudoku_solved` = '1' order by `ans_completed` desc";
if($query_run = mysqli_query($mysqli, $query)){
	if(mysqli_num_rows($query_run)>0){
		$i=0;
		while($row = mysqli_fetch_assoc($query_run)){
			$d = array(); 
			 $d[0]=$row['user_id'];
			  $en = $row['total_time'];
			
			 $d[2]=$row['correct_ans'];
			 $d[3]=$row['penalty'];
			
			
			
			$pt = $d[3]*2*60;
			$e =  $en + $pt; //date("H:i:s", strtotime('+'.$pt.' minutes', $time));
			
			$d[1] = date("H:i:s", $en);
					
			$d[4] = date("H:i:s", $e);
			$res[$i] = $d;
			$i++; 
		}
	}
}

$q="";
for($i=0;$i<count($res);$i++){
$d = $res[$i];
$q .="<tr>";
$q .= "<td>".$d[0]."</td>";
$q .= "<td>".$d[1]."</td>";
$q .= "<td>".$d[2]."</td>";
$q .= "<td>".$d[3]."</td>";
$q .= "<td>".$d[4]."</td>";
$q.="</tr>";

}
?>
<table border="3px solid black" cellspacing="5" cellpadding="5">
<tr>
<th>User Id</th>
<th>End Time</th>
<th>Score</th>
<th>Penalty</th>
<th>Time Elapsed</th>
</tr>
<?php echo $q; ?>
</table>