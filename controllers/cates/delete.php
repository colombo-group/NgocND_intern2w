<?php  
 	require_once('models/m_cates.php');
 	$id = $_GET["id"];
 	setcookie('deleted', 'Deleted successfully', time() + 1);
 	$cates = new M_cates;
 	$cates->delete_cates($id);
 	header('location:admin.html?page=list_cates');
?>