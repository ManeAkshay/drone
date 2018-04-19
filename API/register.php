<?php

require_once '../db_connect.php';
$arr = array();
if($_POST){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$mobile_no = $_POST['mobile_no'];
	$emergency_no = $_POST['emergency_no'];

	$query = "INSERT INTO victim  (`fname`,`lname`,`mobile_no`,`emergency_no`,`email`,`password`) VALUES ('".$fname."','".$lname."','".$mobile_no."','".$emergency_no."','".$email."','".$password."')";
	if($mysqli->query($query)){
		$arr['status'] = "ok";
		$arr['victim_id'] = $mysqli->insert_id;
	}else{
		$arr['status'] = "error in query execution";
	}
}else{
	$arr['status'] = "Error data";
}

echo json_encode($arr);


?>