<?php
session_start();
if($_SESSION["flag"]!=1)
{
	header("Location:in_main.php");	
}
include("fbinside_back.php");
include("database.php");
$sql="select * from user where uid='".$_SESSION["uid"]."'";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);
$sql2="select * from user_info where uid='".$_SESSION["uid"]."'";
$jsonData2= getJSONFromDB($sql2);
$jsonData2 = json_decode($jsonData2, true);

?>
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

<div style="position:absolute;left:16%;top:10%;height:75%;width:34.5%;background:#ffffff;padding:20px"> 
<form action="bkinfo.php" name = frm method="post">
<h1>Update your profile Info</h1>
  College:<br>
  <input type="text"  name="clg" value="<?php echo $jsonData2[0]["colledge"];?>" ><p id = "college"></p>
  <br>
  High School:<br>
  <input type="text" name="lastname" value="<?php echo $jsonData2[0]["highschool"];?>"> <p id = "lastname"> </p>
  <br>
  <?php
  $rel = $jsonData2[0]["relation"];?>
  
  Relationship Status<br>
  <?php if($rel == "Single")
  {
	  ?><input type="radio" name="gender" value="Single" checked> Single
	  <input type="radio" name="gender" value="Married"> Married
	  <input type="radio" name="gender" value="Its Complicated"> It's Complicated 
	  <?php
  }
  else if($rel == "Married")
  {
	  ?><input type="radio" name="gender" value="Single" > Single
	  <input type="radio" name="gender" value="Married" checked> Married
	  <input type="radio" name="gender" value="Its Complicated"> It's Complicated 
	  <?php
  } 
  else if($rel == "Its Complicated ")
  {
	  ?><input type="radio" name="gender" value="Single" > Single
	  <input type="radio" name="gender" value="Married"> Married
	  <input type="radio" name="gender" value="Its Complicated" checked> It's Complicated 
	  <?php
  }
  else
  {
	  ?><input type="radio" name="gender" value="Single"> Single
	  <input type="radio" name="gender" value="Married"> Married
	  <input type="radio" name="gender" value="Its Complicated"> It's Complicated 
	  <?php
  }?>
  <br>
  <br>
Work:
  <br><input type="text" name="phone" value="<?php echo $jsonData2[0]["work"];?>" > <p id = "pno"> </p>
  <br>
  <input type="submit" value="Submit">
  </form>
  
  </div>