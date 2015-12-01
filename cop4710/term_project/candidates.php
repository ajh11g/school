<!DOCTYPE HTML>
<!--
	Miniport by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Miniport by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="index.php">Home</a></li>
					<li><a href="#work">Candidates</a></li>
					<li><a href="issues.php">The Issues</a></li>
					<li><a href="poll.php">Polls</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper style1 first">
				<article class="container" id="top">
					<div class="row">
						<div class="8u 12u(mobile)">
							<header>
								<h1>CANDIDATES</h1>
								<p>Find your ideal candidate.</p>
								<br>
							</header>

							<!-- Start select feature -->
							<h3>Search for a candidate</h3>
									<form name="name" action="test.php" method="post">
									Search by Name: <input type="text" name="name" placeholder="Enter Candidate Name"><br>
									<input type="submit" name="nameSearch" value="Submit">
									</form>
							<br>
							<h3>Search by Party Affiliation:</h3>
							<form name="input" action="test.php" method="post">
								<select name="parties">
								<option value="r">Republican</option>
								<option value="d">Democrat</option>
								<option value="i">Independent</option>
								</select>
							<br>
							<input type="submit" name="partySearch" value="Search">
							</form>
							<br>

							<!-- Start insert feature -->
							<h3>Write in your candidate!</h3>
								<form name="input" action = "insert.php" method="post">
								Candidate Name: <input type="text" name="name" placeholder="Enter Candidate Name">
								Candidate Age: <br><input type="number" name="age" min="42" max="99"><br>
								Candidate Gender: 
									<select id="select" name="sex">
									<option value="M">Male</option>
									<option value="F">Female</option>
									</select>
								Party Affiliation:
									<select id="select" name="party">
										<option value="R">Republican</option>
										<option value="D">Democrat</option>
										<option value="I">Independent</option>
									</select>
								Home State:
									<input type="text" name="state" placeholder="Enter 2-Letter State Abbreviation">
								<br>
								<input type="submit" value="Submit">
								</form>
						</div>
					</div>
				</article>
			</div>

		<!-- Work -->
			<div class="wrapper style2">
				<article id="work">
					<header>
						<h2>The Parties</h2>
						<p>Click the party to learn more about their candidates.</p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<h3><a href="dems.php">Democrat</a></h3>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<h3><a href="gop.php">Republican</a></h3>
									<p></p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<h3><a href="ind.php">Independent</a></h3>
									<p></p>
								</section>
							</div>
						</div>
					</div>
				</article>
			</div>

		<!-- Contact -->
			<div class="wrapper style4">
				<article id="contact" class="container 75%">
						<div class="row">
							<div class="12u">
								<hr />
								<h3>See more...</h3>
								<ul class="social">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
									<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
									<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
									<!--
									<li><a href="#" class="icon fa-rss"><span>RSS</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span>Instagram</span></a></li>
									<li><a href="#" class="icon fa-foursquare"><span>Foursquare</span></a></li>
									<li><a href="#" class="icon fa-skype"><span>Skype</span></a></li>
									<li><a href="#" class="icon fa-soundcloud"><span>Soundcloud</span></a></li>
									<li><a href="#" class="icon fa-youtube"><span>YouTube</span></a></li>
									<li><a href="#" class="icon fa-blogger"><span>Blogger</span></a></li>
									<li><a href="#" class="icon fa-flickr"><span>Flickr</span></a></li>
									<li><a href="#" class="icon fa-vimeo"><span>Vimeo</span></a></li>
									-->
								</ul>
								<hr />
							</div>
						</div>
					<footer>
						<ul id="copyright">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>
				</article>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
