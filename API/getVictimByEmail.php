<?php

require_once '../db_connect.php';
$arr = array();
if(isset($_POST['email'])){
	$email = $_POST['email'];
	$query = "SELECT * FROM  victim WHERE email ='".$email."'";
	$result = $mysqli->query($query);
	//echo $query;
	if($result->num_rows > 0){
		$arr['status'] = "ok";
		$arr['victim'] = $result->fetch_assoc();
	}else{	
		$arr['status'] = "not ok";
		$arr['error'] = "Email Id not exits";
	}
}else{
	$arr['status'] = "not ok";
	$arr['error'] = "Invalid post request";
} 
echo json_encode($arr);
 ?>