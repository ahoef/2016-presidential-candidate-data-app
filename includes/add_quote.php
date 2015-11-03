<?php 
	$quote = strip_tags( $_POST['quote'] );
	$candidate = strip_tags( $_POST['candidate'] );
	$source = strip_tags( $_POST['source'] );
	$date = strip_tags( $_POST['date'] );

	require("includes/connect.php");

	// this is breaking:
	mysql_query("INSERT INTO app_data VALUES ('', '$quote', '$candidate', '$source', '$date', '', '')");

	mysql_close();
?>