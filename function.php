<?php 
function save_profile_photo($storage){

require "database/db_loader.php";

$user_id = $_SESSION['id'];
$query = "UPDATE floader SET profile_photo = '$storage' WHERE id = &user_id LIMIT 1";
$result = mysqli_query($conn, $queru);

if ($result) {
	$_SESSION['profile_photo'] = $storage;
	echo "uploaded successfully";	# code...
}
else{
	echo "invalid photo";
}


}
 ?>