<?php
//mysqli_connect('hostname', 'username', 'password', 'dbname')
//$connection is the variable
$connection = mysqli_connect('localhost', 'root', '', 'ecomphp');
if (!$connection) {
	echo "Error: Unable to connect to MySQL" , PHP_EOL;
	echo "Debugging errno: " , mysqli_connect_errno() , PHP_EOL;
	echo "Debugging errno: " , mysqli_connect_errno() , PHP_EOL;
	exit;
}
?>
