<?php

$con=mysqli_connect("localhost","root","","cse")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysqli_error());

$dname=$_POST['dname'];
$demail=$_POST['demail'];
$dmobile=$_POST['dmobile'];

$target_dir = "donar/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["Upload Photo"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


$dfaddr=$_POST['dfaddr'];
$dbg=$_POST['dbg'];

if(empty($dname)or empty($demail)or empty($dmobile)or empty($target_file)or empty($dfaddr)or empty($dbg))
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
$q=mysqli_query($con,"insert into donar(dname,demail,dmobile,image,dfaddr,dbg)
	values('$dname','$demail','$dmobile','$target_file','$dfaddr','$dbg')");
	if($q)
	{
	?>
	<script>
	alert("SAVED DONAR");
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
