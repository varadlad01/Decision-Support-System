
<?php include "navbar.php";?>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
	.container,.container-fluid
	{
		overflow: hidden;
	}
	.mainimg
	{
		background:url('websiteimages/background/bg4.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		height: 630px;
	}
	.secondimg
	{
		background: url('websiteimages/background/bg2.jpg');
		background-attachment: fixed;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		overflow: hidden;
		height: auto;
		vertical-align: middle;
		padding: 50px 0px 100px 0px;
	}
	
	.title
	{
		color: black ;
		font-size: 50px;
	}
	.title p
	{
		background-color: rgba(255,255,255,0.3);
		width: 70%;
		margin-top:10px;
		border-radius: 15px;
		font-weight: bold;
	}
	.soil
	{
		padding: 0;
	}
	.soil img
	{
		height: 150px;
		width: 95%;

		background-image: cover;
	}
	.soil p
	{
		font-weight: bold;
		font-size: 18px;	
	}
	.mission
	{
		color: white;
		background: linear-gradient(to left, rgba(0,0,0,0.9),rgba(0,0,0, 0.6));
		padding: 10px 20px;
		margin-top: 40px;
		width: 60%;
	}
	.nav-pills
	{
		padding-left: 20px;
	}
	.nav-pills a
	{
		color: black;
		text-decoration: none;
		font-weight: bold;
	}
	.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
		color: #fff;
		background-color: #5cb85c;
	}
	.homemade img
	{
		height: 500px;
		background-image: cover;
	}
	.ruler img
	{
		height: 78px;
		background-image: cover;
	}
	.phtest img
	{
		height: 350px;
		background-image: cover;
		
	}
	.earthworm img
	{
		height: 290px;
		background-image: cover;
	}
	.stability img
	{
		height: 380px;
		background-image: cover;
	}
	.compaction img
	{
		height: 250px;
		background-image: cover;
	}
	.myfooter
	{
		color: black;
		padding-top: 20px;
	}
	.area-homemade p
	{
		padding-top: 12px;
		line-height: 30px;
		text-align: justify;
	}
	.area-homemade b
	{
		text-align: justify;
	}
	.step
	{
		font-weight: bold;
		font-size: 18px;
	}
	.wheather
	{
		text-align: center;
		background-color: rgba(255,255,255,0.4);
		border-radius: 10px;
	}
	@media screen and (max-width: 680px) 
	{
		.mainimg
		{
			background:url('websiteimages/background/bg4.jpg');
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			overflow: hidden;
			height: 420px;
			vertical-align: middle;
			padding: 0;
		}
		.title
		{
			color: black;
			font-size: 30px;
		}
		.title p
		{
			background-color: rgba(255,255,255,0.3);
			width: 90%;
			margin-top:5px;
			border-radius: 15px;
			font-weight: bold;
		}
		
		.card
		{
			width: 60%;
			margin-left: 92px;
			margin-bottom: 20px;
			border:1px solid black;
		}
		.card img
		{
			padding:30px;
		}
		.secondimg
		{
			background: url('websiteimages/background/bg2.jpg');
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			overflow: hidden;
			height: auto;
			vertical-align: middle;
			padding: 0;
		}
		.mydiv
		{
			width: 80%;
		}
		.mission
		{
			color: white;
			background: linear-gradient(to left, rgba(0,0,0,0.9),rgba(0,0,0, 0.6));
			width: 80%;
			margin-top: 40px;

		}
		.mypills 
		{
			padding:0px 100px; 
		}
		.mypills a 
		{
			font-size: 16px;
			font-weight: bold; 
		}
		.wheather
		{
			text-align: center;
			background-color: rgba(255,255,255,0.5);
			border-radius: 10px;
			width: 30%;
			margin-left: auto;
			margin-right: 20px;
		}
		.wheather h1
		{
			font-size: 22px;
		}
		.myfooter
		{
			color: black;
			padding-top: 20px;
		}
	}
</style>
<body>
	
	<div class="container-fluid mainimg"> 
		<div class="row title">
			<div class="col-md-12">
				<center><p>Decision Support System in Crop Prediction</p></center>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-9"></div>
			<div class="col-md-2 wheather">
				<div class="row">
					<div class="col-md-12"><h1 id="degree"></h1></div>
					<div class="col-md-12"><h1 id="temperature"></h1></div>
					<!-- <div class="col-md-12"><h2 id="description"></h2></div> -->
					<div class="col-md-12"><h1 id="location"></h1></div>
				</div>
			</div>
			<div class="col-md-1"></div>
			
		</div>
	</div>
	<br><br>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-6 soil">
						<center>
							<img src="websiteimages/soil/blacksoil.jpg"><br>
							<p>Black Soil</p>
						</center>
					</div>
					<div class="col-md-3 col-sm-6 col-6 soil">
						<center>
							<img src="websiteimages/soil/redsoil.jfif"><br>
							<p>Red Soil</p>
						</center>
					</div>
					<div class="col-md-3 col-sm-6 col-6 soil">
						<center>
							<img src="websiteimages/soil/claysoil.jpg"><br>
							<p>Clay Soil</p>
						</center>
					</div>
					<div class="col-md-3 col-sm-6 col-6 soil">
						<center>
							<img src="websiteimages/soil/aluvialsoil.jpg"><br>
							<p>Alluvial Soil</p>
						</center>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 col-6 soil">
						<center>
							<img src="websiteimages/soil/laterite.jpg"><br>
							<p>Laterite Soil</p>
						</center>
					</div>
					<div class="col-md-3 col-sm-6 col-6 soil">
						<center>
							<img src="websiteimages/soil/desert.jpg"><br>
							<p>Desert Soil</p>
						</center>
					</div>
					<div class="col-md-3 col-sm-6 col-6 soil">
						<center>
							<img src="websiteimages/soil/mountain.jpg"><br>
							<p>Mountain Soil</p>
						</center>
					</div>
					<div class="col-md-3 col-sm-6 col-6 soil">
						<center>
							<img src="websiteimages/soil/saline.jpg"><br>
							<p>Saline Soil</p>
						</center>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						
						<center>
							<h3><label>Insert Your Soil Image Here</label></h3>
							<form action="/predict" method="post" enctype="multipart/form-data" onsubmit="showloading()">
							<input type="file" name="image" class="form-control" style="width: 70%;"><br>
							<input type="submit" name="submit" value="Predict" class="btn btn-success" >
							</form>
						</center>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<p style="text-align: justify;">Esow Alben. The 18 year old Track cyclist from the picturesque Andaman and Nicobar Islands, has captured the imagination of the entire nation. The World number one junior sprinter not long ago and brought smile on our faces. Now, he is ready to take another step his long shot dream which is Olympics .</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<!-- <div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-6 soil">
						<center>
							<img src="websiteimages/soil/blacksoil.jpg"><br>
							<p>Black Soil</p>
						</center>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 soil">
						<center>
							<img src="websiteimages/soil/redsoil.jfif"><br>
							<p>Red Soil</p>
						</center>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 soil">
						<center>
							<img src="websiteimages/soil/claysoil.jpg"><br>
							<p>Clay Soil</p>
						</center>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 soil">
						<center>
							<img src="websiteimages/soil/aluvialsoil.jpg"><br>
							<p>Aluvial Soil</p>
						</center>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-6 soil">
						<center>
							<img src="websiteimages/soil/blacksoil.jpg"><br>
							<p>Black Soil</p>
						</center>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 soil">
						<center>
							<img src="websiteimages/soil/redsoil.jfif"><br>
							<p>Red Soil</p>
						</center>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 soil">
						<center>
							<img src="websiteimages/soil/claysoil.jpg"><br>
							<p>Clay Soil</p>
						</center>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 soil">
						<center>
							<img src="websiteimages/soil/aluvialsoil.jpg"><br>
							<p>Aluvial Soil</p>
						</center>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<p style="text-align: justify;">Esow Alben. The 18 year old Track cyclist from the picturesque Andaman and Nicobar Islands, has captured the imagination of the entire nation. The World number one junior sprinter not long ago and brought smile on our faces. Now, he is ready to take another step his long shot dream which is Olympics .</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<br>
						<center>
							<h3><label>Insert Your Soil Image Here</label></h3><br>
							<form action="/predict" method="post" enctype="multipart/form-data" onsubmit="showloading()">
							<input type="file" name="image" class="form-control" style="width: 70%;"><br>
							<input type="submit" name="submit" value="Predict" class="btn btn-success" >
							</form>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<br><br>
	<div class="container-fluid secondimg"> 
		
		<center>
			<div class="row">
				<hr style="height: 3px; color: white;">
				<div class="col-md-1"></div>
				<div class="col-md-5">
					<div class="col-md-12 mission">
						<center><h3>Mission</h3></center><br>
						<p style="color: white; text-align: justify;"> 
						Esow Alben. The 18 year old Track cyclist from the picturesque Andaman and Nicobar Islands, has captured the imagination of the entire nation. The World number one junior sprinter not long ago and brought smile on our faces. Now, he is ready to take another step his long shot dream which is Olympics .</p>
					</div>
				</div>
				<div class="col-md-5">
					<div class="col-md-12 mission">
						<center><h3>Vission</h3></center><br>
						<p style="color: white; text-align: justify;"> 
						Esow Alben. The 18 year old Track cyclist from the picturesque Andaman and Nicobar Islands, has captured the imagination of the entire nation. The World number one junior sprinter not long ago and brought smile on our faces. Now, he is ready to take another step his long shot dream which is Olympics .</p>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		</center>
		<br>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center>
					<br><h1>Homemade Methods to Identify Soil Types</h1>
					<br>
					<ul class="nav nav-pills mypills">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="pill" href="#home">THE JAR SOIL TEST</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" data-toggle="pill" href="#menu1">THE PH TEST</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" data-toggle="pill" href="#menu2">THE EARTHWORM TEST</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" data-toggle="pill" href="#menu3">SOIL STABILITY TEST</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" data-toggle="pill" href="#menu4">SOIL COMPACTION TEST</a>
						</li>
					</ul>
				</center>
				<hr style="height: 2px; border:none; background-color: black;">
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane container active" id="home">
						<div class="row">
							<div class="col-md-12">
								<br>
								<center><h5>1. THE PEANUT BUTTER JAR SOIL TEST FOR SAND, SILT, AND CLAY</h5></center>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<br>
								<div class="row">
									<div class="col-md-12 homemade">
										<center>
											<img src="websiteimages/homemade/jar.jpg">
										</center>
									</div>
								</div>
								<br><br>
								<div class="row">
									<div class="col-md-12 ruler">
										<img src="websiteimages/homemade/ruler.png">
									</div>
								</div>
							</div>
							<div class="col-md-7 area-homemade">
								<br>
								<p>
									<span class="step">Step 1:</span> Take a straight-sided jar such as a peanut butter or mason jar with a lid.<br>

									<span class="step">Step 2:</span> Take a ruler for measurement purpose.<br>

									<span class="step">Step 3:</span> Dig down to root level—about 6 inches—in the area that you want to test and remove enough soil to fill the the jar to between one-third and one-half full.<br>

									<span class="step">Step 4:</span> Fill the jar to the shoulder with water, then set the jar aside to let the soil soak up the water.<br>

									<span class="step">Step 5:</span> Put the lid on the jar and shake it hard for about 3 minutes.<br>

									<span class="step">Step 6:</span> Set the jar down and look at your watch. In 1 minute, measure (with the ruler) the amount of sediment that has collected at the bottom. This is the sand in your soil.<br>

									<span class="step">Step 7:</span> Wait 4 minutes more. Measure the sediment again: The difference between the two numbers will be the amount of silt in your soil.<br>
							
									<span class="step">Step 8:</span> Take a third measurement in 24 hours. The difference between the second and third number will be the amount of clay in your soil. <br>

									<span class="step">Step 9:</span> Calculate the percentages of sand, silt, and clay, which should add up to 100 percent.<br>
									</p>
									<h5>Conclude:</h5> 
									
									<b>Healthy soil typically consists of 20 % clay, 40 % silt and 40 % sand.</b><br>
									<p>
									1. If you have sandy soil, add humus or aged manure, peat moss, or sawdust with some extra nitrogen. Heavy, clay-rich soil can also be added to improve the soil.<br>
									2. If you have silty soil, add coarse sand (not beach sand) or gravel and compost or well-rotted horse manure mixed with fresh straw.<br>
									3. If you have clay soil, add coarse sand (not beach sand), compost, and peat moss.
									</p>
							</div>
						</div>
					</div>
					
					<div class="tab-pane container fade" id="menu1">
						<div class="row">
							<div class="col-md-12">
								<br>
								<center><h5>2.THE PH TEST FOR SOIL ACIDITY OR ALKALINITY</h5></center>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<br><br>
								<div class="row">
									<div class="col-md-12 phtest">
										<center>
											<img src="websiteimages/homemade/phtest.jpg">
										</center>
									</div>
								</div>
							</div>
							<div class="col-md-7 area-homemade">
								<br>
								<p>
									<span class="step">Step 1:</span> Take Farm soil, Vinegar, Baking Soda, Bowl, distilled Water.<br>

									<span class="step">Step 2:</span> Place 2 tablespoons of soil in a bowl and add ½ cup vinegar. If the mixture fizzes, you have alkaline soil.<br>

									<span class="step">Step 3:</span> Place 2 tablespoons of soil in a bowl and moisten it with distilled water. Add ½ cup baking soda. If the mixture fizzes, you have acidic soil.<br>
									</p>
									<h5>Conclude:</h5> 
									
									<p>
									1. If it does not react to either test, the soil has a neutral pH.<br>
									2. A very high or very low soil pH may result in plant nutrient deficiency or toxicity.<br>
									3. A pH value of 7 is neutral, microbial activity is greatest and plant roots absorb/access nutrients best when the pH is in the 5.5 to 7 range. 
									</p>
									<b>Once you figure out your soil pH, you can change or adjust it. Acidic (sour) soil is counteracted by applying finely ground limestone, and alkaline (sweet) soil is treated with ground sulfur.</b><br>
							</div>
						</div><br>
					</div>
					
					<div class="tab-pane container fade" id="menu2">
						<div class="row">
							<div class="col-md-12">
								<br>
								<center><h5>3. THE EARTHWORM TEST TO GAUGE ORGANIC MATTER
								</h5></center>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<br>
								<div class="row">
									<div class="col-md-12 earthworm">
										<center>
											<img src="websiteimages/homemade/earthworm.jpg">
										</center>
									</div>
								</div>
							</div>
							<div class="col-md-7 area-homemade">
								<br>
								<b>The best time to check for earthworms is in the spring when the soil’s temperature has reached 50°F and its surface is moist.</b>
								<p>
									<span class="step">Step 1:</span> Take a shovel and dig up about 1 cubic foot of soil.<br>

									<span class="step">Step 2:</span> Put the soil on a piece of cardboard, break it apart, and look for earthworms.<br>

									</p>
									<h5>Conclude:</h5> 
									
									<p>
									1. If your soil is healthy, you’ll find at least 10 earthworms.<br>
									2. If your soil has fewer than 10 worms, add more organic matter—compost, aged manure, leaf mold. Organic matter improves structure, slowly releases nutrients, and increases beneficial microbial activity.
									</p><br>
							</div>
						</div>
					</div>
					
					<div class="tab-pane container fade" id="menu3">
						<div class="row">
							<div class="col-md-12">
								<br>
								<center><h5>4. SOIL AGGREGATE STABILITY TEST
								</h5></center>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<br>
								<div class="row">
									<div class="col-md-12 stability">
										<center>
											<img src="websiteimages/homemade/stability.jpg">
										</center>
									</div>
								</div>
							</div>
							<div class="col-md-7 area-homemade">
								
								<p>
									<span class="step">Step 1:</span> Take a transparent container atleast 5 inch tall.<br>

									<span class="step">Step 2:</span> Take a mesh with medium size hole in it.<br>

									<span class="step">Step 3:</span> Take a piece of soil about a size of a golf ball and dry it till 48 hours.<br>

									<span class="step">Step 4:</span> Fill the container with water, put the mesh in it at the top of container.<br>

									<span class="step">Step 5:</span> Put the piece of soil on mesh and sink them into water. <br>

									</p>
									<h5>Conclude:</h5> 
									
									<p>
									1. If soil crumbles in less than 1 minute then that soil have poor stability.<br>
									2. If soil crumbles in between 2 to 5 minutes then that soil have good stability.<br>
									3. If soil does not crumbles totally in 5 minutes and have some part on mesh then that soil have exllent stability.<br>
									</p>
									<b>To improve stability of soil add organic manure to it such as gravel and compost or well-rotted horse manure mixed.</b>
							</div>
						</div><br>
					</div>
					
					<div class="tab-pane container fade" id="menu4">
						<div class="row">
							<div class="col-md-12">
								<br>
								<center><h5>5. SOIL COMPACTION TEST
								</h5></center>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<br>
								<div class="row">
									<div class="col-md-12 compaction">
										<center>
											<img src="websiteimages/homemade/compaction.jpg">
										</center>
										<br>
									</div>
								</div>
							</div>
							<div class="col-md-7 area-homemade">
								<br><br>
								<b>Plunge a wire flag vertically into the soil at different locations. Mark the depth at which the wire bends. The sooner it bends, the more compacted the soil. A foot or more of easily penetrable soil is ideal.</b><br>
								<br>
								<h5>Why It's Important:</h5> 
								<p>
									Compacted soil inhibits root growth and water availability, and keeps earthworms and other vital soil fauna from circulating freely.
								</p><br>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="page-footer font-small bg-light pt-4 myfooter">

		<!-- Footer Links -->
		<div class="container text-center text-md-left">

			<!-- Grid row -->
			<div class="row">

				<!-- Grid column -->
				<div class="col-md-4 mx-auto">

					<!-- Content -->
					<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
					<p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,consectetur adipisicing elit.</p><br>

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
<script type="text/javascript">
	function getWeather() {
	  let temperature = document.getElementById("temperature");
	  // let description = document.getElementById("description");
	  let location = document.getElementById("location");
	  let degree = document.getElementById("degree");

	  let api = "https://api.openweathermap.org/data/2.5/weather";
	  let apiKey = "6cb1eeecda3ed239a6e604ffa4948ac5";

	  location.innerHTML = "Locating...";

	  navigator.geolocation.getCurrentPosition(success, error);

	  function success(position) {
	    latitude = position.coords.latitude;
	    longitude = position.coords.longitude;

	    let url =
	      api +
	      "?lat=" +
	      latitude +
	      "&lon=" +
	      longitude +
	      "&appid=" +
	      apiKey +
	      "&units=imperial";

	      console.log(url)

	    fetch(url)
	      .then(response => response.json())
	      .then(data => {
	        console.log(data);
	        let temp = data.main.temp;
	        mytemp = temp.toFixed(1);
	        temperature.innerHTML = mytemp + "° F";
	        let mydegree = (temp - 32) * 5/9 ;
	        var celcius = mydegree.toFixed(2);
	        degree.innerHTML = celcius + "° C";
	        //location.innerHTML =data.name;
	        location.innerHTML ="Aurangabad";
	        // description.innerHTML = data.weather[0].main;
	      });
	  }

	  function error() {
	    location.innerHTML = "Unable to retrieve your location";
	  }
	}

	getWeather();
</script>
</html>


