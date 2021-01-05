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

<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style2 {font-size: 12px}
.style12 {font-size: small; font-weight: bold; }
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: small;
	color: #000000;
}
.style4 {font-size: small;
	font-weight: bold;
	color: #FFFFFF;
}
.style5 {color: #000000}
.style6 {color: #000000}
.style9 {font-family: Times New Roman, Arial, Helvetica, sans-serif}

</style>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>
<?php
// Establish Connection with MYSQL
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("quizz", $con);
?>


<body>
<p style="margin-left:270px">
<!-- <img  src="../images/rr.png"/> -->
</p>
<div id="templatemo_container">
  <div class="templatemo_line"></div> 
  <div id="templatemo_header">
  
  <?php include_once('slider.php');?>

  
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
      
                <div class="title"><?php echo 'Welcome, '.$_SESSION['Name'];?></div>

	<div id="content">
		<div id="left">
			
			
	        <div id="TabbedPanels1" class="TabbedPanels">
	          <ul class="TabbedPanelsTabGroup">
	            <li class="TabbedPanelsTab style2" tabindex="0">Upload Credentials</li>
	            <li class="TabbedPanelsTab style2" tabindex="0">View/Download Credentials</li>
              </ul>
	          <div class="TabbedPanelsContentGroup">
	            <div class="TabbedPanelsContent">
	              <form id="form1" name="form1" method="post" enctype='multipart/form-data' action="uploadCredentials.php">
	                <table width="100%" height="259" border="0" cellpadding="0" cellspacing="0">
                     
                    <tr>
                        <td>Resume/CV:</td>
                        <td><span id="sprytextfield6">
                          <label>
                          <input type="file" required name="resume" id="txtPassword" />
                          </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td>Cover Letter:</td>
                        <td><span id="sprytextfield6">
                          <label>
                          <input type="file" required name="letter" id="txtPassword" />
                          </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td>Certificates(WAEC):</td>
                        <td><span id="sprytextfield6">
                          <label>
                          <input type="file" required name="waec" id="txtPassword" />
                          </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td>Certificates(NYSC):</td>
                        <td><span id="sprytextfield6">
                          <label>
                          <input type="file" required name="nysc" id="txtPassword" />
                          </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td>Certificates(Others):</td>
                        <td><span id="sprytextfield6">
                          <label>
                          <input type="file" required name="others" id="txtPassword" />
                          </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><label>
                          <input type="submit" name="button" id="button" value="Upload Credentials" />
                        </label></td>
                      </tr>
                    </table>
                  </form>
                </div>


<?php

if (isset($_POST['button']))
    {

$resumeName = $_FILES['resume']['name'];
$resumetmpName = $_FILES['resume']['tmp_name'];
$resumeSize = $_FILES['resume']['size'];
$resumeType = $_FILES['resume']['type'];

$letterName = $_FILES['letter']['name'];
$lettertmpName = $_FILES['letter']['tmp_name'];
$letterSize = $_FILES['letter']['size'];
$letterType = $_FILES['letter']['type'];

$waecName = $_FILES['waec']['name'];
$waectmpName = $_FILES['waec']['tmp_name'];
$waecSize = $_FILES['waec']['size'];
$waecType = $_FILES['waec']['type'];

$nyscName = $_FILES['nysc']['name'];
$nysctmpName = $_FILES['nysc']['tmp_name'];
$nyscSize = $_FILES['nysc']['size'];
$nyscType = $_FILES['nysc']['type'];

$otherName = $_FILES['others']['name'];
$othertmpName = $_FILES['others']['tmp_name'];
$otherSize = $_FILES['others']['size'];
$otherType = $_FILES['others']['type'];


    move_uploaded_file ($resumetmpName,'../credentials/'.$resumeName);
    move_uploaded_file ($lettertmpName,'../credentials/'.$letterName);
    move_uploaded_file ($waectmpName,'../credentials/'.$waecName);
    move_uploaded_file ($nysctmpName,'../credentials/'.$nyscName);
    move_uploaded_file ($othertmpName,'../credentials/'.$otherName);

   
    // Establish Connection with Database
    $con = mysql_connect("localhost","root");
    // Select Database
    mysql_select_db("quizz", $con);

    $sql = "SELECT * from `credentials` WHERE  studentId='".$_SESSION['ID']."'";
    $result = mysql_query($sql,$con);
   // $row = mysql_fetch_array($result);

if($result){
	echo '<script type="text/javascript">alert("Credentials Exist!");window.location=\'uploadCredentials.php\';</script>';

}
else{

  $sql = "insert into credentials	(studentId,resume,coverLetter,waec,nysc,others) values('".$_SESSION['ID']."','".$resumeName."','".$letterName."','".$waecName."','".$nyscName."','".$otherName."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Credentials Uploaded Succesfully");window.location=\'uploadCredentials.php\';</script>';

    }
  }



?>




	            <div class="TabbedPanelsContent">
	              <table width="100%" border="1"  >
                    <tr>
                      <th height="32"  class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                      <th  class="style3"><div align="left" class="style9 style5"><strong>Reg Number</strong></div></th>
                      <th  class="style3"><div align="left" class="style9 style5"><strong>Resume</strong></div></th>
                      <th height="32"><div align="left" class="style9 style5"><strong>CoverLetter</strong></div></th>
                      <th  class="style3"><div align="left" class="style9 style5"><strong>WAEC</strong></div></th>
                       <th class="style3"><div align="left" class="style9 style5"><strong>NYSC</strong></div></th>
                       <th class="style3"><div align="left" class="style9 style5"><strong>Others</strong></div></th>
                      <th class="style3"><div align="left" class="style9 style5">Delete</div></th>
                    </tr>
                    <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("quizz", $con);
// Specify the query to execute
$sql = "select * from credentials where studentId = '".$_SESSION['ID']."'";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
$k=1;
while($row = mysql_fetch_array($result))
{
$Id=$row['Id'];
$studentId=$row['studentId'];


?>
                    <tr>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><?php echo $k;?></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><?php echo $studentId;?></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><a title="Download File"  href="download.php?file=<?php echo urlencode($row['resume']);?>">Download</a></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><a title="Download File"  href="download.php?file=<?php echo urlencode($row['coverLetter']);?>">Download</a></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><a title="Download File"  href="download.php?file=<?php echo urlencode($row['waec']);?>">Download</a></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><a title="Download File"  href="download.php?file=<?php echo urlencode($row['nysc']);?>">Download</a></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><a title="Download File"  href="download.php?file=<?php echo urlencode($row['others']);?>">Download</a></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><a href="DeleteCredentials.php?CredId=<?php echo $Id;?>">Delete</a></strong></div></td>
                    </tr>
                    <?php
					$k++;
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
                    <!-- <tr>
                      <td colspan="8" class="style3"><div align="left" class="style12"> </div></td>
                    </tr> -->
                    <?php

// Close the connection
mysql_close($con);
?>
                  </table>
	            </div>
              </div>
          </div>
          <p>&nbsp;</p>
	
	<h1>&nbsp;</h1>
	  </div>
		
		
	</div>
	
	
</div>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
//-->
</script>
</div>   
	</div>
    </div>
 
	<div id="templatemo_footer" align="center">
  <?php include_once('footer.php');?></div></div></body>
</body>
</html>