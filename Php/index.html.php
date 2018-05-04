<!DOCTYPE html>
<?php
  session_start();
  $_SESSION['user'] = "";
  $_SESSION['fname'] = "";
  $_SESSION['lname'] = "";
?>
<html>
<html lang="en-us">
<head>
	<!--  App Title  -->
	<title>TaskApp - Free Tasking Application</title>
	<!--  App Description  -->
	<meta name="description" content=""/>
	<meta charset="utf-8">
	<meta name="author" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

		<!-- <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/css/simple-line-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Style -->
	<link rel="stylesheet" href="css/css/style.css">
</head>
<header role="banner" id="fh5co-header">
	<div class="fluid-container">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<!-- Mobile Toggle Menu Button -->
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
				<a class="" href="#">TaskerApp</a> 
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
					<li><a href="#fh5co-services" data-nav-section="services"><span>Services</span></a></li>
					<li><a href="#fh5co-team" data-nav-section="team"><span>Team</span></a></li>
					<li><a href="#fh5co-faq" data-nav-section="faq"><span>FAQ</span></a></li>
					<li class="call-to-action"><a class="sign-up" href="registration.html.php"><span>Register</span></a></li>
					<li class="call-to-action"><a class="log-in" href="index.html.login.php"><span>Login</span></a></li>
				</ul>
			</div>
		</nav>
	</div>
</header>
			
			
<section id="fh5co-home" data-section="home" style="background-image: url(https://psddd.co/wp-content/uploads/2017/04/iphone-6-ux-workflow.jpg);" data-stellar-background-ratio="0.5">
	<div class="gradient"></div>
	<div class="container">
		<div class="text-wrap">
			<div class="text-inner">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<h1 class="to-animate">Welcome to <span>TaskerApp</span></h1>
						<h2 class="to-animate">Where scheduling is made easier.</h2>
						<div class="call-to-action">
							<a href="#" class="download to-animate"><i class="icon-download"></i> Download</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	<section id="fh5co-services" data-section="services">
		<div class="fh5co-services">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate"><span>We Offer Services</span></h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove. </h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center">
						<div class="box-services">
							<div class="icon to-animate">
								<span><i class="icon-chemistry"></i></span>
							</div>
							<div class="fh5co-post to-animate">
								<h3>Hand-crafted with Detailed</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>

						<div class="box-services">
							<div class="icon to-animate">
								<span><i class="icon-energy"></i></i></span>
							</div>
							<div class="fh5co-post to-animate">
								<h3>Light and Fast</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="box-services">
							<div class="icon to-animate">
								<span><i class="icon-trophy"></i></span>
							</div>
							<div class="fh5co-post to-animate">
								<h3>Award-winning Landing Page</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>

						<div class="box-services">
							<div class="icon to-animate">
								<span><i class="icon-paper-plane"></i></span>
							</div>
							<div class="fh5co-post to-animate">
								<h3>Sleek and Smooth Navigation</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="box-services">
							<div class="icon to-animate">
								<span><i class="icon-people"></i></span>
							</div>
							<div class="fh5co-post to-animate">
								<h3>Satisfied &amp; Happy Clients</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>

						<div class="box-services">
							<div class="icon to-animate">
								<span><i class="icon-screen-desktop"></i></span>
							</div>
							<div class="fh5co-post to-animate">
								<h3>Looks Amazing on Devices</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="box-services">
							<div class="icon to-animate">
								<span><i class="icon-life-saver"></i></span>
							</div>
							<div class="fh5co-post to-animate">
								<h3>24/7 Help &amp; Support</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>

						<div class="box-services">
							<div class="icon to-animate">
								<span><i class="icon-key"></i></span>
							</div>
							<div class="fh5co-post to-animate">
								<h3>Secure Account</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
		<div class="getting-started getting-started-1">
		<div class="getting-grid" style="background-image:  url(css/images/full_image_3.jpg);">
			<div class="desc">
				<h2>Getting <span>Started</span></h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
			</div>
		</div>
		<a href="#" class="getting-grid2">
			<div class="call-to-action text-center">
				<p href="#" class="sign-up">Sign Up For Free</p>
			</div>
		</a>
	</div>
	
		<section id="fh5co-team" class="fh5co-bg-color" data-section="team">
		<div class="fh5co-team">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate"><span>Meet The Team</span></h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove. </h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="css/images/person4.jpg" alt="Roger Garfield"></div>
							<h3>Alex Adam</h3>
							<span class="position">Awesome Developer</span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<ul class="social-media">
								<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
								<li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
								<li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
								<li><a href="#" class="codepen"><i class="icon-codepen"></i></a></li>
								<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-4">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="css/images/person2.jpg" alt="Roger Garfield"></div>
							<h3>Can Dalgir</h3>
							<span class="position">Awesome Developer</span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<ul class="social-media">
								<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
								<li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
								<li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
								<li><a href="#" class="codepen"><i class="icon-codepen"></i></a></li>
								<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-4">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="css/images/person3.jpg" alt="Roger Garfield"></div>
							<h3>Connor O'Donnel</h3>
							<span class="position">Awesome Developer</span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<ul class="social-media">
								<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
								<li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
								<li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
								<li><a href="#" class="codepen"><i class="icon-codepen"></i></a></li>
								<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				</br>
				</br>
				</br>
				<div class="col-md-4">
					<div class="team-box text-center to-animate-2">
						<div class="user"><img class="img-reponsive" src="css/images/person3.jpg" alt="Roger Garfield"></div>
						<h3>Mazian Bastani</h3>
						<span class="position">Awesome Developer</span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<ul class="social-media">
							<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
							<li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
							<li><a href="#" class="codepen"><i class="icon-codepen"></i></a></li>
							<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team-box text-center to-animate-2">
						<div class="user"><img class="img-reponsive" src="css/images/person3.jpg" alt="Roger Garfield"></div>
						<h3>Qi Gao</h3>
						<span class="position">Awesome Developer</span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<ul class="social-media">
							<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
							<li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
							<li><a href="#" class="codepen"><i class="icon-codepen"></i></a></li>
							<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team-box text-center to-animate-2">
						<div class="user"><img class="img-reponsive" src="css/images/person3.jpg" alt="Roger Garfield"></div>
						<h3>Binh</h3>
						<span class="position">Awesome Developer</span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<ul class="social-media">
							<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
							<li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
							<li><a href="#" class="codepen"><i class="icon-codepen"></i></a></li>
							<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
		<section id="fh5co-faq" class="fh5co-bg-color" data-section="faq">
		<div class="fh5co-faq">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate"><span>Common Questions</span></h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">Everything you need to know before you get started</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="box-faq to-animate-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3>What is TaskerApp?</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
						<div class="box-faq to-animate-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3>I have technical problem, who do I email? </h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
						<div class="box-faq to-animate-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3>How do I use TaskerApps features?</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="box-faq to-animate-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3>What language are available?</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
						<div class="box-faq to-animate-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3>Can I have a username that is already taken?</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
						<div class="box-faq to-animate-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3>Is TaskerApp free?</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer>
		<p>Team TaskerApp</p>
	</footer>
</html>
