<?php
/*if (!@($mysqli = new mysqli("localhost", "root", "", "sudoku"))||$mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else
	//echo 'Ok.';
*/?>


<?php
if (!@($mysqli = new mysqli("localhost", "ems_plus", "ems_plus", "ems_plus"))||$mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else
	//echo 'Ok.';
?>