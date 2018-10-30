<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'lab1';

// Create connection
$DB = new mysqli($server, $username, $password, $database);
// Check connection

if ($DB->connect_error) {
    die("Connection failed: " . $DB->connect_error);
}

