<html>
<?php session_start();?>
<head>
	<title>Deepika</title>
</head>
<style>
.cont{
	margin-bottom: 1%;
  padding: .25%;
  border: 0;
  border-bottom: 2px solid currentcolor; 
  font-weight: bold;
  border-radius: 3px;
  top: 20%;
  left: 50%;
  width:10%;
  position: absolute;
}
.cont1{
	margin-bottom: 1%;
  padding: .25%;
  border: 0;
  border-bottom: 2px solid currentcolor; 
  font-weight: bold;
  border-radius: 3px;
  top: 35%;
  left: 50%;
  width:10%;
  position: absolute;
}
body{
	background-repeat: none;
	background: url(unsplash.jpg) no-repeat center center fixed;
	 -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
option{
	font-weight: bold;
}
.ip{
	margin-bottom: 1%;
  padding: .25%;
  border: 0;
  border-bottom: 2px solid; 
  font-weight: bold;
  border-radius: 3px;
  top: 48%;
  left: 50%;
  width:10%;
  position: absolute;
}
.subm{
	border: none;
	outline: none;
	height: 5%;
	width:7%;
	color: #fff;
	font-size: 16px;
	background: #79BAEC;
	cursor: pointer;
	border-radius: 5px;
	top:65%;
	left:45%;
	position:absolute;
}
.subm:hover{
	border: none;
	outline: none;
	height: 5%;
	width:7%;
	color: #fff;
	font-size: 16px;
	background: #00acc1;
	cursor: pointer;
	border-radius: 5px;
	top:65%;
	left:45%;
	position:absolute;
	transition-duration:1s;
}


</style>
<body>
<form action="final.php" method="post">
<p style="left:30%;top:13%;color:rgba(0,0,0,0.6);border-bottom:1px solid;font-size: 32px;position: absolute;font-weight: bold;">Select a Course</p>
<select class="cont" name="course">
<option value="IT">IT</option>
<option value="ECE">ECE</option>
<option value="EEE">EEE</option>
<option value="MECH">MECH</option>
<option value="CHEM.ENGG">CHEM.ENGG</option>
<option value="BIO-TECH">BIO-TECH</opTion>
<option value="CIVIL">CIVIL</option>
<option value="TEXTILE ENGG.">TEXTILE ENGG.</option>
<option value="ARCHITECTURE ENGG">ARCHITECTURE ENGG.</option>
<option value="COMP.SCIENCE ENGG.">COMP.SCIENCE ENGG.</option>
<option value="MCA">MCA</option>
</select>
<p style="left:30%;top:30%;color:rgba(0,0,0,0.6);border-bottom:1px solid;font-size: 30px;font-weight: bold;position: absolute;">Available Colleges</p>
<select class="cont1" name="college">
<option value="VELAMMAL">VELAMMAL</option>
<option value="PSNA">PSNA</option>
<option value="THIAGARAJA">THIAGARAJA</option>
<option value="PSG">PSG</option>
<option value="SSN">SSN</option>
<option value="KLN">KLN</option>
<option value="SAI RAM">SAI RAM</option>
<option value="KAMRAJ">KAMRAJ</option>
<option value="SATHYABAMA">SATHYABAMA</option>
<option value="ALAGAPPA">ALAGAPPA</option>
<option value="KONGU">KONGU</option>
</select>
<p style="left:30%;top:44%;color:rgba(0,0,0,0.6);border-bottom:1px solid;font-size: 23px;font-weight: bold;position: absolute;">ENTER YOUR MARKS:</p>
<input class="ip" type="text" name="marks" placeholder="Your marks within 100">
<input class="subm" type="submit" value="Submit">
</form>
</body>
<?php $e=$_SESSION['username']; 
if(!isset($_SESSION['username']))
{
    // not logged in
    header('Location: second project.html');
    exit();
}?>
</html>
