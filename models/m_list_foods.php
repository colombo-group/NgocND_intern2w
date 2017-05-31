<?php 
	require_once('database.php');
	/**
	* 
	*/
	class M_list_foods extends database
	{
		 // read list_foods
		 public function read_list_foods()
		 {
		 	$sql ="SELECT * FROM list_food";
		 	$this->setQuery($sql);
		 	return $this->loadAllRows();
		 }

		 //read list_food with menu table
		 public function read_list_foods_menus()
		 {
		 	$sql = "SELECT list_food.name,list_food.id, list_food.alias, list_food.price, list_food.description, list_food.sort_oder, list_food.special, list_food.created_at, list_food.update_at,menu.name AS name_menu FROM list_food INNER JOIN menu WHERE list_food.id_menu = menu.id";
		 	$this->setQuery($sql);
		 	return $this->loadAllRows();
		 }

		 // create list_foods
		 //`id`, `name`, `alias`, `price`, `id_menu`, `description`, `sort_oder`, `special`, `created_at`, `update_at`
		public function create_list_foods($id,$name,$alias,$price,$id_menu,$description,$sort_oder,$special,$created_at,$update_at)
		{
			$sql = "INSERT INTO list_food VALUES(?,?,?,?,?,?,?,?,?,?)";
			$this->setQuery($sql);
			$this->execute(array($id,$name,$alias,$price,$id_menu,$description,$sort_oder,$special,$created_at,$update_at));
		}
		// read with id_food
		  public function read_id_list_foods($id)
		  {
		  	$sql = "SELECT list_food.name,list_food.id, list_food.alias, list_food.price, list_food.description, list_food.sort_oder, list_food.special, list_food.created_at, list_food.update_at,menu.name AS name_menu FROM list_food INNER JOIN menu WHERE list_food.id_menu = menu.id AND list_food.id=$id";
		 	$this->setQuery($sql);
		 	return $this->loadAllRows();
		  }
		// read with id_menu
		public function read_id_menu($id)
		{
			$sql = "SELECT list_food.name,list_food.id, list_food.alias, list_food.price, list_food.description, list_food.sort_oder, list_food.special, list_food.created_at, list_food.update_at,menu.name AS name_menu FROM list_food INNER JOIN menu WHERE list_food.id_menu = menu.id AND menu.id=$id";
		 	$this->setQuery($sql);
		 	return $this->loadAllRows();
		}
		
		 //update list foods
		 public function update_list_foods($name,$alias,$price,$id_menu,$description,$sort_oder,$special,$update_at,$id)
		 {
		 	$sql = "UPDATE list_food SET name = ?,alias=?,price=?,id_menu= ? , description=?,sort_oder = ?,special=?,update_at = ? WHERE id = ? ";
		 	$this->setQuery($sql);
	 		$this->execute(array($name,$alias,$price,$id_menu,$description,$sort_oder,$special,$update_at,$id));
		 }
		// delete menus
		public function delete_list_foods($id)
		{
			$sql = "DELETE FROM list_food WHERE id=$id";
			$this->setQuery($sql);
			$this->execute(array($id));
		}
	}
?>