<?php

$host= "project-db-instance-1.c50cswia0i3u.us-west-2.rds.amazonaws.com";
$username= "root";
$password = "redhat123";

$db_name = "registration_form";

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}