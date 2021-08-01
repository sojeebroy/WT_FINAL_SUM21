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
	if(isset($_POST["sign_up"]))
	{	
		if(empty($_POST["name"]))
		{
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 3)
		{
			$hasError = true;
			$err_name="Name must contain more than 3 character";
		}
		else
		{
			$name = $_POST["name"];
		}
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
		if (empty($_POST["email"])) {
			$hasError=true;
			$err_email = "Email is required";   }
			
		else{
			$email =$_POST["email"];
			}
		if (empty($_POST["uname"])) {
			$hasError=true;
			$err_uname = "Username is required";   }
			
		else
			{$uname =$_POST["uname"];}

		if(!$hasError)
		{
			$rs=insertUser($name,$uname,$email,$password);
			if($rs===true)
			{
				header("Location:login.php");
			}
			$err_db=$rs;
		}	
	}
	elseif (isset($_POST["btn_login"])) {
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

	function insertUser($name,$uname,$email,$password)
	{
		$query="insert into user values(NULL,'$name','$uname','$email','$password')";
		return execute($query);
	}
	
	function authenticateUser($uname,$password)
	{
		$query="select * from user where Username='$uname' and Password='$password'";
		$rs=get($query);
		if(count($rs)>0)
			{return true;}
		return false; 
	}	
?>