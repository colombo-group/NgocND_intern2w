<?php 
	require_once('app/lib/change_name.php');
 	require_once('models/m_menus.php');
	$name = $_POST['name'];
    $alias = changeTitle($name);
    $id_parent = $_POST['id_parent'];
    $sort_oder = $_POST['sort_oder'];
 	$update_at = date('Y/m/d H:i:s',time());
 	$id = $_POST['id'];
 	$namelocal = $_POST['namelocal'];
 	$menus = new m_menus;
 	$same = $menus->same_name($name);
 	if ($same->name == '') {
 		setcookie('updated', 'Updated successfully', time() + 1);
 		$menus->update_menus($name, $alias,$id_parent, $sort_oder,$update_at,$id);
 		header('location:admin.html?page=list_menu');
 	}
 	else
 	{
 		if ($same->name == $namelocal) {
 			setcookie('updated', 'Updated successfully', time() + 1);
	 		$menus->update_menus($name, $alias,$id_parent, $sort_oder,$update_at,$id);
 			header('location:admin.html?page=list_menu');
 		}
 		else
 		{
 			setcookie('same', 'name already exists', time() + 1);
        	header("location:admin.html?page=edit_menus&id=$id");
 		}
 	}
 	
?>