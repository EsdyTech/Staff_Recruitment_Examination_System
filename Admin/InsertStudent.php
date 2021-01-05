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
          



	$date = date("Y-m-d");
$image="noimage.jpg";
	// $txtRoll=$_POST['txtRoll'];
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
	$sql = "insert into student_registration (RollNumber,Name,Faculty,Email,Mobile,UserName,Password,passport,dateReg) 	
	values('".$newStaffRegNo."','".$txtName."','".$cmbSem."','".$txtEmail."','".$txtMobile."','".$txtUserName."','".$txtPassword."','".$image."','".$date."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("New Staff Inserted Succesfully");window.location=\'Student.php\';</script>';
 }
?>
</body>
</html>
