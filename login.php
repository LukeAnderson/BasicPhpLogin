<?php
$pageTitle = "Signup";
require_once("Shared/header.php");
?>

<body id="index-body">
    <div class="login-page">
        <div class="form">
            <form class="login-form">
                <input type="text" placeholder="username" />
                <input type="password" placeholder="password" />
                <button>login</button>
                <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
            </form>
        </div>
    </div>
</body>

    <img src="https://purepng.com/public/uploads/large/purepng.com-military-jetflightvehiclejetplanemilitaryaircraftairplane-981525065891nmz02.png"
        width="250" class="plane">

<?php
require_once("Shared/footer.php");
?>