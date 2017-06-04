<?php 
 	require_once('models/m_users.php');
	$name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $lever = $_POST['lever'];
 	$update_at = gmdate('Y/m/d H:i:s',time());
 	$password = md5($_POST['password']);
 	$id = $_POST['id'];
 	$emaillocal = $_POST['emaillocal'];
 	$users = new M_users;
 	$same = $users->same_email($email);
 	if ($same->email == '') {
 		setcookie('updated', 'Updated successfully', time() + 1);
 		$users->update_users($name,$password,$email,$phone_number,$lever,$update_at,$id);
 		header('location:admin.html?page=list_users');
 	}
 	else
 	{
 		if ($same->email == $emaillocal) {
 			setcookie('updated', 'Updated successfully', time() + 1);
	 		$users->update_users($name,$password,$email,$phone_number,$lever,$update_at,$id);
 			header('location:admin.html?page=list_users');
 		}
 		else
 		{
 			setcookie('same', 'email already exists', time() + 1);
        	header("location:admin.html?page=edit_users&id=$id");
 		}
 	}
 	
?>