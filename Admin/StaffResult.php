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
<?php include_once('title.php');?></html>
<meta name="keywords" content="free website templates, CSS templates, download HTML page, templatemo.com" />
<meta name="description" content="templatemo 004 - free CSS website template" />
<link href="../templatemo_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../sliderman.1.3.8.js"></script>
	<link rel="stylesheet" type="text/css" href="../sliderman.css" />
<style type="text/css">

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

</style>
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
          Email:BRIGHTER@gmail.com <br />
          <br />
      </div>
    </div>
      
      <div id="templatemo_right_column">
   	 		<div class="text_area" align="justify">
      
          <div class="title">WELCOME ADMINISTRATOR</div>
			
	        <table width="100%" border="1" bordercolor="#006600" >
          <tr>
                      <th bgcolor="#006600" height="32"  class="style3"><div align="left" class="style9 style5"><strong>S/N</strong></div></th>
                      <th  bgcolor="#006600" class="style3"><div align="left" class="style9 style5"><strong>Reg Number</strong></div></th>
                      <th bgcolor="#006600"  class="style3"><div align="left" class="style9 style5"><strong>Name</strong></div></th>
                      <th bgcolor="#006600" height="32"><div align="left" class="style9 style5"><strong>Position Applied</strong></div></th>
                      <th bgcolor="#006600"  class="style3"><div align="left" class="style9 style5"><strong>Email Address</strong></div></th>
                       <th bgcolor="#006600" class="style3"><div align="left" class="style9 style5"><strong>Mobile</strong></div></th>
                      <th  bgcolor="#006600" class="style3"><div align="left" class="style9 style5"><strong>Action</strong></div></th>
                    </tr>
              <?php
/// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("quizz", $con);
// Specify the query to execute
$sql = "select * from student_registration";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
$k=0;
while($row = mysql_fetch_array($result))
{$k = $k + 1;
$Id=$row['Student_Id'];
$RollNumber=$row['RollNumber'];
$Name=$row['Name'];
$Faculty=$row['Faculty'];
$Email=$row['Email'];
$Mobile=$row['Mobile'];
$UserName=$row['UserName'];
$Password=$row['Password'];


?>
              <tr>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><?php echo $k;?></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><?php echo $RollNumber;?></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><?php echo $Name;?></strong></div></td>
                      <td class="style3"><div align="left" class="style9 style6"><strong><?php echo $Faculty;?></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><?php echo $Email;?></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><?php echo $Mobile;?></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><a href="ViewStaffResult.php?StuId=<?php echo $Id;?>">View</a></strong></div></td>
                    </tr>
              <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
              <!-- <tr>
                <td colspan="7" class="style13"><div align="left" class="style12"> </div></td>
              </tr> -->
              <?php
// Close the connection
?>
            </table>
          <p>&nbsp;</p>
	
	<h1>&nbsp;</h1>
	  </div>
		
		
	</div>
	
	
</div>

</div>   
	</div>
    </div>
 
	<div id="templatemo_footer" align="center">
  <?php include_once('footer.php');?></div></div></body>
</body>
</html>