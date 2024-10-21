<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />

    <title>IMS for Baranggay ID Registration</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

    <?php include 'header.php'; ?>

    
    
    
    <div class="bg-img">


        <form action="Includes/formhandler.inc.php" class="container" method="post">
            <h3>ID Registration Form</h3>

            <div class="input-group">
                <input type="text" id="Firstname" placeholder=" " name="firstname" required>
                <label for="Firstname"> Firstname </label>
            </div>

            <div class="input-group">
                <input type="text" placeholder=" " name="middlename" required>
                <label for="middlename"> Middle Name </label>
            </div> 

            <div class="input-group">
                <input type="text" placeholder=" " name="lastname" required>
                <label for="Lastname"> Lastname</label>
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
                <label for="Contact"> Contact Number </label>
            </div>
            
            <button type="submit" class="btn">Register</button>
        </form>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 IMS for Baranggay ID Holder. All rights reserved.</p>
    </footer>

</body>

</html>