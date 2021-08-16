<?php 
	session_start();
	if(!isset($_SESSION["loggedUser"]))
	{
		header("Location: login.php");
	}
	include 'adminHeader.php';

?>
<h2 align="center">Welcome <?php echo $_SESSION["loggedUser"];?></h2>

<table align="center">
	<tr>
		
		<td align="right" style="height:75px"><a class="btn btn1" href="allDoctors.php">All Doctors list</a></td>
		<td align="center" style="height:75px"><a class="btn btn1" href="allNurses.php">All Nurses list</a></td>
		<td align="left" style="height:75px"><a class="btn btn1" href="allPatients.php">All Patients list</a></td>	
	</tr>
	<tr>
		<td style="height:75px"><a class="btn btn1" href="accountCeatingForDoctor.php">Create Doctor's Account</a></td>
		<td style="height:75px" align="center"><a class="btn btn1" href="accountCreatingForNurse.php">Create Nurse's Account</a></td>
		<td style="height:75px"><a class="btn btn1" href="createPatient.php">Create a Patient's Account</a></td>
		
	</tr>
	<tr>
		<td align="right" style="height:75px"><a class="btn btn1" href="editAdminProfile.php?id='1'">Edit your profile</a></td>
		<td style="height:75px"><a class="btn btn1" href="generateReport.php">Generate Patient's Report</a></td>
		<td style="height:75px"><a class="btn btn1" href="allFeedbacks.php">All feedbacks</a></td>
	</tr>
	<tr>
		<td align="center" style="height:75px" colspan="3"><a class="btn btn1" href="doctorRequests.php?id='.$s['Id'].'">Manage Doctors Requests</a>   <a class="btn btn1" href="nurseRequests.php?id='.$s['Id'].'">Manage Nurses Requests</a></td>
		
	</tr>
</table>

<?php	
	include 'footer.php';
?>
