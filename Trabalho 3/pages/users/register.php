<?php
  include_once('../../config/init.php');
	if (isset($_SESSION['form_values'])) {
	  $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
	  unset($_SESSION['form_values']);
	}
  $smarty->display('users/register.tpl');
?>
