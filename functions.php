<?php

/**
 * Convert plain text to link
 *
 * @param string $text
 * @param string $link
 * @param string $class
 *
 * @return string
 */
function toLink(string $text, string $link, string $class = '')
{
    return "<a class='$class' href='$link'>$text</a>";
}

/**
 * Check if user is signed up in application
 *
 * @param $DB
 * @param string $email
 * @param string $password
 *
 * @return bool
 */
function isSignedUp($DB, string $email, string $password)
{
    $sql = "SELECT email, password FROM users;";
    $response = $DB->query($sql);

    if ($response->num_rows > 0) {
        // output data of each row

        while ($row = $response->fetch_assoc()) {
            if ($row["email"] == $email && $row["password"] == $password) {
                $_SESSION['authorized'] = 1;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                return true;
            }
        }
    }

    $DB->close();

    return false;
}

/**
 * @param $DB
 * @param string $email
 * @param string $password
 *
 * @return bool
 */
function signUpUser($DB, string $email, string $password){
    $sql = sprintf("INSERT INTO users(email, password) VALUES ('%s', '%s');", $email, $password);
    $response = $DB->query($sql);
    $DB->close();
    return $response;
}

function getFilms($DB) {
    $sql = "SELECT `name`,`company`,`image`,`description` FROM films;";
    $response = $DB->query($sql);

    $films = [];

    if ($response->num_rows > 0) {
        while ($row = $response->fetch_assoc()) {
            $films[] = [
                'name'          => $row['name'],
                'company'       => $row['company'],
                'image'         => $row['image'],
                'description'   => $row['description']
            ];
        }
    }

    $DB->close();

    return $films;
}