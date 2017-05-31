<?php  
	require_once __DIR__."../../../models/m_users.php";
	$id = $_GET["id"];
 	$users = new M_users;
 	$users->delete_users($id);
 	header('location:../../views/admin/layouts/index.php?page=list_users');
?>