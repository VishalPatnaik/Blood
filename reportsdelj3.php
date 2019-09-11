<?php

$con=mysqli_connect("localhost","root","","cse")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysqli_error());

$dname=$_POST['dname'];

if(empty($dname))
{
?>
<script>
alert("ENTER ALL FIELD VALUES");
document.location="reportsdel3.php";
</script>

<?php

} 
else

	{
$q=mysqli_query($con,"delete from donar
	where dname='$dname'");
	if($q)
	{
	?>
	<script>
	alert("DELETED DONAR");
	document.location="reports.php";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("DELETION FAILED");
	document.location="reportsdel3.php";
	</script>
	<?php
	}
	}

mysqli_close($con);
?>
