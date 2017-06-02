<?php  
	require_once __DIR__."../../../models/m_users.php";
	$id = $_GET["id"];
	setcookie('deleted', 'Deleted successfully', time() + 10);
 	$users = new M_users;
 	$users->delete_users($id);
 	header('location:../../admin/layouts/index.php?page=list_users');
?>