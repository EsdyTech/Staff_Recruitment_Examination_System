<?php
error_reporting(0);
if (!isset($_SESSION)) 
{
  session_start();
  $StudentId  = $_GET['StuId'];
  $_SESSION['StudentId'] = $StudentId ;
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
          <tr>
                 <th bgcolor="#006600" class="style13"><div align="left" class="style9 style5"><strong>Staff ID</strong></div></th>
                <th  bgcolor="#006600" class="style13"><div align="left" class="style9 style5"><strong>Resume/CV</strong></div></th>
                <th bgcolor="#006600" class="style13"><div align="left" class="style9 style5"><strong>Cover Letter</strong></div></th>
                <th bgcolor="#006600" class="style13"><div align="left" class="style9 style5"><strong>WAEC</strong></div></th>
                <th bgcolor="#006600" class="style13"><div align="left" class="style4">NYSC</div></th>
                <th bgcolor="#006600" class="style13"><div align="left" class="style4">Others</div></th>
              </tr>
              <?php
// Establish Connection with Database
include_once('../connect.php');

// Specify the query to execute
$sql = "SELECT * from `credentials` WHERE  studentId='". $_SESSION['StudentId']."'";
// Execute query
$result = mysql_query($sql);
// Loop through each records 
$row = mysql_fetch_array($result);

$Id=$row['studentId'];

if ($row == 0){

    echo "<strong>No Credentials Uploaded Yet!</strong>";

}

else{
?>  
              <tr>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><?php echo $Id;?></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><a title="Download File"  href="download.php?file=<?php echo urlencode($row['resume']);?>">Download</a></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><a title="Download File"  href="download.php?file=<?php echo urlencode($row['coverLetter']);?>">Download</a></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><a title="Download File"  href="download.php?file=<?php echo urlencode($row['waec']);?>">Download</a></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><a title="Download File"  href="download.php?file=<?php echo urlencode($row['nysc']);?>">Download</a></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><a title="Download File"  href="download.php?file=<?php echo urlencode($row['others']);?>">Download</a></strong></div></td>
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