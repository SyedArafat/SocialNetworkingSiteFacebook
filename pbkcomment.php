<pre>

<?php
session_start();
include("database.php");
print_r($GLOBALS);
//INSERT INTO `upload_comment` (`upid`, `uid`, `comment`) VALUES ('4', '76', 'dfdassfas');

foreach($_REQUEST as $a => $b ){
	echo $a;
	break;
}
echo strlen($_REQUEST[$a]);
if(strlen($_REQUEST[$a])!=0){
$sql="INSERT INTO upload_comment ( upid,uid,comment ) values ('".$a."', '".$_SESSION["uid"]."', '".$_REQUEST[$a]."')";
echo $sql;
if(insertData($sql)){
	echo "good";
	header("Location:in_profile.php");
}
else{
	
	header("Location:in_profile.php");
}
}

else{
	header("Location:in_profile.php");
}


?>

</pre>