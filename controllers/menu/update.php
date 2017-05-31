<?php 
	require_once('../../app/lib/change_name.php');
 	require_once('../../models/m_menus.php');
 	$menus = new m_menus;
	$name = $_POST['name'];
    $alias = changeTitle($name);
    $id_parent = $_POST['id_parent'];
    $sort_oder = $_POST['sort_oder'];
 	$update_at = gmdate('Y/m/d H:i:s',time());
 	$id = $_POST['id'];
 	$menus->update_menus($name, $alias,$id_parent, $sort_oder,$update_at,$id);
 	header('location:../../views/admin/layouts/index.php?page=list_menu');
?>