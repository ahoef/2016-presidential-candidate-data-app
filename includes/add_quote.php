<!DOCTYPE html>
<html>

	<?php require("head.php"); ?>

	<body class="quote-submitted">
		<?php require("header.php"); ?>

			<?php
			try {

			    $sql = "INSERT INTO app_data (quote, candidate, source, date) VALUES (:quote, :candidate, :source, :date)";
			    
			    // set up pdo prepared statment
			    $stmt = $db->prepare($sql);
			    
			    // gather form data from the $_POST array
			    $quote = strip_tags( $_POST['quote'] );
				$candidate = strip_tags( $_POST['candidate'] );
				$source = strip_tags( $_POST['source'] );
				$date = strip_tags( $_POST['date'] );

				// bind to params in INSERT statement 
			    $stmt->bindParam(':quote', $quote);
				$stmt->bindParam(':candidate', $candidate);
				$stmt->bindParam(':source', $source);
				$stmt->bindParam(':date', $date);

				$stmt->execute();

			    echo "<section class='success-msg'><h3>Your quote is saved &mdash; Head back to see it!</h3><a href='../index.php'>Go Back</a></section>";
			    require("footer.php");

			    die();
			} catch(Exception $e) {
			    echo $e->getMessage();
			    die();
			}

			?>

	</body>
</html>
