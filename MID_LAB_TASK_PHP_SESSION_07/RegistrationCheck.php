<?php
	session_start();

	if(isset($_POST['submit'])){

		$name 		         = $_POST['name'];
		$email 		         = $_POST['email'];
		$username            = $_POST['username']
		$password 	         = $_POST['password'];
		$conformpassword 	 = $_POST['conformpassword'];
		$Gender              = $Gender['Gender']

		if($name == "" || $email == "" || $username == "" || $password == "" || $conformpassword == "" || $Gemder == " "){
			echo "invalid information...please try again!";
		}else{

			if($password == $conformpassword){

				$user = [
							'name'		       =>$name,  
							'email'		       =>$email,
							'username'	       =>$username, 
							'password'	       =>$password
							'conformpassword'  =>$conformpassword
							'Gemder'           =>$Gemder
						];

				$_SESSION['abc'] = $user;
				
				header('location: home.html');
			}else{
				echo "password & re-type password mismatch...";
			}
		}
	}
?>