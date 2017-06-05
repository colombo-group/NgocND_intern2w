<?php 
    
	require_once('app/lib/change_name.php');
 	require_once('models/m_cates.php');
	$id= "";
    $name = $_POST['name'];
    $alias = changeTitle($name);
    $sort_oder = $_POST['sort_oder'];
    $link = $_POST['link'];
    $type = $_POST['type'];
    $created_at = date('Y/m/d H:i:s',time()); 
    $update_at = '0000-00-00 00:00:00';
    $cates =  new M_cates();
    $same = $cates->same_name($name);
    if($same->name != '') 
    {
        setcookie('same', 'name already exists', time() + 1);
        header('location:admin.html?page=create_cates');
    }
    else
    {
    setcookie('created', 'Created successfully', time() + 1);
    $cates->create_cates($id,$name,$alias,$sort_oder,$link,$type,$created_at,$update_at);
    header('location:admin.html?page=list_cates');
    }

?>