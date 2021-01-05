<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
error_reporting(0);
// Establish Connection with MYSQL
$con = mysql_connect ("localhost","root");
// Select Database
mysql_select_db("quizz", $con);

$qry= "select  * from staffregno where StaffRegNo = '100000'";
$res= mysql_query($qry,$con);
$row = mysql_fetch_array($res);

$newStaffRegNo  = $row['lastStaffRegNo']  + 1;  

$qryy= "update staffregno set lastStaffRegNo='$newStaffRegNo' where StaffRegNo = '100000'";
$resq= mysql_query($qryy,$con);

 if($resq > 0){
          


$passportName = $_FILES['passport']['name'];
$passportmpName = $_FILES['passport']['tmp_name'];
$passportSize = $_FILES['passport']['size'];
$passportType = $_FILES['passport']['type'];

$resumeName = $_FILES['resume']['name'];
$resumetmpName = $_FILES['resume']['tmp_name'];
$resumeSize = $_FILES['resume']['size'];
$resumeType = $_FILES['resume']['type'];

	move_uploaded_file ($passportmpName,'passport/'.$passportName);
	move_uploaded_file ($resumetmpName,'credentials/'.$resumeName);
	$date = date("Y-m-d");

	
	$txtName=$_POST['txtName'];
	$cmbSem=$_POST['cmbSem'];
	$txtEmail=$_POST['txtEmail'];
	$txtMobile=$_POST['txtMobile'];
	$txtUserName=$_POST['txtUserName'];
	$txtPassword=$_POST['txtPassword'];
	$Status="Active";
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("quizz", $con);
	// Specify the query to Insert Record
	$sql = "insert into student_registration (RollNumber,Name,Faculty,Email,Mobile,UserName,Password,passport,resume,dateReg) 	
	values('".$newStaffRegNo."','".$txtName."','".$cmbSem."','".$txtEmail."','".$txtMobile."','".$txtUserName."','".$txtPassword."','".$passportName."','".$resumeName."','".$date."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("New Student Inserted Succesfully");window.location=\'stlogin.php\';</script>';
 }
?>
</body>
</html>
