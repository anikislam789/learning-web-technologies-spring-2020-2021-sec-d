<?php

	//print_r($_GET['myemail']);
	//print_r($_POST);
	
	if(isset($_POST['submit'])){

		$email 		= $_POST['myemail'];

		if($email == ""){
			echo "null submission...";
		}else{
			echo $email."<b>";

		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Email</legend>
			email: <input type="text" name="myemail" value="<?php echo $email; ?>"> <br>
			
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>