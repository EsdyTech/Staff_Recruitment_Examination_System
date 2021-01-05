
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
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
      
<div class="title"><?php echo 'Welcome, '.$_SESSION['Name'];?></div>

			<?php
$Id=$_GET['Id'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("quizz", $con);
// Specify the query to execute
$sql = "select * from student_registration where Student_Id=".$Id."";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
$row = mysql_fetch_array($result);

$Id=$row['Student_Id'];
$RollNumber=$row['RollNumber'];
$Name=$row['Name'];
$Faculty=$row['Faculty'];
$Email=$row['Email'];
$Mobile=$row['Mobile'];
$UserName =$row['UserName'];
$Password=$row['Password'];


?>
          <form method="post" enctype='multipart/form-data' action="UpdateProfile.php?Id=<?php echo $Id;?>">
                      <table width="100%" border="0">
                        <tr>
                          <td height="32"><span class="style8"><strong>Staff Id</strong></span></td>
                          <td><?php echo $Id;?></td>
                        </tr>
                        <tr>
                          <td height="36"><span class="style8"><strong>Staff_Reg Number:</strong></span></td>
                          <td><?php echo $RollNumber;?></td>
                        </tr>
                        <tr>
                          <td height="31"><strong>Name:</strong></td>
            <td><span id="sprytextfield1">
                            <label>
                            <input type="text" name="txtName" id="txtName" value="<?php echo $Name;?>" />
                            </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td height="31"><strong>Position:</strong></td>
                          <td><?php echo $Faculty;?></td>
                        </tr>
                        <tr>
                          <td height="31"><strong>Mobile:</strong></td>
                        <td><span id="sprytextfield2">
                            <label>
                            <input name="txtMobile" type="text" id="txtMobile" value="<?php echo $Mobile;?>" maxlength="11" />
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td height="33"><strong>Email:</strong></td>
                          <td><span id="sprytextfield3">
                            <label>
                            <input type="text" name="txtEmail" id="txtEmail" value="<?php echo $Email;?>" />
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        
                        <tr>
                          <td height="28"><strong>User Name:</strong></td>
                          <td><span id="sprytextfield4">
                            <label>
                            <input type="text" name="txtUser" id="txtUser" value="<?php echo $UserName;?>" />
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td height="28"><strong>Password:</strong></td>
                          <td><span id="sprytextfield5">
                            <label>
                            <input type="password" name="txtPass" id="txtPass" value="<?php echo $Password;?>" />
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                        <td height="28"><strong>Passport:</strong></td>
                        <td><span id="sprytextfield6">
                          <label>
                          <input type="file" required name="passport" id="txtPassword" />
                          </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                        <tr>
                          <td height="28"></td>
                          <td><label>
                            <input type="submit" name="button" id="button" value="Update Profile" />
                          </label></td>
                        </tr>
                      </table>
          </form>
                  <?php
// Close the connection
mysql_close($con);
?></td>
              </tr>
            </table>
	<p>&nbsp;</p>
	
	<h1>&nbsp;</h1>
	  </div>
		
	</div>
	
	
</div>
<script type="text/javascript">
<!--
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
</body>
</html>