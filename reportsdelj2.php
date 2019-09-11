<?php

$con=mysqli_connect("localhost","root","","cse")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysqli_error());

$cname=$_POST['cname'];

if(empty($cname))
{
?>
<script>
alert("ENTER ALL FIELD VALUES");
document.location="reportsdel2.php";
</script>

<?php

} 
else

	{
$q=mysqli_query($con,"delete from bsells
	where cname='$cname'");
	if($q)
	{
	?>
	<script>
	alert("DELETED BLOOD SELLS");
	document.location="reports.php";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("DELETION FAILED");
	document.location="reportsdel2.php";
	</script>
	<?php
	}
	}

mysqli_close($con);
?>
