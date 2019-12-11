<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');  

$id = $_POST['check'];



if (isset($_POST['edit'])) {
	$_SESSION['m_id'] = $id;
	header("Location: $BASE_URL" . '/pages/users/edit_user.php');
    }
 elseif (isset($_POST['delete'])) {
	$temp = deleteuser($id);
	if(!$result) {
		echo "There is an error!";
	}
   header("Location: $BASE_URL" .'/pages/users/user_management.php');
    }

elseif (isset($_POST['add'])) {
	header("Location:  $BASE_URL" . '/pages/users/add_user.php');
  }

else{
	header("Location:  $BASE_URL" . '/pages/users/user_management.php');
}	
?>