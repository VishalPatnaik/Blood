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
				width: 20%;
			}
			ul.b {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: #fff;
			}

			li.b {
				float: left;
			}
			li.b a:hover{
				background-color:#6F6F6F;
			}

			li.b a {
				display: block;
				color: darkred;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}

			.active {
				background-color: #fff;
			}

			div.div3
			{0
				border=none;
			}
			hr {
				color: #f00;
				background-color: #f00;
				height: 5px;
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
										<li><a href="addnew.html">ADD NEW</a></li>
										<li class="Nav"><a href="reports.php">REPORTS</a></li>
										<li><a href="admin.html">MY ACCOUNT</a></li>
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
							<li><a href="#group" data-toggle="tab">Blood Group</a></li>
							<li><a href="#stock" data-toggle="tab">Blood Stock</a></li>
							<li><a href="#sells" data-toggle="tab">Blood Sells</a></li>
							<li class="active"><a href="#donar" data-toggle="tab">Donars</a></li>
						</ul><br><br><br>
						<img src="images/side1.jpg" style="border:none;left:20px"><br><br><br><br>
						<img src="images/side2.jpg" style="border:none;left:20px">
					</div>
					<div class="col-md-8">
					<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane" id="group"><h1>Blood Group</h1>
								<div class="div3">
									<ul class="b">
										<li class="b" ><a href="reports.php">List</a></li>
										<li class="b"><a class="active" href="reportsedit.php">Edit</a></li>
										<li class="b"><a href="reportsdel.php">Delete</a></li>
									</ul><hr>
								</div>
								<form action="reportseditj.php" method="post" style="float: right-side;right:100px;">
									<div class="container">
										<label><b>Name(Blood group)</b></label></br>
										<input type="text" placeholder="" name="bname" required><br>
                                        
										<label><b>Description</b></label></br>
										<input type="text" style="height:100px;" name="bdes" required><br>
        
										<button type="submit">Edit</button>
											
									</div>
								</form>
								
								
								
								
							</div>
							<div class="tab-pane " id="stock"><h1>Blood Stock</h1>
								<div class="div3">
									<ul class="b">
										<li class="b" ><a href="reports.php">List</a></li>
										<li class="b"><a class="active" href="reportsedit1.php">Edit</a></li>
										<li class="b"><a href="reportsdel1.php">Delete</a></li>
										
									</ul><hr>
								</div>
								<form action="reportseditj1.php" method="post" style="float: right-side;right:100px;">
									<div class="container">
										<label><b>Blood Group</b></label></br>
										<input type="text" name="bgroup" required><br>
										
                                        <label><b>No of Units</b></label></br>
										<input type="text" name="bunit" required><br>
							
										<label><b>Description</b></label></br>
										<input type="text" name="bsdes" required><br>
										
										
										
										<button type="submit">Edit</button>
    
									</div>
								</form>
							</div>
							<div class="tab-pane" id="sells"><h1>Blood Sells</h1>
								<div class="div3">
									<ul class="b">
										<li class="b" ><a href="reports.php">List</a></li>
										<li class="b"><a class="active" href="reportsedit2.php">Edit</a></li>
										<li class="b" ><a href="reportsdel2.php">Delete</a></li>
									</ul><hr>
								</div>
								<form action="reportseditj2.php" method="post" style="float: right-side;right:100px;">
									<div class="container">
										<label><b>Blood Group</b></label></br>
										<input type="text" name="bgroup" required><br>
										
                                        <label><b>No of Units</b></label></br>
										<input type="text" name="bunit" required><br>
							
										<label><b>Customer Name</b></label></br>
										<input type="text" name="cname" required><br>
										
										<label><b>Mobile</b></label></br>
										<input type="text" name="cmobile" required><br>
										
                                        <label><b>Refer Hospital</b></label></br>
										<input type="text" name="rhos" required><br>
							
										<label><b>Address</b></label></br>
										<input type="text" name="radd" required><br>
									
                                        
										<button type="submit">Edit</button>
    
									</div>
								</form>
							</div>
							<div class="tab-pane active" id="donars"><h1>Donars</h1>
								<div class="div3">
									<ul class="b">
										<li class="b" ><a href="reports.php">List</a></li>
										<li class="b"><a class="active" href="reportsedit3.php">Edit</a></li>
										<li class="b" ><a href="reportsdel3.php">Delete</a></li>
									</ul><hr>
								</div>
								<form action="reportseditj3.php" method="post" style="float: right-side;right:100px;">
									<div class="container">
										
										<label><b>Name</b></label></br>
										<input type="text" name="dname" required><br>
                                        
										<label><b>Email</b></label></br>
										<input type="email" name="demail" required><br>
										
										<label><b>Mobile</b></label></br>
										<input type="text" name="dmobile" required><br>
										
										<label for="file"><b>Photo</b></label></br>
										<input type="file" name="image"><br> 
										<input type="submit" name="upload" value="Upload Photo" style="background-color:darkred;color:white;"/></br></br>
										
										<label><b>Full Address</b></label></br>
										<input type="text" style="height:100px;" name="dfaddr" required><br>
										
										<label><b>Blood Group</b></label></br>
										<input type="text" name="dbg" required><br>
										
										<button type="submit">Edit</button>
    
									</div>
    
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