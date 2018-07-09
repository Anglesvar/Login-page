<?php
$con = mysqli_connect('localhost','root','', 'course');
// Check connection
if ($con->connect_error) 
{
    die("Connection failed: " . $con->connect_error);
} 

if ($_SERVER['REQUEST_METHOD']=='POST')
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$fath_name=$_POST['fath_name'];
$username1=$_POST['username1'];
$password1=$_POST['password1'];
$date1=$_POST['date1'];
$email=$_POST['eid'];

	
$sql= "INSERT INTO signup(firstname,lastname,fath_name,username, password, dob, email) VALUES ('$firstname','$lastname','$fath_name','$username1','$password1','$date1','$email')";

$sl= "INSERT INTO login(username, password) VALUES ('$username1','$password1')";
$resultl = mysqli_query($con,$sl);
$result = mysqli_query($con,$sql);

if($result AND $resultl){
	echo '<script type="text/javascript">'; 
	echo 'alert("Signed Up Successfully!!");'; 
	echo 'window.location.href = "Second Project.html";';
	echo '</script>';
}
}
?>

