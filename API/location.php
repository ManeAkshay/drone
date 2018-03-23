<?php
require_once '../db_connect.php';

if($_POST){
	//var_dump($_POST);
	if(isset($_POST['lat']) && isset($_POST['lon']) && isset($_POST['crime_id'])){
		$lat = $_POST['lat'];
		$lon = $_POST['lon'];
		$crime_id = $_POST['crime_id'];
		$query = "INSERT INTO location (`latitude`,`longitude`,`crime_id`) VALUES ($lat,$lon,$crime_id)";
		//echo $query;
		if($mysqli->query($query)){
			echo json_encode(array("status"=>"Ok","location_id"=>$mysqli->insert_id));	
		}else{
			echo 'Not Ok';
		}
	}
}