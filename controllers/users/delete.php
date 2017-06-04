<?php  
	require_once ("models/m_users.php");
	$id = $_GET["id"];
	setcookie('deleted', 'Deleted successfully', time() + 1);
 	$users = new M_users;
 	$users->delete_users($id);
 	header('location:admin.html?page=list_users');
?>