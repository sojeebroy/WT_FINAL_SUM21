
<script>
	function get(id)
	{
		return document.getElementById(id);
	}

	function loadDoc()
	{
		var xhr=new XMLHttpRequest();
		xhr.open("GET","MyProfile.php",true);
		xhr.onreadstatechange=function(){
			if(this.readState==4 && this.status==200){
				get("demo").innerHTML=this.responseText;
			}
		};
		xhr.send();
	}
</script>
<button onclick="loadDoc()">ClickMe</button>
<div id="demo"></div>