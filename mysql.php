<?php

$con=new mysqli('localhost','root','','database');

if($con->connect_errno)
{

	echo $con->connect_errno;
	die();
}

else
{

	echo "database connected successfully";
}



?>