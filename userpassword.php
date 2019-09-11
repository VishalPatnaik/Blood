<?php

$con=mysqli_connect("localhost","root","","cse")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysqli_error());

$uname=$_POST['uname'];
$upass=$_POST['upass'];
$ucpass=$_POST['ucpass'];

if(empty($uname)or empty($upass) or empty($ucpass))
{
?>
<script>
alert("ENTER ALL FIELD VALUES");
document.location="register.html";
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
	document.location="register.html";
	</script>
	<?php
	}
	else
	{
$q=mysqli_query($con,"update reg set upass='$upass',ucpass='$ucpass' where uname='$uname'");
	if($q)
	{
	?>
	<script>
	alert("PASSWORD CHANGED");
	document.location="register.html";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("UPDATE FAILED");
	document.location="register.html";
	</script>
	<?php
	}
	}
	}
mysqli_close($con);
?>
