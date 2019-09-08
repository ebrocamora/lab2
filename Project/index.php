<!DOCTYPE HTML>
<html lang="en">
<style>
		body {
		  font-family: Arial;
		  margin: 0;
		}

		* {
		  box-sizing: border-box;
		}

		img {
		  vertical-align: middle;
		}

		/* Position the image container (needed to position the left and right arrows) */
		.container {
		  position: relative;
		}

		/* Hide the images by default */
		.mySlides {
		  display: none;
		}

		/* Add a pointer when hovering over the thumbnail images */
		.cursor {
		  cursor: pointer;
		}

		/* Next & previous buttons */
		.prev,
		.next {
		  cursor: pointer;
		  position: absolute;
		  top: 40%;
		  width: auto;
		  padding: 16px;
		  margin-top: -50px;
		  color: white;
		  font-weight: bold;
		  font-size: 20px;
		  border-radius: 0 3px 3px 0;
		  user-select: none;
		  -webkit-user-select: none;
		}

		/* Position the "next button" to the right */
		.next {
		  right: 0;
		  border-radius: 3px 0 0 3px;
		}

		/* On hover, add a black background color with a little bit see-through */
		.prev:hover,
		.next:hover {
		  background-color: rgba(0, 0, 0, 0.8);
		}

		/* Number text (1/3 etc) */
		.numbertext {
		  color: #f2f2f2;
		  font-size: 12px;
		  padding: 8px 12px;
		  position: absolute;
		  top: 0;
		}

		/* Container for image text */
		.caption-container {
		  text-align: center;
		  background-color: #222;
		  padding: 2px 16px;
		  color: white;
		}

		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		/* Six columns side by side */
		.column {
		  float: left;
		  width: 16.66%;
		}

		/* Add a transparency effect for thumnbail images */
		.demo {
		  opacity: 0.6;
		}

		.active,
		.demo:hover {
		  opacity: 1;
		}
</style>
<head>
	
	<meta charset="utf-8">
	<title>This is ME</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/logo.jpg">
	

</head>

<body>
	<!-- navbar -->
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<h1 class="brand"><a href="index.html">EuNaCe</a></h1>
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
							<li><a title="team" href="index.html">Home</a></li>
							<li><a title="section" href="#about">About Me</a></li>
							<li><a title="section orange" href="#services">Reflections</a></li>
							<li><a title="blog" href="#blog">Activities</a></li>
							<li><a title="contact" href="#contact">Projects</a></li>
							<li><a title="contact" href="https://www.linkedin.com/in/eunace-rocamora-43854a180/">Linkedin Profile</a></li>
							
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Header area -->
	<div id="header-wrapper" class="header-slider">
		<header class="clearfix">
			
			<div class="container">
				<div class="row">
					<div class="span12">
						<div id="main-flexslider" class="flexslider">
							<ul class="slides">
								<li>
									<p class="home-slide-content">
										Talkative but <strong>Nice</strong> 
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										 Has a<strong> Sense of Humor</strong>
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										 but <strong>Honest</strong>
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										She is <strong>Eunace</strong>
									</p>
								</li>
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>
		</header>
	</div>
	<!-- spacer section -->
	<section class="spacer green">
		<div class="container">
			<div class="row">
				<div class="span6 alignright flyLeft">
					<blockquote class="large">
						Too many people spend money they earned..to buy things they don't want..to impress people that they don't like. <cite>Will Rogers</cite>
					</blockquote>
				</div>
				<div class="span6 aligncenter flyRight">
					<img src = "img/sayang.jpeg"  style="width:400px;height:600px;">
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->
	<!-- section: team -->
	<section id="about" class="section">
		<div class="container">
			<h4>Who is Eunace Rocamora?</h4>
			<div class="row">
				<div class="span5 offset1">
					<div>
						<p>
							<ul>
				              <font size = "5"><li>An Sm Scholar</li>
				              <li>Student of Asia Pacific College</li>
				              <li>Course: Bachelor of Science in Information Technology</li>
				              <li>Specialization: Mobile and Internet Technology</li>
				              <li>Lives in Parañaque</li>
				              </font>
				            </ul>  
						</p>
					</div>
				</div>
				<div class="span6">
					<div class="aligncenter">
						<img src="img/aboutme.jpg" style="width:500px;height:400px;"alt="" />
			
				</div>
			</div>
		</div>
		<!-- /.container -->
	</section>
	<!-- end section: team -->
	<!-- section: services -->
	<section id="services" class="section orange">
		<div class="container">
			<h4>Reflections</h4>
							<!-- Container for the image gallery -->
				<div class="container">

				  <!-- Full-width images with number text -->
				  <div class="mySlides">
					<div class="numbertext">1 / 6</div>
					 <a href = "r1.html"> <img src="img/r1.png" style="width:10000px;height:500px"></a>
				  </div>

				  <div class="mySlides">
					<div class="numbertext">2 / 6</div>
					 <a href = "r2.html"> <img src="img/r2.png" style="width:10000px;height:500px"></a>
				  </div>

				  <div class="mySlides">
					<div class="numbertext">3 / 6</div>
					 <a href = "r3.html"> <img src="img/r3.png" style="width:10000px;height:500px"></a>
				  </div>

				  <div class="mySlides">
					<div class="numbertext">4 / 6</div>
					<a href = "r4.html"> <img src="img/r4.png" style="width:10000px;height:500px"></a>
				  </div>

				  <div class="mySlides">
					<div class="numbertext">5 / 6</div>
					<a href = "r5.html"> <img src="img/r5.png" style="width:10000px;height:500px"></a>
				  </div>

				  <div class="mySlides">
					<div class="numbertext">6 / 6</div>
					<a href = "r6.html"> <img src="img/r6.png" style="width:10000px;height:500px"></a>
				  </div>

				  <!-- Next and previous buttons -->
				  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				  <a class="next" onclick="plusSlides(1)">&#10095;</a>

				  <!-- Image text -->
				  <div class="caption-container">
					<p id="caption"></p>
				  </div>

				  <!-- Thumbnail images -->
				  <div class="row">
					<div class="column">
					  <img class="demo cursor" src="img/r1.png" style="width:100px;height:100px" onclick="currentSlide(1)" alt="Reflection 1: First Week of USERDES Class" hspace = "30">
					</div>
					<div class="column"> 
					  <img class="demo cursor" src="img/r2.png" style="width:250px;height:100px" onclick="currentSlide(2)" alt="Reflection 2: Need Finding and Paper Prototyping">
					</div>
					<div class="column">
					  <img class="demo cursor" src="img/r3.png" style="width:250px;height:100px" onclick="currentSlide(3)" alt="Reflection 3: First Web Application using Github and Heroku">
					</div>
					<div class="column">
					  <img class="demo cursor" src="img/r4.png" style="width:250px;height:100px" onclick="currentSlide(4)" alt="Reflection 4: Userinyerface - Worst UI Practice">
					</div>
					<div class="column">
					  <img class="demo cursor" src="img/r5.png" style="width:250px;height:100px" onclick="currentSlide(5)" alt="Reflection 5: SoCIT Fest">
					</div> 
					<div class="column">
					  <img class="demo cursor" src="img/r6.png" style="width:250px;height:100px" onclick="currentSlide(6)" alt="Reflection 6: First Half of USERDES">
					</div>
				  </div>
				</div>
						</div>
					</section>
	<!-- end section: services -->
	<!-- section: works -->
	
	<!-- spacer section -->
	<section class="spacer bg3">
		<div class="container">
			<div class="row">
				<div class="span12 aligncenter flyLeft">
					<blockquote class="large">
						Self-belief and hard work will always earn you success. <cite>Virat Kohli</cite>
					</blockquote>
				</div>
				<div class="span12 aligncenter flyRight">
					<i class="icon-rocket icon-10x"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->
	<!-- section: blog -->
	<section id="blog" class="section">
		<div class="container">
			<h4>Activities</h4>
			<!-- Three columns -->
			<div class="row">
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/home/1.gif" style = "width:500px;height:200px" alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">June 25,2019</span>
						</div>
						<div class="entry-content">
							<h5><strong><a href="a1.html">Activity 1</a></strong></h5>
							<p>
								Introduction & Accounts..
							</p>
							
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/home/2.gif" style = "width:500px;height:200px"alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">June 2,2019</span>
							
						</div>
						<div class="entry-content">
							<h5><strong><a href="a2.html">Activity 2</a></strong></h5>
							<p>
								My Favorite Application
							</p>
							
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/home/3.gif" style = "width:500px;height:200px"alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">July 9,2019</span>
							
						</div>
						<div class="entry-content">
							<h5><strong><a href="a3.html">Activity 3</a></strong></h5>
							<p>
								100 Floor Elevator.
							</p>
							
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/home/4.gif" style = "width:500px;height:200px"alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">July 21,2019</span>
							
						</div>
						<div class="entry-content">
							<h5><strong><a href="a4.html">Activity 4</a></strong></h5>
							<p>
								Need Finding Activity
							</p>
							
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/home/5.gif" style = "width:500px;height:200px"alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">August 2,2019</span>
							
						</div>
						<div class="entry-content">
							<h5><strong><a href="a5.gif">Activity 5</a></strong></h5>
							<p>
								Initial Prototype
							</p>
							
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/home/6.gif" style = "width:500px;height:200px"alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">August 3,2019</span>
							
						</div>
						<div class="entry-content">
							<h5><strong><a href="a6.html">Activity 6</a></strong></h5>
							<p>
								Persona
							</p>
							
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/home/7.gif" style = "width:500px;height:200px" alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">August 13,2019</span>
							
						</div>
						<div class="entry-content">
							<h5><strong><a href="a7.html">Activity 7</a></strong></h5>
							<p>
								Information Design
							</p>
		
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/home/8.gif" style = "width:500px;height:200px" alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">August 23,2019</span>
							
						</div>
						<div class="entry-content">
							<h5><strong><a href="a8.html">Activity 8</a></strong></h5>
							<p>
								Grid Layout Design
							</p>
							
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/home/9.gif" style = "width:500px;height:200px" alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">August 27,2019</span>
							
						</div>
						<div class="entry-content">
							<h5><strong><a href="a9.html">Activity 9</a></strong></h5>
							<p>
								12 - Column Grid Design
							</p>
							
						</div>
					</div>
				</div>
			</div>
			
	</section>

	<!-- end spacer section -->
	<!-- section: contact -->
	<section id="contact" class="section green">
		<div class="container">
			<h1>Project</h1>
			<p>
				<strong>[Laboratory] L1 - Version Control and Basic HTML</strong>
				Please Click <a href = "lab1.html"><strong>Here</strong></a> to visit <a href = "lab1.html">Lab 1 Project</a>
				
				

			</p>
			<h1>Quiz</h1>
			<p>
				<strong>Userinyerface</strong>
				First Try<br>
				<img src = "img/1stquiz.png"style = "width:900px;height:500px"><br>
				Second Try<br>
				<img src = "img/2ndquiz.png" style = "width:900px;height:500px"><br>
				
				

			</p>
			
		</div>
	</section>
	
	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/jquery.localScroll.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/inview.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>

</body>

</html>
