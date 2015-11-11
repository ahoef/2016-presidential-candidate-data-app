<!DOCTYPE html>
<html>

	<?php require("includes/head.php"); ?>

	<body>
		<?php require("includes/header.php"); ?>

		<section class="content-container">
			<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2">

				<li class="candidate">
					<img src="images/cropped/hillary-clinton.jpg" alt="Hillary Clinton" >
					<h3>Hillary Clinton</h3>, <h4>Democrat</h4>
					<h5>Former U.S. Secretary of State, Former Senator from New York</h5>
					<ul>
						<?php
							$results = $db->query("SELECT * FROM app_data WHERE candidate = 'Hillary Clinton'");
							require("includes/quote_loop.php");
						?>
					</ul>
					<div class="drawer-toggle"></div>
				</li>

				<li class="candidate">
					<img src="images/cropped/ben-carson.jpg" alt="Ben Carson" >
					<h3>Ben Carson</h3>, <h4>Republican</h4>
					<h5>Former Director of Pediatric Neurosurgery at Johns Hopkins Hospital</h5>
					<ul>
						<?php
							$results = $db->query("SELECT * FROM app_data WHERE candidate = 'Ben Carson'");
							require("includes/quote_loop.php");
						?>
					</ul>
					<div class="drawer-toggle"></div>
				</li>

				<li class="candidate">
					<img src="images/cropped/bernie-sanders.jpg" alt="Bernie Sanders" >
					<h3>Bernie Sanders</h3>, <h4>Democrat</h4>
					<h5>Senator from Vermont, Former member of the Vermont House of Representatives</h5>
					<ul>
						<?php
							$results = $db->query("SELECT * FROM app_data WHERE candidate = 'Bernie Sanders'");
							require("includes/quote_loop.php");
						?>
					</ul>
					<div class="drawer-toggle"></div>
				</li>

				<li class="candidate">
					<img src="images/cropped/donald-trump.jpg" alt="Donald Trump" >
					<h3>Donald Trump</h3>, <h4>Republican</h4>
					<h5>Chairman and President of The Trump Organization, Chairman of Trump Plaza Associates, LLC, Chairman of Trump Atlantic City Associates, Host of NBC reality show 'The Apprentice'</h5>
					<ul>
						<?php
							$results = $db->query("SELECT * FROM app_data WHERE candidate = 'Donald Trump'");
							require("includes/quote_loop.php");
						?>
					</ul>
					<div class="drawer-toggle"></div>
				</li>

				<li class="candidate">
					<img src="images/cropped/martin-omalley.jpg" alt="Martin O'Malley" >
					<h3>Martin O'Malley</h3>, <h4>Democrat</h4>
					<h5>Former Governor of Maryland</h5>
					<ul>
						<?php
							$results = $db->query("SELECT * FROM app_data WHERE candidate = 'Martin O\'Malley'");
							require("includes/quote_loop.php");
						?>
					</ul>
					<div class="drawer-toggle"></div>
				</li>

				<li class="candidate">
					<img src="images/cropped/marco-rubio.jpg" alt="Marco Rubio" >
					<h3>Marco Rubio</h3>, <h4>Republican</h4>
					<h5>Senator from Florida, Former Speaker of the Florida House of Representatives</h5>
					<ul>
						<?php
							$results = $db->query("SELECT * FROM app_data WHERE candidate = 'Marco Rubio'");
							require("includes/quote_loop.php");
						?>
					</ul>
					<div class="drawer-toggle"></div>
				</li>

				<li class="candidate">
					<img src="images/cropped/lawrence-lessig.jpg" alt="Lawrence Lessig" >
					<h3>Lawrence Lessig</h3>, <h4>Democrat</h4>
					<h5>Professor of Law at Harvard Law School, Founder of Creative Commons</h5>
					<ul>
						<?php
							$results = $db->query("SELECT * FROM app_data WHERE candidate = 'Lawrence Lessig'");
							require("includes/quote_loop.php");
						?>
					</ul>
					<div class="drawer-toggle"></div>
				</li>

				<li class="candidate">
					<img src="images/cropped/jeb-bush.jpg" alt="Jeb Bush" >
					<h3>Jeb Bush</h3>, <h4>Republican</h4>
					<h5>Governor of Florida</h5>
					<ul>
						<?php
							$results = $db->query("SELECT * FROM app_data WHERE candidate = 'Jeb Bush'");
							require("includes/quote_loop.php");
						?>
					</ul>
					<div class="drawer-toggle"></div>
				</li>
			</ul>

			<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2 polls-links">
				<li class="polls-link">
					<a href="http://elections.huffingtonpost.com/pollster/2016-national-democratic-primary" class="blue">
						2016 National Democratic Primary Polls
					</a>
				</li>

				<li class="polls-link">
					<a href="http://elections.huffingtonpost.com/pollster/2016-national-gop-primary">
						2016 National GOP Primary Polls
					</a>
				</li>
			</ul>

		</section>

		<section class="add-quote">
			<button>Add a Quote!</button>
		</section>

		<section class="form-section">
			<form method='POST' action='includes/add_quote.php' id='new-quote-form'>

					<label><strong>Who</strong> said it?&nbsp;&#42;</label>
					<select name="candidate" required>
						<option value="">Select Candidate</option>
						<option value="Hillary Clinton">Hillary Clinton</option>
						<option value="Ben Carson">Ben Carson</option>
						<option value="Bernie Sanders">Bernie Sanders</option>
						<option value="Donald Trump">Donald Trump</option>
						<option value="Martin O'Malley">Martin O'Malley</option>
						<option value="Marco Rubio">Marco Rubio</option>
						<option value="Lawrence Lessig">Lawrence Lessig</option>
						<option value="Jeb Bush">Jeb Bush</option>
					</select>

				<label><strong>What</strong> did he or she say?&nbsp;&#42;</label>
				<textarea type="text" name="quote" required></textarea>

				<label><strong>Where</strong> did he or she say it?&nbsp;&#42;</label>
				<input type="text" name="source" required ></input>

				<label><strong>When</strong> was it from?&nbsp;&#42;</label>
				<input type="text" name="date" required ></input>

				<label>&#42; required</label>
				<input type="submit" value="Submit"></input>
			</form> 

		</section>

		<?php require("includes/footer.php"); ?>

	</body>
</html>