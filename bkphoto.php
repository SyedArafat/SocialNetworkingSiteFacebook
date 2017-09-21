<pre>
<?php
date_default_timezone_set("Asia/Dhaka");
//INSERT INTO `upload` (`upid`, `uid`, `status`, `media_path`, `media_type`, `up_date`) VALUES (NULL, '81', 'asdasdasdasdasd', NULL, NULL, '2017-04-29 07:14:16');
session_start();
include("database.php");
if(strlen($_FILES['fileToUpload']['name'])>0){
print_r($GLOBALS);
$target_dir=$_SESSION["uid"]."/";
$target_file = $target_dir . $_FILES["fileToUpload"]["name"];
mkdir($_SESSION["uid"]);
echo $target_file;
$uploadOk = 1;
// Check if image file is a actual image or fake image
if (file_exists($target_file)) {
    echo "Sorry, file already exists<br>";
    $uploadOk = 0;
}
else{
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		$sql="insert into upload (uid,status,media_path,media_type,up_date) values('". $_SESSION["uid"]."','".$_REQUEST["status"]."','".$target_file."','".$_FILES['fileToUpload']['name']."','". date('Y-m-d')." ".date("h:i:sa")."')";
		echo $sql."<br>";
		if(insertData($sql)){
		echo "i am the boss";
		header("Location:in_profile.php");
	}
		
}
}
}
else{
	header("Location:in_profile.php");
	
}
?>

</pre>