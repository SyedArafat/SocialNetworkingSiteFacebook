<pre>
<?php
include("database.php");
session_start();
print_r($GLOBALS);
$sql="INSERT INTO `friend` (`uid`, `fid`, `status`) VALUES ('".$_SESSION["uid"]."', '".$_REQUEST["toID"]."', '0')";
echo $sql;
echo $_REQUEST["toID"];
if(insertData($sql)){
	echo "Good Job";
	header("LOCATION:in_profile.php");
}
else{
	header("LOCATION:in_profile.php");
}

?>
</pre>