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
document.location="addnew.html";
</script>

<?php

} 
else

	{
$q=mysqli_query($con,"insert into bstock(bgroup,bunit,bsdes)
	values('$bgroup','$bunit','$bsdes')");
	if($q)
	{
	?>
	<script>
	alert("SAVED BLOOD STOCK");
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
