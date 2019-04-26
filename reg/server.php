<?php
session_start();

// variabler för form värden
$username = "";
$email    = "";
$errors = array();

// anslut till databas
$db = mysqli_connect('localhost', 'root', '', 'registration');

// Registrering av användare
if (isset($_POST['reg_user'])) {
    // alla värden i input form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password']);

    //Form validering så kollar att allt är korrekt ifyllt

    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
}

// Checka att användare inte
// redan existerar med samma
// användarnamn eller/och mail

$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);














/**
 * Created by PhpStorm.
 * User: 90alenie
 * Date: 2018-11-19
 * Time: 10:27
 */