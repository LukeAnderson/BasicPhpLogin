<?php
$pageTitle = "Signup";
require_once("Shared/header.php");
?>

<body id="signup-body">
    <div class="login-page">
        <div class="form">
            <form class="register-form" action = "includes/signup.inc.php" method = "POST">
                <input type="text" name = 'username' placeholder="username" />
                <input type="password" name ='password' placeholder="password" />
                <input type="text" name = 'email' placeholder="email address" />
                <button name="submit">create</button>
                <p class="message">Already registered? <a href="login.php">Sign In</a></p>
            </form>
        </div>
    </div>
</body>

<?php
require_once("Shared/footer.php");
?>