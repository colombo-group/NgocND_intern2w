<?php 
	require_once('app/lib/change_name.php');
 	require_once('models/m_list_foods.php');
    $name = $_POST['name'];
    $alias = changeTitle($name);
    $price = $_POST['price'];
    $id_menu = $_POST['id_menu'];
    $description = $_POST['description'];
    $sort_oder = $_POST['sort_oder'];
    $special = $_POST['special'];
    $update_at = date('Y/m/d H:i:s',time());
    $namelocal = $_POST['namelocal'];
 	$id = $_POST['id'];
 	$list_foods =  new M_list_foods();
    $same = $list_foods->same_name($name);
    if ($same->name == '') {
        setcookie('updated', 'Updated successfully', time() + 1);
        $list_foods->update_list_foods($name,$alias,$price,$id_menu,$description,$sort_oder,$special,$update_at,$id);
        header('location:admin.html?page=list_foods');
    }
    else
    {
        if ($same->name == $namelocal) {
            setcookie('updated', 'Updated successfully', time() + 1);
           $list_foods->update_list_foods($name,$alias,$price,$id_menu,$description,$sort_oder,$special,$update_at,$id);
            header('location:admin.html?page=list_foods');
        }
        else
        {
            setcookie('same', 'name already exists', time() + 1);
            header("location:admin.html?page=edit_list_foods&id=$id");
        }
    }
?>