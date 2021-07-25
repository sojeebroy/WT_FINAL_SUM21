<?php include 'models/db_config.php';
	
	$name="";
	$err_name="";
	$dob="";
	$err_dob="";
	$cgpa="";
	$err_cgpa="";
	$dept_id="";
	$err_dept_id="";
	$credit="";
	$err_credit="";
	$err_db="";
	$id="";
	$hasError=false;


	if(isset($_POST["Add_student"]))
	{
		if (empty($_POST["name"])) {
			$hasError=true;
			$err_name = "Name is required";   }
			
		else
			{$name =$_POST["name"];}

		if (empty($_POST["dob"])) {
			$hasError=true;
			$err_dob = "Date of birth is required";   }
			
		else
			{$dob =$_POST["dob"];}

		if (empty($_POST["cgpa"])) {
			$hasError=true;
			$err_cgpa = "CGPA is required";   }
			
		else
			{$cgpa =$_POST["cgpa"];}

		if (empty($_POST["dept_id"])) {
			$hasError=true;
			$err_dept_id = "Department id is required";   }
			
		else
			{$dept_id =$_POST["dept_id"];}

		if (empty($_POST["credit"])) {
			$hasError=true;
			$err_credit = "Credit is required";   }
			
		else
			{$credit =$_POST["credit"];}

		if(!$hasError)
		{
			$rs=insertStudent($name,$dob,$credit,$cgpa,$dept_id);
			if($rs===true)
			{
				header("Location: All_students.php");
			}
			$err_db="Please insert data correctly ";
		}
	}
	elseif(isset($_POST["EditStudent"]))
	{
		if(!$hasError)
		{
			//$rs=editStudent($_POST["name"],$_POST["dob"],$_POST["credit"],$_POST["cgpa"],$_POST["dept_id"],$_POST["id"]);
			$rs=editStudent($_POST["name"],$_POST["dob"],$_POST["credit"],$_POST["cgpa"],$_POST["dept_id"],$_GET["id"]);
			if($rs===true)
			{
				header("Location: All_students.php");
			}
			
			$err_db=$rs;
		}
	}

	function insertStudent($name,$dob,$credit,$cgpa,$dept_id)
	{
		$query="insert into students values(NULL,'$name','$dob','$credit','$cgpa','$dept_id')";
		return execute($query);
	}

	function getStudents()
	{
		$query="select * from students";
		$rs=get($query);
		return $rs;
	}

	function getStudent($id)
	{
		$query="select * from students where id=$id";
		$rs=get($query);
		return $rs[0];
	}

	function editStudent($name,$dob,$credit,$cgpa,$dept_id,$id)
	{
		$query="update students set name='$name',dob='$dob',credit='$credit',cgpa='$cgpa',dept_id='$dept_id' where id=$id";
		return execute($query);
	}
?>