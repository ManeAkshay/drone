<?php

require_once 'db_connect.php';

if(isset($_POST)){
	if(isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = "SELECT * FROM pstation WHERE ps_number = '".$username."' AND password = '".$password."';";

		$result = $mysqli->query($query);
		if($result->num_rows > 0){
			$_SESSION['logged'] = true;
			$_SESSION['loggedData'] = $result->fetch_assoc();
			header("Location: dashboard.php");
 		}else{
 			$_SESSION['loginError'] = true;
 			header("Location : login.php");
 		}
	}
}


require_once 'head.php';
require_once 'assets/loginStyle.php';

?>
<div id="back">
	<div class="row" id="login">
		<div class="col-md-offset-2 col-md-8" id="loginBox">
			<div class="materialContainer"> 
			   <div class="box">
			   	<div class="alert alert-warning" 
			   	 <?php echo (isset($_SESSION['loginError']))? "" : "style='display:none'";
			   	 		 unset($_SESSION['loginError']);
			   	 		  ?> > 
			   		<a href="#" class="close" data-dismiss="alert">&times;</a>
					<strong>Unsuccessful!</strong> Invalid username or password.
				</div>
			      <div class="title">LOGIN</div>
			      <form method="POST">
				      <div class="input">
				         <label for="name">Police Station Number</label>
				         <input type="text" name="username" id="name">
				         <span class="spin"></span>
				      </div>

				      <div class="input">
				         <label for="pass">Password</label>
				         <input type="password" name="password" id="pass">
				         <span class="spin"></span>
				      </div>

				      <div class="button login">
				         <button><span>GO</span> <i class="fa fa-check"></i></button>
				      </div>
				 	</form>
			      <a href="" class="pass-forgot">Login as Guest</a>
			   </div>

			</div>
		</div>
	</div>
</div>