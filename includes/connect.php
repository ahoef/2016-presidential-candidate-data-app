<?php
// remove before live
ini_set('display_errors', 'On');


try {
    $dsn = 'mysql:host=localhost;dbname=presidential_candidate_quotes;port=8888';
    $username = 'root';
    $password = 'root';

    $db = new PDO($dsn, $username, $password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec('SET NAMES utf8');

} catch(Exception $e) {
    echo $e->getMessage();
    die();
}

?>