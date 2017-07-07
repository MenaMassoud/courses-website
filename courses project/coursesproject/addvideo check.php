<?php
$name = $_GET['name'];
$videoURL = $_GET['videoURL'];
$courseID = $_GET['courseID'];
mysql_connect('localhost','root','');
mysql_select_db('courses');
if(mysqli_connect_errno()){echo "error connection";} 
$sql ="Insert into videolist (name,videoURL,courseID) values ('$name','$videoURL','$courseID')";
$res =  mysql_query($sql);
header('location : final.php');
?>