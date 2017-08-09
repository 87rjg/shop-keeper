<html>
<body>
<div id="fb-root" style="float:left; width:1px;"></div>


<form method="post">

<input type="text" name="t1">
<input type="submit" name="mysubmit" onClick="fblogin()" >
</form>
</body>
</html>
<?php
if(isset($_POST["mysubmit"]))
{
$First=$_POST["t1"];
//$first_name = stripslashes($First);
if(!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",$First))
{ 
die ("invalid first name");
}

/*session_start();
if(isset($_SESSION['counter']))
{
	$_SESSION["counter"]+=1;
}
else
{
	$_SESSION["counter"]=1;
}
echo"visited page=".$_SESSION["counter"].;
}*/
}
?>