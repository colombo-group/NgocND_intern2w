<?php 
	require_once('database.php');
	/**
	* 
	*/
	class M_menus extends database
	{
		// read cates
		public function read_menus()
		{
			$sql ="SELECT * FROM menu";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		// create menus
		//`id`, `name`, `alias`, `id_parent`, `sort_oder`, `created_at`, `update_at`
		public function create_menus($id,$name,$alias,$id_parent,$sort_oder,$created_at,$update_at)
		{
			$sql = "INSERT INTO menu VALUES(?,?,?,?,?,?,?)";
			$this->setQuery($sql);
			$this->execute(array($id,$name,$alias,$id_parent,$sort_oder,$created_at,$update_at));
		}
		 // read with id
		 public function read_id_menus($id)
		 {
		 	$sql = "SELECT * FROM menu WHERE id = $id";
		 	$this->setQuery($sql);
		 	return $this->loadAllRows();
		 }
		//update cates
		public function update_menus($name, $alias,$id_parent, $sort_oder,$update_at,$id)
		{
			$sql = "UPDATE menu SET name = ?,alias=?,id_parent= ? ,sort_oder = ?,update_at = ? WHERE id = ? ";
			$this->setQuery($sql);
			$this->execute(array($name, $alias,$id_parent, $sort_oder,$update_at,$id));
		}
		 // delete menus
		 public function delete_menus($id)
		 {
		 	$sql = "DELETE FROM menu WHERE id=$id";
		 	$this->setQuery($sql);
		 	$this->execute(array($id));
		 }
	}
?>