<?php  
 	require_once('../../../models/m_menus.php');
 	$id = $_GET["id"];
 	$menu = new M_menus;
 	$menu->delete_menus($id);
 	header('location:http://localhost:8888/NguyenDaiNgoc_inter2w/views/admin/layouts/index.php?page=list_menu');
?>