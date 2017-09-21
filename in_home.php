<!DOCTYPE html>
<html>
<head>
<?php
session_start();
if($_SESSION["flag"]!=1)
{
	header("Location:in_main.php");	
}
//print_r($GLOBALS);
include("fbinside_back.php");
include("database.php");
$sql="select * from user where uid='".$_SESSION["uid"]."'";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);
$sql="select * from user_upload ORDER BY user_upload.upid DESC limit 20";
$jsonData2= getJSONFromDB($sql);
$jsonData2 = json_decode($jsonData2, true);
$sql="SELECT * FROM upload_commant ORDER BY `upid` DESC";
$jsonData3= getJSONFromDB($sql);
$jsonData3 = json_decode($jsonData3, true);

//print_r($GLOBALS);
$a= $jsonData[0]["profile_picture"];
?>

<title><?php echo $jsonData[0]["first_name"]." ".$jsonData[0]["last_name"];?></title>

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<body bgcolor="#E7EBF2">

<script>
function statufunction(obj){
	if(obj.name=="pho"){
	    document.getElementById("photoform").style.display="block";
	    document.getElementById("statusform").style.display="none";
		document.getElementById("err1").style.display="none";
	}
	
	else{
		document.getElementById("photoform").style.display="none";
	    document.getElementById("statusform").style.display="block";
		document.getElementById("err2").style.display="none";
		document.getElementById("err3").style.display="none";
	}
	
}

function valpost(obj){
	//alert(obj.value);
	var x = document.getElementById("fileToUpload").value;
	//alert(x);
    //alert (x.substring(x.indexOf(".")+1));
	if(obj.value=="post"){

	if(document.getElementById("statusid").value.length>0 || document.getElementById("ffd").value.length>0){
		return true;
		}
	else{
		document.getElementById("err1").style.display="block";
	      return false;
	}
	}
	else if(obj.value=="upload"){
		if(document.getElementById("fileToUpload").value.length>0){
			if(x.substring(x.indexOf(".")+1)=="jpg" || x.substring(x.indexOf(".")+1)=="png" || x.substring(x.indexOf(".")+1)=="jpeg"){
			return true;
			}
			else{
				document.getElementById("err3").style.display="block";
				document.getElementById("err2").style.display="none";
				return false;
			}
		}
		else{
			document.getElementById("err2").style.display="block";
			document.getElementById("err3").style.display="none";
			return false;
		}
		
	}

}

function displayerror(){
	document.getElementById("err1").style.display="none";
	document.getElementById("err2").style.display="none";
	document.getElementById("err3").style.display="none";
}

function funlike(obj){
	//alert(obj.src);
	//alert(obj.value);
	var v="delete";
	if(obj.src=="http://localhost/webtech/sample/image/like.jpg"){
	v="add";
	
	}
	
	//alert(v);
	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		//alert(xmlhttp.responseText);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			//alert(xmlhttp.responseText);
			if(xmlhttp.responseText=="1"){
				if(obj.src=="http://localhost/webtech/sample/image/like.jpg"){
				obj.src="image/liked.jpg";
				}
				else{
					
				}
				
			}
			
			
		  
		}
		
	};
	
	var url="prac2.php?signal="+v+"&upid="+obj.value;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
	
}

function cccomment(obj){
	alert(document.getElementById("id21").value);
	if(document.getElementById("id21").value.length!=0){
		
	alert("Yes");
    alert(obj.name);	
	
	var xmlhttp = new XMLHttpRequest();
	
	var url="prac3.php?signal=commnet&upid="+document.getElementById("id21").value;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
		
	}
	
}

</script>


<div style="position:absolute;left:9.5%;top:1.7%;"><input style="width:247%; padding: 4px;" type="text" name="src"></div>
<div style="position:absolute;left:40%;top:2%;"><img class="searchlogo" onclick="#" src="image/searchlogo.jpg"></div>
<a href="in_profile.php">
<div style="display:block;position:absolute;left:52%;top:1.6%;"><img src="<?php echo $jsonData[0]["profile_picture"];?>" width="26" height="26"></div>
<div style="display:block;position:absolute;left:54.5%;top:2%;color:white"><?php echo $jsonData[0]["first_name"]?></div>
</a>

<a href="in_home.php">
<div style="display:block;position:absolute;left:60%;top:2%;color:white;">Home</div>
</a>

<a href="logout.php">
<div style="display:block;position:absolute;left:64.5%;top:2%;color:white;">Logout</div>
</a>


<div style="position:absolute;left:18%;top:10%;height:28%;width:42%;background:#ffffff"></div>
<div style="position:absolute;left:18%;top:10%;height:6%;width:42%;background:#f5f4f7;"></div>

<div style="position:absolute;left:18.3%;top:10.3%;"><input type="image" onclick="statufunction(this)" name="stat" src="image/status.jpg" /></div>
<div style="position:absolute;left:24.3%;top:10%;"><input type="image" onclick="statufunction(this)" name="pho" src="image/photo.jpg" /></div>
<div style="position:absolute;left:18%;top:16%;height:1%;width:42%;background:#cbc7d8"> </div>
<div style="display:block;position:absolute;left:18.5%;top:17.3%;"><img src="<?php echo $jsonData[0]["profile_picture"];?>" width="42" height="42"></div>

<form action="hbkpost.php" method="post" enctype="multipart/form-data" id="statusform" style="display:block">

<div style="display:block;position:absolute;left:22.3%;top:17%;"><textarea id="statusid" onclick="displayerror()" style="resize:none;" placeholder=" What's On Your Mind ?" name="status" rows="6" cols="69"></textarea></div>
<div style="position:absolute;left:20.5%;top:33.5%;"> <input type="file" value="Upload" name="ffd" id="ffd"/></div>


<div style="position:absolute;left:53.8%;top:31.7%;"><input type="submit" onclick="return valpost(this)" style="color:#ffffff;background-color:#194280;" value="post" class="addfriendbutton"/></div>

</form>

<div style="position:absolute;left:18%;top:31.4%;height:1%;width:42%;background:#cbc7d8"> </div>

<form action="hbkphoto.php" method="post" enctype="multipart/form-data" id="photoform" style="display:none">
<div style="position:absolute;left:25.3%;top:20%;">Select The File You Want To Upload</div>
<div style="position:absolute;left:28.3%;top:25%;"> <input type="file" value="Upload Your File" name="fileToUpload" id="fileToUpload"/></div>
<div style="position:absolute;left:47%;top:31.8%;"><input type="submit" onclick="return valpost(this)" style="color:#ffffff;background-color:#194280;" value="upload" class="addfriendbutton"/></div>
</form>
<div id="err1" style="display:none;position:absolute;left:25%;top:23.5%;font-weight:bold;color:red;">The Field Is Empty.Write somethig first.</div>
<div id="err2" style="display:none;position:absolute;left:23%;top:33.5%;font-weight:bold;color:red;">Please select a photo first.</div>
<div id="err3" style="display:none;position:absolute;left:18%;top:32.5%;font-weight:bold;color:red;">Error!! File format not supported(supported format: "jpg","png","jpeg").</div>





<div style="position:absolute;left:18%;width:42%;top:40.3%;height:130%;background-color:white;">
<?php for($i=0;$i<sizeof($jsonData2);$i++){
	if(!isset($jsonData2[0])){
		echo '<div style="position:relative;left:5%;top:2%;font-size:110%;font-weight:bold;">  Write Something To Make Your Fellings Known</div>';
		break;
	}
	else if(isset($jsonData2[$i])){
	?>
<div style="position:relative;left:0%;width:100%;height:100%;top:0%; background-color:white;">	
	
<div style="position:relative;top:3%;left:5%;"><img src="<?php echo $jsonData2[$i]["profile_picture"];?>" width="40" height="40"></div>
<div style="position:relative;left:16%;top:-3%;font-size:110%;font-weight:bold;color:#4166a8;"><?php echo $jsonData2[$i]["first_name"]." ".$jsonData2[$i]["last_name"];?></div>
<div style="position:relative;left:16%;top:-3%;font-weight:bold;font-size:80%;color:#afafaf;"><?php echo $jsonData2[$i]["up_date"];?></div>
<div style="position:relative;left:5%;top:2%;font-size:110%;font-weight:bold;"><?php echo $jsonData2[$i]["status"];?></div>
<?php if(strlen($jsonData2[$i]["media_path"])>0) {?>
<div style="position:relative;left:3%;top:3%;"><img src="<?php echo $jsonData2[$i]["media_path"];?>" width="500" height="450" ></div>

	<?php } 
	
	?>
	
	<div style="position:relative;top:4%;left:3%;"><input id="id20" onclick="funlike(this)" value="<?php echo $jsonData2[$i]["upid"];?>" type="image" src="image/like.jpg"></div>
	<div style="position:relative;top:-.5%;left:23%;"><input onclick="funcomment()" type="image" src="image/comment.jpg"></div>
	<form action="bkcomment.php" method="post">
	<div style="position:relative;top:15%;left:3%;"><textarea style="resize:none" name="<?php echo $jsonData2[$i]["upid"];?>" rows="2" cols="52"></textarea>
	<input type="submit" class="addfriendbutton" style="color:#ffffff;background-color:#194280;" name="comment"  value="Comment"></div>
    </form>
	<?php
	//echo  $jsonData3[0];
	for($j=0;$j<sizeof($jsonData3);$j++){
			if($jsonData2[$i]["upid"]==$jsonData3[$j]["upid"]){
				echo "<p>";
				echo $jsonData2[$i]["first_name"]." ".$jsonData2[$i]["last_name"]." : " ;
				echo $jsonData3[$j]["comment"];
				echo "</p>";
			}
			//echo $jsonData3[$j]["upid"];
			
		}
		//echo  $jsonData2[$j]["upid"];
		
	
	



    ?> 
	
	
	
	</div>

<?php }

 ?>
 

<?php }  ?>





</div>


</body>

</html>