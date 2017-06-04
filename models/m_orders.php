<?php 
	require_once('database.php');
	/**
	* 
	*/
	class M_orders extends database
	{
		//`id`, `name`, `email`, `date`, `party_number`, `created_at`, `update_at`
		// create orders
		public function create_orders($id,$name,$email,$date,$party_number,$created_at,$update_at)
		{
			$sql = "INSERT INTO order_user VALUES(?,?,?,?,?,?,?)";
			$this->setQuery($sql);
			$this->execute(array($id,$name,$email,$date,$party_number,$created_at,$update_at));
		}
		// read order
		public function read_orders()
		{
			$sql ="SELECT * FROM order_user";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		// read order by id 
		public function read_id_orders($id)
		{
			$sql =  "SELECT * FROM order_user WHERE id = $id";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		// update order
		public function update_order($name,$email,$date,$party_number,$update_at,$id)
		{
			$sql = "UPDATE order_user SET name = ?,email=?,party_number= ?, date = ?,update_at = ? WHERE id = ? ";
			$this->setQuery($sql);
			$this->execute(array($name,$email,$date,$party_number,$update_at,$id));
		}
		// delete order
		public function delete_order($id)
		{
			$sql = "DELETE FROM order_user  WHERE id = $id ";
			$this->setQuery($sql);
			$this->execute(array($id));

		}
		// unique name 
		public function same_name($name)
		{
			$sql = "SELECT * FROM order_user WHERE name = '$name'";
			$this->setQuery($sql);
			return $this->loadRow();
		}
	}
?>