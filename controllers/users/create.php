<?php 
 	require_once('models/m_users.php');
	$id= "";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $lever = $_POST['lever'];
    $created_at = date('Y/m/d H:i:s',time()); 
    $update_at = '0000-00-00 00:00:00';
    $password = md5($_POST['password']);
    $users =  new M_users();
    $same = $users->same_email($email);
    if($same->email != '') 
    {
        setcookie('same', 'email already exists', time() + 1);
        header('location:admin.html?page=create_users');
    }
    else
    {
        setcookie('created', 'Created successfully', time() + 1);
        $users->create_users($id,$name,$password,$email,$phone_number,$lever,$created_at,$update_at);
        header('location:admin.html?page=list_users');
    }


    
?>