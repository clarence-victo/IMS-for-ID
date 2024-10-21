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
        <?php include 'adminHeader.php'; ?>

        <div class="bg-img">

        <form action="searchInfoResult.php" class="container" method="post">
            <h3>ID Search Page</h3>

            <div class="input-group">
            <input type="text" placeholder=" " name="lastname" required>
            <label for="lastname"> Lastname </label>
            </div>

            <button type="submit" class="btn">Search</button>
        </form>

        

        </div>

        <!-- Footer Section -->
        <footer>
            <p>&copy; 2024 Your Website Name. All rights reserved.</p>
        </footer>

</body>
</html>
