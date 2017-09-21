<pre>
<?php
session_start();
include("database.php");
print_r($GLOBALS);
//INSERT INTO `user_info` (`uid`, `colledge`, `highschool`, `relation`, `work`) VALUES ('91', 'asa', 'asd', 'Single', 'SAD');
$sql="UPDATE user_info set colledge='".$_REQUEST["clg"]."', highschool='".$_REQUEST["lastname"]."',relation='".$_REQUEST["gender"]."', work='".$_REQUEST["phone"]."' where uid='".$_SESSION["uid"]."'";
//echo $sql;
if(insertData($sql)){
		header("Location:in_profile.php");
		
	}
	echo $sql;
	header("Location:in_profile.php");
?>

</pre>