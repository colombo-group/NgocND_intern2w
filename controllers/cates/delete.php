<?php  
 	require_once __DIR__."../../../models/m_cates.php";
 	$id = $_GET["id"];
 	$cates = new M_cates;
 	$cates->delete_cates($id);
 	header('location:../../views/admin/layouts/index.php?page=list_cates');
?>