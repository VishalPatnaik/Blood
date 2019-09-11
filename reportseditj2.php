<?php

$con=mysqli_connect("localhost","root","","cse")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysqli_error());

$bgroup=$_POST['bgroup'];
$bunit=$_POST['bunit'];
$cname=$_POST['cname'];
$cmobile=$_POST['cmobile'];
$rhos=$_POST['rhos'];
$radd=$_POST['radd'];

if(empty($bgroup)or empty($bunit)or empty($cname)or empty($cmobile)or empty($rhos)or empty($radd))
{
?>
<script>
alert("ENTER ALL FIELD VALUES");
document.location="reportsedit2.php";
</script>

<?php

} 
else

	{
$q=mysqli_query($con,"update bsells
	set bgroup='$bgroup',bunit='$bunit',cname='$cname',cmobile='$cmobile',rhos='$rhos',radd='$radd' where cname='$cname'");
	if($q)
	{
	?>
	<script>
	alert("EDITED BLOOD GROUP");
	document.location="reportsedit2.php";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("EDITION FAILED");
	document.location="reportsedit2.php";
	</script>
	<?php
	}
	}

mysqli_close($con);
?>
