<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Online Examination</title>
</head>

<body>
<div id="container">
	<?php
		include "Header.php";
		?>
	<div id="content">
		<div id="left">
			<h1>Welcome <?php echo $_SESSION['Name'];?></h1>
	
    
    <?php
      // Establish Connection with Database
$con3 = mysql_connect("localhost","root");
// Select Database
mysql_select_db("QUIZ", $con3);
// Specify the query to execute

$sql = "SELECT * FROM `result_master` WHERE  Student_id='".$_SESSION['ID']."'";

// Execute query
$result = mysql_query($sql,$con3);
if(mysql_num_rows($result)>0)
{
	echo	'<br/><a href="Result.php" >Click here</a> to view your result</p>';
}
else
{
echo	'
<p>
    
    Instructions: For each question, choose the single best answer. Make your choice by clicking on its button. You can change your answers at any time. When the quiz is graded, the correct answers will appear in the box after each question. </p>
	<p> 

<a href="Exam.php" >Click here</a> to start exam</p>';
}?>
	<h1>&nbsp;</h1>
	  </div>
		
		<div id="footerline"></div>
	</div>
	
	<div id="footer">Copyright © 2013 Online Exam.  All rights reserved.</div>	
</div>
</body>
</html>