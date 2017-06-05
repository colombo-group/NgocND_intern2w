<?php 
	
	require_once('app/lib/change_name.php');
 	require_once ('models/m_cates.php');
 	$cates = new m_cates;
	$name = $_POST['name'];
    $alias = changeTitle($name);
    $sort_oder = $_POST['sort_oder'];
    $link = $_POST['link'];
    $type = $_POST['type'];
 	$update_at = date('Y/m/d H:i:s',time());
 	$id = $_POST['id'];
 	$namelocal = $_POST['namelocal'];
 	$same = $cates->same_name($name);
 	if ($same->name == '') {
 		setcookie('updated', 'Updated successfully', time() + 1);
 		$cates->update_cates($name,$alias,$sort_oder,$link,$type,$update_at,$id);
 		header('location:admin.html?page=list_cates');
 	}
 	else
 	{
 		if ($same->name == $namelocal) {
 			setcookie('updated', 'Updated successfully', time() + 1);
	 		$cates->update_cates($name,$alias,$sort_oder,$link,$type,$update_at,$id);
	 		header('location:admin.html?page=list_cates');
 		}
 		else
 		{
 			setcookie('same', 'name already exists', time() + 1);
        	header("location:admin.html?page=edit_cates&id=$id");
 		}
 	}
 	
?>