<?php
error_reporting(0);
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include_once('title.php');?>
<meta name="keywords" content="free website templates, CSS templates, download HTML page, templatemo.com" />
<meta name="description" content="templatemo 004 - free CSS website template" />
<link href="../templatemo_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../sliderman.1.3.8.js"></script>
	<link rel="stylesheet" type="text/css" href="../sliderman.css" />

</head>

<body>
<p style="margin-left:270px">
<!-- <img  src="../images/rr.png"/> -->
</p>
<div id="templatemo_container">
  <div class="templatemo_line"></div> 
  <div id="templatemo_header">
  
  <?php include_once('slider.php');?>

  </div>
  
  <div class="templatemo_line"></div>    
	
    <div id="templatemo_content">
    

    <div id="templatemo_left_column">
	<?php
		include "Header.php";
		?>
	<div class="section_box">
        <div class="subtitle">Featured Web Links</div>
         
      </div>
	  <div class="text_area" align="justify">
        <div class="subtitle">Quick Contact</div>
          Tel: 000-000-0000<br />
          Fax: 001-001-0011<br />
          Email:ogitechigbesa@gmail.com <br />
          <br />
	  <div class="subtitle">Quick Contact</div>
          Tel: 000-000-0000<br />
          Fax: 001-001-0011<br />
          Email:ogitechigbesa@gmail.com <br />
          <br />
      </div>
    </div>
      
      <div id="templatemo_right_column">
   	 		<div class="text_area" align="justify">
      
<div class="title"><?php echo 'Welcome, '.$_SESSION['Name'];?></div>
<?php
/// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("quizz", $con);
// Specify the query to execute
$_SESSION['ID'];
$sql = "select * from student_registration where RollNumber = '".$_SESSION['ID']."'";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
$row = mysql_fetch_array($result);

?>
<!-- <img src="<?php echo "../passport/".$row['passport'].""?>" title="Profile Pic" width="100" height="86" class="templatemo_pic" /> -->
<!-- <marquee direction = "up">Welcome to the Staff Page </marquee> -->
<?php
$Id=$_SESSION['ID'];
// Establish Connection with Database
include_once('../connect.php');
// Specify the query to execute
$sql = "select * from student_registration where RollNumber='".$Id."'";
// Execute query
$result = mysql_query($sql);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['Student_Id'];
$RollNumber=$row['RollNumber'];
$Name=$row['Name'];
$Faculty=$row['Faculty'];
$Email=$row['Email'];
$Mobile=$row['Mobile'];
$UserName =$row['UserName'];
$Password=$row['Password'];

}
?>
         <?php


/// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("quizz", $con);
// Specify the query to execute
$_SESSION['ID'];
$sql = "select * from student_registration where RollNumber = '".$_SESSION['ID']."'";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
$row = mysql_fetch_array($result);

?>
<img style="margin-left:-250px" src="<?php echo "../passport/".$row['passport'].""?>" title="<?php echo $_SESSION['Name'];?>" width="100" height="86" class="templatemo_pic" />           
                      <table width="100%"  border="0">
                        <tr>
                          <td height="36"><span class="style8"><strong>Staff_Reg Number:</strong></span></td>
                          <td><?php echo $RollNumber;?></td>
                        </tr>
                        <tr>
                          <td height="31"><strong>Name:</strong></td>
                          <td><?php echo $Name;?></td>
                        </tr>
                        <tr>
                          <td height="31"><strong>Position:</strong></td>
                          <td><?php echo $Faculty;?></td>
                        </tr>
                        <tr>
                          <td height="31"><strong>Mobile:</strong></td>
                          <td><?php echo $Mobile;?></td>
                        </tr>
                        <tr>
                          <td height="33"><strong>Email:</strong></td>
                          <td><?php echo $Email;?></td>
                        </tr>
                        
                        <tr>
                          <td height="28"></td>
                        </tr>
                      </table>
                  
                  <?php
// Close the connection
?></td>
              </tr>
            </table>
	<p>&nbsp;</p>
 		</div>   
	</div>
    </div>
 
	<div id="templatemo_footer" align="center">
  <?php include_once('footer.php');?></div></div></body>
