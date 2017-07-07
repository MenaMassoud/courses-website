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
<a href='My profile.php'>My profile</a>    <a href='showcourses.php'>Home</a>     <a href='Logout.php'>logout</a>
</pre>


<?php
mysql_connect('localhost','root','');
mysql_select_db('courses');
if(mysqli_connect_errno()){echo "error connection";} 



$sql="select * from courseslist" ;
$res=mysql_query($sql);
 
while($row=mysql_fetch_array($res))
{
//echo $row['name'];
//echo $row['courseURL'].'</br>';
?>
<a href="showvideo.php?id=<?php echo $row['id'];?>"><?php echo $row['id'].' '.$row['name'].'<br/>'.'<br/>';?></a>

<?php
echo $row['decription'].'<br/>';
}


?>

</body>
</html>
