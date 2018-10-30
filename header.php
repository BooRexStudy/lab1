<html>
<head>
    <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
            crossorigin="anonymous"
    >
</head>
<body class="container">

<?php

$author = 'Oleg Britvin';

echo '<hr><b>Web-development labs</b> | ' . $author;
echo $_SESSION['authorized'] ?
    sprintf("<span style=''> | You are logged in as, <b>%s</b> ~ <a href='./logout.php'>Logout</a></span>", $_SESSION['email'])
    : '';
echo '<hr>';

