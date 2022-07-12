<?php
$servername="localhost";
$username="root";
$password="";
$dbname="buyer_info";

$namee=$_POST['name'];
$email=$_POST['email'];
$product=$_POST['product'];
$state=$_POST['state'];
$phonee=$_POST['mobile'];
$message=$_POST['message'];

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}
$sql="INSERT INTO response (name,email,product,state,phone,message)values('$namee','$email','$product','$state','$phonee','$message')";

if($conn->query($sql)===TRUE)
{
	echo '<script>alert("We Will Contact You Shortly")</script>';
}
else
{
	echo '<script>alert("Sorry an Error Occured")</script>';
}
?>