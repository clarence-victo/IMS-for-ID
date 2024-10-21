#Update Function

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_number = $_POST["id_number"];
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];
    $home_address = $_POST["home_address"];
    $sex = $_POST["sex"];
    $contact_number = $_POST["contact_number"];

     
    try {
        require_once "dbh.inc.php";

        $query = "UPDATE id_holder SET firstname = :firstname, middlename = :middlename, lastname = :lastname,
        home_address = :home_address, sex = :sex, contact_number = :contact_number
        WHERE id_number = :id_number;";

        $stmt = $phpDO->prepare($query);

        $stmt->bindParam(":id_number", $id_number);
        $stmt->bindParam(":firstname", $firstname);
        $stmt->bindParam(":middlename", $middlename);
        $stmt->bindParam(":lastname", $lastname);
        $stmt->bindParam(":home_address", $home_address);
        $stmt->bindParam(":sex", $sex);
        $stmt->bindParam(":contact_number", $contact_number);



        $stmt->execute();

        $phpDO = null;
        $stmt = null;

        header("Location: ../adminPage.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../Index.php");
}
