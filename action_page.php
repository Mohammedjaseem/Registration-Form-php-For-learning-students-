<?php
define('db_server','localhost');
define('db_username','root');
define('db_password','');
define('db_database','mydb');

// Create connection
$conn=mysqli_connect(db_server,db_username,db_password,db_database);
if($conn==true)
{
	echo "";
}else{
	echo "error";
}
?>