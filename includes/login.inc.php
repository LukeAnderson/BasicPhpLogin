<?php

require_once("databaseHandler.php");//conn

const LOGIN_URL = "../login.php";
function GoToLogin($msg){
    if(!empty($msg))
        $msg = "?".$msg;
    header("Location: " .LOGIN_URL.$msg);
    exit();
}

//if form button was not clicked
if(!isset($_POST['submit'])){
    GoToLogin("submit=unclicked");
}
$_POST['submit'] = 1;


foreach ($_POST as $name => $val){
    if(empty($_POST[$name]))
    {
        GoToLogin($name."=empty");
    }
}



#check if input characters are valid
if(!ctype_alnum($_POST['username']))
{
    GoToLogin("username=invalid");
}


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

GoToLogin("");