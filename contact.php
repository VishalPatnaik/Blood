<?php

$con=mysqli_connect("localhost","root","","cse")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysqli_error());

$yourname=$_POST['yourname'];
$youremail=$_POST['youremail'];
$contact=$_POST['contact'];
$subject=$_POST['subject'];
$query=$_POST['query'];

if(empty($yourname)or empty($youremail)or empty($contact)or  empty($subject)or empty($query))
{
?>
<script>
alert("ENTER ALL FIELD VALUES");
document.location="Contact.html";
</script>

<?php

} 

else
{
$q=mysqli_query($con,"insert into contact(yourname,youremail,contact,subject,query)
	values('$yourname','$youremail','$contact','$subject','$query')");
	if($q)
	{
	?>
	<script>
	alert("MESSAGE SEND SUCCESSFUL");
	document.location="Contact.html";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("INSERTION FAILED");
	document.location="Contact.html";
	</script>
	<?php
	}
}
	
mysqli_close($con);
?>
