<?php

$con=mysqli_connect("localhost","root","","cse")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysqli_error());

$bunit=$_POST['bunit'];

if(empty($bunit))
{
?>
<script>
alert("ENTER ALL FIELD VALUES");
document.location="reportsdel1.php";
</script>

<?php

} 
else

	{
$q=mysqli_query($con,"delete from bstock
	where bunit='$bunit'");
	if($q)
	{
	?>
	<script>
	alert("DELETED BLOOD STOCK");
	document.location="reports.php";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("DELETION FAILED");
	document.location="reportsdel1.php";
	</script>
	<?php
	}
	}

mysqli_close($con);
?>
