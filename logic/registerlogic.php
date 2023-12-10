<?php
session_start();
// datenbank registerlogic

include_once("../data/userService.php");

$firstname = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$city = $_POST['city'];
$street = $_POST['street'];
$zipCode = $_POST['zipCode'];

 // Validation
 if (strlen($firstname) < 3) {
    $errors['firstname'] = "Name must be 3 characters or longer";
}
if (strlen($lastname) < 3) {
    $errors['lastname'] = "Lastname must be 3 characters or longer";
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Valid email is required";
}
if (empty($password)) {
    $errors['password'] = "Password is required";
}
if ($password !== $confirmPassword) {
    $errors['confirmPassword'] = "Passwords do not match";
}
if (strlen($city) < 2) {
    $errors['city'] = "City must be 2 characters or longer";
}
if (strlen($street) < 2) {
    $errors['street'] = "Street must be 2 characters or longer";
}
if (!ctype_digit($zipCode) || strlen($zipCode) === 4) {
    $errors['zipCode'] = "Zip code must be 4 integers";
}

if (count($errors) === 0) {
    register($firstname, $lastname, $email, $password, $city, $street, $zipCode);
}

header("Location: ../login.php");    

// ab hier old logic
/*
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirmPassword = htmlspecialchars($_POST['confirmPassword']);
    $city = htmlspecialchars($_POST['city']);
    $street = htmlspecialchars($_POST['street']);
    $zipCode = htmlspecialchars($_POST['zipCode']);

    // Validation
    if (strlen($name) < 3) {
        $errors['name'] = "Name must be 3 characters or longer";
    }
    if (strlen($lastname) < 3) {
        $errors['lastname'] = "Lastname must be 3 characters or longer";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Valid email is required";
    }
    if (empty($password)) {
        $errors['password'] = "Password is required";
    }
    if ($password !== $confirmPassword) {
        $errors['confirmPassword'] = "Passwords do not match";
    }
    if (strlen($city) < 2) {
        $errors['city'] = "City must be 2 characters or longer";
    }
    if (strlen($street) < 2) {
        $errors['street'] = "Street must be 2 characters or longer";
    }
    if (!ctype_digit($zipCode) || strlen($zipCode) < 2) {
        $errors['zipCode'] = "Zip code must be 2 integers or more";
    }

    if (count($errors) === 0) {
        $_SESSION['userData'] = [
            'name' => $name,
            'lastname' => $lastname,
            'email' => $email,
            'password' => $password, // TODO: hash the password
            'city' => $city,
            'street' => $street,
            'zipCode' => $zipCode
        ];

        header("Location: login.php");
        exit();
    }
}
*/
?>
