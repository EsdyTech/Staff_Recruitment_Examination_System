<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_QUIZ = "localhost";
$database_QUIZ = "quizz";
$username_QUIZ = "root";
$password_QUIZ = "";
$QUIZ = mysql_connect($hostname_QUIZ, $username_QUIZ, $password_QUIZ) or trigger_error(mysql_error(),E_USER_ERROR); 
?>