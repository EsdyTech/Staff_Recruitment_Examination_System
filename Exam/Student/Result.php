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
<style type="text/css">
<!--
.style12 {font-size: small; font-weight: bold; }
.style13 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: small;
	font-weight: bold;
	color: #000000;
}
.style4 {font-size: small;
	font-weight: bold;
	color: #FFFFFF;
}
.style5 {color: #FFFFFF}
.style6 {color: #000000}
-->
</style>
</head>

<body>
<div id="container">
	<?php
		include "Header.php";
		?>
	<div id="content">
		<div id="left">
			<h1>Welcome &nbsp; <?php echo $_SESSION['Name'];?></h1>
			
	        <table width="100%" border="1" bordercolor="#006600" >
              <tr>
                            <th bgcolor="#006600" class="style13"><div align="left" class="style9 style5"><strong>Student ID</strong></div></th>
                <th bgcolor="#006600" class="style13"><div align="left" class="style9 style5"><strong>Class</div></th>
               
                <th bgcolor="#006600" class="style13"><div align="left" class="style9 style5"><strong>Total</strong></div></th>
                <th bgcolor="#006600" class="style13"><div align="left" class="style9 style5"><strong>Correct</strong></div></th>
                <th bgcolor="#006600" class="style13"><div align="left" class="style4">Wrong</div></th>
                <th bgcolor="#006600" class="style13"><div align="left" class="style4">Percentage</div></th>
              </tr>
              <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("QUIZ", $con);
// Specify the query to execute
$sql = "SELECT * from `result_master` WHERE  Student_id='".$_SESSION['ID']."'";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$id=$row['Student_Id'];
$fal=$row['Faculty'];

$Total=$row['Total'];
$Correct=$row['Correct'];
$Wrong=$row['Wrong'];
$per=$row['per'];

?>
              <tr>
               
                <td class="style13"><div align="left" class="style9 style6"><strong><?php echo $id;?></strong></div></td>
                <td class="style13"><div align="left" class="style9 style6"><strong><?php echo $fal;?></strong></div></td>
                <td class="style13"><div align="left" class="style9 style6"><strong><?php echo $Total;?></strong></div></td>
                <td class="style13"><div align="left" class="style9 style6"><strong><?php echo $Correct;?></strong></div></td>
                <td class="style13"><div align="left" class="style9 style6"><strong><?php echo $Wrong;?></strong></div></td>
                <td class="style13"><div align="left" class="style9 style6"><strong><?php echo $per;?></strong></div></td>
              </tr>
              <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
              <tr>
                <td colspan="7" class="style13"><div align="left" class="style12"> </div></td>
              </tr>
              <?php
// Close the connection
mysql_close($con);
?>
            </table>
          <p>&nbsp;</p>
	
	<h1>&nbsp;</h1>
	  </div>
		
		<div id="footerline"></div>
	</div>
	
	<div id="footer">Copyright © 2013 Online Exam.  All rights reserved.</div>	
</div>
</body>
</html>