<?php
session_start();
// *** Logout the current user.
session_destroy();



$logoutGoTo = "../index.php";


header("Location: $logoutGoTo");
?>
