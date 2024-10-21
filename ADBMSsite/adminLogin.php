<?php 
require_once 'Includes_signup/config_session.inc.php';
require_once 'Includes_signup/signup_view.inc.php';
require_once 'Includes_login/login_view.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IMS for Baranggay ID Registration</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
        <?php include 'adminLoginHeader.php'; ?>

        <div class="bg-img">

            <form action="Includes_login/login.inc.php" class="container" method="post">
                <h2 style="text-align: center;">Log In</h2>
                
                <div class="input-group">
                    <input type="text" placeholder=" " name="username" required>
                    <label for="username">Username</label>
                </div>

                <div class="input-group">
                    <input type="password" placeholder=" " name="pwd" required>
                    <label for="pwd">Password</label>
                </div>

                <button type="submit" class="btn">Log In</button>

                <p>Don't have an account? <a href="adminSignup.php">Create an account</a></p>

            </form>
        
        </div>

        <!-- Footer Section -->
        <footer>
            <p>&copy; 2024 Your Website Name. All rights reserved.</p>
        </footer>
</body>

</html>