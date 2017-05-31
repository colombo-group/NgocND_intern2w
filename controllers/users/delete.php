<?php  
	require_once __DIR__."../../../models/m_users.php";
	$id = $_GET["id"];
 	$users = new M_users;
 	$users->delete_users($id);
 	header('location:http://localhost:8888/NguyenDaiNgoc_inter2w/views/admin/layouts/index.php?page=list_users');
?>