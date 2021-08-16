<?php 
	session_start();
	
	include 'models/db_config.php';

	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$gender="";
	$err_gender="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$password="";
	$err_password="";
	$newPassword="";
	$err_newPassword="";
	$dob="";
	$err_dob="";
	$err_db="";
	$err_nid="";
	$err_result="";
	$hasError=false;

	
	
	if (isset($_POST["btn_login"])) {
		if (empty($_POST["uname"])) {
			$hasError=true;
			$err_uname = "Username is required";   }
			
		else
			{
				$uname =htmlspecialchars($_POST["uname"]);}
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
				$_SESSION["loggedUser"]=$uname;

				header("Location:adminDashboard.php");
			}
			$err_db="Username password invalid ";
		}
	}

	elseif(isset($_POST["update"]))
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
			$name = htmlspecialchars($_POST["name"]);
		}

		if (empty($_POST["uname"])) 
		{
			$hasError=true;
			$err_uname = "Username is required";   
		}
		else
		{
			$uname =htmlspecialchars($_POST["uname"]);
		}

		if(empty($_POST["phone"]))
		{
			$hasError = true;
			$err_phone="Phone Required";
		}
		else if(!is_numeric($_POST["phone"]))
		{
			$hasError = true;
			$err_phone="Only Numaric Number Required";
		}	
		else {
			$phone=htmlspecialchars($_POST["phone"]);
		}


		if(empty($_POST["address"]))
		{
			$hasError = true;
			$err_address="Address Required";
		}
		else {
			$address=htmlspecialchars($_POST["address"]);
		}


		if (empty($_POST["email"])) 
		{
			$hasError=true;
			$err_email = "Email is required";   
		}
	
		else
		{
			$email =htmlspecialchars($_POST["email"]);
		}


        if (!isset($_POST["dob"]))
        {
			$hasError = true;
			$err_dob="Date of Birth Required";
        }
        else
        {
			$dob = htmlspecialchars($_POST["dob"]);
        }

        if(!isset($_POST["gender"]))
        {
        	$hasError=true;
        	$err_gender="Gender Required";
        }
        else
        { 
        	$gender=$_POST["gender"];
        }

		if(empty($_POST["nid"]))
		{
			$hasError = true;
			$err_nid="National ID Number is Required";
		}
		else if(!is_numeric($_POST["nid"]))
		{
			$hasError = true;
			$err_nid="Only Numaric Number Required";
		}	
		else {
			$nid=htmlspecialchars($_POST["nid"]);
		}

		if(!$hasError)
		{
			$rs=editAdmin($_POST["name"],$_POST["uname"],$_POST["email"],$_POST["phone"],$_POST["gender"],$_POST["address"],$_POST["nid"],$_POST["dob"],$_GET["id"]);
			if($rs===true)
			{
				header("Location: adminDashboard.php");
			}
			
			$err_db=$rs;
		}

	}

	if (isset($_POST["check"])) {
		
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


		if(empty($_POST["newPassword"]))
        {
			$hasError=true;
			$err_newPassword="New Password Required";
        }
        else if(isset($_POST[""]))
		{
		    echo htmlspecialchars($_POST["newPassword"]);
		}
		else if(strlen($_POST["newPassword"])<4){
    	    $hasError=true;
			$err_newPassword=" New Password Must Be 4 Charachter";
			}
		else{
			 $newPassword=$_POST["newPassword"];
			} 

		if(!$hasError)
		{
			$rs=getAdminByPass($_POST["password"]);
			if($rs===true)
			{
				$rp=resetPassword($_POST["newPassword"],$_SESSION["loggedUser"]);
				if($rp===true){
				header("Location:logout.php");
				}
				$err_db=$rp;
				//$err_result="correct";
			}
			$err_result="Invalid Password";
		}
	}
	function resetPassword($newPassword,$x)
	{
		$query="update admin set password='$newPassword'where username='$x'";
		return execute($query);
	}
	
	function getAdmin($x)
	{
		
		$query="select Id,Name,Username,Email,Phone,Gender,Address,NID,DOB from admin where Username='$x'";
		$rs=get($query);
		return $rs[0];
	}
	function getAdminByPass($password)
	{
		
		$query="select * from admin where Password='$password'";
		$rs=get($query);
		if(count($rs)>0)
		{return true;}
		return false; 
	}
	function editAdmin($name,$uname,$email,$phone,$gender,$address,$nid,$dob,$id)
	{
		$query="update admin set name='$name',username='$uname',email='$email',phone='$phone',gender='$gender',address='$address',nid='$nid',dob='$dob' where id=$id";
		return execute($query);
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