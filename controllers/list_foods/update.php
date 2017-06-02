<?php 
	require_once('../../app/lib/change_name.php');
 	require_once('../../models/m_list_foods.php');
    $name = $_POST['name'];
    $alias = changeTitle($name);
    $price = $_POST['price'];
    $id_menu = $_POST['id_menu'];
    $description = $_POST['description'];
    $sort_oder = $_POST['sort_oder'];
    $special = $_POST['special'];
    $update_at = gmdate('Y/m/d H:i:s',time());
    setcookie('updated', 'Updated successfully', time() + 10);
 	$id = $_POST['id'];
 	$list_foods =  new M_list_foods();
 	$list_foods->update_list_foods($name,$alias,$price,$id_menu,$description,$sort_oder,$special,$update_at,$id);
 	header('location:../../views/admin/layouts/index.php?page=list_foods');
?>