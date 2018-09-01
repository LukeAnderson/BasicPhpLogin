<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <title>Document</title>
</head>
<body id="signup-body">
    
    <div class="login-page">
        <div class="form">
            <form class="register-form" action = "includes/signup.inc.php" method = "POST">
                <input type="text" name = 'username' placeholder="Username" />
                <input type="password" name ='password' placeholder="password" />
                <input type="text" name = 'email' placeholder="email address" />
                <button name="submit">create</button>
                <p class="message">Already registered? <a href="index.html">Sign In</a></p>
            </form>
        </div>
    </div>

</body>
</html>