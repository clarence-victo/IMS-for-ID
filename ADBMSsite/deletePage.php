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

        <form action="Includes/delAcc.inc.php" class="container" method="post">
            <h3>ID Deletion Form</h3>

            <div class="input-group">
            <input type="number" placeholder=" " name="id_number" required>
            <label for="ID number"> ID Number</label>
            </div>

            <div class="input-group">
            <input type="text" placeholder=" " pattern="Confirm" name="confirmation" required>
            <label for="confirmation">Type "Confirm" to continue</label>
            </div>

            <button type="submit" class="btn">Delete Record</button>
        </form>

        

        </div>

        <!-- Footer Section -->
        <footer>
            <p>&copy; 2024 Your Website Name. All rights reserved.</p>
        </footer>

</body>
</html>
