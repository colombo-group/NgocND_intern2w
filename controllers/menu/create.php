<?php 
	require_once('../../app/lib/change_name.php');
 	require_once('../../models/m_menus.php');
	$id= "";
    $name = $_POST['name'];
    $alias = changeTitle($name);
    $sort_oder = $_POST['sort_oder'];
    $id_parent = $_POST['id_parent'];
    $created_at = gmdate('Y/m/d H:i:s',time()); 
    $update_at = gmdate('Y/m/d H:i:s',time());
    $menus =  new M_menus();
    $menus->create_menus($id,$name,$alias,$id_parent,$sort_oder,$created_at,$update_at);
    header('location:http://localhost:8888/NguyenDaiNgoc_inter2w/views/admin/layouts/index.php?page=list_menu');
?>