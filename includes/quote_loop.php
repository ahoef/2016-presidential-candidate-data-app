<?php $numrows = mysql_num_rows($query);

if($numrows > 0){
	while( $row = mysql_fetch_assoc( $query ) ){
		$quote = $row['quote'];
		$source = $row['source'];
		$date = $row['date'];
		echo '<li class="quote">"'.$quote.'" &mdash; '.$source.', '.$date.'</li>';
	}
}

?>