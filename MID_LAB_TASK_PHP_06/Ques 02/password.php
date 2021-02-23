><?php
	session_start();
	
	if(isset($_POST['submit'])){

		
        $Currentpassword 	= $_POST['password'];
        $Newpassword        = $_POST['Newpassword']
        $Retypepassword     = $_POST['Retypepassword']
		
		if($password == "" || $Newpassword == "" || $Retypepassword == "" ){
			echo "Null submission";
		}else{

			$user = $_SESSION[' '];

			if($Currentpassword == $user['Currentpassword'] && $Newpassword == $user['Newpassword' && $Retypepassword == " " ]){
				
				$_SESSION['status'] = true;
			

			}else{
				echo "invalid user...";
			}
		}
	}
?>