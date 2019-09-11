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
document.location="admin.php";
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
	document.location="admin.php";
	</script>
	<?php
	}
	else
	{
$q=mysqli_query($con,"update adminreg set uname='$uname',uemail='$uemail',ufullname='$ufullname',ubg='$ubg',
					uno='$uno',uadd='$uadd',uadhaar='$uadhaar',ustate='$ustate',ucountry='$ucountry',upass='$upass',ucpass='$ucpass' where uname='$uname'");
	if($q)
	{
	?>
	<script>
	alert("UPDATE SUCCESSFUL");
	document.location="admin.php";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("UPDATE FAILED");
	document.location="admin.php";
	</script>
	<?php
	}
	}
	}
mysqli_close($con);
?>
