<?php
session_start();
include 'db.php';
include 'header.php';
include 'functions.php';

$lab1Link = 'first/index.php';
$lab2Link = 'second/index.php';

echo 'Make a choose:<br><br>';
$labsArr = [
    toLink('LAB #1', $lab1Link, 'btn btn-success'),
    toLink('LAB #2', $lab2Link, 'btn btn-success'),
];

echo implode(' ', $labsArr);

include 'footer.php';