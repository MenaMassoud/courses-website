<html>
<head>
<title>
learning is fun
</title>

<style type = 'text/css'>

body{margin-top: 60px;
    margin-bottom: 60px;
    margin-right: 50px;
    margin-left: 50px;
	
background: linear-gradient(to bottom right, red , blue);
text-align=center;
font-family:Arial, Helvetica,sans-serif;
	font-size : 130%;}

</style>
</head>
<body>

<img src='great-courses-on-audible.png'  width='100%' height='50%' />
<br/>
<br/>
<br/>
<br/>
<pre>
<a href='My profile.php'>My profile</a>    <a href='showcourses.php'>Home</a>      <a href='addcourses.php'>addcourse</a>      <a href='addvideo.php'>addvideo</a>       <a href='Logout.php'>logout</a>
</pre>




<?php
mysql_connect('localhost','root','');
mysql_select_db('courses');
$id=$_GET['id'];

$sql="select * from videolist where courseID = '$id' " ;
$res=mysql_query($sql);
 
while($row=mysql_fetch_array($res))
{
	?>
	<a href="playvideo.php?id=<?php echo $row['courseID'];?>"><?php echo $row['id'].' '.$row['name'].'<br/>'.'<br/>'.'<br/>'.'<br/>'.$row['videoURL'];?></a>
	<?php
}



?>