<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
	
	Personalized:
		by Jesse Offei-Nkansah
		09.22.2016
-->
<html>
	<head>
		<title>Jesse Offei-Nkansah</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<? $page = 'form.php'; ?>
		<?php
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$name = $email = $site = $comment = $request = $txt = "";
				$nameErr = $emailErr = "";
				$name = test_input($_POST["name"]);
				$email = test_input($_POST["email"]);
				$comment = test_input($_POST["comments"]);
				$holder = "";
				$str = $comment;
				if($_POST['resume'] == "on"){
					$request = "Yes";
				}else{
					$request= "No";
				}
			}

			function test_input($data){
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>
	</head>
	<body>

		<!-- Sidebar -->
			<section id="sidebar" class="alpha">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">Welcome</a></li>
							<li><a href="#one">About</a></li>
							<li><a href="#two">Literature</a></li>
							<li><a href="#three">Projects</a></li>
							<li><a href="#four">Get In Touch</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>Jesse Offei-Nkansah</h1>
							<p>A computer science and computer engineering technology<br>student with a passion for coding and writing.</p>
							
							<ul class="actions">
								<li><a href="#one" class="button scrolly">Learn more</a></li>
							</ul>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<a href="#" class="image"><img src="images/coding-pic.jpg" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Coding</h2>
									<p>The story of Jesse's comping to learn and love code.  See where it all began!</p>
									<ul class="actions">
										<li><a href="https://cs.mtsu.edu/~jao3h/about/coding.html" class="button">Learn more</a></li>
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="images/literature-pic.jpg" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Writing</h2>
									<p>Peek into Jesse's passion for the written word and see how it has shaped him to the man he is today.</p>
									<ul class="actions">
										<li><a href="https://cs.mtsu.edu/~jao3h/about/writing.html" class="button">Learn more</a></li>
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="images/recreation-pic.jpg" alt="" data-position="25% 25%" /></a>
							<div class="content">
								<div class="inner">
									<h2>Recreation</h2>
									<p>Figure out what such a busy man does with such little downtime.</p>
									<ul class="actions">
										<li><a href="https://cs.mtsu.edu/~jao3h/about/recreation.html" class="button">Learn more</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>Literature</h2>
							<p>For a man that loves programming, it's no wonder he loves writing more than code.  See all the wonderful pieces of work that come out of his own mind.</p>
							<div class="features">
							
								<section>
									<a href="https://cs.mtsu.edu/~jao3h/literature/dreams.html">
									
										<span class="icon major fa-comment-o"></span>
										<h3>Dreams</h3>
										<p>A poem inducing hope and faith in humanity and incites you to follow your dreams.</p>
									
									</a>
								</section>
								
								
								<section>
									<a href="https://cs.mtsu.edu/~jao3h/literature/stand.html">
										<span class="icon major fa-male"></span>
										<h3>Still I Stand</h3>
										<p>A poem inspired by Jesse's favorite poet, Maya Angelou.</p>
									</a>
								</section>
								
								
								<section>
									<a href="https://cs.mtsu.edu/~jao3h/literature/adam.html">
										<span class="icon major fa-heartbeat"></span>
										<h3>Adam's Story</h3>
										<p>One heart wrenching chapter from Jesse's latest, unfinished novel "Broken"</p>
									</a>
								</section>
								
								
								<section>
									<a href="https://cs.mtsu.edu/~jao3h/literature/pieceMe.html">
										<span class="icon major fa-heart"></span>
										<h3>Peice Me</h3>
										<p>A love poem that proves that it is truely worthy of the name</p>
									</a>
								</section>
								
								
								<section>
									<a href="https://cs.mtsu.edu/~jao3h/literature/malik.html">
										<span class="icon major fa-book"></span>
										<h3>Malik &copy;</h3>
										<p>The Story of a boy that would give up everything to keep a friend safe.</br>*To Come</p>
									</a>
								</section>
								
								
								<section>
									<a href="https://cs.mtsu.edu/~jao3h/literature/mardise.html">
										<span class="icon major fa-bolt"></span>
										<h3>Mardise</h3>
										<p>A Greek Myth about true love.</p>
									</a>
								</section>
							</div>
							<ul class="actions">
								<li><a href="https://cs.mtsu.edu/~jao3h/literature" class="button">Learn more</a></li>
							</ul>
						</div>
					</section>
					
				<!--Three-->
					<section id="three" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>Projects</h2>
							<p>Sorry, this section is under maintainence</p>
						</div>
					</section>

				<!-- Four -->
					<section id="four" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>Get in touch</h2>
							<p>If you liked what you saw here and you want to know even more, request a resume. Have any suggestions on how to improve this site - what to add, what to change, what to fix?  Is there was something that you wanted to know, but didn't find out here?  Have any challenging projects to suggest to Jesse? Send him a message about it below.</p>
							<div class="split style1">
								<section>
									<?php 
										
										$myFile = fopen("messages.txt", "a");
										$mydate = getdate();
										$txt = "Date: $mydate[mon]/$mydate[mday]/$mydate[year] $mydate[hours]:$mydate[minutes]\n";
										fwrite($myFile, $txt);
										$txt = "From: $name\n";
										fwrite($myFile, $txt);
										$txt = "E-mail Address: $email\n";
										fwrite($myFile, $txt);
										if($comment == "") $comment = "N/A";
										$txt = "Comments:\n$comment\n";
										fwrite($myFile, $txt);
										$txt = "Requested Resume: $request\n";
										fwrite($myFile, $txt);
										$txt = "-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------\n";
										fwrite($myFile, $txt);
										$page = 'thanks.php'; 
										
										$name = $email = $comment = "";
									?>
									<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
										<div class="field half first">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" value="<?php echo $name; ?>"/>
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" value="<?php echo $email; ?>"/>
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="comments" id="message" rows="5"><?php echo $comment ?></textarea>
										</div>
										<div class="6u$ 12u$(small)">
											<input type="checkbox" id="resume" name="resume">
											<label for="resume" value="on" <?php if($_POST['resume']) echo "checked = 'checked'"; ?>>Request Resume</label>
										</div>
										<ul class="actions">
											<li><type="submit" class="button submit" name="submit" value="Submit"/>Send Message</li>
										</ul>
									</form>
									<?php include($page) ?>
								</section>
								<section>
									<ul class="contact">
										<!--<li>
											<h3>Address</h3>
											<span>12345 Somewhere Road #654<br />
											Nashville, TN 00000-0000<br />
											USA</span>
										</li>-->
										<li>
											<h3>Email</h3>
											<a href="#">jeoffei@gmail.com</a>
										</li>
										<li>
											<h3>Phone</h3>
											<span>(000) 000-0000</span>
										</li>
										<li>
											<h3>Social</h3>
											<ul class="icons">
												<li><a href="https://twitter.com/_etc_etera" class="fa-twitter"><span class="label">Twitter</span></a></li>
												<!--<li><a href="https://www.facebook.com/jesse.offeinkansah" class="fa-facebook"><span class="label">Facebook</span></a></li>-->
												<li><a href="#" class="fa-github"><span class="label">GitHub</span></a></li>
												<!--<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>-->
												<li><a href="https://www.linkedin.com/in/jesse-offei-nkansah-03348193" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>