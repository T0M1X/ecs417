<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<hgroup>
			<title>Portfolio Homepage</title>
			<link rel="stylesheet" href="reset.css" type="text/css"/>
			<link rel="stylesheet" href="home.css" type="text/css"/>
		</hgroup>
	</head>
	<header>
		<nav role="navigation" id = "links">
			<ul>
				<li id = "ball"><img src="ball.png" alt="ball" width = 60 height = 60><li>
				<li id = "l1"><a href="homepage.php">Atif Abdur-Rahman</a></li>
				<li id = "l1"><a href="about.html">About Me & Experience</a></li>
				<li id = "l1"><a href="skills.html">Skills & Education</a></li>
				<li id = "l1"><a href="projects.html">Projects</a></li>
				<li id = "l1"><a href="blog.php">Blog</a></li>
			</ul>
		</nav>
	</header>
	<body>
		<figure>
			<a href="https://github.com/T0M1X"><img src="github.png" alt="github" height="100" width="100" id="l2"></a>
			<a href="mailto:atif-a-r@hotmail.co.uk"><img src="email.png" alt="email" height="100" width="100" id="l2"></a>
			<a href="https://replit.com/@T0M1X"><img src="replit.png" alt="replit" height="100" width="100" id="l2"></a>
			<a href="https://www.linkedin.com/in/atif-abdur-rahman-6241a3189/"><img src="linked.png" alt="linkedin" height="100" width="100" id="l2"></a>
		</figure>
		<section>
			<br>
			<br>
			<h1>Welcome to my Portfolio</h1>
			<br>
			<img src="ball.png" alt="ball" width = 60 height = 60 class="center">
			<br>
			<br>
			<br>
			<br>
			<?php
				session_start();
				if(isset($_SESSION['person'])){
					echo "<a href='logout.php'><img src='logout.png' alt='logout' class='center' id = 'login'></img></a>";
				}
				else {
					echo "<a href='login.html'><img src='login.png' alt='login' class='center' id = 'login'></img></a>";
				}
			?>
		</section>
		<br>
		<footer>
			<p>© Atif Abdur-Rahman 2021</p>
		</footer>
	</body>
</html>
