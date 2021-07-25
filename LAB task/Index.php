<html>
<head></head>
<body>
	<form>
		<input id="uname" onkeyup="viewOutput(this)" type="text" placeholder="Username"><br>
		<span id="op"></span><br>
		<input type="password" placeholder="Password"><br> 
	</form>
	<button id="btn_g" onclick="viewGoogle()">Log in with Google</button>
	<form id="g_form" style="display:none">
		<input type="text" placeholder="Gmail"><br>
		<input type="password" placeholder="Gmail Password"><br>
	</form>
	<br>
	<button onclick="turnOn()">Turn On</button>
	<img id="bulb" src="on.gif">
	<button onclick="turnOff()">Turn Off</button>
	<br>
	<span onmouseover="showinfo()" onmouseout="hideinfo">AIUB</span>
	<p id="info" style="display:none">American International University-Bangladesh, commonly known by its acronym AIUB, is an accredited private university in Dhaka, Bangladesh. The university is an independent organization with own Board of Trustees</p>
	<script src="myJS.js"></script>
</body>
</html>