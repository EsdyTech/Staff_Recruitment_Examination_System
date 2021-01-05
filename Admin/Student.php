<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['adm_id'])) 
{
  echo '<script type="text/javascript">alert("Login First");window.location=\'../adlogin.php\';</script>';
  die();
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BRIGHTER SCHOOLS</title>
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
      
<div class="title">STAFF PAGE </div>

	<div id="content">
		<div id="left">
			
			
	        <div id="TabbedPanels1" class="TabbedPanels">
	          <ul class="TabbedPanelsTabGroup">
	            <li class="TabbedPanelsTab style2" tabindex="0">Create Staff</li>
	            <li class="TabbedPanelsTab style2" tabindex="0">Manage Staff</li>
              </ul>
	          <div class="TabbedPanelsContentGroup">
	            <div class="TabbedPanelsContent">
	              <form id="form1" name="form1" method="post" enctype='multipart/form-data' action="InsertStudent.php">
	                <table width="100%" height="259" border="0" cellpadding="0" cellspacing="0">
                      <!-- <tr>
                        <td>Registration Number:</td>
                  <td><span id="sprytextfield1">
                          <label>
                          <input type="text" name="txtRoll" id="txtRoll" />
                          </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr> -->
                        <td>Full Name:</td>
                        <td><span id="sprytextfield2">
                          <label>
                          <input type="text" name="txtName" id="txtName" />
                          </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td height="35">Position:</td>
                        <td>
                          <?php 
                        $qry= "SELECT * FROM positions ORDER BY Name ASC";
                        $res= mysql_query($qry,$con);
                        $num = mysql_num_rows($res);
                        if ($num > 0){
                          echo ' <select required name="cmbSem" id="cmbSem">';
                          while ($rows=mysql_fetch_array($res)){
                          echo'<option value="'.$rows['Name'].'" >'.$rows['Name'].'</option>\n';
                              }
                                  echo '</select>';
                              }
                                ?>
                        </td>
                      </tr>
                      <tr>
                        <td height="33">Email:</td>
                        <td><span id="sprytextfield3">
                          <label>
                          <input type="text" name="txtEmail" id="txtEmail" />
                          </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td>Mobile:</td>
                        <td><span id="sprytextfield4">
                          <label>
                          <input name="txtMobile" type="text" id="txtMobile" maxlength="11" />
                          </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td>User Name:</td>
                        <td><span id="sprytextfield5">
                          <label>
                          <input type="text" name="txtUserName" id="txtUserName" />
                          </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td>Password:</td>
                        <td><span id="sprytextfield6">
                          <label>
                          <input type="password" value= "12345" readonly name="txtPassword" id="txtPassword" />
                          </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><label>
                          <input type="submit" name="button" id="button" value="Submit" />
                        </label></td>
                      </tr>
                    </table>
                  </form>
                </div>
	            <div class="TabbedPanelsContent">
	              <table width="100%" border="1"  >
                    <tr>
                      <th height="32"  class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                      <th  class="style3"><div align="left" class="style9 style5"><strong>Reg Number</strong></div></th>
                      <th  class="style3"><div align="left" class="style9 style5"><strong>Name</strong></div></th>
                      <th height="32"><div align="left" class="style9 style5"><strong>Position Applied</strong></div></th>
                      <th  class="style3"><div align="left" class="style9 style5"><strong>Email Address</strong></div></th>
                       <th class="style3"><div align="left" class="style9 style5"><strong>Mobile</strong></div></th>
                       <th class="style3"><div align="left" class="style9 style5"><strong>Download Resume</strong></div></th>
                      <th  class="style3"><div align="left" class="style9 style5"><strong>Edit</strong></div></th>
                      <th class="style3"><div align="left" class="style9 style5">Delete</div></th>
                    </tr>
                    <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("quizz", $con);
// Specify the query to execute
$sql = "select * from student_registration";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
$k=1;
while($row = mysql_fetch_array($result))
{
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
                      <td  class="style3"><div align="left" class="style9 style6"><strong><a href="<?php echo "../resume/".$row['resume'];?>">Download</a></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><a href="EditStudent.php?StuId=<?php echo $Id;?>">Edit</a></strong></div></td>
                      <td  class="style3"><div align="left" class="style9 style6"><strong><a href="DeleteStudent.php?StuId=<?php echo $Id;?>">Delete</a></strong></div></td>
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