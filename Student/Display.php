<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}

			
			if(!isset($_POST['percent']) || !isset($_POST['qst']) )
			{
				header("Location: index.php");
				
			}
			
			$wrong=$_POST['qst']-$_POST['right'];
			
			
			
			
			$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("quizz", $con);
	// Specify the query to Insert Record
	$sql = "INSERT INTO `result_master`(`Result_Id`, `Faculty`, `Student_Id`, `Total`, `Correct`, `Wrong`, `per`) VALUES ('','".$_SESSION['fal']."','".$_SESSION['ID']."',".$_POST['qst'].",".$_POST['right'].",".$wrong.",".$_POST['percent'].")";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
			
	echo "<h1>Welcome". $_SESSION['Name']."</h1><br/>";		
	
			
echo '<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#A6BF79">
      <tr height="30">
        <td height="24" bgcolor="#006600"><div align="center"><span class="style1"><strong>Total Question</strong></span></div></td>
        <td bgcolor="#006600"><div align="center"><span class="style1"><strong>Correct Answer</strong></span></div></td>
        <td bgcolor="#006600"><div align="center"><span class="style1"><strong>Wrong Answer</strong></span></div></td>
        <td bgcolor="#006600"><div align="center"><span class="style1"><strong>Percentage</strong></span></div></td>
      </tr>
      <tr height="30">
        <td>
		  <div align="center"><strong>'.
		  
		 $_POST['qst'].
	
	        '</strong></div></td>
        <td><div align="center"><strong>'. $_POST['right'].'</strong></div></td>
        <td><div align="center"><strong>'.$wrong.'</strong></div></td>
        <td><div align="center"><strong>'. $_POST['percent'].'</strong></div></td>
      </tr>
    </table>';
	
   
		
	?>
	  