<?php 
	require_once('app/lib/change_name.php');
 	require_once('models/m_list_foods.php');
	$id= "";
    $name = $_POST['name'];
    $alias = changeTitle($name);
    $price = $_POST['price'];
    $id_menu = $_POST['id_menu'];
    $description = $_POST['description'];
    $sort_oder = $_POST['sort_oder'];
    $special = $_POST['special'];
    $created_at = gmdate('Y/m/d H:i:s',time()); 
    $update_at = '0000-00-00 00:00:00';
    setcookie('created', 'created successfully', time() + 1);
    $list_foods =  new M_list_foods();
    $same = $list_foods->same_name($name);
    if($same->name != '') 
    {
        setcookie('same', 'name already exists', time() + 1);
        header('location:admin.html?page=create_list_foods');
    }
    else
    {
    setcookie('created', 'Created successfully', time() + 1);
    $list_foods->create_list_foods($id,$name,$alias,$price,$id_menu,$description,$sort_oder,$special,$created_at,$update_at);
    header('location:admin.html?page=list_foods');
    }
    
?>