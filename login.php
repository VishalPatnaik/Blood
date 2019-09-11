<?php
session_start();

$con=mysqli_connect("localhost","root","","cse")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysqli_error());
$uname=$_POST['uname']; 
$upass=$_POST['upass'];
$result=mysqli_query($con,"SELECT uname,upass FROM adminreg 
WHERE uname='$uname' && upass='$upass'");

if(mysqli_fetch_array($result))
  { 
 $_SESSION['uname']=$_POST['uname'];

 header('Location: admin.php');
  }
else
  {
 ?>
  <script>
alert("ENTER CORRECTLY");
document.location="Login.html";
</script>
  <?php
 }

 mysqli_close($con);

?>
