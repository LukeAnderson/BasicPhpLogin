<?php

require_once("databaseHandler.php");

$loginURL = "../login.php";
var_dump($_POST);


// prepare and bind
$stmt = $conn->prepare("SELECT email_address FROM users WHERE username=?");
$stmt->bind_param("s", $username);

/* bind result variable */
mysqli_stmt_bind_result($stmt, $result);

// set parameters and execute
$username = htmlspecialchars($_POST["username"]);
$stmt->execute();
/* fetch value */
mysqli_stmt_fetch($stmt);

echo($result);


$stmt->close();
$conn->close();

//header("Location: " . $loginURL); /* Redirect browser */
//exit();



//$stmt = $conn->prepare("SELECT email_address FROM users WHERE username=?");

