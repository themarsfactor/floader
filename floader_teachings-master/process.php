<?php 
print_r($_FILES['floader']);

if (isset($_POST['floader'])) {

	$allowed_type  = array('images/png, images/jpeg, images/jpg');
	$type = $_FILES['photo']['type'];

	if (in_array($allowed_type, $type)) {
		$user_id = $_SESSION['id'];

		if (!is_dir('hello/{$user_id}')) {
			mkdir('hello/{$user_id}');
		}

		$storage = 'hello/{$user_id}'.$_FILES['photo']['name'];
		if (move_uploaded_file($_FILES['photo']['temp_name'], $storage)) {
			save_profile_photo($storage);
		}

			# code...
		}else{
			echo "invalid image! upload the requested format";
		}	# code...
}