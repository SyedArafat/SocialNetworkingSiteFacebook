<pre>
<?php
session_start();
$_SESSION["emdup"]=0;
print_r($GLOBALS);
if(strlen($_REQUEST['firstName'])==0 || strlen($_REQUEST['surname'])==0)
{
	echo "problem header apply firstName || surname";
	
}

else{
	if(strlen($_REQUEST['email'])==0)
	{
		echo "problem header apply email";
	}
	else
	{
		if(strlen($_REQUEST["pword"])==0 || strlen($_REQUEST["cpword"])==0)
		{
			echo "problem header apply password";
			
		}
		else{
			if($_REQUEST['pword']==$_REQUEST['cpword']){
				if($_REQUEST["month"]=="Month:")
				{
					echo "problem header apply month";
					
				}
				else
				{
					if($_REQUEST["day"]=="Day:"){
						echo "problem header apply day";
					}
					else{
						if($_REQUEST["year"]=="Year:"){
							echo "problem header apply year";
						}
						else{
							if($_REQUEST["gender"]=="male" || $_REQUEST["gender"]=="female" ){
								echo "Gooda";
								
						        include("database.php");
	
	                            $sql = "INSERT INTO user (first_name, last_name, email, password, dob, gender, join_date)
                                VALUES ('".$_REQUEST["firstName"]."', '".$_REQUEST["surname"]."', '".$_REQUEST["email"]."', '".md5($_REQUEST["pword"])."','".$_REQUEST["year"]."-".$_REQUEST["month"]."-".$_REQUEST["day"]."','".$_REQUEST["gender"]."', now())";
	                            echo $sql."<br/>";
	                            if(insertData($sql)){
									$sql="select uid from user where email='".$_REQUEST["email"]."';";
									$jsonData= getJSONFromDB($sql);
	
	                                $jsonData = json_decode($jsonData, true);
	                                //print_r($GLOBALS);
	                                echo $jsonData[0]["uid"];
									if($_REQUEST["gender"]=="male")
									{
										$sql="UPDATE user SET profile_picture = 'image/malepp.jpg' WHERE uid ='".$jsonData[0]["uid"]."'";
										if(insertData($sql)){
											echo "pic updated";
											$sql="UPDATE user SET cover_picture = 'image/coverpicture.jpg' WHERE uid ='".$jsonData[0]["uid"]."'";
											if(insertData($sql)){
												echo "cover pic updated";
											    $_SESSION["uid"]=$jsonData[0]["uid"];
											}
										}
										
										
									}
									else{
										$sql="UPDATE user SET profile_picture = 'image/femalepp.jpg' WHERE uid ='".$jsonData[0]["uid"]."'";
										if(insertData($sql)){
											echo "pic updated";
											$sql="UPDATE user SET cover_picture = 'image/coverpicture.jpg' WHERE uid ='".$jsonData[0]["uid"]."'";
											if(insertData($sql)){
												echo "cover pic updated";
											    $_SESSION["uid"]=$jsonData[0]["uid"];
												header("Location:in_profile.php");
											}
										}
										
										
									}
		                            echo "Data insert successful";
	                            }
	                            else
	                            {
									
		                            $_SESSION["emdup"]=1;
		                            header("Location:in_signup.php");
	                            }
							}
							else
							{
								echo "header problem gender";
							}
						}
					}
				}
		
			}
			else{
				echo "problem header apply";
				
			}
		}
	}
	
	
}
?>

</pre>