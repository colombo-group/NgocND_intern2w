<?php 
 	require_once('../../models/m_users.php');
 	$users = new M_users;
	$name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $lever = $_POST['lever'];
 	$update_at = gmdate('Y/m/d H:i:s',time());
 	$password = md5($_POST['password']);
 	$id = $_POST['id'];
 	$users->update_users($name,$password,$email,$phone_number,$lever,$update_at,$id);
 	header('location:../../views/admin/layouts/index.php?page=list_users');
?>