<?php
 
$dbc=mysql_connect('localhost',"root","") or die('can not connect'. mysql_error());
mysql_select_db("quizz") or die('ndb found' .mysql_error());
?>
