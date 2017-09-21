<pre>
<?php
session_start();
include("database.php");
print_r($GLOBALS);
//$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

echo $_FILES['cp']['name'];
if(strlen($_FILES['cp']['name'])>0)
{
	$target_dir=$_SESSION["uid"]."/";
	mkdir($_SESSION["uid"]);
    $target_file = $target_dir . $_FILES["cp"]["name"];
    echo $target_file;
	if (file_exists($target_file)) {
		
    echo "Sorry, file already exists<br>";
    $uploadOk = 0;
	}
	else{
		if(move_uploaded_file($_FILES["cp"]["tmp_name"], $target_file)){
			echo "good";
		}
	}
	$sql="insert into upload (uid,status,media_path,media_type,up_date) values('". $_SESSION["uid"]."','".$_REQUEST["status"]."','".$target_file."','".$_FILES['cp']['name']."','". date('Y-m-d')." ".date("h:i:sa")."')";
	if(insertData($sql)){
		echo "i am the boss";
		$sql="UPDATE user SET cover_picture='".$target_file."' WHERE uid=".$_SESSION["uid"];
		if(insertData($sql)){
			echo "cover pic updated";
			header("Location:in_profile.php");
		}
		//
	}
	echo $sql;
	

}
else{
	header("Location:in_profile.php");
	
}

?>

<pre>