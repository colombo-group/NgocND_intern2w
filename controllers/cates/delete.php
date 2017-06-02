<?php  
 	require_once __DIR__."../../../models/m_cates.php";
 	$id = $_GET["id"];
 	setcookie('deleted', 'Deleted successfully', time() + 10);
 	$cates = new M_cates;
 	$cates->delete_cates($id);
 	header('location:../../admin/layouts/index.php?page=list_cates');
?>