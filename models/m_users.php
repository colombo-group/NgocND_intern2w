<?php  

	require_once('database.php');


	//`id`, `name`, `email`, `phone_number`, `lever`, `created_at`, `update_at`
	Class M_users extends database
	{
		// create users
		public function create_users($id,$name,$password,$email,$phone_number,$lever,$created_at,$update_at)
		{
			$sql = "INSERT INTO users VALUES (?,?,?,?,?,?,?,?)";
			$this->setQuery($sql);
			return $this->execute(array($id,$name,$password,$email,$phone_number,$lever,$created_at,$update_at));
		}
		//list users
		public function read_users()
		{
			$sql = "SELECT * FROM users";
			$this->setQuery($sql);
			return $this->loadAllRows();
			
		}
		// read_id_users
		public function read_id_users($id)
		{
			$sql = "SELECT * FROM users WHERE id =$id";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		// update users
		public function update_users($name,$password,$email,$phone_number,$lever,$update_at,$id)
		{
			$sql = "UPDATE users SET name = ?,password=?,email=?,phone_number= ?, lever = ?,update_at = ? WHERE id = ? ";
			$this->setQuery($sql);
			$this->execute(array($name,$password,$email,$phone_number,$lever,$update_at,$id));
		}
		// delete delete_users
		public function delete_users($id)
		{
			$sql = "DELETE FROM users  WHERE id =?";
			$this->setQuery($sql);
			$this->execute(array($id));
		}
		// check  login
		public function check_login($email,$password)
		{
			$sql = "SELECT * FROM users WHERE email = ? AND password = ?";
			$this->setQuery($sql);
			return $this->loadAllRows(array($email,$password));
		}
	}
?>