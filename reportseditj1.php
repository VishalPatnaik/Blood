<?php

$con=mysqli_connect("localhost","root","","cse")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysqli_error());

$bgroup=$_POST['bgroup'];
$bunit=$_POST['bunit'];
$bsdes=$_POST['bsdes'];

if(empty($bgroup)or empty($bunit)or empty($bsdes))
{
?>
<script>
alert("ENTER ALL FIELD VALUES");
document.location="reportsedit1.php";
</script>

<?php

} 
else

	{
$q=mysqli_query($con,"update bstock
	set bgroup='$bgroup',bunit='$bunit',bsdes='$bsdes' where bgroup='$bgroup'");
	if($q)
	{
	?>
	<script>
	alert("EDITED BLOOD GROUP");
	document.location="reportsedit1.php";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("EDITION FAILED");
	document.location="reportsedit1.php";
	</script>
	<?php
	}
	}

mysqli_close($con);
?>
