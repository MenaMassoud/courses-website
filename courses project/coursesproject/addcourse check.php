<?php

$name = $_GET['name'];
$courseURL = $_GET['courseURL'];
$desc = $_GET['description'];
mysql_connect('localhost','root','');
mysql_select_db('courses');
if(mysqli_connect_errno()){echo "error connection";} 
$sql ="insert into courseslist (name,courseURL,decription) values ('$name','$courseURL','$desc')";
$res =  mysql_query($sql);
header('location : final.php');
?>
