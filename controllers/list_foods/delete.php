<?php  
	require_once __DIR__."../../../models/m_list_foods.php";
	$id = $_GET["id"];
 	$cates = new M_list_foods;
 	$cates->delete_list_foods($id);
 	header('location:../../admin/layouts/index.php?page=list_foods');
?>