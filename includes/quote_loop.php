<?php

$all_quotes = $results->fetchAll(PDO::FETCH_ASSOC);

$hidden = "";

foreach($all_quotes as $key=>$single_quote) {
	if($key > 2) {
		$hidden = "drawer hidden";
	}
	echo '<li class="quote '.$hidden.'">"'.$single_quote["quote"].'" <span class="quote-data">&mdash; '.$single_quote["source"].', '.$single_quote["date"].'</span></li>';
}

?>