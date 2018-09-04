<?php
$pageTitle = "Signup";
require_once("Shared/header.php");
?>

<body id="index-body">
    <div class="login-page">
        <div class="form">
            <form class="login-form" action = "includes/login.inc.php" method = "POST">
                <input type="text" name='username' placeholder="username"/>
                <input type="password" name='password'  placeholder="password"/>
                <button name="submit">login</button>
                <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
            </form>
        </div>
    </div>
</body>

<img src="Content/Images/satellite.png" width="250" class="satellite">

<?php
require_once("Shared/footer.php");
?>