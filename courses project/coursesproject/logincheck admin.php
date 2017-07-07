<?php
$name=$_POST['name'];
$email=$_POST['Email'];
$password=$_POST['password'];

mysql_connect('localhost','root','');
mysql_select_db('courses');
if(mysqli_connect_errno()){echo 'connection error';}

$sql= "select email from admin where email='$email'and password='$password'";
$res=mysql_query($sql);

if(mysql_num_rows($res)>0)
{
while($row=mysql_fetch_array($res))
{
	$_SESSION['logged']=1;
	$_SESSION['email']=$row['email'];
	
	$_SESSION['password']=$row['password'];
		
}
header('location:addcoursespage.php');	
}
else
{
	echo'you are not an admin ';
}
	?>
	