<?php
error_reporting(0);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php


	
	$txtPosition=$_POST['txtPosition'];
	
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("quizz", $con);


	$sqll = "select * from positions where Name = '$txtPosition'" ;
// Execute query
$results = mysql_query($sqll,$con);

if ($results > 0){
	
	echo '<script type="text/javascript">alert("Position Already Exists!");window.location=\'position.php\';</script>';
}

else{
	// Specify the query to Insert Record
	$sql = "insert into positions(Name) 	values('".$txtPosition."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Position Inserted Succesfully");window.location=\'position.php\';</script>';
}
?>
</body>
</html>
