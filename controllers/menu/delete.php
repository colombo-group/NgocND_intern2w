<?php  
 	require_once ("models/m_menus.php");
 	$id = $_GET["id"];
	setcookie('deleted', 'Deleted successfully', time() + 1);
 	$menus = new M_menus;
 	$menus->delete_menus($id);
 	header('location:index.php?page=list_menu');
?>