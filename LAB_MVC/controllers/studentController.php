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
			$rs="insertStudent($name,$dob,$credit,$cgpa,$dept_id)";
			if($rs===true)
			{
				header("Location: All_students.php");
			}
			$err_db="Please insert data correctly ";
		}
	}

	function insertStudent($name,$dob,$credit,$cgpa,$dept_id)
	{
		$query="insert into students values(NULL,'$name','$dob','$credit','$cgpa','$dept_id')";
		return execute($query);
	}

?>
