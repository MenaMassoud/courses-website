<?php
session_start();


$name=$_POST['name'];
$myemail=$_POST['Email'];
$mypassword=$_POST['password'];

mysql_connect('localhost','root','');
mysql_select_db('courses');
if(mysqli_connect_errno()){echo 'connection error';}

$sql= "select email from users where email='$myemail'and password='$mypassword'";
$res=mysql_query($sql);

if(mysql_num_rows($res)>0)
{
	$_SESSION['logged']=1;
while($row=mysql_fetch_array($res))
{
	$_SESSION['email']=$row['email'];
	
	$_SESSION['password']=$row['password'];
		
}
header('location:showcourses.php');	
}
else
{
	echo'you need to login first ';
	//header('location:Login.php');
	
}


?>