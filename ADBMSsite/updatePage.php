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

        <form action="Includes/updateAcc.inc.php" class="container" method="post">
            <h3>ID Update Form</h3>

            
            <div class="input-group">
            <input type="number" placeholder=" " name="id_number" required>
            <label for="ID Number"> ID Number</label>
            </div>

            <div class="input-group">
            <input type="text" placeholder=" " name="firstname" required>
            <label for="firstname">Firstname</label>
            </div>

            <div class="input-group">
            <input type="text" placeholder=" " name="middlename" required>
            <label for="middlename">Midde Name</label>
            </div>

            <div class="input-group">
            <input type="text" placeholder=" " name="lastname" required>
            <label for="Lastname">Lastname</label>
            </div>

            <div class="input-group">
            <input type="text" placeholder=" " name="home_address" required>
            <label for="Address">Address</label>
            </div>

            <div class="input-group">
                <select type="text" name="sex" required>
                    <option value="" disabled selected>Select Sex</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>

            </div>

            <div class="input-group">
            <input type="number" placeholder=" " name="contact_number" required>
            <label for="contact Number">Contact Number</label>
            </div>

            <button type="submit" class="btn">Update Info</button>
        </form>

        </div>

        <!-- Footer Section -->
        <footer>
            <p>&copy; 2024 Your Website Name. All rights reserved.</p>
        </footer>
    
</body>

</html>