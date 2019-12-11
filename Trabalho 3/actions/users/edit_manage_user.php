
<?php
session_start();
//grava os dados do user selecionado em variáveis de sessão
$id = $_POST['check'];
//echo $id;

$conn = pg_connect("host=db.fe.up.pt dbname=siem1911 user=siem1911 password=siem2019");
$query = "set schema 'Siem';";	
pg_exec($conn, $query);
if(!$conn) {
    echo "There is an error in conn!";
}
if($id){
$query = "select * from credentials where id = '" . $id . "' ;" ;
//echo "query: " . $query . "<p>"; 
$result = pg_exec($conn, $query);
if(!$result) {
    echo "There is an error!";
}

//echo $result;

$row = pg_fetch_row($result, 0);


if (isset($_POST['edit'])) {
    $_SESSION['m_id'] = $row[0];
	$_SESSION['m_user'] = $row[1];
	$_SESSION['m_email'] = $row[3];
	$_SESSION['m_saldo'] = $row[4];
	$_SESSION['m_admin'] = $row[5];
	pg_close($conn);
	header("Location: ../Pages/edit_selected_user.php");
    }
 elseif (isset($_POST['delete'])) {
    $query = "DELETE FROM credentials where id = '" . $id . "' ;" ;
	//echo "query: " . $query . "<p>"; 
	$result = pg_exec($conn, $query);
	if(!$result) {
		echo "There is an error!";
	}
   pg_close($conn);
   header("Location: ../Pages/user_management.php");
    }
}
elseif (isset($_POST['add'])) {
    pg_close($conn);
	header("Location: ../Pages/add_user.php");
  }

else{
	header("Location: ../Pages/user_management.php");
}	
?>
