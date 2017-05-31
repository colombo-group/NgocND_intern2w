<?php 
 	require_once('../../models/m_orders.php');
 	$orders = new M_orders;
	$name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $party_number = $_POST['party_number'];
 	$update_at = gmdate('Y/m/d H:i:s',time());
 	$id = $_POST['id'];
 	$orders->update_order($name,$email,$date,$party_number,$update_at,$id);
 	header('location:http://localhost:8888/NguyenDaiNgoc_inter2w/views/admin/layouts/index.php?page=list_order');
?>