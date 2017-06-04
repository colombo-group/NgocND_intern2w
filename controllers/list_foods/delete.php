<?php  
	require_once ("models/m_list_foods.php");
	$id = $_GET["id"];
	setcookie('deleted', 'Deleted successfully', time() + 1);
 	$cates = new M_list_foods;
 	$cates->delete_list_foods($id);
 	header('location:admin.html?page=list_foods');
?>