<?php

$con=mysqli_connect("localhost","root","","cse")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysqli_error());

$bname=$_POST['bname'];

if(empty($bname))
{
?>
<script>
alert("ENTER ALL FIELD VALUES");
document.location="reportsdel.php";
</script>

<?php

} 
else

	{
$q=mysqli_query($con,"delete from bgroup
	where bname='$bname'");
	if($q)
	{
	?>
	<script>
	alert("DELETED BLOOD GROUP");
	document.location="reports.php";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("DELETION FAILED");
	document.location="reportsdel.php";
	</script>
	<?php
	}
	}

mysqli_close($con);
?>
