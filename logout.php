<?php
session_start();
$_SESSION['flag']="";
session_destroy();
header("Location:in_main.php");
?>