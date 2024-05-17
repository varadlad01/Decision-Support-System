<!DOCTYPE html>
<html lang="en">
<head>
	<title>Project</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.navbar-nav a
	{
		color: white;
	}
	.dropdown-menu
	{
		background-color: darkgrey;
	}
	.dropdown-menu a
	{
		color: black;
	}
	.nav-item
	{
		margin: 0px 6px;
	}
	.mainimg
	{
		background:url('websiteimages/predict/clay.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		height: 688px;
	}
	.content
	{
		background:rgba(0,0,0,0.6);
		color: white;
		padding:40px 0px; 
	}
	.myfooter
	{
		color: white;
		padding-top: 20px;
	}
</style>

<body>
	<nav class="navbar navbar-expand-lg bg-dark">
		<img src="websiteimages/logo/mylogo.jfif" height="50px" width="50px" class="mx-4 my-0.5 rounded-circle">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"><img src="websiteimages/logo/menu.jpg" height="30px" width="30px"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Prediction</a>
				</li>
				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Home Made Activities
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">one</a>
						<a class="dropdown-item" href="#">two</a>
						<a class="dropdown-item" href="#">three</a>
						<a class="dropdown-item" href="#">Four</a>
					</div>
				</li>
				
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
	<div class="container-fluid mainimg">
		<div class="row">
			<div class="col-md-12 content">
				<center>
					<h1>Soil Type: Clay Soil</h1>
					<hr style="height: 2px; background: white; border:none;">
					<h4>You can Plant below crops:<br><br>
					<span style="font-size: 30px;">Rice, Lettuce, Chard, Broccoli, Cabbage, Snap Beans</span></h4>
				</center>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="page-footer font-small bg-dark pt-4 myfooter">

		<!-- Footer Links -->
		<div class="container text-center text-md-left">

			<!-- Grid row -->
			<div class="row">

				<!-- Grid column -->
				<div class="col-md-4 mx-auto">

					<!-- Content -->
					<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
					<p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
						consectetur
					adipisicing elit.</p><br>

				</div>
				<!-- Grid column -->

				<hr class="clearfix w-100 d-md-none">

				<!-- Grid column -->
				<div class="col-md-2 mx-auto">

					<!-- Links -->
					<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

					<ul class="list-unstyled">
						<li>
							<a href="#!">Link 1</a>
						</li>
						<li>
							<a href="#!">Link 2</a>
						</li>
						<li>
							<a href="#!">Link 3</a>
						</li>
						<li>
							<a href="#!">Link 4</a>
						</li>
					</ul>

				</div>
				<!-- Grid column -->

				<hr class="clearfix w-100 d-md-none">

				<!-- Grid column -->
				<div class="col-md-2 mx-auto">

					<!-- Links -->
					<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

					<ul class="list-unstyled">
						<li>
							<a href="#!">Link 1</a>
						</li>
						<li>
							<a href="#!">Link 2</a>
						</li>
						<li>
							<a href="#!">Link 3</a>
						</li>
						<li>
							<a href="#!">Link 4</a>
						</li>
					</ul>

				</div>
				<!-- Grid column -->

				<hr class="clearfix w-100 d-md-none">

				<!-- Grid column -->
				<div class="col-md-2 mx-auto">

					<!-- Links -->
					<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

					<ul class="list-unstyled">
						<li>
							<a href="#!">Link 1</a>
						</li>
						<li>
							<a href="#!">Link 2</a>
						</li>
						<li>
							<a href="#!">Link 3</a>
						</li>
						<li>
							<a href="#!">Link 4</a>
						</li>
					</ul>

				</div>
				<!-- Grid column -->

			</div>
			<!-- Grid row -->

		</div>
		<!-- Footer Links -->

		<hr>

		<!-- Call to action -->
		<ul class="list-unstyled list-inline text-center">
			<li class="list-inline-item">
				<h5 class="mb-1">Register for free</h5>
			</li>
			<li class="list-inline-item">
				<a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
			</li>
		</ul>
		<!-- Call to action -->

		<hr>

		<!-- Social buttons -->

		<!-- Social buttons -->

		<!-- Copyright -->
		<div class="text-center">© 2020 Copyright:
			<a href="https://mdbootstrap.com/">Coding Store</a>
		</div><br>
		<!-- Copyright -->

	</footer>
</body>
</html>