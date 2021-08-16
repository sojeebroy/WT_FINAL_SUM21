var hasError=false;
	
	function validNurseGender()
	{
		var gn = document.getElementsByName("gender");
		var checked = false;
		for(var i=0;i<gn.length;i++){					
			if(gn[i].checked){
			checked = true;				
			break;		
		 	}
		}
		return checked;
	}

	function get(id){
		return document.getElementById(id);
	}
	
	function validateNurse()
	{	
		refresh();
		if(get("name").value==""){
			hasError=true;
			get("err_name").innerHTML="*Name Required";
		}
		else if(get("name").value.length<=3){
			hasError=true;
			get("err_name").innerHTML="*Name must be 4 characters";
		}

		if(get("password").value==""){
			hasError=true;
			get("err_password").innerHTML="*Password Required";
		}
		else if(get("password").value.length<=7){
			hasError=true;
			get("err_password").innerHTML="*Password must be more then 7 characters";
		}

		if(get("uname").value==""){
			hasError=true;
			get("err_uname").innerHTML="*Username Required";
		}

		if(get("email").value==""){
			hasError=true;
			get("err_email").innerHTML="*Email Required";
		}

		if(get("phone").value==""){
			hasError=true;
			get("err_phone").innerHTML="*Phone Required";
		}

		if(get("address").value==""){
			hasError=true;
			get("err_address").innerHTML="*Address Required";
		}

		if(get("nid").value==""){
			hasError=true;
			get("err_nid").innerHTML="*National ID Required";
		}

		
		if(!get("Male").checked && !get("Female").checked){
			hasError=true;
			get("err_gen").innerHTML="*Gender Required";
		}
		if(get("duty").selectedIndex==0)
		{
			hasError=true;
			get("err_duty").innerHTML="*Duty Reqired";
		}
		if(get("date").selectedIndex==0)
		{
			hasError=true;
			get("err_dating").innerHTML="*Date Reqired";
		}		
		if(get("month").selectedIndex==0)
		{
			hasError=true;
			get("err_month").innerHTML="*Month Reqired";
		}
		if(get("year").selectedIndex==0)
		{
			hasError=true;
			get("err_year").innerHTML="*year Reqired";
		}
		if(!validNurseGender()){
			hasError=true;
			get("err_gen").innerHTML = "*Gender Reqired";
		}
	

		return !hasError;
	}
	function refresh() {
		hasError=false;
		get("err_name").innerHTML="";
		get("err_password").innerHTML="";
		get("err_uname").innerHTML="";
		get("err_email").innerHTML="";
		get("err_phone").innerHTML="";
		get("err_address").innerHTML="";
		get("err_nid").innerHTML="";
		get("err_gen").innerHTML="";
		get("err_duty").innerHTML="";
		get("err_dating").innerHTML="";
		get("err_month").innerHTML="";
		get("err_year").innerHTML="";
	}
