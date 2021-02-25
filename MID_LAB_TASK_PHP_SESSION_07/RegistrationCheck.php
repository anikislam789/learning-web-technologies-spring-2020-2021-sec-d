<?php


    session_start();

if ( isset ( $_POST [ 'submit' ] ) ) {

	$name = $_POST [ 'name' ];
	$email =$_POST [ 'email' ];
	$username =$_POST [ 'user_name' ];
	$usernamelength = strlen($username);
	$password =$_POST [ 'password' ];
	$passwordlength = strlen($password);
	$confirmpassword = $_POST [ 'confirmpassword' ];
	if(isset($_POST['radio'])){
			  $gender =  $_POST [ 'radio' ]; 
			}
    $day    =   $_POST [ 'day'] ;
	$month  = $_POST [ 'month'];
	$year   = $_POST [ 'year' ] ;
    $dateofbirth = [ $day , $month , $year ];



    if ( $name == "" || $email == "" || $username == "" || $password == "" || $confirmpassword == "" || $gender == "" || empty($dateofbirth)) {
 	echo "Filled all the file... ";
 }
 elseif ( $password != $confirmpassword) {
 	echo "Password did not match with confirm Password ";
 }
 elseif ( !preg_match("/[@#$%]/", $password) ) {
 	echo "Password Should contain special cherecters";
 }
 elseif ( $usernamelength < 2 && $passwordlength < 8) {
 	echo "username should be more than 2 words and password should be more than 8 words......";
 }
 else{
 	$user = [	
			                'name'=>$name, 
							'user_name'=>$username, 
							'email'=> $email,
							'password'=>$password, 
							'gender'=> $gender,
							'date_barth'=> $dateofbirth,

						];

	$_SESSION['currentuser'] = $user;
    header('location: Login.html');
 }

}

?>
