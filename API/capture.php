<?php
require_once '../db_connect.php';
//var_dump($_POST);
$crime_id = '';
if(isset($_POST['id']) && isset($_POST['lat']) && isset($_POST['lon'])){
	if (!file_exists("../assets/img/droneImg/".$_POST['id'])) {
		mkdir("../assets/img/droneImg/".$_POST['id']);	
		echo 'Folder is Created';
	}
	$_SESSION['crime_id'] = $_POST['id'];
	//var_dump($_SESSION);
	echo 'Folder already created';
	$lat = $_POST['lat'];
	$lon = $_POST['lon'];
}
if(isset($_SESSION['crime_id'])){
	$crime_id = $_SESSION['crime_id'];
}

//var_dump($_SESSION);
if(isset($_FILES)){
	//echo "Hello";
	//echo $crime_id;
	$t = time();
	$target_dir = "assets/img/droneImg/".$crime_id."/";
	//echo $target_dir;
	$target_file = $target_dir .''.$t.''. basename($_FILES["fileToUpload"]["name"]);
	//echo $target_file;
	$uploadOk = 1;
	// Check if image file is a actual image or fake image
	//var_dump($_FILES);
	// Check if file already exists
	if (file_exists("../".$target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "../".$target_file)) {
	        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

	        $query = "INSERT INTO location (`latitude`,`longitude`,`crime_id`) VALUES ('".$lat."','".$lon."','".$crime_id."')";
	        if($mysqli->query($query)){
	        	$location_id = $mysqli->insert_id;
	        	$query = "INSERT INTO proof (`path`,`location_id`,`crime_id`) VALUES ('".$target_file."','".$location_id."','".$crime_id."')";
	        	if($mysqli->query($query)){
	        		echo "Inserted Successfully";
	        	}
	        }
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}

}
?>