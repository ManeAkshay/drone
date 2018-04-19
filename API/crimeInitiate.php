<?php

require_once '../db_connect.php';

$arr['status'] = "Invalid post data";
if(isset($_POST)){
	if(isset($_POST['victim_id']) && isset($_POST["location_id"])){
		$victim_id = $_POST['victim_id'];
		$location_id = $_POST['location_id'];

		$query = "INSERT INTO crime (`victim_id`, `location_id`) VALUES ('".$victim_id."','".$location_id."')";
		if($mysqli->query($query)){
			$arr['status'] = "ok";
			$arr['crime_id'] = $mysqli->insert_id;
		}else{
			$arr['status'] = "not ok";
		}
	}
}

echo json_encode($arr);

?>