<?php  
 	require_once('../../../models/m_orders.php');
 	$id = $_GET["id"];
 	$order = new M_orders;
 	$order->delete_order($id);
 	header('location:http://localhost:8888/NguyenDaiNgoc_inter2w/views/admin/layouts/index.php?page=list_order');
?>