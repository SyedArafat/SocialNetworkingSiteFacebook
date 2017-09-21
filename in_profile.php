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
$limitpost = 0;
$limitpost2 = 5;
include("fbinside_back.php");
include("database.php");
$sql="select * from user where uid='".$_SESSION["uid"]."'";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);
$sql1="SELECT * FROM user where uid not in (SELECT fid from friend where uid = '".$_SESSION["uid"]."') and uid !='".$_SESSION["uid"]."' ORDER BY RAND() LIMIT 6";
$jsonData1=getJSONFromDB($sql1);
$jsonData1 = json_decode($jsonData1, true);
$sql="select * from user_upload where uid='".$_SESSION["uid"]."' ORDER BY user_upload.upid DESC ";
$jsonData2= getJSONFromDB($sql);
$jsonData2 = json_decode($jsonData2, true);

$sql="SELECT upid FROM upload_like where uid='".$_SESSION["uid"]."'";
$jsonData3= getJSONFromDB($sql);
$jsonData3 = json_decode($jsonData3, true);

$sql4="select * from user_info where uid='".$_SESSION["uid"]."'";
$jsonData4= getJSONFromDB($sql4);
$jsonData4 = json_decode($jsonData4, true);
//print_r($GLOBALS);
$a= $jsonData[0]["profile_picture"];
?>
<title><?php echo $jsonData[0]["first_name"]." ".$jsonData[0]["last_name"];?></title>
<link href="styler.css" rel="stylesheet" type="text/css">
<style>
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
	cursor:pointer;
}
</style>
</head>
<body bgcolor="#E7EBF2">
<script>
function test(obj) {
	var k=2;
	str=obj.name;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		//alert(xmlhttp.responseText);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			//alert(xmlhttp.responseText);
			resp=JSON.parse(xmlhttp.responseText);
			for(i=0;i<resp.length;i++){
				if(resp[i].fid==str){
					obj.value="Request Pending";
					k=1;
					break;
				}
				else
				{
					k=2;
				}
			}
		    if(k==2)
		    {
				obj.value="Request Sent";
			    document.frm.submit();
		    }
		    else{
			     alert(added);
				
		    }
		}
		
	};
	var url="prac.php?signal=read";
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
	
}

function rload(){
	location.reload();
}

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

function updatep(obj){
	//alert(obj.value);
	if(obj.value=="ucv"){
		document.getElementById("ucp").style.display="block";
		
	}
	if(obj.value=="upp"){
		document.getElementById("upp").style.display="block";
		
	}
	
	
}
function closee(){
	document.getElementById("ucp").style.display="none";
	document.getElementById("upp").style.display="none";
}


function checkpp(obj){
	if(obj.value=="Change"){
		var x = document.getElementById("id11").value;
		//alert(document.getElementById("id11").value);
		if(document.getElementById("id11").value.length>0){
			if(x.substring(x.indexOf(".")+1)=="jpg" || x.substring(x.indexOf(".")+1)=="png" || x.substring(x.indexOf(".")+1)=="jpeg"){
			return true;
			}
			else{
				document.getElementById("id13").style.display="block";
			    document.getElementById("id12").style.display="none";
				return false;
				
				
			}
		}
		else{
			document.getElementById("id12").style.display="block";
			document.getElementById("id14").style.display="none";
			return false;
			
		}
		return false;
	}
	
	else if(obj.value=="Change Picture"){
		var x = document.getElementById("id14").value;
		//alert(document.getElementById("id11").value);
		if(document.getElementById("id14").value.length>0){
			if(x.substring(x.indexOf(".")+1)=="jpg" || x.substring(x.indexOf(".")+1)=="png" || x.substring(x.indexOf(".")+1)=="jpeg"){
			return true;
			}
			else{
				document.getElementById("id16").style.display="block";
			    document.getElementById("id15").style.display="none";
				return false;
				
				
			}
		}
		else{
			document.getElementById("id15").style.display="block";
			document.getElementById("id16").style.display="none";
			return false;
			
		}
		return false;
	}
	
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

function cccomment(){
	alert("any");
	
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

<div style="position:absolute;left:6%;top:7.9%;"><img class="coverpicture" onclick="#" src="<?php echo $jsonData[0]["cover_picture"];?>" width="849" height="283"> 
</div>

<div style="position:absolute; left:22%; top:45%; font-size:180%;color:#ffffff;font-weight:bold"><?php echo $jsonData[0]["first_name"]." ".$jsonData[0]["last_name"];?></div>
<div style="position:absolute;left:6%;top:52%; height:7.9%; width:850px; background:#ffffff" > </div>
<input class="updatecoverphoto" title="Update Cover Photo" value="ucv" onclick="updatep(this)" style="position:absolute;left:8%;top:12%;"type="image" src="image/updatecoverphoto.jpg"/>
<div id="ucp" style="position:absolute;z-index:1;display:none;left:30%;top:25%;height:30%; width:33%; padding: 20px; background:white; box-shadow:5px 0px 10px 1px rgb(73, 2, 2); ">  
<span class="close" onclick="closee()">&times;</span>
<div style="position:absolute;left:35%;top:22%;font-size:130%;font-weight:bold;">Update Cover Photo</div>
 <form action="bkchangecp.php" method="post" enctype="multipart/form-data">
<div style="position:absolute;left:35%;top:40%;"><input id="id11" type="file" name="cp" value="Update Photo"></div>
<div style="position:absolute;left:45%;top:60%"><input type="submit" onclick="return checkpp(this)" name="change" value="Change"/></div>
<div id="id12"style="display:none;position:absolute;left:41%;top:75%;font-size:120%font-weight:bold;color:red;">select a photo first</div>
<div id="id13"style="display:none;position:absolute;left:41%;top:75%;font-size:120%font-weight:bold;color:red;">Not Valid Image Formet</div>
</form>

 </div>
<div class="pfdivclass" style="position:absolute;left:8%;top:33%;">

<img class="profilepicture" onclick="#" src="<?php echo $jsonData[0]["profile_picture"];?>">
<a><input class="updatepf" title="Update Profile Picture" value="upp" onclick="updatep(this)" style="position:absolute;left:1%;top:1%;"type="image" src="image/updatepf.jpg"/> </a>
 </div>
 <div id="upp" style="position:absolute;z-index:1;display:none;left:30%;top:25%;height:30%; width:33%; padding: 20px; background:white; box-shadow:5px 0px 10px 1px rgb(73, 2, 2); ">  
<span class="close" onclick="closee()">&times;</span>
<div style="position:absolute;left:35%;top:22%;font-size:130%;font-weight:bold;">Update Profile Picture</div>
 <form action="bkchangepp.php" method="post" enctype="multipart/form-data">
<div style="position:absolute;left:35%;top:40%;"><input id="id14" type="file" name="cp" value="Update Photo"></div>
<div style="position:absolute;left:45%;top:60%"><input type="submit" onclick="return checkpp(this)" name="change" value="Change Picture"/></div>
<div id="id15"style="display:none;position:absolute;left:41%;top:75%;font-size:120%font-weight:bold;color:red;">select a photo first</div>
<div id="id16"style="display:none;position:absolute;left:41%;top:75%;font-size:120%font-weight:bold;color:red;">Not Valid Image Formet</div>
</form>

 </div>
 
<a href="in_edit_info.php">
<div style="position:absolute;left:54.8%;top:40%;"><button class="addfriendbutton" style="background-color:#ffffff">Edit Info</button></div>
</a>

<div class="topnav" style="position:absolute;left:25%;top:51.9%;font-size:180%;font-weight:bold">
<a class="active" href="#home">Timeline</a>
<a href="#news">About  </a>
<a href="#contact">Friends  </a>
<a href="#about">Photos  </a>
<a href="#about">More  </a>
</div>

<form action="bkprofile.php" name="frm" method="post">
<div style="position:absolute;left:6%;top:63%; height:33%; width:850px; background:#ffffff" > </div>
<div style="position:absolute;left:8%;top:65%; font-size:80%;color:#000000;font-size:bold;"> PEOPLE YOU MAY KNOW </div>
<div style="position:absolute;left:65%;top:65%; font-size:80%;color:#000000;font-size:bold;"> <a onclick="rload()" href="#">See More </a> </div>
<a href='<?php echo $jsonData1[0]["profile_picture"];?>'><div style="position:absolute;left:8%;top:68%;"><img class="friendpicture" onclick="#" src="<?php echo $jsonData1[0]["profile_picture"];?>"> </div></a>
<div style="position:absolute; left:9%; top:82.5%; font-size:80%;color:#000000;font-weight:bold"><?php echo $jsonData1[0]["first_name"]." ".$jsonData1[0]["last_name"];?></div>
<div style="position:absolute;left:8.5%;top:87%"><input type="hidden" value="<?php echo $jsonData1[0]["uid"];?>" name="toID" /><input type="button" name="<?php echo $jsonData1[0]["uid"];?>" onclick="test(this)" class="addfriendbutton" value="Add Friend"></div>

<a href='<?php echo $jsonData1[1]["profile_picture"];?>'><div style="position:absolute;left:18%;top:68%;"><img class="friendpicture" onclick="#" src="<?php echo $jsonData1[1]["profile_picture"];?>"> </div></a>
<div style="position:absolute; left:19%; top:82.5%; font-size:80%;color:#000000;font-weight:bold"><?php echo $jsonData1[1]["first_name"]." ".$jsonData1[1]["last_name"];?></div>
<div style="position:absolute;left:18.5%;top:87%"><input type="hidden" value="<?php echo $jsonData1[1]["uid"];?>" name="toID" /><input type="button" name="<?php echo $jsonData1[1]["uid"];?>" onclick="test(this)" class="addfriendbutton" value="Add Friend"></div>

<a href='<?php echo $jsonData1[2]["profile_picture"];?>'><div style="position:absolute;left:28%;top:68%;"><img class="friendpicture" onclick="#" src="<?php echo $jsonData1[2]["profile_picture"];?>"> </div></a>
<div style="position:absolute; left:29%; top:82.5%; font-size:80%;color:#000000;font-weight:bold"><?php echo $jsonData1[2]["first_name"]." ".$jsonData1[2]["last_name"];?></div>
<div style="position:absolute;left:28.5%;top:87%"><input type="hidden" value="<?php echo $jsonData1[2]["uid"];?>" name="toID" /><input type="button" name="<?php echo $jsonData1[2]["uid"];?>" onclick="test(this)" class="addfriendbutton" value="Add Friend"></div>

<a href='<?php echo $jsonData1[3]["profile_picture"];?>'><div style="position:absolute;left:38%;top:68%;"><img class="friendpicture" onclick="#" src="<?php echo $jsonData1[3]["profile_picture"];?>"> </div></a>
<div style="position:absolute; left:39%; top:82.5%; font-size:80%;color:#000000;font-weight:bold"><?php echo $jsonData1[3]["first_name"]." ".$jsonData1[3]["last_name"];?></div>
<div style="position:absolute;left:38.5%;top:87%"><input type="hidden" value="<?php echo $jsonData1[3]["uid"];?>" name="toID" /><input type="button" name="<?php echo $jsonData1[3]["uid"];?>" onclick="test(this)" class="addfriendbutton" value="Add Friend"></div>

<a href='<?php echo $jsonData1[4]["profile_picture"];?>'><div style="position:absolute;left:48%;top:68%;"><img class="friendpicture" onclick="#" src="<?php echo $jsonData1[4]["profile_picture"];?>"> </div></a>
<div style="position:absolute; left:49%; top:82.5%; font-size:80%;color:#000000;font-weight:bold"><?php echo $jsonData1[4]["first_name"]." ".$jsonData1[4]["last_name"];?></div>
<div style="position:absolute;left:48.5%;top:87%"><input type="hidden" value="<?php echo $jsonData1[4]["uid"];?>" name="toID" /> <input type="button" name="<?php echo $jsonData1[4]["uid"];?>" onclick="test(this)" class="addfriendbutton" value="Add Friend"></div>

<a href='<?php echo $jsonData1[5]["profile_picture"];?>'><div style="position:absolute;left:58%;top:68%;"><img class="friendpicture" onclick="#" src="<?php echo $jsonData1[5]["profile_picture"];?>"> </div></a>
<div style="position:absolute; left:59%; top:82.5%; font-size:80%;color:#000000;font-weight:bold"><?php echo $jsonData1[5]["first_name"]." ".$jsonData1[5]["last_name"];?></div>

<div style="position:absolute;left:58.5%;top:87%"><input type="hidden" value="<?php echo $jsonData1[5]["uid"];?>" name="toID" /> <input type="button" name="<?php echo $jsonData1[5]["uid"];?>" onclick="test(this)" value="Add Friend" class="addfriendbutton"></div>

</form>

<div style="position:absolute;left:6%;top:99%;height:35%;width:24.5%;background:#ffffff"> 
<form action="2nd.php" name = frm method="post">
<br>
<br>
<br>
<p>&nbsp College: <?php echo $jsonData4[0]["colledge"];?></p>
<p>&nbsp High School: <?php echo $jsonData4[0]["highschool"];?></p>
<p>&nbsp Relationship Status:<?php echo $jsonData4[0]["relation"];?></p>
<p>&nbsp Work:<?php echo $jsonData4[0]["work"];?></p>
  
  <br>
  </form>
</div>
<div style="position:absolute;left:7.5%;top:101%;"><img src="image/intro.jpg"></div>

<div style="position:absolute;left:33%;top:99%;height:28%;width:36%;background:#ffffff"> </div>
<div style="position:absolute;left:33%;top:99%;height:6%;width:36%;background:#f5f4f7;"></div>
<div style="position:absolute;left:33.3%;top:99.3%;"><input type="image" onclick="statufunction(this)" name="stat" src="image/status.jpg" /></div>
<div style="position:absolute;left:39.3%;top:99%;"><input type="image" onclick="statufunction(this)" name="pho" src="image/photo.jpg" /></div>
<div style="position:absolute;left:33%;top:105%;height:1%;width:36%;background:#cbc7d8"> </div>
<div style="display:block;position:absolute;left:33.5%;top:106.3%;"><img src="<?php echo $jsonData[0]["profile_picture"];?>" width="42" height="42"></div>
<form action="bkpost.php" method="post" enctype="multipart/form-data" id="statusform" style="display:block">

<div style="display:block;position:absolute;left:37.3%;top:106%;"><textarea id="statusid" onclick="displayerror()" style="resize:none;" placeholder=" What's On Your Mind ?" name="status" rows="6" cols="58"></textarea></div>
<div style="position:absolute;left:34.5%;top:122.5%;"> <input type="file" value="Upload" name="ffd" id="ffd"/></div>


<div style="position:absolute;left:62.5%;top:120.5%;"><input type="submit" onclick="return valpost(this)" style="color:#ffffff;background-color:#194280;" value="post" class="addfriendbutton"/></div>

</form>
<div style="position:absolute;left:33%;top:120%;height:1%;width:36%;background:#cbc7d8"> </div>

<form action="bkphoto.php" method="post" enctype="multipart/form-data" id="photoform" style="display:none">
<div style="position:absolute;left:39%;top:108%;">Select The File You Want To Upload</div>
<div style="position:absolute;left:40%;top:114%;"> <input type="file" value="Upload Your File" name="fileToUpload" id="fileToUpload"/></div>
<div style="position:absolute;left:62.5%;top:120.5%;"><input type="submit" onclick="return valpost(this)" style="color:#ffffff;background-color:#194280;" value="upload" class="addfriendbutton"/></div>
</form>
<div id="err1" style="display:none;position:absolute;left:40%;top:113.5%;font-weight:bold;color:red;">The Field Is Empty.Write somethig first.</div>
<div id="err2" style="display:none;position:absolute;left:43%;top:121.5%;font-weight:bold;color:red;">Please select a photo first.</div>
<div id="err3" style="display:none;position:absolute;left:32%;top:118.5%;font-weight:bold;color:red;">Error!! File format not supported(supported format: "jpg","png","jpeg").</div>

<div style="position:absolute;left:33%;width:36%;top:130.3%;height:130%;background-color:white;">
<?php for($i=0;$i<sizeof($jsonData1);$i++){
	if(!isset($jsonData2[0])){
		echo '<div style="position:relative;left:5%;top:2%;font-size:110%;font-weight:bold;">  Write Something To Make Your Fellings Known</div>';
		break;
	}
	else if(isset($jsonData2[$i])){
	?>
<div style="position:relative;left:0%;width:100%;height:100%;top:0%; background-color:white;">	
	
	
<div style="position:relative;top:3%;left:5%;"><img src="<?php echo $jsonData2[$i]["profile_picture"];?>" width="40" height="40"></div>
<div style="position:relative;left:16%;top:-3%;font-size:110%;font-weight:bold;color:#4166a8;"><?php echo $jsonData2[0]["first_name"]." ".$jsonData[0]["last_name"];?></div>
<div style="position:relative;left:16%;top:-3%;font-weight:bold;font-size:80%;color:#afafaf;"><?php echo $jsonData2[0]["up_date"];?></div>
<div style="position:relative;left:5%;top:2%;font-size:110%;font-weight:bold;"><?php echo $jsonData2[$i]["status"];?></div>
<?php if(strlen($jsonData2[$i]["media_path"])>0) {?>
<div style="position:relative;left:3%;top:3%;"><img src="<?php echo $jsonData2[$i]["media_path"];?>" width="450" height="450" ></div>

	<?php } 
	
	?>
	
	<div style="position:relative;top:4%;left:3%;"><input id="id20" onclick="funlike(this)" value="<?php echo $jsonData2[$i]["upid"];?>" type="image" src="image/like.jpg"></div>
	<div style="position:relative;top:-.1%;left:23%;"><input onclick="funcomment()" type="image" src="image/comment.jpg"></div>
	<form action="pbkcomment.php" method="post">
	<div style="position:relative;top:9%;left:3%;"><textarea style="resize:none" name="<?php echo $jsonData2[$i]["upid"];?>" rows="2" cols="46"></textarea>
	<input type="submit" class="addfriendbutton" style="color:#ffffff;background-color:#194280;" name="comment" value="Comment"></div>
    </form>
	
	</div>

<?php }

 ?>
 



<?php }  ?>





<input type="button" name="loadmore" onclick = "loadmore()"  value="LoadMore">


</body>

</html>