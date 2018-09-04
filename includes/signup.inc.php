<?php

require_once("databaseHandler.php");

$signupURL = "../signup.php";

// prepare and bind
$stmt = $conn->prepare("INSERT INTO users (username, password, email_address) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $password, $email);

// set parameters and execute
$username = htmlspecialchars($_POST["username"]));
$password = htmlspecialchars($_POST["password"]));
$email = htmlspecialchars($_POST["email"]));
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: " . $signupURL); /* Redirect browser */
exit();


/*
XSS:
htmlspecialchars prevents XSS attacks.

SQL injection:
data is santized when using prepared statments like above. Prepared statements is the go to way to
for preventing SQL injection.


Otherwise you have to sanatize the data using mysqli_real_escape_string like so
$username = mysqli_real_escape_string($conn,$_POST["username"]);

However mysqli_real_escape_string is not 100% safe against SQL injection.
You have to use something like a strict whitelist to be sure you are secure in preventing SQL injection.
*/