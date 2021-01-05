<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include_once('title.php');?></html>
<meta name="keywords" content="free website templates, CSS templates, download HTML page, templatemo.com" />
<meta name="description" content="templatemo 004 - free CSS website template" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="sliderman.1.3.8.js"></script>
	<link rel="stylesheet" type="text/css" href="sliderman.css" />
</head>
<script type="text/javascript">
function check()
{


var message=document.getElementById("message");
var phoneno=document.getElementById("ph");
var name=document.getElementById("name");
var email=document.getElementById("email");


if(email.value == "")
  {
    alert ("Type an email" );
    
email.focus();
	return false;
	}
else 
if(email.value.indexOf('@')==-1)
		      {
		       alert("Invalid email address");
		       email.focus();
		       return false;
		      }
	
	  else if(email.value.indexOf('.')==-1)
		       {
		        alert("Invalid email address");
		        email.focus();
		        return false;
		       }
else 

if(phoneno.value == "")
  {
    alert ("enter the phone no" );
    
phoneno.focus();
	return false;
	}
else 


if(name.value == "")
  {
    alert ("enter the name" );
    
name.focus();
	return false;
	}
else 

if(message.value == "")
  {
    alert ("Type a word");
    
message.focus();
	return false;
	}
	
	
	else 
{		
		
if(window.XMLHttpRequest)
{
xmlhttp = new XMLHttpRequest();
}
else
{
xmlhttp= new ActiveXObject('Microsoft.XMLHTTP');
}

xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
{
	
	
document.getElementById('msg').innerHTML = xmlhttp.responseText;	
}
}
parameters='name='+name.value+' & message='+message.value+' & ph='+phoneno.value+' & email='+email.value;

xmlhttp.open('POST','process.php',true);
xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
xmlhttp.send(parameters);

	document.getElementById("name").value="";
document.getElementById("message").value="";
document.getElementById("ph").value="";

document.getElementById("email").value="";


}

	
}
</script>


<body>

<p style="margin-left:270px">
<!-- <img  src="images/rr.png"/> -->
</p>
<div id="templatemo_container">
  <div class="templatemo_line"></div> 
  <div id="templatemo_header">
  
  <?php include_once('slider.php');?>
</div>
  
  
  <div class="templatemo_line"></div>    
	
    <div id="templatemo_content">
    

    <div id="templatemo_left_column">
        <ul class="glossymenu">
           <li><a href="index.php">Homepage</a></li>
           <li><a href="apply.php">Application</a></li>

          <li><a href="stlogin.php">Staff Login</a></li>
          <li><a href="adlogin.php">Admin Login</a></li>
         
          <li><a href="contact.php" >Contact</a></li>
        </ul>

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
      
<div class="title">Contact Us          </div>
<h4 style=" ">
          
     
      Please use this form to send us a message</h4 >
      
       <span style="font-style:bold; color:#0066FF;font-size:14px; " id="msg"></span>
		
      
           <form class="iphorm"  method="post" >
          
          
         <table width="461" cellspacing="13">
  <tr>
    <td width="129">NAME</td>
    <td width="287"><input name="name" type="text" id="name" size="44" class="submit-text"/></td>
  </tr>
  <tr>
    <td>E-MAIL</td>
    <td><input name="email" type="text" id="email" size="44" class="submit-text"/></td>
  </tr>
  <tr>
    <td>PHONE NO:</td>
    <td><input type="text" name="ph"  onkeyup="isnum(this)" class="submit-text" id="ph" /></td>
  </tr>
  <tr>
    <td>MESSAGE</td>
    <td><textarea class="submit-text" name="message" id="message" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td colspan="2"><input class="glossymenu" type="button"  onclick="check();"name="send" id="send" value="Send" /></td>
  </tr>
</table>
</form>
</p>
 		</div>   
	</div>
    </div>
 
	<div id="templatemo_footer" align="center">
  <?php include_once('footer.php');?></html>
</div></div></body>
</html>