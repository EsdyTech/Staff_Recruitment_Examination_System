<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['adm_id'])) 
{
  echo '<script type="text/javascript">alert("Login First");window.location=\'../adlogin.php\';</script>';
  die();
}
?>
<?php require_once('../Connections/QUIZ.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_QUIZ, $QUIZ);
$query_Recordset1 = "SELECT * FROM quiz_category";
$Recordset1 = mysql_query($query_Recordset1, $QUIZ) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_QUIZ, $QUIZ);
$query_Recordset2 = "SELECT * FROM subject_master";
$Recordset2 = mysql_query($query_Recordset2, $QUIZ) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);
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

<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: small;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style3 {font-size: small}
>
</style>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

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
      
<div class="title">POSITIONS PAGE</div>

	<div id="content">
		<div id="left">
			
			
	        <div id="TabbedPanels1" class="TabbedPanels">
	          <ul class="TabbedPanelsTabGroup">
	            <li class="TabbedPanelsTab style1" tabindex="0">Create Positions</li>
	            <li class="TabbedPanelsTab style2 style3" tabindex="0">Display Positions</li>
              </ul>
	          <div class="TabbedPanelsContentGroup">
	            <div class="TabbedPanelsContent">
	              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><form id="form1" name="form1" method="post" action="insertPosition.php">
                        <table width="100%" height="281" border="0" cellpadding="0" cellspacing="0">
                         
                          <tr>
                            <td height="27"><strong> Position:</strong></td>
                            <td><span id="sprytextfield1">
                              <label>
                              <input type="text" name="txtPosition" id="txtA" />
                              </label>
                            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                          </tr>
                        
                          <tr>
                            <td>&nbsp;</td>
                            <td><label>
                              <input type="submit" name="button" id="button" value="Submit" />
                            </label></td>
                          </tr>
                        </table>
                                            </form>
                      </td>
                    </tr>
                  </table>
	            </div>
	            <div class="TabbedPanelsContent">
	              <table width="100%" border="1"  >
                    <tr>
                      <th height="32"  class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                      <th  class="style3"><div align="left" class="style9 style5"><strong>Position</strong></div></th>
                      <th  class="style3"><div align="left" class="style9 style5"><strong>Edit</strong></div></th>
                      <th class="style3"><div align="left" class="style9 style5">Delete</div></th>
                    </tr>
                    <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("quizz", $con);
// Specify the query to execute
$sql = "select * from positions";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
$k=1;
while($row = mysql_fetch_array($result))
{
  $Id=$row['Id'];
$Name=$row['Name'];


?>
                    <tr>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><?php echo $k;?></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><?php echo $Name;?></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><a href="EditPosition.php?PostId=<?php echo $Id;?>">Edit</a></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><a href="DeletePosition.php?PostId=<?php echo $Id;?>">Delete</a></strong></div></td>
                    </tr>
                    <?php
					$k++;
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
                    <tr>
                      <td colspan="8" class="style3"><div align="left" class="style12"> </div></td>
                    </tr>
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
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
//-->
</script>

</div>   
	</div>
    </div>
 
	<div id="templatemo_footer" align="center">
  <?php include_once('footer.php');?></div></div></body>
</html>

		

<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>