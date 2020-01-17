<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');  

$id = $_POST['check'];



if (isset($_POST['edit'])) {
	if(!empty($id) or is_numeric($id)){
	$_SESSION['m_id'] = $id;
	header("Location: $BASE_URL" . '/pages/store/edit_game.php');
    }
	else{
		header("Location: $BASE_URL" .'/pages/store/game_management.php');
	}
}
 elseif (isset($_POST['delete'])) {
	$temp = deletegame($id);
	if(!$result) {
		echo "There is an error!";
	}
   header("Location: $BASE_URL" .'/pages/store/game_management.php');
    }

elseif (isset($_POST['add'])) {
	header("Location:  $BASE_URL" . '/pages/store/add_game.php');
  }

else{
	header("Location:  $BASE_URL" . '/pages/store/game_management.php');
}	
?>