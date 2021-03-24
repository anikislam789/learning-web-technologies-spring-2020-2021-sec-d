<?php

$conn = mysqli_connect('localhost:8080', 'root', '', 'product_db');
	if($conn == null){
		die('DB connection error!');
	}

if(isset($_POST['submit'])){

        $name   = $_POST['name'];
        $bprice  = $_POST['bprice'];
        $sprice  = $_POST['sprice'];

        $sql = "insert into users producs($name,$bprice,$sprice)";
        mysqli_query($conn, $sql);


    }



?>