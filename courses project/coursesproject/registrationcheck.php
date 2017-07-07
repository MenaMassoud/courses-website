<?php
$name=$_POST['my_name'] ;
$Email=$_POST['my_Email'];
$password=$_POST['my_password'];
$address=$_POST['my_Address'];
$phone=$_POST['my_phone'];
$type = $_FILES['my-image']['type'];
$type = substr($type,6);
echo $type;
$dir = "Images";
if($type =="png")
{
	$image = imagecreatefrompng($_FILES['my-image']['tmp_name']);
	$image_name = $dir.'/'.'asmaa'.'.png';
	imagepng($image,$image_name);
}

Session_start();
mysql_connect('localhost','root','');
mysql_select_db('courses');
if(mysqli_connect_errno()){echo "error connection";} 
$sql = "select email from users where email='$Email'";
$row = mysql_query($sql);
if(mysql_num_rows($row)>0)
{
	echo'The email is already used';
	}
else
{$res = "insert into users (name,email,PASSWORD,phone,address)
values ('$name','$Email','$password',$phone,'$address')
";
$result=mysql_query($res);
}


//header('Location:showcourses.php');
?>


