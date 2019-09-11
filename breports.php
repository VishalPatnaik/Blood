<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="generator" content="WordPress 4.5.8">
		<title>Blood Bank</title>
		<link rel="shortcut icon" href="images/icon.jpg">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/donors_res.css">
		<link rel="stylesheet" type="text/css" href="css/about.css">
	</head>
	<body>
		
		<div id="site-wrap">
			<div class="header">
				<header class="container" id="page-header">
					<div class="row">
						<nav class="nav-bar navbar">
							<div class="container-fluid">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>                        
									</button>
									<a class="navbar-brand" href="#"><img src="images/logo.jpg" alt="logo" /></a>
								</div>
								<div class="collapse navbar-collapse" id="myNavbar">
									<ul class="nav navbar-nav navbar-right">
										<li><a href="home.html">HOME</a></li>
										<li><a href="About.html"> ABOUT US</a></li>
										<li class="Nav"><a href="breports.php">REPORTS</a></li>
										<li><a href="user.php">MY ACCOUNT</a></li>
										<li><a href="Logout.php">LOGOUT</a></li>
									</ul>	
								</div>
							</div>
						</nav>
					</div>
				</header>
			</div>
			<div class="featured-content">
				<div class="substrate">
					<img src="http://kennedyenglishacademy.com/wp-content/themes/kennedyenglish/images/bgs/site_bg.jpg" class="fullwidth" alt="">     
				</div>
				<div class="row">
					<div class="page-title">
						<h1 class="nomargin"> All Blood Reports</h1>
					</div>
				</div>
			</div>
			<div class="row rownav">
				<div  class="col-md-12 col">
					<div class="col-md-4 col3">
						<ul class="nav nav-tabs tabs-left">
							<li class="active"><a href="#group" data-toggle="tab">Blood Group</a></li>
							<li><a href="#stock" data-toggle="tab">Blood Stock</a></li>
							<li><a href="#sells" data-toggle="tab">Blood Sells</a></li>
							<li><a href="#donar" data-toggle="tab">Donars</a></li>
						</ul><br><br><br>
						<img src="images/side1.jpg" style="border:none;left:20px"><br><br><br><br>
						<img src="images/side2.jpg" style="border:none;left:20px">
					</div>
					<div class="col-md-8">
					<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="group"><h1>Blood Group</h1>
								
								<?php
									$con=mysqli_connect("localhost","root","","cse")or die(mysqli_error());
									$c=mysqli_select_db($con,"cse")or die(mysql_error());
									$result=mysqli_query($con,"select * from bgroup");
									echo "<center><u><h1>List of Blood Group</h1></u></center>";
									echo "<center>
									<table align=center height=70 width=700 border=3px>
									<tr><br>
									<td><h4>&nbsp&nbspNAME(Blood Group)</h4></td>
									<td><h4>&nbsp&nbspDescription</h4></td>
									</tr>";
									while($row=mysqli_fetch_array($result))
									{
									echo"<tr>";
									echo"<td>&nbsp&nbsp".$row['bname']."</td>";
									echo"<td>&nbsp&nbsp".$row['bdes']."</td>";
									echo"</tr>";
									}

									echo"</table></center>";
									mysqli_close($con);
								?>
								
								
								
								
							</div>
							<div class="tab-pane" id="stock"><h1>Blood Stock</h1>
								
								<?php
									$con=mysqli_connect("localhost","root","","cse")or die(mysqli_error());
									$c=mysqli_select_db($con,"cse")or die(mysql_error());
									$result=mysqli_query($con,"select * from bstock order by bsdes");
									echo "<center><u><h1>List of Blood Stock</h1></u></center>";
									echo "<center>
									<table align=center height=70 width=700 border=3px>
									<tr><br>
									<td><h4>&nbsp&nbspBLOOD GROUP</h4></td>
									<td><h4>&nbsp&nbspNO OF UNITS</h4></td>
									<td><h4>&nbsp&nbspTITLE</h4></td>
									</tr>";
									while($row=mysqli_fetch_array($result))
									{
									echo"<tr>";
									echo"<td>&nbsp&nbsp".$row['bgroup']."</td>";
									echo"<td>&nbsp&nbsp".$row['bunit']."</td>";
									echo"<td>&nbsp&nbsp".$row['bsdes']."</td>";
									echo"</tr>";
									}

									echo"</table></center>";
									mysqli_close($con);
								?>
								
								
								
								
							</div>
							<div class="tab-pane" id="sells"><h1>Blood Sells</h1>		
								
								<?php
									$con=mysqli_connect("localhost","root","","cse")or die(mysqli_error());
									$c=mysqli_select_db($con,"cse")or die(mysql_error());
									$result=mysqli_query($con,"select * from bsells order by radd");
									echo "<center><u><h1>List of Blood Sells</h1></u></center>";
									echo "<center>
									<table align=center height=70 width=700 border=3px>
									<tr ><br>
									<td ><h5>&nbsp&nbspBLOOD GROUP</h5></td>
									<td><h5>&nbsp&nbspNO OF UNITS</h5></td>
									<td><h5>&nbsp&nbspCUSTOMER NAME</h5></td>
									<td><h5>&nbsp&nbspMOBILE</h5></td>
									<td><h5>&nbsp&nbspREFER HOSPITAL</h5></td>
									<td><h5>&nbsp&nbspADDRESS</h5></td>
									</tr>";
									while($row=mysqli_fetch_array($result))
									{
									echo"<tr>";
									echo"<td>&nbsp&nbsp".$row['bgroup']."</td>";
									echo"<td>&nbsp&nbsp".$row['bunit']."</td>";
									echo"<td>&nbsp&nbsp".$row['cname']."</td>";
									echo"<td>&nbsp&nbsp".$row['cmobile']."</td>";
									echo"<td>&nbsp&nbsp".$row['rhos']."</td>";
									echo"<td>&nbsp&nbsp".$row['radd']."</td>";
									echo"</tr>";
									}

									echo"</table></center>";
									mysqli_close($con);
								?>
							</div>
							<div class="tab-pane" id="donar"><h1>Donars</h1>		
								
								<?php
									$con=mysqli_connect("localhost","root","","cse")or die(mysqli_error());
									$c=mysqli_select_db($con,"cse")or die(mysql_error());
									$result=mysqli_query($con,"select image,dname,dbg,demail,dmobile,dfaddr from donar");
									echo "<center><u><h1>List of Donars Report</h1></u></center>";
									echo "<center>
									<table align=center height=70 width=700 border=3px>
									<tr ><br>
									<td ><h5>&nbsp&nbspPhoto</h5></td>
									<td><h5>&nbsp&nbspName</h5></td>
									<td><h5>&nbsp&nbspBlood Group</h5></td>
									<td><h5>&nbsp&nbspEmail</h5></td>
									<td><h5>&nbsp&nbspMobile</h5></td>
									<td><h5>&nbsp&nbspADDRESS</h5></td>
									</tr>";
									while($row=mysqli_fetch_array($result))
									{
									echo"<tr>";
									echo"<td>";
									echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="100" width="100"/>';
									echo"</td>";
									echo"<td>&nbsp&nbsp".$row['dname']."</td>";
									echo"<td>&nbsp&nbsp".$row['dbg']."</td>";
									echo"<td>&nbsp&nbsp".$row['demail']."</td>";
									echo"<td>&nbsp&nbsp".$row['dmobile']."</td>";
									echo"<td>&nbsp&nbsp".$row['dfaddr']."</td>";
									echo"</tr>";
									}

									echo"</table></center>";
									mysqli_close($con);
								?>
							</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>0
				</div>
			</div>
			<!--footer -->
			<div class="footer-wrap">
				<footer class="site-footer">
					<div class="row">
						<div class="copyright navbar-left">
							Blood Bank Management System               
							<div>Developed by: <a href="" target="_blank"> CSE-A(43,48,56,198,64)</a></div>           
						</div>
					</div>
				</footer>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>