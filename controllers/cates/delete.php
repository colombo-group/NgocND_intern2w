<?php  
 	require_once __DIR__."../../../models/m_cates.php";
 	$id = $_GET["id"];
 	$cates = new M_cates;
 	$cates->delete_cates($id);
 	header('location:http://localhost:8888/NguyenDaiNgoc_inter2w/views/admin/layouts/index.php?page=list_cates');
?>