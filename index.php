<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta name="google-site-verification" content="1EFNHkAuQpTwyXfA7DGBPBghwSedalSY7fnLALLHHrs" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Nate Dooley</title>
		<script type="text/javascript">
		function downloadJSAtOnload() {
		var element = document.createElement("script");
		element.src = "assets/js/autosize.min.js";
		document.body.appendChild(element);
		}
		if (window.addEventListener)
		window.addEventListener("load", downloadJSAtOnload, false);
		else if (window.attachEvent)
		window.attachEvent("onload", downloadJSAtOnload);
		else window.onload = downloadJSAtOnload;
		</script>
		<script type="text/javascript">
		function downloadJSAtOnload() {
		var element = document.createElement("script");
		element.src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js";
		document.body.appendChild(element);
		}
		if (window.addEventListener)
		window.addEventListener("load", downloadJSAtOnload, false);
		else if (window.attachEvent)
		window.attachEvent("onload", downloadJSAtOnload);
		else window.onload = downloadJSAtOnload;
		</script>
		<script type="text/javascript">
		function downloadJSAtOnload() {
		var element = document.createElement("script");
		element.src = "assets/js/bowser.js";
		document.body.appendChild(element);
		}
		if (window.addEventListener)
		window.addEventListener("load", downloadJSAtOnload, false);
		else if (window.attachEvent)
		window.attachEvent("onload", downloadJSAtOnload);
		else window.onload = downloadJSAtOnload;
		</script>

	</head>
	<body>
		<div class="menu">
			<div class="menu-wrapper">
				<a class="svg-wrapper svg-wrapper-hamburger" href="#work">
	  				<svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
	    				<rect class="shape" height="60px" width="320" />
	  				</svg>
	  				<p class="text-button">
						My Resume
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
				<a class="svg-wrapper" href="#work">
	  				<svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
	    				<rect class="shape2" height="60px" width="320" />
	  				</svg>
	  				<p class="text-button">
						My Resume
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
							My Resume
						</h2>
						<p style="color:#363636;font-weight:300;font-size:12px">
							A detailed list of my education, experiences, and qualifications.
						</p>
					</div>
					<a href="assets/docs/Resume.pdf">
					<img src="assets/img/resume.png" style="left:20%;height:400px;"/>
					</a>
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
				<div class="column-left">
					<a href="https://github.com/natedooley" class="social-icon v">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 				width="50px" height="50px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
					<path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M408.027,408.027
					c-19.76,19.759-42.756,35.267-68.354,46.094c-6.502,2.75-13.105,5.164-19.801,7.246V423c0-20.167-6.916-35-20.75-44.5
					c8.668-0.833,16.625-2,23.875-3.5s14.918-3.667,23-6.5c8.084-2.833,15.334-6.208,21.75-10.125c6.418-3.917,12.584-9,18.5-15.25
					c5.918-6.25,10.875-13.333,14.875-21.25s7.168-17.417,9.5-28.5c2.334-11.083,3.5-23.292,3.5-36.625c0-25.833-8.416-47.833-25.25-66
					c7.668-20,6.834-41.75-2.5-65.25l-6.25-0.75c-4.332-0.5-12.125,1.333-23.375,5.5s-23.875,11-37.875,20.5
					c-19.832-5.5-40.416-8.25-61.749-8.25c-21.5,0-42,2.75-61.5,8.25c-8.833-6-17.208-10.958-25.125-14.875s-14.25-6.583-19-8
					s-9.167-2.292-13.25-2.625s-6.708-0.417-7.875-0.25s-2,0.333-2.5,0.5c-9.333,23.667-10.167,45.417-2.5,65.25
					c-16.833,18.167-25.25,40.167-25.25,66c0,13.333,1.167,25.542,3.5,36.625s5.5,20.583,9.5,28.5s8.958,15,14.875,21.25
					s12.083,11.333,18.5,15.25s13.667,7.292,21.75,10.125s15.75,5,23,6.5s15.208,2.667,23.875,3.5c-13.667,9.333-20.5,24.167-20.5,44.5
					v39.115c-7.549-2.247-14.99-4.902-22.3-7.994c-25.597-10.827-48.594-26.335-68.353-46.094
					c-19.758-19.758-35.267-42.756-46.093-68.354C46.679,313.195,41,285.043,41,256s5.679-57.195,16.879-83.675
					c10.827-25.597,26.335-48.594,46.093-68.353c19.758-19.759,42.756-35.267,68.353-46.093C198.805,46.679,226.957,41,256,41
					s57.195,5.679,83.676,16.879c25.598,10.827,48.594,26.335,68.354,46.093c19.758,19.758,35.266,42.756,46.092,68.353
					C465.32,198.805,471,226.957,471,256s-5.68,57.195-16.879,83.675C443.295,365.271,427.785,388.27,408.027,408.027z" style="fill:#c3c3c3;stroke-width:0.01"/>
					</svg>
					</a>
				</div>
				<div class="column-center">
					<a href="#" class="social-icon fb">
					<svg height="50" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 2048 2048" width="50" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><style type="text/css">
   					<![CDATA[
    				.fil2 {fill:none}
  					.fil0 {fill:#424242}
  					.fil1 {fill:#424242;fill-rule:nonzero}
  					]]>
 					</style></defs><g id="Layer_x0020_1"><g id="_333160488"><g><path class="fil0" d="M1647.03 1559.85l43.767 0c55.6619,0 101.202,-45.5398 101.202,-101.202l0 -869.293c0,-55.6619 -45.5398,-101.202 -101.202,-101.202l-43.767 0 0 1071.7z" id="_333160872"/><path class="fil0" d="M1028.28 1165.29l-1.1941 0.839764 -3.08977 -2.17559 -3.08977 2.17559 -1.1941 -0.839764c-256.16,-180.406 -507.358,-373.438 -763.717,-562.128l68.3245 -107.101 74.6469 -6.10394 1.99725 -1.80236 620.021 462.933 3.01063 -2.2311 3.01063 2.2311 620.021 -462.933 1.99725 1.80236 74.6469 6.10394 68.3245 107.101c-256.358,188.691 -507.557,381.722 -763.717,562.128z" id="_333160368"/><path class="fil0" d="M400.968 1559.85l-43.767 0c-55.6619,0 -101.202,-45.5398 -101.202,-101.202l0 -869.293c0,-55.6619 45.5398,-101.202 101.202,-101.202l43.767 0 0 1071.7z" id="_333160728"/></g><polygon class="fil1" id="_333160440" points="366.182,1509.25 1681.82,1509.25 1681.82,1559.85 366.182,1559.85 "/><polygon class="fil1" id="_333160752" points="366.182,488.152 1681.82,488.152 1681.82,538.754 366.182,538.754 "/></g></g><rect class="fil2" height="2048" width="2048"/></svg>
					</a>
				</div>
				<div class="column-right">
					<a href="https://www.linkedin.com/in/nate-dooley-7850048b/" class="social-icon l">
					<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" style="fill:#C3C3C3;stroke-width:0.01"/>
					</svg>
					</a>
				</div>
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
		<link rel="stylesheet" href="assets/css/main.css" type="text/css" />
		<link rel="stylesheet" href="assets/css/hamburger.css" type="text/css" />
		<link rel="stylesheet" href="assets/css/grid.css" type="text/css" />
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet">
</html>
