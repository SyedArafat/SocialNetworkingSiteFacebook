<!DOCTYPE html>
<html>
<head>

<title>My Facebook</title>
<!--facebook background-->
<?php
session_start();
$_SESSION["flag"]=0;
include("fb_back.php");
?>
<!--css for button and text field-->
<link href="style.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="validation.js"> </script>
</head>

<!--Head login oprions-->
<body>
<form method="post" action="bklogin.php">
<div style="position:absolute; left:57.7%;top:2.1%;font-size:90%;color:#FFFFFF;">Email:</div>
<div style="position:absolute; left:57.7%;top:5.6%"><input type="text" name="uname"/></div>
<div style="position:absolute; left:71.7%; top:2.1%;font-size:90%;color:#FFFFFF;">Password:</div>
<div style="position:absolute; left:71.7%;top:5.6%"><input type="password" name="password"/></div>
<!--login button int the up-->
<div style="position:absolute;left:85.8%;top:5.6%;"> <input type="submit" name="Login" value="Log In" id="loginbutton" />  </div>

<!--home page left side content-->

</form>
<div style="position:absolute; left:8%; top:19%; font-size:130%;color:#1A0802;font-weight:bold">Facebook helps you connect and share with the </div>
<div style="position:absolute; left:11%; top:24%; font-size:130%;color:#1A0802;font-weight:bold">people in your life.</div>
<div style="position:absolute; left:5%; top:35%;"> <img src="image/fb_map.PNG" width="600" height="225"> </div>

<!--sign up form above content before error message-->
<div id="bi" style="position:absolute; left:57.7%;top:16.2%; font-size:250%;color:#1A0802;font-weight:bold">Create a new account</div>
<div id="bj" style="position:absolute; left:57.7%;top:25.2%; font-size:150%;color:#1A0802;">It is free and always will be</div>

<!--sign up form above content after error message-->
<div id="ai" style="display:none; position:absolute; left:57.7%;top:13.2%; font-size:250%;color:#1A0802;font-weight:bold;">Create a new account</div>
<div id="aj" style="display:none; position:absolute; left:57.7%;top:20.2%; font-size:150%;color:#1A0802;display:none;">It is free and always will be</div>

<!--right sign up form-->
<form method="post" onsubmit="return check();" name="submision" action="bksignup.php">
<div style="position:absolute; left:57.7%;top:33.3%"><input type="text" class="homeinput" name="firstName"  placeholder="First Name" maxlength="50"/></div>
<div style="position:absolute; left:75.7%;top:33.3%"><input type="text" class="homeinput" name="surname"  placeholder="Surname" maxlength="50"/></div>
<div style="position:absolute; left:57.7%;top:41.3%"><input style="width:215%" type="text" class="homeinput" name="email"  placeholder="Email Address" maxlength="50"/></div>
<div style="position:absolute; left:57.7%;top:49.3%"><input style="width:215%" type="password" class="homeinput" name="pword"  placeholder="Enter Password" maxlength="50"/></div>
<div style="position:absolute; left:57.7%;top:57.3%"><input style="width:215%" type="password" class="homeinput" name="cpword"  placeholder="Re-enter Password" maxlength="50"/></div>
<div style="position:absolute; left:58%;top:66.3%; font-size:150%;color:#1A0802;font-size:bold">Birthday:</div>

    <div style="position:absolute;left:58%; top:72.3%;">
	<select name="month" style="width:80;font-size:18px;height:32;padding:3;">
	<option value="Month:"> Month: </option>
	
	<script type="text/javascript">
	
		var m=new Array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
		for(i=1;i<=m.length-1;i++)
		{
			document.write("<option value='"+i+"'>" + m[i] + "</option>");
		}	
	</script>
	
	</select>
	</div>
	
	<div style="position:absolute;left:65%;top:72.3%">
	<select name="day" style="width:80;font-size:18px;height:32;padding:3">
	<option value="Day:">Day:</option>
	
	<script type="text/javascript">
	for(i=1;i<32;i++){
		document.write("<option value='"+i+"'>" + i + "</option>");
		//document.write("<option value='"+i+"'>" + i + "</option>");
	}
	</script>
	</select>
	</div>
	<div style='position:absolute;left:70.7%;top:72.3%;'>
	<select name="year" style="width:70; font-size:18px; height:32; padding:3;">
	<option value="Year:"> Year: </option>
	
	<script type="text/javascript">
	
		for(i=2016;i>=1916;i--)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
	
	</script>
	
	</select>
	</div>
	
	<div style="position:absolute;left:57.7%;top:78.9%;font-size:120%;font-weight:bold;"><input type="radio" id="male" name="gender" value="male">Male</div>
	<div style="position:absolute;left:65.7%;top:78.9%;font-size:120%;font-weight:bold;"><input type="radio" id="female" name="gender" value="female">Female</div>
	<div style="position:absolute;left:57.7%;top:83.9%;font-size:70%;">By clicking Create Account, you agree to our Terms and Conditions. </div>
	<!--sign up button right down-->
	<div style="position:absolute;left:57.8%;top:88.2%;"> <input type="submit" name="signup" value="Create Account" class="signupbutton" />  </div>
	
	<!--error message-->
	<div id="error_design_format" style="display:none;">
		<div style="position:absolute;left:57.7%; top:27%; height:5%; width:33%; background:#FFEBE8; box-shadow:5px 0px 10px 1px rgb(73, 2, 2); ">   </div>
			<div style="position:absolute;left:57.7%; top:27%; height:5.1%; width:0.08%; background-color:#0f0c0c; "> </div>
			<div style="position:absolute;left:90.7%; top:27%; height:5.1%; width:0.08%; background-color:#0f0c0c;"> </div>
	</div>
	<div id="blank_error" style="display:none; position:absolute; left:68%; top:27.7%;"> You must fill in all of the fields. </div>
	<div id="email_error" style="display:none; position:absolute; left:68%; top:27.7%;"> Please enter a valid email address. </div>
	<div id="password_error" style="display:none; position:absolute; left:63.3%; top:27.7%;"> Your password must be at least 6 characters long.</div>
	<div id="cp_error" style="display:none; position:absolute; left:68%; top:27.7%;"> Your password don't match. </div>
	<div id="date_error" style="display:none; position:absolute; left:64.6%; top:27.7%;">  You must indicate your full birthday to register.</div>
	<div id="gender_error" style="display:none; position:absolute; left:65.3%; top:27.7%;">Please select either Male or Female. </div>
	<div id="emdup_error" style="display:none; position:absolute; left:68%; top:27.7%;">The Email address already exist. </div>
	
	<?php
	if($_SESSION["emdup"]==1){?>
	<script type="text/javascript">
    emdup();
    </script>
	
	<?php 
	$_SESSION["emdup"]=0;
	
	}
	
	?>


</form>



</body>
</html>