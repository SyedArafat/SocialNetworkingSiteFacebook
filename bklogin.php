<pre>

<?php
session_start();
if($_SESSION["flag"]==0){
//print_r($GLOBALS);
echo md5($_REQUEST["password"]);
echo $_REQUEST["uname"];
//echo(strlen($_REQUEST["uname"]));
//echo(strlen($_REQUEST["password"]));
if(strlen($_REQUEST["uname"])==0){
	header("Location:in_login.php");
	//echo "ok";
}

if(strlen($_REQUEST["password"])==0){
	header("Location:in_login.php");
	//echo "okk";
}


else
{
	include("database.php");
	
	$sql="select * from user where email='".$_REQUEST['uname']."'";
	echo $sql."<br/>";
	$jsonData= getJSONFromDB($sql);
	
	$jsonData = json_decode($jsonData, true);
	//print_r($GLOBALS);
	echo $jsonData[0]["uid"];
	//echo $jsonData[0]["password"];
	if($jsonData[0]["password"]==md5($_REQUEST["password"])){
		echo "\nGood";
		$_SESSION["uid"]=$jsonData[0]["uid"];
		echo $_SESSION["uid"];
		$_SESSION["flag"] = 1;
		header("Location:in_home.php");
	}
	else{
		header("Location:in_login.php");
	}
	
}
}

else{
	
}

?>

</pre>