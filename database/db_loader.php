<<?php 
$host = 'localhost';
$user = 'root';
$db_password = '';
$database_name = 'load_pro';

$conn = mysqli_connect($host, $user, $db_password, $database_name) or die ('could not connect');

if ($conn) {

	$user_create = "CREATE TABLE IF NOT EXISTS floader( 

	id INT AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR (64) NOT NULL,
	lastname VARCHAR (64) NOT NULL,
	age VARCHAR (32) NOT NULL,
	username VARCHAR (64) NOT NULL,
	phonenumber VARCHAR (64) NOT NULL,
	email VARCHAR (64) NOT NULL,
	password VARCHAR (64) NOT NULL,
	profile_photo VARCHAR(128) NOT NULL,
	date_created TIMESTAMP NOT NULL

)";
		$user_create_result = mysqli_query($conn, $user_create);

		if ($user_create_result) {
			echo "welcome";

					
		
		}
		else{
			echo mysqli_error($conn);
		}
	# code...
}else{
	die('could not connect');

}



