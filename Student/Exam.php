
<?php
if (!isset($_SESSION)) 
{
  session_start();
  // Establish Connection with Database
  include_once('../connect.php');

// Specify the query to execute

$sql = "SELECT * FROM `result_master` WHERE  Student_id='".$_SESSION['ID']."'";

// Execute query
$result = mysql_query($sql);

$qry= "SELECT * from question_master where Faculty='".$_SESSION['fal']."'";
$qr=mysql_query($qry);
$min= mysql_num_rows($qr)/2;
echo '<script>
var hour=0;  //specify hours for counter
var min=1;       // specify minutes 
var second = '.$min.';    // specify the seconds
var lab = \'cd\';  // id of the entry on the page where the counter is to be inserted


function start() 
{
	displayCountdown(setCountdown(hour,min,second),lab);
}

</script>';
if(mysql_num_rows($result)>0)
{
	header("Location: StartExam.php");
}
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

.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
</style>
<script type="text/javascript"  src="count.js"></script>

<script language="JavaScript">

function gradeQuiz( reportForm ) 
{
  var totalRight = 0;

  for ( var count=0; count < document.forms.length-1; count++ )
  {
	 
    if ( document.forms[ count ].response.value == document.forms[ count ].answer.value  )
	{
      totalRight++ ;
    document.forms[ count ].correct.value=document.forms[ count ].answer.value 
	}
  }
 
  
 var percent = (100*totalRight)/(document.forms.length-1);
  var qst = document.forms.length-1;
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
	
	
window.location="Result.php";
	
}
}
parameters='percent='+percent+' & qst='+qst+' & right='+totalRight;

xmlhttp.open('POST','Display.php',true);
xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
xmlhttp.send(parameters);

	

  
  

}
</script>


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
      
<div class="title"><?php echo 'Welcome, '.$_SESSION['Name'];?></div>



			<center id="left" class="left"><div id="cd" style=" font-family:Verdana, Geneva, sans-serif; font-size:16px; font-weight:bold"> </div></center>
<p id="msg">
<?php
		$ar=  array();
// Establish Connection with Database

// Specify the query to execute

$sql = "SELECT * from question_master where Faculty='".$_SESSION['fal']."'";
// Execute query
$result = mysql_query($sql);
// Loop through each records 
$i=1;

for($k=0;$k<mysql_num_rows($result);$k++)
{

$a=mysql_result($result,$k,'Question_Id');
$b=mysql_result($result,$k,'Question');
$c=mysql_result($result,$k,'Option1');
$d=mysql_result($result,$k,'Option2');
$e=mysql_result($result,$k,'Option3');
$f=mysql_result($result,$k,'Option4');
$g=mysql_result($result,$k,'Answer');

$ar[$k]=$a.";".$b.";".$c.";".$d.";".$e.";".$f.";".$g.";";
}
shuffle($ar);

for($j=0;$j<mysql_num_rows($result);$j++)
{
$ary=explode(";",$ar[$j]);

$Id=$ary[0];
$Question=$ary[1];
$OptionA=$ary[2];
$OptionB=$ary[3];
$OptionC=$ary[4];
$OptionD=$ary[5];
$Answer = $ary[6];
?>


<form id="form2" name="<?php echo "question".$j?>" >
                       <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    
                    
                    <tr>
                      <td height="36" colspan="2" bgcolor="#006600"><span class="style1">(<?php echo $i;?>)<?php echo $Question;?></span></td>
          </tr>
                    <tr>
                      <td  colspan="2"><table width="100%" height="64" border="2" cellpadding="0" cellspacing="0" bordercolor="#A6BF79">
                        <tr>
                          <td colspan="2" height="32" width="50%"><input type="radio" name="RadioGroup<?php echo $i;?>" value="" onclick="<?php echo "question".$j.".response.value='A'" ?>" id="OptionA" />
                          <?php echo $OptionA;?></td></tr>
                          
                          <tr>
                          <td colspan="2" width="50%"><input type="radio" name="RadioGroup<?php echo $i;?>" value="" onclick="<?php echo "question".$j.".response.value='B'" ?>" id="OptionB" />
                              <?php echo $OptionB;?></td>
                        </tr>
                        <tr>
                        
                          <td colspan="2" height="32" width="50%"><input type="radio" name="RadioGroup<?php echo $i;?>" value="" onclick="<?php echo "question".$j.".response.value='C'" ?>" id="OptionC" />
                              <?php echo $OptionC;?></td></tr>
                        <tr>
                          <td colspan="2" width="50%"><input type="radio" name="RadioGroup<?php echo $i;?>" value="" onclick="<?php echo "question".$j.".response.value='D'" ?>" id="OptionD" />
                              <?php echo $OptionD;?></td>
                        </tr>
                      </table></td>
          </tr>
                
                  </table>
                           <p>
                            <input type="hidden" name="answer" value="<?php echo $Answer;?>">
<input type="hidden" name="correct" value="  " >
<input type="hidden" name="response" value="" >
</form>   </p>
                             <?php
$i=$i+1;						   
}
     
                           
?>

                        
                      
                           
                           
                           
                           
<p align="center">
                          
                             
</p>
<form  id="evaluateQuest" name="evaluateQuest" >
		
<div align="center">
  <?php
// Retrieve Number of records returned
$records = mysql_num_rows($result);
if($records!=0)
{
?>
  <input name="Submit" type="button"  onClick="gradeQuiz(this.form)"  value="Submit" />
  <?php
}
// Close the connection
//mysql_close($con);
?>
                             
                           </div>
          </form>
          
          </p>
          
	  </div>
		
		
	</div>
	
	
</div>
</div>   
	</div>
    </div>
 
	<div id="templatemo_footer" align="center">
    Copyright © 2016 BRIGHTER Schools</div></div></body>
</body>
</html>
