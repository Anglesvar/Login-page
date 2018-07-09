<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
p{
	color:rgba(10,10,10,0.7);
	font-weight: bolder;
	font-size: 45px;
	margin-top:25%;
	margin-left: 5%;
}
body{
	background-repeat: none;
	background: url(ben.jpg) no-repeat center center fixed;
	 -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
a{
	 background: #fff;
  border-radius: 3px 0 0 3px;
  color: black;
  font-style: italic;
  display: inline-block;
  height: 26px;
  line-height: 26px;
  padding: 0 2.5% 0 2%;
  position: relative;
  margin-top:3%;
  margin-left: 85%;
  text-decoration: none;
  -webkit-transition: color 0.2s;
}
a:hover{
	 background-color: gray;
  color: black;
}
</style>
<?php
session_start();
if(!isset($_SESSION['username']))
{
    // not logged in
    header('Location: second project.html');
    exit();
}
$con = mysqli_connect('localhost','root','', 'course');
// Check connection
if ($con->connect_error) 
{
    die("Connection failed: " . $con->connect_error);
} 
//session_start();
if ($_SERVER['REQUEST_METHOD']=='POST')
{

$course=$_POST['course'];
$college=$_POST['college'];
$marks=$_POST['marks'];
$us=$_SESSION['username'];

$sql="INSERT INTO registration(username,course,college,marks) VALUES ('$us','$course','$college','$marks') ";

$resu=mysqli_query($con,$sql);
if($resu){
	echo "<p class=w3-animate-zoom>Thank You For registering with us!</p>";
}


}
?>
<a href="logout.php">Log Out</a>

</html>

