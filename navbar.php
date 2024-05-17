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
		color: black;
	}
	.dropdown-menu
	{
		background-color: silver;
	}
	.dropdown-menu a
	{
		color: black;
	}
	.nav-item
	{
		margin: 0px 6px;
	}
	.navbar-toggler
	{
		border: none;
	}
	.navbar-toggler:focus
	{
		outline: none;
	}
	@media screen and (max-width: 680px) 
	{
		.nav-item
		{
			text-align: center;
		}
	}		
</style>

<nav class="navbar navbar-expand-lg bg-light">
	<img src="websiteimages/logo/mylogo.jfif" height="50px" width="50px" class="mx-4 my-0.5 rounded-circle">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"><img src="websiteimages/logo/lightlogo.png" height="30px" width="30px"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			
			<!-- <li class="nav-item">
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
			</li> -->
			 
			<li class="nav-item">
				<a class="nav-link" href="/index">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/logout">Logout</a>
			</li>
			
			<!-- <li class="nav-item">
				<a class="nav-link" href="/login">Login</a>
			</li> 
			<li class="nav-item">
				<a class="nav-link" href="/register">Register</a>
			</li>-->
			
		</ul>
		<!-- <form class="form-inline my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-sm-0" type="submit">Search</button>
		</form> -->
	</div>
</nav>