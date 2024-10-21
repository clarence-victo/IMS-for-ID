#Register Function

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];
    $home_address = $_POST["home_address"];
    $sex = $_POST["sex"];
    $contact_number = $_POST["contact_number"];

    
    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO id_holder (firstname, middlename, lastname, home_address, sex, contact_number) VALUES 
        (:firstname, :middlename, :lastname, :home_address, :sex, :contact_number);";

        $stmt = $phpDO->prepare($query);

        $stmt->bindParam(":firstname", $firstname);
        $stmt->bindParam(":middlename", $middlename);
        $stmt->bindParam(":lastname", $lastname);
        $stmt->bindParam(":home_address", $home_address);
        $stmt->bindParam(":sex", $sex);
        $stmt->bindParam(":contact_number", $contact_number);


        $stmt->execute();

        $phpDO = null;
        $stmt = null;

        header("Location: ../Index.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../Index.php");
}
