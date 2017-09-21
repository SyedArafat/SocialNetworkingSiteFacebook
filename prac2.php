<?php
session_start();
$jsonData='[{"id":"10","name":"test","cgpa":"9.99"},
{"id":"123","name":"xyz","cgpa":"3.90"},
{"id":"1256","name":"test2","cgpa":"2.30"}]';

function insertData($sql){
	$conn = mysqli_connect("localhost", "root", "","mfb");
	if ($conn->query($sql) === TRUE) {
    return 1;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	return 0;
}

$conn->close();
	
}
if($_REQUEST["signal"]=="add" && isset($_REQUEST['upid']) ){
	$sql="INSERT INTO upload_like ( upid , uid ) VALUES ('".$_REQUEST["upid"]."', '".$_SESSION["uid"]."');";
	//echo $sql."<br/>";
	$jsonData= insertData($sql);
	echo $jsonData;
}
else{
	echo "invalid parameter";
}
?>