
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IMS for Baranggay ID Registration</title>

    <!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
    
    <link rel="stylesheet" type="text/css" href="css/search_style.css">
    



</head>

<body class="home">

    <?php include 'adminHeader.php'; ?>
    

    <br>

    <h1 class="headerr">List of Data</h1>

    <br>
    <table class="mtable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Lastname</th>
                <th>Firstname</th>
                <th>Middle Name</th>
                <th>Address</th>
                <th>Sex</th>
                <th>Contact number</th>
                <th>Date Created</th>

            </tr>
        </thead>

        <tbody>
            
        <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "imsdatabase";

                $connection = new mysqli($servername, $username, $password, $database);

                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }

                $lastname = $_POST["lastname"];

                // Use a prepared statement
                $sql = "SELECT * FROM id_holder WHERE lastname = ?";
                $stmt = $connection->prepare($sql);

                if (!$stmt) {
                    die("Error in preparing statement: " . $connection->error);
                }

                $stmt->bind_param("s", $lastname);

                $result = $stmt->execute();

                if (!$result) {
                    die("Error executing statement: " . $stmt->error);
                }

                // Get the result set from the executed statement
                $result = $stmt->get_result();

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["id_number"] . "</td>
                            <td>" . $row["lastname"] . "</td>
                            <td>" . $row["firstname"] . "</td>
                            <td>" . $row["middlename"] . "</td>
                            <td>" . $row["home_address"] . "</td>
                            <td>" . $row["sex"] . "</td>
                            <td>" . $row["contact_number"] . "</td>
                            <td>" . $row["registered_at"] . "</td>
                        </tr>";
                }

                $stmt->close();
                $connection->close();
                ?>

        </tbody>
    </table>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Your Website Name. All rights reserved.</p>
    </footer>

</body>

</html>