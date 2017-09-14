<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Nate Dooley</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/autosize.min.js"></script>
		<script type="text/javascript" src="assets/js/bowser.js"></script>
		<link rel="stylesheet" href="assets/css/main.css" type="text/css" />
		<link rel="stylesheet" href="assets/css/hamburger.css" type="text/css" />
		<link rel="stylesheet" href="assets/css/grid.css" type="text/css" />
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet">
	</head>
	<body>
		<div class="menu">
			<div class="menu-wrapper">
				<a class="svg-wrapper" href="#work">
	  				<svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
	    				<rect class="shape" height="60px" width="320" />
	  				</svg>
	  				<p class="text-button">
						My Work
					</p>
				</a>
				<a class="svg-wrapper" href="#about">
	  				<svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
	    				<rect class="shape" height="60px" width="320" />
	  				</svg>
	  				<p class="text-button">
						About Me
					</p>
				</a>
				<a class="svg-wrapper" href="#contact">
	  				<svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
	    				<rect class="shape" height="60px" width="320" />
	  				</svg>
	  				<p class="text-button">
						Contact
					</p>
				</a>
				<div class="copyright">Copyright &copy; 2017 Nate Dooley</div>
			</div>
		</div>
		<div class="section one">
			<nav class="header">

				<a href="#!" class="logo-header">
					<img src="assets/img/DVA.png" alt="logo"></img>
				</a>
				<button class="hamburger hamburger--emphatic" type="button" style="outline:none;z-index:1001;position:absolute;top:0;right:0">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
				<a class="cta hire-header" style="float:right;padding:14px 30px;position:absolute;top:0;right:186px" href="#contact">
					Hire Me
				</a>
			</nav>

			<div class="hero-content">
				<h2 style="margin:27px 0;text-align:center;letter-spacing:2px;text-shadow: 2px 2px 8px black;font-size: 48px">
					Nate Dooley
				</h2>
				<img class="circular--square" src="assets/img/nate.jpg" />
				<div class="hero-text">
					Rochester Institute of Technology | B.S. Computers and Information Technology '22 | Computer Sceince House
				</div>
				<a class="cta" style="margin: 38px auto !important; display: block; width: 60px; text-shadow: 2px 2px 8px black;" href="#contact">
					Hire Me
				</a>

			</div>
		</div>

		<video class="hero" autoplay muted loop>
			<source src="assets/videos/roc5.webm" type="video/webm" />
		</video>

		<div class="section two" id="work">
			<div class="work-container">
				<div class="grid grid-pad">
					<div class="col-3-12" style="height:240px;vertical-align:middle">
						<div style="height:40px"></div>
						<h2 style="margin:27px 0;letter-spacing:2px;color:#363636">
							My Projects
						</h2>
						<p style="color:#363636;font-weight:300;font-size:12px">
							We're shocked. Oh well, here are some of our favorite pieces, sure to win you over.
						</p>
					</div>
					<div class="col-9-12">
						<div class="thumbnail-carousel">

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section three" id="about">
			<div class="about-wrapper">
				<div class="about-content">
					<h2>
						About Me
					</h2>

					I'm a Computer and Information Technology major at RIT specializing in Networking and System Administration. I'm a member of the Computer Science House and a top-tier student. 
				</div>
			</div>
		</div>
		<div class="section four" id="contact">
			<div class="contact-wrapper">
				<h2 style="font-family:'Lato', sans-serif;font-weight:300;text-align:center;;letter-spacing:2px;color:#363636;padding:70px 70px 0 70px;margin:0">
					Contact Me
				</h2>
				<p style="font-family:'Lato';color:#363636;font-size:14px;text-align:center;padding-bottom:55px">Any Questions? Comments? Cries of outrage? Leave 'em below and we'll get back to you as soon as we see 'em.</p>
				<form class="contact-form" method="post" action="index.php#contact">
  					<input class="text" name="name" placeholder="NAME"></input>
  					<input class="text" name="email" placeholder="EMAIL" style="float:right"></input>
  					<input class="text" name="subject" placeholder="SUBJECT" style="width:calc(100% - 24px)"></input>
  					<textarea class="text message" name="message" placeholder="MESSAGE"></textarea>
  					<input class="text" type="submit" name="submit" value="SUBMIT" style="width:165px;display:block;color:#ababae;margin:0 auto;cursor:pointer"></input>
				</form>

				<?php
					if (isset($_POST['submit'])) {

						?>

							<div class="echo" style="padding:100px;font-size:16px;font-family:lato;color:#585858;text-align:center;">

						<?php
						if (!isset($_POST['name']) ||
						!isset($_POST['email']) ||
						!isset($_POST['subject']) ||
						!isset($_POST['message'])) {
							echo 'There\'s something wrong with your contact information';
						} else {
							$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
							$email = $_POST['email'];

							if(!preg_match($email_exp,$email)) {
								echo 'Your E-Mail address is invalid. Try again.';
							} else {
								$headers = 'From: ' . $email . "\r\n" .
								'Reply-To: ' . $email . "\r\n" .
								'X-Mailer: PHP/' . phpversion();

								if (mail( 'andrewrobinson615@gmail.com', $_POST['subject'], $_POST['message'], $headers)) {
									echo 'Sent! We\'ll get back to you as soon as we can!';
								}
							}
						}

						?>

							</div>

						<?php
					}
				?>
			</div>
		</div>

		<div class="social">
			<div class="social-wrapper">
				<a href="https://vimeo.com/marcdooley" class="social-icon v">
					<svg xmlns="http://www.w3.org/2000/svg" height="52" viewBox="0 0 32 32" width="52">
						<path d="M24.6 17.8C29.8 10.8 28.3 5.8 24.6 5.7 21 5.4 18.7 7.3 17.5 11.1c2-0.9 3.2-0.4 3.4 0.8 0.5 1.9-3.2 7.1-3.9 6.8-0.6-0.1-1.5-2-2-5.1C14.8 12.1 14.7 10.8 14.3 9 14.1 8 13.4 6 11.2 5.9 10.3 5.9 9.6 6.3 8.5 7.2 8.1 7.5 7.9 7.6 7.4 8.1l-0.9 0.9-0.8 0.7-1.7 1.5 1.2 1.5 1.7-1.1c0.6-0.4 1.4 1.1 1.6 1.5 0.6 1 1.9 6.2 2.8 9.2 0.5 1.8 2.1 4.1 3.7 4 2.3-0.1 4.9-2.3 7.9-6 0.6-0.8 1.2-1.5 1.8-2.4z" style="fill:#C3C3C3;stroke-width:0.01"/>
					</svg>
				</a>
				<a href="#" class="social-icon fb">
					<svg xmlns="http://www.w3.org/2000/svg" height="52" viewBox="0 0 32 32" width="52">
    					<path d="m12.7 16.7-2 0 0-4.1 2 0 0-4.3c0.1-1.9 1.6-3.2 3.6-3.2l4.6 0 0 4.1-2.7 0c-0.5 0-0.7 0.2-0.7 0.8l0 2.6 3.4 0-0.7 4.1-2.7 0 0 10.2-4.8 0z" style="fill:#C3C3C3;stroke-width:0.01"/>
					</svg>
				</a>
				<a href="#" class="social-icon t">
					<svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 0 32 32" width="32">
						<path d="m3.1 24.7c3.5 0.1 5.6-0.5 7.9-2.3-2.3 0-4.3-1.4-5-3.7 0.6 0.3 1.4 0.1 2.2 0C7.1 18.5 4.2 17.3 4.1 13.5 4.9 13.8 5.7 14.2 6.5 14.2 5.2 13.5 3 10.7 4.7 7.1 7.4 10.5 11.8 12.5 15.7 12.6 14.6 10.3 17 6 20.9 6.1 23 6.2 23.8 7 24.7 7.8 26 7.5 27.1 7 28 6.5 27.6 7.6 27.1 8.7 25.8 9.3L28.9 8.7c-0.6 0.9-1 1.5-2.6 2.7 0.1 3.1-0.8 6.4-2.9 9.4-6.6 8.7-16.5 6.5-20.3 3.8z" style="fill:#c3c3c3;stroke-width:0.01"/>
					</svg>
				</a>
			</div>
		</div>
		<div class="footer">
			<div class="copyright-ftr">&copy; 2017 Nate Dooley | All Rights Reserved | Website in collaboration with Andrew Robinson</div>
		</div>

		<script>
			/*global $*/

			var $hamburger = $(".hamburger");
			$hamburger.on("click", function(e) {
				$hamburger.toggleClass("is-active");
				$(".menu").toggleClass("menu-active");
				$("body").toggleClass("noscroll");
			});

			$(".svg-wrapper").on("click", function () {
				$hamburger.toggleClass("is-active");
				$(".menu").toggleClass("menu-active");
				$("body").toggleClass("noscroll");
			});
		</script>
	</body>
</html>
