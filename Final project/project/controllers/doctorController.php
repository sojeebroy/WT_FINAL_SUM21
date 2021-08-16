<?php		
	
	include 'models/db_config.php';

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
	$bio="";
	$err_bio="";
	$department="";
	$err_department="";
	$dept=array("Cardiology","Urology","Neurology","Endrocrine","Obstetrics and Gynaecology","Cardiothoracic Anaesthesia","Dental & Maxillofacial Surgery","Endocrinology & Diabetology","Others");
	$nid="";
	$err_nid="";
	$msg="";
	$err_dob="";
	$err_db="";
	$message="";
	$err_message="";
	$hasError=false;

	if(isset($_POST["submit"]))
	{
		
		if(empty($_POST["name"]))
		{
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 3)
		{
			$hasError = true;
			$err_name="Name must contain more than 4 character";
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

    	if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else
		{
			$bio = htmlspecialchars($_POST["bio"]);
		}


		if (!isset($_POST["department"])){
			$hasError = true;
			$err_department="department Required";
		}
		else
		{
			$department = $_POST["department"];
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
			$rs=insertDoctor($name,$uname,$email,$password,$phone,$gender,$department,$address,$nid,$dob,$bio,$feedback,$message);
			if($rs===true)
			{
				header("Location: adminDashboard.php");
			}
			$err_db="Please insert data correctly ";

		}	
	}
	elseif(isset($_POST["update"]))
	{
		if(!$hasError)
		{
			$rs=editDoctor($_POST["name"],$_POST["uname"],$_POST["email"],$_POST["password"],$_POST["phone"],$_POST["gender"],$_POST["department"],$_POST["address"],$_POST["nid"],$_POST["dob"],$_POST["bio"],$_GET["id"]);
			if($rs===true)
			{
				header("Location: allDoctors.php");
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
				header("Location: doctorRequests.php");
			}
			
			$err_db=$rs;
		}
	}	

	function insertDoctor($name,$uname,$email,$password,$phone,$gender,$department,$address,$nid,$dob,$bio,$feedback,$message)
	{
		$query="insert into doctor values(NULL,'$name','$uname','$email','$password','$phone','$gender','$department','$address','$nid','$dob','$bio','No Feedback','No Requests')";
		return execute($query);
	}

	function getDoctors()
	{
		$query="select * from doctor";
		$rs=get($query);
		return $rs;
	}

	function deleteDoctor($id)
	{
		$query="delete from doctor where id=$id";
		$rs=get($query);
		return $rs;
	}	
	function getDoctor($id)
	{
		$query="select * from doctor where id=$id";
		$rs=get($query);
		return $rs[0];
	}
	function editDoctor($name,$uname,$email,$password,$phone,$gender,$department,$address,$nid,$dob,$bio,$id)
	{
		$query="update doctor set name='$name',username='$uname',email='$email',password='$password',phone='$phone',gender='$gender',department='$department',address='$address',nid='$nid',dob='$dob',bio='$bio' where id=$id";
		return execute($query);
	}
	function replyRequest($reply,$id)
	{
		$query="update doctor set request='$reply' where id=$id";
		return execute($query);
	}
?>
