<?php 

$hostname = 'localhost';
$username = 'root';
$password = 'Admin1234#@';
$db_name = 'nxw_website';

$db_connection = mysqli_connect($hostname,$username,$password,$db_name);

if(!$db_connection)
{
	echo "<script>alert('Database Configuration Error')</script>";
	echo "Database Connection Failed with error:".mysqli_connect_error();
}
else
{
	echo "";

}

?>