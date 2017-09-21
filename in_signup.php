<!DOCTYPE html>
<html>
<head><title>Sign up for My Facebook</title>
<!--Header Background-->
<?php
session_start();
include("fb_back.php");
?>

<!--Stylish button css -->
<link href="style.css" rel="stylesheet" type="text/css">
<!--Validation in javascript -->
<script type="text/javascript" src="validation.js"> </script>

</head>
<body>
<!--Head login into existing account button -->
<div  id="ln" style="position:absolute;left:74.6%;top:5.4%;"> <input class="logintoexisting" type="button" onclick="showlogin()" name="asd" value="Log In to Existing Account" />  </div>

<!--Head login oprions-->
<form method="post" action="bklogin.php">
<div id="li" style="display:none;position:absolute; left:57.7%;top:2.1%;font-size:90%;color:#FFFFFF;">Email:</div>
<div id="lj" style="display:none;position:absolute; left:57.7%;top:5.6%"><input type="text" name="uname"/></div>
<div id="lk" style="display:none;position:absolute; left:71.7%; top:2.1%;font-size:90%;color:#FFFFFF;">Password:</div>
<div id="ll" style="display:none;position:absolute; left:71.7%;top:5.6%"><input type="password" name="password"/></div>
<!--login button int the up-->
<div id="lm" style="display:none;position:absolute;left:85.8%;top:5.6%;"> <input type="submit" name="Login" value="Log In" id="loginbutton" />  </div>

<!--home page left side content-->

</form>

<!--sign up form above content before error message-->
<div id="bi" style="position:absolute; left:31.7%;top:16.2%; font-size:250%;color:#1A0802;font-weight:bold">Create a new account</div>
<div id="bj" style="position:absolute; left:31.7%;top:25.2%; font-size:150%;color:#1A0802;">It is free and always will be</div>

<!--sign up form above content after error message-->
<div id="ai" style="display:none; position:absolute; left:31.7%;top:13.2%; font-size:250%;color:#1A0802;font-weight:bold;">Create a new account</div>
<div id="aj" style="display:none; position:absolute; left:31.7%;top:20.2%; font-size:150%;color:#1A0802;display:none;">It is free and always will be</div>

<form method="post" onsubmit="return checks();" name="submision" action="bksignup.php">
<div style="position:absolute; left:31.7%;top:33.3%"><input type="text" class="homeinput" name="firstName"  placeholder="First Name" maxlength="50"/></div>
<div style="position:absolute; left:49.7%;top:33.3%"><input type="text" class="homeinput" name="surname"  placeholder="Surname" maxlength="50"/></div>
<div style="position:absolute; left:31.7%;top:41.3%"><input style="width:215%" type="text" class="homeinput" name="email"  placeholder="Email Address" maxlength="50"/></div>
<div style="position:absolute; left:31.7%;top:49.3%"><input style="width:215%" type="password" class="homeinput" name="pword"  placeholder="Enter Password" maxlength="50"/></div>
<div style="position:absolute; left:31.7%;top:57.3%"><input style="width:215%" type="password" class="homeinput" name="cpword"  placeholder="Re-enter Password" maxlength="50"/></div>
<div style="position:absolute; left:32%;top:66.3%; font-size:150%;color:#1A0802;font-size:bold">Birthday:</div>

    <div style="position:absolute;left:32%; top:72.3%;">
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
	
	<div style="position:absolute;left:39%;top:72.3%">
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
	<div style='position:absolute;left:46.7%;top:72.3%;'>
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
	
	<div style="position:absolute;left:31.7%;top:78.9%;font-size:120%;font-weight:bold;"><input type="radio" id="male" name="gender" value="male">Male</div>
	<div style="position:absolute;left:39.7%;top:78.9%;font-size:120%;font-weight:bold;"><input type="radio" id="female" name="gender" value="female">Female</div>
	<div style="position:absolute;left:31.7%;top:83.9%;font-size:70%;">By clicking Create Account, you agree to our Terms and Conditions. </div>
	<!--sign up button right down-->
	<div style="position:absolute;left:31.8%;top:88.2%;"> <input type="submit" name="signup" value="Create Account" class="signupbutton" />  </div>
	
	<!--error message-->
	<div id="error_design_format" style="display:none;">
		<div style="position:absolute;left:31.7%; top:27%; height:5%; width:33%; background:#FFEBE8; box-shadow:5px 0px 10px 1px rgb(73, 2, 2); ">   </div>
		<div style="position:absolute;left:31.7%; top:27%; height:5.1%; width:0.08%; background-color:#0f0c0c; "> </div>
		<div style="position:absolute;left:64.7%; top:27%; height:5.1%; width:0.08%; background-color:#0f0c0c;"> </div>
	</div>
	<div id="blank_error" style="display:none; position:absolute; left:42%; top:27.7%;"> You must fill in all of the fields. </div>
	<div id="email_error" style="display:none; position:absolute; left:42%; top:27.7%;"> Please enter a valid email address. </div>
	<div id="password_error" style="display:none; position:absolute; left:37.3%; top:27.7%;"> Your password must be at least 6 characters long.</div>
	<div id="cp_error" style="display:none; position:absolute; left:42%; top:27.7%;"> Your password don't match. </div>
	<div id="date_error" style="display:none; position:absolute; left:38.6%; top:27.7%;">  You must indicate your full birthday to register.</div>
	<div id="gender_error" style="display:none; position:absolute; left:42%; top:27.7%;">Please select either Male or Female. </div>
	<div id="emdup_error" style="display:none; position:absolute; left:42%; top:27.7%;">The Email address already exist. </div>
	
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