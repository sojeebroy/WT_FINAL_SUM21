<?php		
	
	include 'models/db_config.php';
	$err_db="";
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$password="";
	$err_password="";
	$gender="";
	$err_gender="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$array=array("Jaunary","February","March","April","May","June", "July" ,"August","September","Octobar","November","December");
	$date="";
	$month="";
	$year="";
	$err_dating="";
	$err_month="";
	$err_year="";
	$duty="";
	$err_duty="";
	$sectors=array("Oparetion Treator","Doctors Chamber","CT scan","MRI","Ultra Sound","Nuclear Medicine","X-ray","Lab Medicine","Vaccination","Health Screening","Pharmacy","Others");
	$nid="";
	$err_nid="";
	$feedback="";
	$message="";
	$err_message="";


	$hasError=false;

	if(isset($_POST["create"]))
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

		if(empty($_POST["password"]))
        {
			$hasError=true;
			$err_password="Password Required";
        }
		else if(strlen($_POST["password"])<8)
		{
    	    $hasError=true;
			$err_password="Password Must Be 8 Charachter";
		}
		else
		{
			$password=htmlspecialchars($_POST["password"]);
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


		if (!isset($_POST["date"])){
			$hasError = true;
			$err_dating="Date Required";
		}
		else{
			$date = $_POST["date"];
		}


        if (!isset($_POST["month"])){
			$hasError = true;
			$err_month="month Required";
        }
        else
        {
			$month = $_POST["month"];
		}
			
        if (!isset($_POST["year"]))
        {
			$hasError = true;
			$err_year="year Required";
        }
        else
        {
			$year = $_POST["year"];
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

    
		if (!isset($_POST["duty"])){
			$hasError = true;
			$err_duty="Duty Sector Required";
		}
		else
		{
			$duty = $_POST["duty"];
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

		$dob=$date.''.$month.''. $year;


		if(!$hasError)
		{
			$ns=insert($name,$uname,$email,$password,$phone,$address,$gender,$nid,$dob,$duty,$feedback,$message);
			if($ns===true)
			{
				header("Location:adminDashboard.php");
			}
			$err_db="Please insert data correctly ";

		}	
	}

	elseif(isset($_POST["update"]))
	{
		if(!$hasError)
		{
			$rs=editNurse($_POST["name"],$_POST["uname"],$_POST["email"],$_POST["password"],$_POST["phone"],$_POST["address"],$_POST["gender"],$_POST["nid"],$_POST["dob"],$_POST["duty"],$_GET["id"]);
			if($rs===true)
			{
				header("Location: allNurses.php");
			}
			
			$err_db=$rs;
		}
	}	

	elseif(isset($_POST["reply"]))
	{
		if(empty($_POST["message"]))
		{
			$hasError = true;
			$err_message="Message can not be empty";
		}
		else {
			$message=htmlspecialchars($_POST["message"]);
		}

		if(!$hasError)
		{
			$rs=replyRequest($_POST["message"],$_GET["id"]);
			if($rs===true)
			{
				header("Location: nurseRequests.php");
			}
			
			$err_db=$rs;
		}
	}	

	function insert($name,$uname,$email,$password,$phone,$address,$gender,$nid,$dob,$duty,$feedback,$message)
	{
		$query="insert into nurse values(NULL,'$name','$uname','$email','$password','$phone','$address','$gender','$nid','$dob','$duty','No Feedback','No Requests')";
		return execute($query);
	}
	

	function getNurses()
	{
		$query="select * from nurse";
		$rs=get($query);
		return $rs;
	}

	function deleteNurse($id)
	{
		$query="delete from nurse where id=$id";
		$rs=get($query);
		return $rs;
	}	
	function getNurse($id)
	{
		$query="select * from nurse where id=$id";
		$rs=get($query);
		return $rs[0];
	}
	function editNurse($name,$uname,$email,$password,$phone,$address,$gender,$nid,$dob,$duty,$id)
	{
		$query="update nurse set name='$name',username='$uname',email='$email',password='$password',phone='$phone',address='$address',gender='$gender',nid='$nid',dob='$dob', duty='$duty' where id=$id";
		return execute($query);
	}
	function replyRequest($reply,$id)
	{
		$query="update nurse set request='$reply' where id=$id";
		return execute($query);
	}
	
?>
