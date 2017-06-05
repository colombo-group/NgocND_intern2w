<?php 
	require_once('app/lib/change_name.php');
 	require_once('models/m_orders.php');
	$id= "";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = date('Y-m-d',strtotime($_POST['date']));
    $party_number = (int)$_POST['party_number'];
    $created_at = date('Y/m/d H:i:s',time()); 
    $update_at = '0000-00-00 00:00:00';
    $ngoc = strtotime($date);

    $today = date("Y-m-d");
    if (strtotime($today) >= strtotime($date)) {
        $_SESSION['notcorrect'] = "you choose not correct date";
        header('location:../NguyenDaiNgoc_inter2w/#content5');
    }
    else
    {
    $_SESSION['created'] = "order succesfully";

    // setcookie('created','created successfully', time() + 1);
    // if (isset($_COOKIE['created'])) {
    //     echo "<script>alert('co');</script>";
    // }
    // else
    // {
    //    echo "<script>alert('ko');</script>";
    // }
    $orders =  new M_orders;
    $orders->create_orders($id,$name,$email,$date,$party_number,$created_at,$update_at);
    header('location:../NguyenDaiNgoc_inter2w/#content5');
    }
?>