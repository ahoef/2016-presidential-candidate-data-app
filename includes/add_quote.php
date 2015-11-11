<!DOCTYPE html>
<html>

	<?php require("head.php"); ?>

	<body class="quote-submitted">
		<?php require("header.php"); ?>

		<?php

			function validate_input($data) {
			 	$data = trim($data);
			  	$data = stripslashes($data);
			  	$data = htmlspecialchars($data);
			  	$data = strip_tags($data);
			  	return $data;
			}

			// gather and validate data from $_POST array
			$quote = validate_input($_POST['quote']);
			$candidate = validate_input($_POST['candidate']);
			$source = validate_input($_POST['source']);
			$date = validate_input($_POST['date']);

			// only send form data to db if all fields are filled out
			if (!empty($candidate) and 
				!empty($quote) and
				!empty($source) and
				!empty($date) ) {

				try {
				    $sql = "INSERT INTO app_data (quote, candidate, source, date) VALUES (:quote, :candidate, :source, :date)";
				    
				    // set up pdo prepared statment
				    $stmt = $db->prepare($sql);

					// bind to params in INSERT statement 
				    $stmt->bindParam(':quote', $quote);
					$stmt->bindParam(':candidate', $candidate);
					$stmt->bindParam(':source', $source);
					$stmt->bindParam(':date', $date);

					// run sql
					$stmt->execute();

					// display success message if the request succeeded
				    echo "<section class='result-msg'><h3>Your entry is saved &mdash; Head back to see it!</h3>";

				} catch(Exception $e) {

				    // display general error message if failure
				    echo "<section class='result-msg'><h3>Something went wrong &mdash; Head back to try again!</h3>";

				}

			} else {
				// display error message if fields are empty
				echo "<section class='result-msg'><h3>Looks like you forgot to fill out all the entry fields &mdash; Head back to try again!</h3>";
			}

			// include back button & footer
			echo "<a href='../index.php'>Go Back</a></section>";
			require("footer.php");
		?>

	</body>
</html>
