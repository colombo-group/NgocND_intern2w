<?php 
 	require_once('models/m_orders.php');
 	$orders = new M_orders;
	$name = $_POST['name'];
    $email = $_POST['email'];
    $date = date('Y-m-d',strtotime($_POST['date']));
    $party_number = (int)$_POST['party_number'];
 	$update_at = gmdate('Y/m/d H:i:s',time());
 	setcookie('updated', 'Updated successfully', time() + 1);
 	$id = $_POST['id'];
 	$orders->update_order($name,$email,$date,$party_number,$update_at,$id);
 	header('location:admin.html?page=list_order');
?>