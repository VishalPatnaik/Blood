<?php

$con=mysqli_connect("localhost","root","","cse")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysqli_error());

$bname=$_POST['bname'];
$bdes=$_POST['bdes'];

if(empty($bname)or empty($bdes))
{
?>
<script>
alert("ENTER ALL FIELD VALUES");
document.location="addnew.html";
</script>

<?php

} 
else

	{
$q=mysqli_query($con,"update bgroup
	set bname='$bname',bdes='$bdes' where bname='$bname'");
	if($q)
	{
	?>
	<script>
	alert("EDITED BLOOD GROUP");
	document.location="reports.php";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("EDITION FAILED");
	document.location="reportsedit.php";
	</script>
	<?php
	}
	}

mysqli_close($con);
?>
