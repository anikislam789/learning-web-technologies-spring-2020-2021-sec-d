<?php

include 'dbcon.php';

$id = $_GET['id'];

$q = " DELETE FROM `client` WHERE id = $id ";

mysqli_query($con, $q);

header('location:manage client.php');

?>