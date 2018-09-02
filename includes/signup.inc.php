<?php

require_once("databaseHandler.php");

$signupURL = "../signup.php";

// prepare and bind
$stmt = $conn->prepare("INSERT INTO users (username, password, email_address) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $password, $email);

// set parameters and execute
$username = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["password"]);
$email = htmlspecialchars($_POST["email"]);
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: " . $signupURL); /* Redirect browser */
exit();