<?php

$all_quotes = $results->fetchAll(PDO::FETCH_ASSOC);

foreach($all_quotes as $single_quote) {
	echo '<li class="quote">"'.$single_quote["quote"].'" <span class="quote-data">&mdash; '.$single_quote["source"].', '.$single_quote["date"].'</span></li>';
}

?>