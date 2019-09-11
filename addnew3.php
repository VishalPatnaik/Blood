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
document.location="addnew.html";
</script>

<?php

} 
else

	{
$q=mysqli_query($con,"insert into bsells(bgroup,bunit,cname,cmobile,rhos,radd)
	values('$bgroup','$bunit','$cname','$cmobile','$rhos','$radd')");
	if($q)
	{
	?>
	<script>
	alert("SAVED BLOOD SELLS");
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
