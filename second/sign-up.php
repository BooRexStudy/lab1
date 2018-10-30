<?php
session_start();
include '../db.php';
include '../header.php';
include '../functions.php';

echo "<h3>Sign Up | Sign In</h3><hr><div class='row'>";

$signUpTemplate =
"<form action='#' method='POST' class='col-md-6 border-right'>
    <input type='hidden' name='sign-up-form-sent'>
    <div class='form-group'>
        <input type='email' name='email' class='form-control' placeholder='Email Address'>
    </div>
    <div class='form-group'>
        <input type='password' name='password' class='form-control' placeholder='Password'>
    </div>
    <div class='form-group'>
        <input type='password' name='confirm-password' class='form-control' placeholder='Confirm Password'>
    </div>
    <div class='form-group'>
        <input class='btn btn-success' type='submit' value='Sign Up'>
    </div>
</form>";
echo $signUpTemplate;

$signInTemplate =
    "<form action='#' method='POST' class='col-md-6'>
    <input type='hidden' name='sign-in-form-sent'>
    <div class='form-group'>
        <input type='email' name='email' class='form-control' placeholder='Email Address'>
    </div>
    <div class='form-group'>
        <input type='password' name='password' class='form-control' placeholder='Password'>
    </div>
    <div class='form-group'>
        <input class='btn btn-success' type='submit' value='Sign In'>
    </div>
</form>";
echo $signInTemplate;

if (isset($_POST['sign-up-form-sent'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $passwordConfirm = md5($_POST['confirm-password']);

    if ($password === $passwordConfirm) {
        signUpUser($DB, $email, $password);
        $successMsg = 'Successful sign up!';
    } else {
        $errorMsg = 'Passwords are wrong!';
    }
}

if (isset($_POST['sign-in-form-sent'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    if (isSignedUp($DB, $email, $password)) {
        $successMsg = 'Successful sign in! Hello ' . $email . '!';
    } else {
        $errorMsg = 'Passwords or email are wrong!';
    }
}

echo "</div>";

echo isset($errorMsg) ? "<div class='alert alert-danger'>$errorMsg</div>" : '';
echo isset($successMsg) ? "<div class='alert alert-success'>$successMsg</div>" : '';

include '../footer.php';
include '../back.php';