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
$q=mysqli_query($con,"insert into bgroup(bname,bdes)
	values('$bname','$bdes')");
	if($q)
	{
	?>
	<script>
	alert("SAVED BLOOD GROUP");
	document.location="addnew.html";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("INSERTION FAILED");
	document.location="addnew.html";
	</script>
	<?php
	}
	}

mysqli_close($con);
?>
