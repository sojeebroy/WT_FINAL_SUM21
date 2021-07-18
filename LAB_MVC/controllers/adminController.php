<?php 

	include 'models/db_config.php';
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$email="";
	$err_email="";
	$password="";
	$err_password="";
	$err_db="";

	$hasError=false;
	
	
	if (isset($_POST["btn_login"])) {
		if (empty($_POST["uname"])) {
			$hasError=true;
			$err_uname = "Username is required";   }
			
		else
			{$uname =$_POST["uname"];}
		if(empty($_POST["password"]))
        {
			$hasError=true;
			$err_password="Password Required";
        }
        else if(isset($_POST[""]))
		{
		    echo htmlspecialchars($_POST["password"]);
		}
		else if(strlen($_POST["password"])<4){
    	    $hasError=true;
			$err_password="Password Must Be 4 Charachter";
			}
		else{
			 $password=$_POST["password"];
			} 
		if(!$hasError)
		{
			if(authenticateUser($uname,$password))
			{
				header("Location:dashboard.php");
			}
			$err_db="Username password invalid ";
		}
	}

	
	function authenticateUser($uname,$password)
	{
		$query="select * from admin where Username='$uname' and Password='$password'";
		$rs=get($query);
		if(count($rs)>0)
			{return true;}
		return false; 
	}	
?>