 <?php

if(isset($_POST["mysubmit"]))
{
$nm=$_POST["name1"];
$email=$_POST["email1"];
$mob=$_POST["mobile1"];
$pass1=$_POST["password"];
$pass2=$_POST["cpassword"];


/*if(!empty($email))    Error in while loop
{
      //  $con=mysql_connect("localhost","root","");
       // $db=mysql_select_db("kundan");
		$sql="select * from web where email='".$email."'";
	$rs=mysql_query($sql);
	//echo $sql;exit;
	//return redirect('index.php');
	while($row=mysql_fetch_array($rs))
{
	if($row['email'] == $email)
	{
	echo"mailid is already exits";
	}
	//mysql_close($con);
}
}	*/


if(empty($nm)||empty($email)||empty($mob)||empty($pass1)||empty($pass2))
{
	$msg1= "Fill up all field";
}
/*else if()
{
	$msg2="Enter your Email";
}*/

else if(!preg_match("/^[a-zA-Z '&-]*[A-Za-z]+$/",$nm))//[A-Z]
{
	$msg2="Invalid Name";
} 
else if(filter_var($email,FILTER_VALIDATE_EMAIL)!=true)
	{
        $msg3="Invalid Email Address";
	}

else if(!preg_match("/^[0-9]{10}$/",$mob))
	{
		$msg4="Invalid mobile number";
	}
else if(!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",$pass1))
	{
		$msg5="Invalid format of password";
	}	
	
else if ($pass1 != $pass2) 
{
//echo("Error... Passwords do not match");
   $msg6="Error... Passwords do not match";
}
 

else
{	
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("kundan");
if(isset($_POST["mysubmit"]))
{
	$name=$_POST["name1"];
	$email=$_POST["email1"];
	$mobile=$_POST["mobile1"];
	$pass1=$_POST["password"];
	$pass2=$_POST["cpassword"];
	
	/*echo"user".$usern;
	echo"password".$passw;
	echo"name".$name1;
	echo"Email".$email1;
	echo"mobile".$mob1;
	echo"answer".$answ;*/
	
	$result = mysql_query("SELECT * FROM web where email='".$email."'");
    $num_rows = mysql_num_rows($result);
    if($num_rows >= 1){
        $msg7= "Emailid already exists";
    }	
	else
	{
	$sql="insert into web values('".$name."','".$email."','".$mobile."','".$pass1."','".$pass2."')";
	mysql_query($sql);
		header('location:index.php');
	mysql_close($con);
	}
 }
	
}
}

?>
 
 
 
 
 <html>
 <head>
 <style type="text/css">
 @import "compass/css3";

$back-color: #F0F0F0;
$green-border: #72B372;

@mixin linear-gradient($top, $bottom) {
  background: $top;
  background: -webkit-linear-gradient($top, $bottom);
	background: -moz-linear-gradient($top, $bottom);
	background: -o-linear-gradient($top, $bottom);
	background: linear-gradient($top, $bottom);
}

.main > div {
  display: inline-block;
  width: 49%;
  margin-top: 50px;
}
.two{
    .register {
       border: none; 
        
        h3 {
          border-bottom-color: #909090;
        }
    
        .sep{
          border-color: #909090;
        }
    }
}
.register {
  	width: 500px;
  	margin: 10px auto;
  	padding: 10px;
  	border: 7px solid $green-border;
  	border-radius: 10px;
  	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	  color: #444;
  	background-color: $back-color;
  	box-shadow: 0 0 20px 0 #000000;
  	
  h3 {
	  	margin: 0 15px 20px;
	  	border-bottom: 2px solid $green-border;
	  	padding: 5px 10px 5px 0;
	  	font-size: 1.1em;
	}

	div{
		margin: 0 0 15px 0;
	  	border : none;
	}

	label {
	  	display: inline-block;
	  	width: 25%;
	  	text-align: right;
	  	margin: 10px
	}

	input[type=text], input[type=password]{
  		width: 65%; 
  		font-family: "Lucida Grande","Lucida Sans Unicode",Tahoma,Sans-Serif;
  		padding: 5px;
  		font-size: 0.9em;
  		border-radius: 5px;
  		background: rgba(0, 0, 0, 0.07);
	}
  
  input[type=text]:focus, input[type=password]:focus{
		background: #FFFFFF;
	}

	.button {
		
  		font-size: 1em;
  		border-radius: 8px;
  		padding: 10px;
  		border: 0;
	
  		box-shadow: 0 1px 0 0 #60BD49 inset;
  		@include linear-gradient(#63E651, #42753E);
  		
		&:hover {
  			@include linear-gradient(#51DB1C, #6BA061);
  		}
				
	}
	
	.sep {
	  	border: 1px solid $green-border;
	  	position: relative;
	  	margin: 35px 20px;
	}

	.or {
	  	position: absolute;
	  	width: 50px;
	 	left: 50%;
	  	background: $back-color;
	  	text-align: center;
	  	margin: -10px 0 0 -25px;
	  	line-height: 20px;
	}

	.connect {
	  	width: 400px;
	  	margin: 0 auto;
	  	text-align: center;
	}

	.social-buttons {
	  	display: inline-block;
	  	min-width: 150px;
	  	height: 50px;
	  	margin: 0 5px 10px;
	  	border-radius: 10px;
	  	text-shadow: 1px 1px 5px #000000;

	  	a {
	  		display: block;
	  		height: 100%;
	  		text-decoration: none;
	  		color: #FFFFFF;
	  		padding: 10px 15px;
		}

		span {
	  		font-size: 30px;
	  		margin-left: 35px;
		}
	}

	.facebook {
	  	@include linear-gradient(#415EA3, #2E4A88);
	  	
	  	&:hover {
			@include linear-gradient(#3B5591, #2A437C);
		}

		a {
	  		background: url(../images/logo_fb_31x42.png) no-repeat 5% 10%;
		}
	}

	.twitter {
	  	@include linear-gradient(#41C0F3, #3FBAEC);
	  	
		&:hover {
	  		@include linear-gradient(#3EB1DF, #3EAAD6);
	  	}

		a {
	  		background: url(../images/logo_twitter_38x32.png) no-repeat 6% 25%;
		}
	}
}
 #name {
	border: 1px solid #e0e0e0;
	height: 25px;
	width: 310px;
}

.btn {
  cursor: pointer;
  margin: 10px;
  border-radius: 5px;
  text-decoration: none;
  padding: 7px;
  font-size: 15px;
  transition: .3s;
  -webkit-transition: .3s;
  -moz-transition: .3s;
  -o-transition: .3s;
  display: inline-block;
}

.btn:hover {
  cursor: url(http://cur.cursors-4u.net/symbols/sym-1/sym46.cur), auto;
}
.blue {
  color: #55acee;
  border: 2px #55acee solid;
}

.blue:hover {
  background-color: #55acee;
  color: #fff
}

.purple {
  color: #9b59b6;
  border: 2px #9b59b6 solid;
}

.purple:hover {
  color: #fff;
  background-color: #9b59b6;
}

.buttons {
  padding-top: 15px;
  text-align: center;
}
 
 </style>
 </head>
 <body bgcolor="#D1CDC0">
 <center>
 <div class="main">
      <div class="one">
        <div class="register">
          <p><h4><u>Create your account</u></h4></p>
          <form id="reg-form" method="post">
		  <table>
		  <tr>
            <div>
              <td><label for="name">Name</label></td>
             <td> <input type="text" id="name" spellcheck="false" placeholder="Enter your Name" name="name1" title="First charater should be in uppercase" value="<?=(isset($name) ?$name: "")?>"/></td>
            </div></tr>
			<tr>
            <div>
              <td><label for="name">Email</label></td>
              <td><input type="text" id="name" spellcheck="false" placeholder="Email Address" name="email1" title="Enter your Email Address" value="<?=(isset($email) ?$email: "")?>"/></td>
            </div></tr>
			<tr>
            <div>
              <td><label for="name">Mobile</label></td>
              <td><input type="text" id="name" spellcheck="false" name="mobile1" title="Enter your 10 Digit Mobile Number" value="<?=(isset($mobile) ?$mobile: "")?>"/></td>
            </div></tr>
			<tr>
            <div>
              <td><label for="name">Password</label></td>
              <td><input type="password" id="name" name="password" placeholder="at least one digit,one uppercase,lowercase" title="At least 8 or more characters"/></td>
            </div></tr>
			<tr>
            <div>
             <td> <label for="name">Password Again</label></td>
              <td><input type="password" id="name" name="cpassword" placeholder="at least one digit,one uppercase,lowercase" title="At least 8 or more characters"/></td>
            </div></tr>
			
			
			
			</table>
			<table>
			<tr>
            <div class="buttons">
              <td><label></label>
              <input type="submit" value="Create Account" id="create-account" class="btn purple" name="mysubmit"/></td>
            </div></tr></table>
			<table>
			<tr><div><td>Already have an account,<a href="new 3.php"> <i><b>Click Here</b></i></a></td></div></tr>
			</table>
          <table>
          <div class="sep">
            <span class="or">OR</span>
          </div>
		  
		  
		  
		  <tr><td>
		  
          <div class="connect">
		  <div class="buttons">
            <div class="social-buttons facebook">
             <span><a href="https://www.facebook.com/"><input type="submit" value="Facebook" id="create-account" class="btn purple"/></span>
               
              </a>
			  </div>
            </div>
			</td>
			
			<td>
		    <div class="buttons">
            <div class="social-buttons twitter">
              <span><a href="https://www.Google+.com/"><input type="submit" value="Google+" id="create-account" class="btn purple"/></span>
               
              </a>
			  
			  
            </div>
			
			
			</td></tr>
			</table>
          </div>
        </div>
      </div>
      
      
	
	</body>
	</html>
	<p style="color:purple;font-size:20px">
	<?php
					               if(isset($msg1))
								   {
									   echo $msg1;
								   }
								   if(isset($msg2))
								   {
									   echo $msg2;
								   }
								   if(isset($msg3))
								   {
									   echo $msg3;
								   }
								   if(isset($msg4))
								   {
									   echo $msg4;
								   }
								   if(isset($msg5))
								   {
									   echo $msg5;
								   }
								    if(isset($msg6))
								   {
									   echo $msg6;
								   }
								   if(isset($msg7))
								   {
									   echo $msg7;
								   }
					
					        ?></p>