	<?php
require_once '../db_connect.php';

if($_GET){
	if(isset($_GET['crime_id'])){
		$crime_id = $_GET['crime_id'];
		$query = "SELECT * FROM proof WHERE crime_id = $crime_id ORDER BY `ts` desc";
		$result= $mysqli->query($query);
		if($result->num_rows > 0){
				foreach ($result as $proof) {
					$row[] = $proof;
				}
		}
		echo json_encode($row); 
	}
}



?>