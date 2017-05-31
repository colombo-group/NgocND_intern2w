<?php 
    session_start();
	require_once('../../app/lib/change_name.php');
 	require_once('../../models/m_cates.php');
	$id= "";
    $name = $_POST['name'];
    $alias = changeTitle($name);
    $sort_oder = $_POST['sort_oder'];
    $link = $_POST['link'];
    $type = $_POST['type'];
    $created_at = gmdate('Y/m/d H:i:s',time()); 
    $update_at = gmdate('Y/m/d H:i:s',time());
    $cates =  new M_cates();
    $cates->create_cates($id,$name,$alias,$sort_oder,$link,$type,$created_at,$update_at);
    header('location:../../views/admin/layouts/index.php?page=list_cates');
?>