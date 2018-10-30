<?php
session_start();
include '../db.php';
include '../header.php';
include '../functions.php';

echo '<b>LAB #2</b><br><br>';

$lab1Link = 'films.php';
$lab2Link = 'sign-up.php';

echo 'Make a choose:<br><br>';
$labsArr = [
    toLink('Films', $lab1Link, 'btn btn-primary'),
    toLink('Sign Up', $lab2Link, 'btn btn-primary'),
];

echo implode(' ', $labsArr);

include '../back.php';
include '../footer.php';

