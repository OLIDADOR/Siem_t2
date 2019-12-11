<?php
if($_SESSION['login']==true){
  header('Location: pages/homepages/index_login.php');
}
else{
  header('Location: pages/homepages/index_no_login.php');
}
?>
