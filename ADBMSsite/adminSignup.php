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
    <?php include 'header.php'; ?>

    <div class="bg-img">
        <form action="Includes_signup/signup.inc.php" class="container" method="post">
            <h3>Admin Account Registration</h3>

            <div class="input-group">
                <input type="text" id="username" placeholder=" " name="username" required>
                <label for="username"> Username </label>
            </div>

            <div class="input-group">
                <input type="password" placeholder=" " name="pwd" required>
                <label for="pwd"> Password </label>
            </div>

            <div class="input-group">
                <input type="text" placeholder=" " name="email" required>
                <label for="email"> Email </label>
            </div>

            <button type="submit" class="btn">Register</button>
        </form>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Your Website Name. All rights reserved.</p>
    </footer>

</body>

</html>