<!DOCTYPE html>
<html>
	<head>

	  	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width,initial-scale=1" />

	  	<title>2016 Presidential Candidate Quotes</title>
	  	<meta name="description" content="Hear it from them! A website featuring quotes from 2016 U.S. Presidential Candidates, built by Alexandra Hoefinger">


	  	<link rel="icon" type="image/png" href="http://i.imgur.com/bsI3IOt.png">
	 	<link rel="stylesheet" href="styles/dest/base.min.css">
	  	<link href='//fonts.googleapis.com/css?family=Lato:300,400|Oswald:400,300' rel='stylesheet' type='text/css'>

	  	<?php require("includes/connect.php"); ?>

	  	<script src="dest/js/site.min.js"></script>

	</head>

	<body>
		<header>
			<h1>Hear it from them!</h1>
			<h2>Quotes from 2016 Presidential Candidates</h2>
		</header>

		<section>
			<form>
			</form>
		</section>

		<section class="content-container">
			<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2">

				<li class="candidate">
					<img src="images/cropped/hillary-clinton.jpg" alt="Hillary Clinton" >
					<h3>Hillary Clinton</h3>
					<h4>Democrat</h4>
					<h5>Former U.S. Secretary of State, Former Senator from New York</h5>
					<ul>
						<?php
							$query = mysql_query("SELECT * FROM app_data WHERE candidate = 'Hillary Clinton'");
							require("includes/quote_loop.php");
						?>
					</ul>
				</li>

				<li class="candidate">
					<img src="images/cropped/ben-carson.jpg" alt="Ben Carson" >
					<h3>Ben Carson</h3>
					<h4>Republican</h4>
					<h5>Former Director of Pediatric Neurosurgery at Johns Hopkins Hospital</h5>
					<ul>
						<?php
							$query = mysql_query("SELECT * FROM app_data WHERE candidate = 'Ben Carson'");
							require("includes/quote_loop.php");
						?>
					</ul>
				</li>

				<li class="candidate">
					<img src="images/cropped/bernie-sanders.jpg" alt="Bernie Sanders" >
					<h3>Bernie Sanders</h3>
					<h4>Democrat</h4>
					<h5>Senator from Vermont, Former member of the Vermont House of Representatives</h5>
					<ul>
						<?php
							$query = mysql_query("SELECT * FROM app_data WHERE candidate = 'Bernie Sanders'");
							require("includes/quote_loop.php");
						?>
					</ul>
				</li>

				<li class="candidate">
					<img src="images/cropped/donald-trump.jpg" alt="Donald Trump" >
					<h3>Donald Trump</h3>
					<h4>Republican</h4>
					<h5>Chairman and President of The Trump Organization, Chairman of Trump Plaza Associates, LLC, Chairman of Trump Atlantic City Associates, Host of NBC reality show 'The Apprentice'</h5>
					<ul>
						<?php
							$query = mysql_query("SELECT * FROM app_data WHERE candidate = 'Donald Trump'");
							require("includes/quote_loop.php");
						?>
					</ul>
				</li>

				<li class="candidate">
					<img src="images/cropped/martin-omalley.jpg" alt="Martin O'Malley" >
					<h3>Martin O'Malley</h3>
					<h4>Democrat</h4>
					<h5>Former Governor of Maryland</h5>
					<ul>
						<?php
							$query = mysql_query("SELECT * FROM app_data WHERE candidate = 'Martin O'Malley");
							require("includes/quote_loop.php");
						?>
					</ul>
				</li>

				<li class="candidate">
					<img src="images/cropped/marco-rubio.jpg" alt="Marco Rubio" >
					<h3>Marco Rubio</h3>
					<h4>Republican</h4>
					<h5>Senator from Florida, Former Speaker of the Florida House of Representatives</h5>
					<ul>
						<?php
							$query = mysql_query("SELECT * FROM app_data WHERE candidate = 'Marco Rubio'");
							require("includes/quote_loop.php");
						?>
					</ul>
				</li>

				<li class="candidate">
					<img src="images/cropped/lawrence-lessig.jpg" alt="Lawrence Lessig" >
					<h3>Lawrence Lessig</h3>
					<h4>Democrat</h4>
					<h5>Professor of Law at Harvard Law School, Founder of Creative Commons</h5>
					<ul>
						<?php
							$query = mysql_query("SELECT * FROM app_data WHERE candidate = 'Lawrence Lessig'");
							require("includes/quote_loop.php");
						?>
					</ul>
				</li>

				<li class="candidate">
					<img src="images/cropped/jeb-bush.jpg" alt="Jeb Bush" >
					<h3>Jeb Bush</h3>
					<h4>Republican</h4>
					<h5>Governor of Florida</h5>
					<ul>
						<?php
							$query = mysql_query("SELECT * FROM app_data WHERE candidate = 'Jeb Bush'");
							require("includes/quote_loop.php");
						?>
					</ul>
				</li>
			</ul>

		</section>
	</body>

	<footer>

		<p>Visit these links to view the most up-to-date poll results for each party:</p>
		<a href="http://elections.huffingtonpost.com/pollster/2016-national-democratic-primary">
			2016 National Democratic Primary
		</a>
		<br>
		<a href="http://elections.huffingtonpost.com/pollster/2016-national-gop-primary">
			2016 National GOP Primary
		</a>
		
	</footer>
</html>