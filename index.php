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
				<a class="svg-wrapper svg-wrapper-hamburger" href="#work">
	  				<svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
	    				<rect class="shape" height="60px" width="320" />
	  				</svg>
	  				<p class="text-button">
						My Work
					</p>
				</a>
				<a class="svg-wrapper svg-wrapper-hamburger" href="#about">
	  				<svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
	    				<rect class="shape" height="60px" width="320" />
	  				</svg>
	  				<p class="text-button">
						About Me
					</p>
				</a>
				<a class="svg-wrapper svg-wrapper-hamburger" href="#contact">
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
			</nav>

			<div class="hero-content">
				<h2 style="margin:27px 0;text-align:center;letter-spacing:2px;text-shadow: 2px 2px 8px black;font-size: 48px">
					Nate Dooley
				</h2>
				<img class="circular--square" src="assets/img/nate.jpg" />
				<div class="hero-text">
					Rochester Institute of Technology 
					<hr> 
					B.S. Computing and Information Technologies '22 
					<hr>
					Computer Science House active member
					<br><br>
				<a class="svg-wrapper" href="#about">
	  				<svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
	    				<rect class="shape2" height="60px" width="320" />
	  				</svg>
	  				<p class="text-button">
						About Me
					</p>
				</a>

			</div>
		</div>
		<div class="hero-div">
		<video class="hero" autoplay muted loop>
			<source src="assets/videos/roc5.webm" type="video/webm" />
		</video>
		</div>
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
						<path d="M409.132,114.573c-19.608-33.596-46.205-60.194-79.798-79.8C295.736,15.166,259.057,5.365,219.271,5.365
		c-39.781,0-76.472,9.804-110.063,29.408c-33.596,19.605-60.192,46.204-79.8,79.8C9.803,148.168,0,184.854,0,224.63
		c0,47.78,13.94,90.745,41.827,128.906c27.884,38.164,63.906,64.572,108.063,79.227c5.14,0.954,8.945,0.283,11.419-1.996
		c2.475-2.282,3.711-5.14,3.711-8.562c0-0.571-0.049-5.708-0.144-15.417c-0.098-9.709-0.144-18.179-0.144-25.406l-6.567,1.136
		c-4.187,0.767-9.469,1.092-15.846,1c-6.374-0.089-12.991-0.757-19.842-1.999c-6.854-1.231-13.229-4.086-19.13-8.559
		c-5.898-4.473-10.085-10.328-12.56-17.556l-2.855-6.57c-1.903-4.374-4.899-9.233-8.992-14.559
		c-4.093-5.331-8.232-8.945-12.419-10.848l-1.999-1.431c-1.332-0.951-2.568-2.098-3.711-3.429c-1.142-1.331-1.997-2.663-2.568-3.997
		c-0.572-1.335-0.098-2.43,1.427-3.289c1.525-0.859,4.281-1.276,8.28-1.276l5.708,0.853c3.807,0.763,8.516,3.042,14.133,6.851
		c5.614,3.806,10.229,8.754,13.846,14.842c4.38,7.806,9.657,13.754,15.846,17.847c6.184,4.093,12.419,6.136,18.699,6.136
		c6.28,0,11.704-0.476,16.274-1.423c4.565-0.952,8.848-2.383,12.847-4.285c1.713-12.758,6.377-22.559,13.988-29.41
		c-10.848-1.14-20.601-2.857-29.264-5.14c-8.658-2.286-17.605-5.996-26.835-11.14c-9.235-5.137-16.896-11.516-22.985-19.126
		c-6.09-7.614-11.088-17.61-14.987-29.979c-3.901-12.374-5.852-26.648-5.852-42.826c0-23.035,7.52-42.637,22.557-58.817
		c-7.044-17.318-6.379-36.732,1.997-58.24c5.52-1.715,13.706-0.428,24.554,3.853c10.85,4.283,18.794,7.952,23.84,10.994
		c5.046,3.041,9.089,5.618,12.135,7.708c17.705-4.947,35.976-7.421,54.818-7.421s37.117,2.474,54.823,7.421l10.849-6.849
		c7.419-4.57,16.18-8.758,26.262-12.565c10.088-3.805,17.802-4.853,23.134-3.138c8.562,21.509,9.325,40.922,2.279,58.24
		c15.036,16.18,22.559,35.787,22.559,58.817c0,16.178-1.958,30.497-5.853,42.966c-3.9,12.471-8.941,22.457-15.125,29.979
		c-6.191,7.521-13.901,13.85-23.131,18.986c-9.232,5.14-18.182,8.85-26.84,11.136c-8.662,2.286-18.415,4.004-29.263,5.146
		c9.894,8.562,14.842,22.077,14.842,40.539v60.237c0,3.422,1.19,6.279,3.572,8.562c2.379,2.279,6.136,2.95,11.276,1.995
		c44.163-14.653,80.185-41.062,108.068-79.226c27.88-38.161,41.825-81.126,41.825-128.906
		C438.536,184.851,428.728,148.168,409.132,114.573z" style="fill:#C3C3C3;stroke-width:0.01"/>
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

			$(".svg-wrapper-hamburger").on("click", function () {
				$hamburger.toggleClass("is-active");
				$(".menu").toggleClass("menu-active");
				$("body").toggleClass("noscroll");
			});
		</script>
	</body>
</html>
