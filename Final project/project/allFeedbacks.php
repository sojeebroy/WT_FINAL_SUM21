<?php
	session_start();
	if(!isset($_SESSION["loggedUser"]))
	{
		header("Location: login.php");
	}
	require_once 'adminHeader.php';		
?>

<script>
		function get(id)
		{
			return document.getElementById(id);
		}
		function loadDoc1(){
			var xhr=new XMLHttpRequest();
			xhr.open("GET","doctorFeedback.php",true);
			xhr.onreadystatechange=function(){
				if(this.readyState==4 && this.status==200){
					get("demo1").innerHTML=this.responseText;
				}
			};
			xhr.send();
		}
		function loadDoc2(){
			var xhr=new XMLHttpRequest();
			xhr.open("GET","nurseFeedback.php",true);
			xhr.onreadystatechange=function(){
				if(this.readyState==4 && this.status==200){
					get("demo2").innerHTML=this.responseText;
				}
			};
			xhr.send();
		}
		function loadDoc3(){
			var xhr=new XMLHttpRequest();
			xhr.open("GET","patientFeedback.php",true);
			xhr.onreadystatechange=function(){
				if(this.readyState==4 && this.status==200){
					get("demo3").innerHTML=this.responseText;
				}
			};
			xhr.send();
		}
	</script>
	<br><br><br>
	<table align="center">
		<tr>
			<td align="left"><button id="demo1" class="Button Button1" onclick="loadDoc1()">Doctors Feedback</button></td>
			<td align="center"><button id="demo2" class="Button Button1" onclick="loadDoc2()">Nurses Feedback</button></td>
			<td align="right"><button id="demo3" class="Button Button1" onclick="loadDoc3()">Nurses Feedback</button></td>
		</tr>
		<tr>
			<td colspan="3"><br></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><a class="btn" href="adminDashboard.php"> Back</a></td>
		</tr>
	</table>
<?php
	require_once 'footer.php';		
?>