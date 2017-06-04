<?php  
 	require_once('models/m_orders.php');
 	$id = $_GET["id"];
 	setcookie('deleted', 'Deleted successfully', time() + 1);
 	$order = new M_orders;
 	$order->delete_order($id);
 	header('location:admin.html?page=list_order');
?>