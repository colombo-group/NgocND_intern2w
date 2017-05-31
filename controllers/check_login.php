<?php 
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
  	ob_start();
  	session_start();
	require_once('../models/m_users.php');
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$users =  new M_users;
	$user = $users ->check_login($email,$password);
	
	if (count($user)>0) {
		foreach ($user as $u) {
			$_SESSION['lever'] = $u->lever;
			$_SESSION['name'] = $u->name;
		}
	 	 header("location:http://localhost:8888/NguyenDaiNgoc_inter2w/views/admin/layouts/");
	}
	else
	{
	 	header('location:http://localhost:8888/NguyenDaiNgoc_inter2w/views/admin/login.php');
	}
?>