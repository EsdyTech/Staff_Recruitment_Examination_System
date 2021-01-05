<?php
error_reporting(0);
?>

<?php
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
<style type="text/css">
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; color: #FFFFFF; }
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; }
</style>

<style type="text/css">
.style11 {color: #000000}
</style>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>


<p style="margin-left:270px"><img  src="../images/rr.png"/></p>
<div id="templatemo_container">
  <div class="templatemo_line"></div> 
  <div id="templatemo_header">
  
  <div id="slider_container_1">

				<div id="SliderName" style="margin-left:5px">

					
						
					
						
					
					<img src="../images/2.jpg" width="800" height="160" />
					
					<img src="../images/3.jpg" width="800" height="160"/>
					
					<img src="../images/4.jpg" width="800" height="160"/>
                    <img src="../images/1.jpg" width="800" height="160"/>
                    <img src="../images/5.jpg"  width="800" height="160"/>
					
						<img src="../images/6.jpg" width="800" height="160"/>
					
					<img src="../images/7.jpg" width="800" height="160"/>
					
					<img src="../images/8.jpg" width="800" height="160"/>
                    <img src="../images/9.jpg"  width="800" height="160"/>
					
						
					
					<img src="../images/10.jpg" width="800" height="160"/>
					
				</div>
                
                <div class="c"></div>
				<div id="SliderNameNavigation"></div>
				<div class="c"></div>
                 <script type="text/javascript">

					// we created new effect and called it 'demo01'. We use this name later.
					Sliderman.effect({name: 'demo01', cols: 10, rows: 5, delay: 10, fade: true, order: 'straight_stairs'});

					var demoSlider = Sliderman.slider({container: 'SliderName', width: 770, height: 160, effects: 'demo03',
					display: {
						pause: true, // slider pauses on mouseover
						autoplay: 3000, // 3 seconds slideshow
						always_show_loading: 200, // testing loading mode
						description: {background: '#ffffff', opacity: 0.5, height: 50, position: 'bottom'}, // image description box settings
						loading: {background: '#ffffff', opacity: 0.2, image: '../img/loading.gif'}, // loading box settings
						buttons: {opacity: 1, prev: {className: 'SliderNamePrev', label: ''}, next: {className: 'SliderNameNext', label: ''}}, // Next/Prev buttons settings
						navigation: {container: 'SliderNameNavigation', label: '&nbsp;'} // navigation (pages) settings
					}});
					</script>

	</div>
        
     
  
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
      
<div class="title">Edit Position Details </div>

	<div id="content">
		<div id="left">
			<table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
             
              <tr>
                <td><?php
$Id=$_GET['PostId'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("quizz", $con);
// Specify the query to execute
$sql = "select * from positions where Id=".$Id."";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
$row = mysql_fetch_array($result);

$Id=$row['Id'];
$Name=$row['Name'];



?>
                  <form method="post" action="UpdatePosition.php?Id=<?php echo $Id;?>">
                    <table width="100%" border="0">
                      <tr>
                        <td height="32"><span class="style8">Position Id</span></td>
                        <td><?php echo $Id;?></td>
                      </tr>
                      <tr>
                        <td height="36"><span class="style8">Name:</span></td>
                        <td> <input type="text" value = "<?php echo $Name;?>" name="txtPosition" id="txtA" /></td>
                      </tr>                     
                      <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Update Record" /></td>
                      </tr>
</table>
                  </form>
                    <?php
// Close the connection
mysql_close($con);
?></td>
              </tr>
		  </table>
			<h1>&nbsp;</h1>
			
	        <p>&nbsp;</p>
	
	<h1>&nbsp;</h1>
	  </div>
		
		
	</div>
	
	
</div>

</div>   
	</div>
    </div>
 
	<div id="templatemo_footer" align="center">
    Copyright © 2016 BRIGHTER Schools</div></div></body>
</html>

	