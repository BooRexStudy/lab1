<?php

// Show work with arrays
$msg = 'This is not my first script with PHP language';
$msgArr = explode(' ', $msg);

echo '<i>Show work with array</i>';
echo '<pre>'; print_r($msgArr); echo '</pre>' . '<hr>';

echo '<i>Convert array to string again</i><br><br>';
echo sprintf(
    '%s (Count of words %s)',
    implode(' ', $msgArr),
    count($msgArr)
);

