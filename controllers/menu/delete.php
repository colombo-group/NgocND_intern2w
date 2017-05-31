<?php  
 	require_once __DIR__."../../../models/m_menus.php";
 	$id = $_GET["id"];
 	$menus = new M_menus;
 	$menus->delete_menus($id);
 	header('location:../../admin/layouts/index.php?page=list_menu');
?>