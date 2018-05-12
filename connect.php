<?php  
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'otomata';

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if(!$conn){
		echo "Koneksi Error".mysqli_connect_error();
	}

?>