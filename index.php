<?php

include 'header.php';
include 'functions.php';

$lab1Link = 'first/index.php';

echo 'Make a choose:<br><br>';
$labsArr = [
    toLink('LAB #1', 'first/index.php', 'btn btn-success'),
];

echo implode(' ', $labsArr);

include 'footer.php';