<pre>
<?php
date_default_timezone_set("Asia/Dhaka");
//INSERT INTO `upload` (`upid`, `uid`, `status`, `media_path`, `media_type`, `up_date`) VALUES (NULL, '81', 'asdasdasdasdasd', NULL, NULL, '2017-04-29 07:14:16');
session_start();
$uploadOk=1;
include("database.php");
echo $_REQUEST["status"]."<br/>";
print_r($GLOBALS);
echo $_FILES['ffd']['name'];
if(strlen($_FILES['ffd']['name'])>0)
{
	
	$target_dir=$_SESSION["uid"]."/";
	mkdir($_SESSION["uid"]);
    $target_file = $target_dir . $_FILES["ffd"]["name"];
    echo $target_file;
	if (file_exists($target_file)) {
		
    echo "Sorry, file already exists<br>";
    $uploadOk = 0;
	}
	else{
		if(move_uploaded_file($_FILES["ffd"]["tmp_name"], $target_file)){
			echo "good";
		}
	}

}
if(strlen($_REQUEST["status"])>0 || strlen($_FILES['ffd']['name'])>0){
	
	
	$sql="insert into upload (uid,status,media_path,media_type,up_date) values('". $_SESSION["uid"]."','".$_REQUEST["status"]."','".$target_file."','".$_FILES['ffd']['name']."','". date('Y-m-d')." ".date("h:i:sa")."')";
	if(insertData($sql)){
		echo "i am the boss";
		header("Location:in_home.php");
	}
	echo $sql;
}
else{
	
	header("Location:in_home.php");
}


//print_r($GLOBALS);


?>

</pre>