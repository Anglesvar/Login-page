<?php
session_start();
$con = mysqli_connect('localhost','root','', 'course');
// Check connection
if ($con->connect_error) 
{
    die("Connection failed: " . $con->connect_error);
} 
//session_start();
if ($_SERVER['REQUEST_METHOD']=='POST')
{

$username=$_POST['username'];
$password=$_POST['password'];
//$pass->encryptIt($pass);
	
$sqli= "SELECT * FROM login WHERE username = '$username' AND password = '$password' ";
$resulti = mysqli_query($con,$sqli);
$rowcount = mysqli_num_rows($resulti);

session_start();
if($rowcount==1){
	$_SESSION['username']=$_POST['username'];
	 header('Location:mainpage.php');
}
	

else{
	echo '<script type="text/javascript">'; 
	echo 'alert("Username and Password donot Match..Try Again!!");'; 
	echo 'window.location.href = "Second Project.html";';
	echo '</script>';

	//error_reporting(E_ERROR | E_PARSE);
	}
}
?>

