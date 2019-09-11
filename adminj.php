<?php

$con=mysqli_connect("localhost","root","","cse")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysqli_error());

$uname=$_POST['uname'];
$uemail=$_POST['uemail'];
$ufullname=$_POST['ufullname'];
$ubg=$_POST['ubg'];
$uno=$_POST['uno'];
$uadd=$_POST['uadd'];
$uadhaar=$_POST['uadhaar'];
$ustate=$_POST['ustate'];
$ucountry=$_POST['ucountry'];
$upass=$_POST['upass'];
$ucpass=$_POST['ucpass'];

if(empty($uname)or empty($uemail)or empty($ufullname)or  empty($ubg)or empty($uno) or empty($uadd)or
	empty($uadhaar)or empty($ustate)or empty($ucountry)or empty($upass) or empty($ucpass))
{
?>
<script>
alert("ENTER ALL FIELD VALUES");
document.location="Login.html";
</script>

<?php

} 
else
{
	if( $upass != $ucpass )
	{
	?>
	<script>
	alert("password not matched");
	document.location="Login.html";
	</script>
	<?php
	}
	else
	{
$q=mysqli_query($con,"insert into adminreg(uname,uemail,ufullname,ubg,uno,uadd,uadhaar,ustate,ucountry,upass,ucpass)
	values('$uname','$uemail','$ufullname','$ubg','$uno','$uadd','$uadhaar','$ustate','$ucountry','$upass','$ucpass')");
	if($q)
	{
	?>
	<script>
	alert("INSERTION SUCCESSFUL");
	document.location="Login.html";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("INSERTION FAILED");
	document.location="Login.html";
	</script>
	<?php
	}
	}
	}
mysqli_close($con);
?>
