<?php 
	require_once('database.php');
	/**
	* 
	*/
	class M_cates extends database
	{
		// read cates
		public function read_cates()
		{
			$sql ="SELECT * FROM cates";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		// create cates
		//`id`, `name`, `alias`, `sort_oder`, `link`, `type`, `creted_at`, `update_at`
		public function create_cates($id,$name,$alias,$sort_oder,$link,$type,$created_at,$update_at)
		{
			$sql = "INSERT INTO cates VALUES(?,?,?,?,?,?,?,?)";
			$this->setQuery($sql);
			$this->execute(array($id,$name,$alias,$sort_oder,$link,$type,$created_at,$update_at));
		}
		// read with id
		public function read_id_cates($id)
		{
			$sql = "SELECT * FROM cates WHERE id = $id";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		//update cates
		public function update_cates($name, $alias, $sort_oder, $link, $type, $update_at,$id)
		{
			$sql = "UPDATE cates SET name = ?,alias=?, sort_oder = ?, link = ?, type = ?, update_at = ? WHERE id = ? ";
			$this->setQuery($sql);
			$this->execute(array($name, $alias, $sort_oder, $link, $type, $update_at,$id));
		}
		// delete cates
		public function delete_cates($id)
		{
			$sql = "DELETE FROM cates WHERE id=$id";
			$this->setQuery($sql);
			$this->execute(array($id));
		}
	}
?>