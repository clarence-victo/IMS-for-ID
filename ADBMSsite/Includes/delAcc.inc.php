#Delete Function

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_number = $_POST["id_number"];

    
    try {
        require_once "dbh.inc.php";

        $query = "DELETE FROM id_holder WHERE id_number = :id_number;";

        $stmt = $phpDO->prepare($query);

        $stmt->bindParam(":id_number", $id_number);

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
