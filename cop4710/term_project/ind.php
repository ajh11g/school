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
					<li><a href="candidates.php">Candidates</a></li>
					<li><a href="issues.php">The Issues</a></li>
					<li><a href="poll.php">Polls</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper style1 first">
				<article class="container" id="top">
					<div class="row">
							<header>
								<h1>The Independent Party</h1>
							</header>
					</div>
				</article>
				<h2>The Candidates</h2>
				<!-- Dispaly the table for Dems -->
				<?php
					require('config/connection.php');
					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					} 

					$sql = "SELECT * FROM Candidates WHERE party='I'";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					        echo "<table><tr><th><b>Name:</b></th><th><b>Age:</b></th><th><b>Sex:</b></th><th><b>Home State:</b></th></tr>";
					        // output of the data
					        while($row = $result->fetch_assoc())
					        {
					        	echo "<tr><td>" . $row["name"] . 
					        	"</td><td>" . $row["age"] . 
					        	"</td><td>" . $row["sex"] . 
					        	"</td><td>" . $row["homeState"] . 
					        	"</td></tr>";
					        }
					        echo "</table>";
					} else {
					    echo "0 results<br>";
					}

					$conn->close();
				?>
			</div>

			<!-- UPDATE/DELETE Query -->
			<div class='wrapper style1 first'>
				<h2>See a mistake?</h2>
				<h3>Select a candidate to delete:</h3>
				<div class='container'>
					<form name='input' action='update.php' method='post'>
					
					<?php
						require('config/connection.php');
						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						} 

						$sql = "SELECT * FROM Candidates WHERE party='I'";
						$result = mysqli_query($conn, $sql);


						echo "<select name='selection'>";
						while ($row = $result->fetch_assoc())
						{
							echo "<option value= '" . $row['name'] . "''>" . $row["name"] . "</option>";
						}
						echo "</select>";
						$conn->close();
					?>
			<br>
			<input type='submit' name='delete' value='Delete'>
			</form>
		<br>
			<h3>Select a Candidate and make a correction:</h3>
			<form name="newEdit" action = "update.php" method="post">
			<?php
					require('config/connection.php');
					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					} 

					$sql = "SELECT * FROM Candidates WHERE party='I'";
					$result = mysqli_query($conn, $sql);


					echo "<select name='selection'>";
					while ($row = $result->fetch_assoc())
					{
						echo "<option value= '" . $row['name'] . "''>" . $row["name"] . "</option>";
					}
					echo "</select>";
					$conn->close();
			?>
				<br>
				<br>
				Updated Candidate Name: <input type="text" name="newName" placeholder="Enter Candidate Name">
				Updated Candidate Age: <br><input type="number" name="age" min="42" max="99"><br>
				Updated Candidate Gender: 
					<select id="select" name="sex">
					<option value="M">Male</option>
					<option value="F">Female</option>
					</select>
				Updated Party Affiliation:
					<select id="select" name="party">
						<option value="R">Republican</option>
						<option value="D">Democrat</option>
						<option value="I">Independent</option>
					</select>
					<br>
					<input type="text" name="state" placeholder="Enter 2-Letter State Abbreviation">
					<br>
				<input type="submit" name="newEdit" value="Submit Edit">
			</form>
			</div>
			</div>
			</div>

		<!-- Contact -->
			<div class="wrapper style4">
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
