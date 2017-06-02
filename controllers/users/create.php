<?php 
 	require_once('../../models/m_users.php');
	$id= "";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $lever = $_POST['lever'];
    $created_at = gmdate('Y/m/d H:i:s',time()); 
    $update_at = '0000-00-00 00:00:00';
    $password = md5($_POST['password']);
    setcookie('created', 'created successfully', time() + 10);
    $users =  new M_users();
    $users->create_users($id,$name,$password,$email,$phone_number,$lever,$created_at,$update_at);
    header('location:../../views/admin/layouts/index.php?page=list_users');
?>