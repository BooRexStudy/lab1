<?php

include '../db.php';
include '../header.php';
include '../functions.php';
include 'filmsArr.php';

$filmTemplate =
    "<div class='card text-dark m-2' style='width: 18rem;'>
    <img height='383px' src='%s' alt='%s'/>
    <span class='text-center' style=\"margin-top: 1rem\">%s | <b>%s</b></span>
    <hr>
    <p class='text-center'><i>%s</i></p>
</div>";
$formTemplate =
    "<form method='POST' action='#'>
    <label for='perPageFilms'>Films per page: </label>
    <input name='numberPerPage' id='perPageFilms' type='number' min='1' max='%s' value='%s'/>
    <input class='btn btn-success' type='submit' value='Accept'>
</form>";

$filmsCount = count($films);
$numberPerPage = $_POST['numberPerPage'] ?? $filmsCount;
echo sprintf($formTemplate, $filmsCount, $numberPerPage);
echo "<div class='row text-center'>";
$counter = 0;

$films = getFilms($DB);

foreach ($films as $film) {
    if (++$counter > $numberPerPage) {
        continue;
    }

    echo sprintf($filmTemplate,
        $film['image'],
        $film['name'],
        $film['name'],
        $film['company'],
        $film['description']
    );
}

echo "</div>";

include '../footer.php';
include '../back.php';