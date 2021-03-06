<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = 'From: Ajesh';
$to = 'ajesh.eee@gmail.com';
$subject = 'Hello';

$body = "From: $name\n E-mail: $email\n Message: $message";

if ($_POST['submit']) {
	if (mail($to, $subject, $body, $from)) {
		echo "<p>Your Message has been sent!</p>";
	}
	else {
		echo "<p>Something went wrong, go back and try again!</p>";
	}
}
?>



<!Doctype HTML>
<html>
	<head>
		<title>Contact Me</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		

	</head>

	<body>
		<div id="container">
			<header>
				<nav id="main_link">
					<ul>
						<li>Home</li>
						<li>About</li>
						<li>Portfolio</li>
						<li>Resume</li>
						<li>Contact</li>

					</ul>
				</nav> 
				<nav id="social">
					<ul>
						<li><a href="https://www.facebook.com/ajesh.rkurup"><img src="Images/social_01.png"></a></li>
						<li><a href="https://twitter.com/ajeshrkurup"><img src="Images/social_02.png"></a></li>
						<li><a href="https://www.linkedin.com/in/ajeshrkurup"><img src="Images/social_06.png"></a></li>
					</ul>
				</nav>
			</header>
		
			<section id="section1">
				<h2>CONTACT ME</h2>
				<p>I'm currently available for freelance projects or full time work. <br>If you think I can help you, please get in touch with me using one of the methods below.</p>
			</section>
			<section id="section2">
				<ul>
					<li><a href="https://www.facebook.com/ajesh.rkurup"><img src="Images/facebook-02.png"><p>Like me on Facebook</p></a></li>
					<li><a href="https://twitter.com/ajeshrkurup"><img src="Images/twitter-02.png"><p>Follow me on Twitter</p></a></li>
					<li><a href="https://www.linkedin.com/in/ajeshrkurup"><img src="Images/linkedin-02.png"><p>Connect on LinkedIn</p></a></li>
					<li><a href="https://www.github.com/ajeshrkurup"><img src="Images/github-02.png"><p>Follow me on Github</p></a></li>
				</ul>
				<aside>
					<img src="Images/profile.jpg">
				</aside>
			</section>
		
			<div class="reset"></div>

			<div id="bottom_section">
				<section id="section3">
					<h2>Contact Information</h2>
					<p>Ajesh Rajasekhra Kurup</p>
					<p>Bellevue, WA 98007</p>
					<p>Ph No: 650-201-5694</p>
					<p>Email : ajeshkurup84@gmail.com</p>

					<aside id="location"></aside>	

				</section>
				<section id="section4">
					<h2>Send me an Email</h2>
					<form method="post" action="contact.php">
						<label>Your Name:</label>
						<input type="text" name="name" required>	
						<label>Your Email Address:</label>
						<input type="text" name="email" required>
						<label>Message:</label>
						<textarea placeholder="Type your message" name="message" ></textarea>
						<input type="submit" name="submit" value="Send" id="submit">	
					</form>
						
				</section>
			</div> <!-- bottom_section -->

			<div class="reset"></div>

			<footer>
				<nav id="main_link">
					<ul>
						<li>Home</li>
						<li>About</li>
						<li>Portfolio</li>
						<li>Resume</li>
						<li>Contact</li>

					</ul>
				</nav> 
				<nav id="social">
					<ul>
						<li><a href="https://www.facebook.com/ajesh.rkurup"><img src="Images/social_01.png"></a></li>
						<li><a href="https://twitter.com/ajeshrkurup"><img src="Images/social_02.png"></a></li>
						<li><a href="https://www.linkedin.com/in/ajeshrkurup"><img src="Images/social_06.png"></a></li>
					</ul>
				</nav>
			</footer>

		</div> <!-- Container -->	
		
		<script type="text/javascript" src="script.js"></script>

	</body>

</html>
