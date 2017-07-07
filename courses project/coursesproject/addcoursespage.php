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
<a href='addcoursespage.php'>add course</a>    <a href='addvideo.php'>add video</a>     <a href='Logout.php'>logout</a>
</pre>
</body>
</html>
<form action = 'addcourse check.php' method="get">
<input type = 'text'   name ='name' placeholder='name' required/>
<br/>
<br/>
<input type = 'text'   name ='courseURL' placeholder='courseURL' required/>
<br/>
<br/>
<input type = 'text'   name ='description' placeholder='description'   required/>
<br/>
<br/>
<input type = 'submit'   value ='add course' />



</form>
<?php



?>