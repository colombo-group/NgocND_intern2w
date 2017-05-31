<?php 
	require_once('../../app/lib/change_name.php');
 	require_once('../../models/m_list_foods.php');
	$id= "";
    $name = $_POST['name'];
    $alias = changeTitle($name);
    $price = $_POST['price'];
    $id_menu = $_POST['id_menu'];
    $description = $_POST['description'];
    $sort_oder = $_POST['sort_oder'];
    $special = $_POST['special'];
    $created_at = gmdate('Y/m/d H:i:s',time()); 
    $update_at = gmdate('Y/m/d H:i:s',time());
    $list_foods =  new M_list_foods();
    $list_foods->create_list_foods($id,$name,$alias,$price,$id_menu,$description,$sort_oder,$special,$created_at,$update_at);
    header('location:http://localhost:8888/NguyenDaiNgoc_inter2w/views/admin/layouts/index.php?page=list_foods');
?>