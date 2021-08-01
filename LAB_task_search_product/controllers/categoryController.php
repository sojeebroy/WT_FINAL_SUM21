<?php include 'models/db_config.php';

	$err_db="";
	if(isset($_POST["add_category"]))
	{
		$rs=insertCategory($_POST["name"]);
		if($rs===true)
		{
			header("Location:all_category.php");
		}
		$err_db=$rs;
	}

	function insertCategory($name)
	{
		$query="insert into categories values(NULL,'$name')";
		return execute($query);
	}
	function getAllCategories(){
		$query = "select * from categories";
		$rs = get($query);
		return $rs;
	}
	function getCategory($id){
		$query = "select * from categories where id=$Id";
		$rs = get($query);
		return $rs[0];
	}
	function editCategory($name, $id){
		$query = "update categories set name='$Name' where id=$Id";
		return execute($query);
	}

	function searchCategory($key)
	{
		$query="select id,name from categories where name like '%$key%'";
		$rs=get($query);
		return $rs;
	}
?>