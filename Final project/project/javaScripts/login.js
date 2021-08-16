	var hasError=false;
	function get(id){
		return document.getElementById(id);
	}
	function validate()
	{	
		refresh();
		if(get("password").value==""){
			hasError=true;
			get("err_password").innerHTML="*Password Required";
		}
		else if(get("password").value.length<=4){
			hasError=true;
			get("err_password").innerHTML="*Password must be more then 4 characters";
		}
		if(get("uname").value==""){
			hasError=true;
			get("err_uname").innerHTML="*Username Required";
		}
		return !hasError;
	}
	function refresh() {
		hasError=false;
		get("err_password").innerHTML="";
		get("err_uname").innerHTML="";
	}

