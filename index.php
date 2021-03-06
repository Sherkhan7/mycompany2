<?php
	echo phpinfo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mycompany_2</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body>

	<header>
		<div class="header-container">
			<div class="logo">
				<img src="images/logos/LOGO.png" alt="company logo">
			</div>
			<input type="checkbox" id="checkbox-menu">
			<nav role="navigation">
				<label for="checkbox-menu" class="toggle-button" data-open="MENU" data-close="CLOSE" onclick></label>
				<ul class="main-menu">
					<li><a href="#">HOME</a></li>
					<li><a href="#">PORTFOLIO</a></li>
					<li><a href="#">BLOG</a></li>
					<li><a href="#">ABOUT US</a></li>
					<li><a href="#">CONTACT</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<main>
		<section class="top-slide">
			<div class="top-container">
				<div><h2>WE BELIEVE</h2></div>
				<div><h2>IN QUALITY DESIGN</h2></div>
				<div><p>Any creative project is unique</p></div>
				<div><p>and should be provided with</p></div>
				<div><p>the appropriate quality	</p></div>
			</div>
		</section>

		<section class="specialize">
			<div class="specialize-container">
				<h1>We create quality designs.</h1>
				<p class="motto">We specialize in Web Design / Development and Graphic Design</p>
				<div class="specialize-cards">
					<div class="card">
						<div class="top-card">
							<img src="images/bottle.png" alt="">
						</div>
						<div class="bottom-card">
							<p class="first-p">Redesigning<br>With Personality</p>
						</div>
					</div>
					<div class="card">
						<div class="top-card">
							<img src="images/webdevelopment.png" alt="">
						</div>
						<div class="bottom-card">
							<p>Lorem ipsum dolor sit amet,<br>consectetur.</p>
						</div>
					</div>
					<div class="card">
						<div class="top-card">
							<img src="images/webdesign.png" alt="">
						</div>
						<div class="bottom-card">
							<p>Lorem ipsum dolor sit amet,<br>consectetur.</p>
						</div>
					</div>
					<div class="card">
						<div class="top-card">
							<img src="images/graphicdesign.png" alt="">
						</div>
						<div class="bottom-card">
							<p>Lorem ipsum dolor sit amet,<br>consectetur.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="portfolio">
			<div class="portfolio-wrapper">
				<h4>OUR WORK</h4>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
				<div class="toggles">
					<button id="showall">SHOW ALL</button>
					<button id="webdev">WEB DEVELOPMENT</button>
					<button id="webdesign">WEB DESIGN</button>
					<button id="graphicdesign">GRAPHIC DESIGN</button>
				</div>
				<div class="posts">
					<div class="post graphicdesign"><img src="images/pic1.png" alt=""></div>
					<div class="post webdev"><img src="images/pic2.png" alt=""></div>
					<div class="post webdesign"><img src="images/pic3.png" alt=""></div>
					<div class="post webdev"><img src="images/pic4.png" alt=""></div>
					<div class="post graphicdesign"><img src="images/pic5.png" alt=""></div>
					<div class="post webdev"><img src="images/pic6.png" alt=""></div>
					<div class="post webdesign"><img src="images/pic7.png" alt=""></div>
					<div class="post webdesign"><img src="images/pic9.png" alt=""></div>
					<div class="post graphicdesign"><img src="images/pic10.png" alt=""></div>
				</div>
			</div>
		</section>

		<section class="client">
			<div class="client-wrapper">
				<h4>OUR CLIENTS</h4>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
				<div class="owl-carousel">
					<div><img src="images/clients/Client 1.png" alt=""></div>
					<div><img src="images/clients/Client 2.png" alt=""></div>
					<div><img src="images/clients/Client 3.png" alt=""></div>
					<div><img src="images/clients/Client 4.png" alt=""></div>
					<div><img src="images/clients/Client 5.png" alt=""></div>
					<div><img src="images/clients/Client 6.png" alt=""></div>
					<div><img src="images/clients/Client 7.png" alt=""></div>
					<div><img src="images/clients/Client 8.png" alt=""></div>
				</div>			
			</div>
		</section>
	</main>

	<footer>
				<div class="footer-container">
					<div class="about-us">
						<h4>About Us</h4>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
						</p> 
						<a href="">Learn more</a>
						<h4>Photo Stream</h4>
						<div class="images">
							<img src="images/photo-stream/pic1.png" alt="">
							<img src="images/photo-stream/pic2.png" alt="">
							<img src="images/photo-stream/pic3.png" alt="">
							<img src="images/photo-stream/pic4.png" alt="">
							<img src="images/photo-stream/pic5.png" alt="">
							<img src="images/photo-stream/pic6.png" alt="">
						</div>
					</div>
					<div class="tweets">
						<h4>Latest Tweets</h4>
						<div class="last-tweets">
							<p><img src="images/logos/birdicon.png" alt="">Check Out Dtbaker's <span>@Arduino</span> Sales Notification <span>#System</span></p>
							<span class="day">3 days ago</span>

							<p><img src="images/logos/birdicon.png" alt="">Community Superstar Winner – <span>#OrganicBeeMedia</span></p>
							<span class="day">3 days ago</span>

							<p><img src="images/logos/birdicon.png" alt="">Clean <span>#Websites</span> Designs for Your <span>#Inspiration</span></p>
							<span class="day">5 days ago</span>

							<p><img src="images/logos/birdicon.png" alt="">Cute Online <span>#Shops</span></p>
							<span class="day">6 days ago</span>

							<p><img src="images/logos/birdicon.png" alt="">Download 40 vector <span>#icons</span> package for <span>#FREE</span></p>
							<span class="day">6 days ago</span>

							<div class="social">
								<h4>Social Connecting</h4><br>
								<a href="https://www.bloger.com" target="_blank"><img src="images/logos/bloger.png" alt=""></a>
								<a href="https://www.facebook.com" target="_blank"><img src="images/logos/facebook.png" alt=""></a>
								<a href="https://www.google-plus.com" target="_blank"><img src="images/logos/google plus.png" alt=""></a>
								<a href="https://www.linkedin.com" target="_blank"><img src="images/logos/linkedin.png" alt=""></a>
								<a href="https://www.dribbble.com" target="_blank"><img src="images/logos/dribbble.png" alt=""></a>
								<a href="https://www.rss.com" target="_blank"><img src="images/logos/rss.png" alt=""></a>
								<a href="https://www.twitter.com" target="_blank"><img src="images/logos/twitter.png" alt=""></a>
								<a href="https://www.youtube.com" target="_blank"><img src="images/logos/you tube.png" alt=""></a>
							</div>
						</div>
					</div>
					<div class="contacts">
						<h4>Contact Info</h4>
						<div class="contact-list">
							<img src="images/logos/Adress.png" alt="">
							<p>Address: <br> 12569 Saint Patrick des  Prés 85000 Paris, France</p><br>
							<img src="images/logos/Phone.png" alt="">
							<p>Phone: <br> +38 045 845-45-78 <br>+38 045 845-45-79</p><br>
							<img src="images/logos/email.png" alt="">
							<p>E-mail: <br> <span>freeforwebdesign@gmail.com</span></p>
						</div>
						<h4>Follow Us</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<form action="" method="get">
							<input type="email" class="mail" required="required">
							<button>
								<img src="images/logos/email icon.png" alt="">
							</button>
						</form>
					</div>
				</div>
	</footer>
				
	<footer>
				<div class="footer-nav">
					<ul class="footer-menu">
						<li><a href="#">HOME</a></li>
						<li><a href="#">PORTFOLIO</a></li>
						<li><a href="#">BLOG</a></li>
						<li><a href="#">ABOUT US</a></li>
						<li><a href="#">CONTACT</a></li>
					</ul>
				</div> 
	</footer>



	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  	crossorigin="anonymous"></script>
	<script src="owlcarousel/owl.carousel.min.js"></script>
	<script src="script/script.js"></script>

	
</body>
</html>
