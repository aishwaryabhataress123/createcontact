<html>
<head>
</head>
<style>
.error{
color:red;
}
.container{
height:350px; 
width:350px; 
align:center;
background-color:white; 
border: 2px solid white; 
border-radius:100px;
margin-left:auto;
margin-right:auto;
margin-top:200px;
position: relative;
display:block;	
}
.inner-container{
background-color:white;
height:150px;
width:275px;
margin-left:auto;
margin-right:auto;
margin-top:15px;
padding-top:20px;
}
.credentials{
width:100%;
padding-top:10px;
border-radius:10px;
padding-bottom:10px;
}
.signin
{
color:black;
margin-left:auto;
margin-right:auto;
text-align:center;
}
</style>
<?php
$email = $pwd = "";
?>
<body style="background-color:#04C5F9">
<div class="container">
<div class="signin">
<img src="https://image3.mouthshut.com/images/imagesp/925609709s.jpg" alt="Aress Picture" style="height:90px;width:200px;margin-top:5px;">
</div>
<div class="inner-container">
<form method="post" action="validate.php">
	<input type="text" name="email" placeholder="Email Id" class="credentials" required>
	<input type="password" name="pwd" placeholder="Password" class="credentials" style=" margin-top:5%;" required>

	<input type="submit" name="submit" value="Log In" class="credentials" style=" margin-top:5%; text-align:center; background-color:#04C5F9; color:white; ">				
	<p>Not a member? &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <a href="signup.php" style="color:black;">SignUp Here</a></p>
</form>
</div>
</div>
</body>
</html>
