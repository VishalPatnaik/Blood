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
		<style>
			input[type=text], input[type=password],input[type=email] {
					width: 60%;
					padding: 12px 20px;
					margin: 8px 0;
					display: inline-block;
					border: 1px solid #ccc;
					box-sizing: border-box;
				}
			button {
				background-color: #BD0710;
				color: white;
				padding: 14px 20px;
				margin: 8px 0;
				width: 30%;
			}
		</style>
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
										<li><a href="breports.php">BLOOD REPORTS</a></li>
										<li class="Nav"><a href="user.php">DONAR ACCOUNT</a></li>
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
						<h1 class="nomargin"> USER</h1>
					</div>
				</div>
			</div>
			<div class="row rownav">
				<div  class="col-md-12 col">
					<div class="col-md-4 col3">
						<ul class="nav nav-tabs tabs-left">
							<li class="active"><a href="#view" data-toggle="tab">View</a></li>
							<li><a href="#edit" data-toggle="tab">Edit</a></li>
						
						</ul><br><br><br>
						<img src="images/side1.jpg" style="border:none;left:20px"><br><br><br><br>
						<img src="images/side2.jpg" style="border:none;left:20px">
					</div>
					<div class="col-md-8">
					<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="view"><h1>View</h1>		
								<?php
									$con=mysqli_connect("localhost","root","","cse")or die(mysqli_error());
									$c=mysqli_select_db($con,"cse")or die(mysql_error());
									$result=mysqli_query($con,"select ufullname,uemail,uno,uadd,uadhaar,ustate,ucountry from reg");
									echo "<center><u><h1>List of Admins</h1></u></center>";
									echo "<center>
									<table align=center height=70 width=700 border=3px>
									<tr><br>
									<td><h5><b>&nbsp&nbspNAME</b></h5></td>
									<td><h5><b>&nbsp&nbspBLOODGROUP</b></h5></td>
									<td><h5><b>&nbsp&nbspCONTACT</b></h5></td>
									<td><h5><b>&nbsp&nbspADDRESS</b></h5></td>
									<td><h5><b>&nbsp&nbspADHAAR NO</b></h5></td>
									<td><h5><b>&nbsp&nbspSTATE</b></h5></td>
									<td><h5><b>&nbsp&nbspCOUNTRY</b></h5></td>
									</tr>";
									while($row=mysqli_fetch_array($result))
									{
									echo"<tr>";
									echo"<td>&nbsp&nbsp".$row['ufullname']."</td>";
									echo"<td>&nbsp&nbsp".$row['uemail']."</td>";
									echo"<td>&nbsp&nbsp".$row['uno']."</td>";
									echo"<td>&nbsp&nbsp".$row['uadd']."</td>";
									echo"<td>&nbsp&nbsp".$row['uadhaar']."</td>";
									echo"<td>&nbsp&nbsp".$row['ustate']."</td>";
									echo"<td>&nbsp&nbsp".$row['ucountry']."</td>";
									echo"</tr>";
									}

									echo"</table></center>";
									mysqli_close($con);
								?>
							</div>
							<div class="tab-pane" id="edit"><h1>Edit</h1>		
								<form action="usereditj.php" method="post" style="float: right-side;right:100px;">
									<div class="container">
										<label><b>Username</b></label></br>
										<input type="text" placeholder="Enter Username..." name="uname" required><br>
										
                                        <label><b>E-mail Address</b></label></br>
										<input type="email" placeholder="Enter valid Email Address..." name="uemail" required><br>
							
										<label><b>Name</b></label></br>
										<input type="text" placeholder="Enter Your Full Name..." name="ufullname" required><br>
										
										<label><b>Blood Group</b></label></br>
										<input type="text" placeholder="Enter Your blood group..." name="ubg" required><br>
										
										<label><b>Contact Number</b></label></br>
										<input type="text" placeholder="Enter Your Mobile Number..." name="uno" required><br>
										
										<label><b>Address</b></label></br>
										<input type="text" placeholder="Enter Your Address..." style="height:100px;" name="uadd" required><br>
										
										<label><b>Adhaar Number </b></label></br>
										<input type="text" placeholder="Enter Your adhaar no..." name="uadhaar" required><br>
										
										<label><b>State</b></label></br>
										<input type="text" placeholder="Enter Your State..." name="ustate" required><br>
										
										<label><b>Country</b></label></br>
										<input type="text" placeholder="Enter Your Country..." name="ucontry" required><br>
										
										<label><b>Password</b></label></br>
										<input type="password" placeholder="Enter Password..." name="upass" required><br>
										
                                        <label><b>Conform Password</b></label></br>
										<input type="password" placeholder="Enter Password..." name="ucpass" required><br>
										
										<button type="submit">Edit</button>
    
									</div>
								</form>
							</div>
							
						</div>
					</div>
					<div class="clearfix"></div>
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