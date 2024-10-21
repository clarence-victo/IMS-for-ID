# Bridge

<?php

$dsn = "mysql:host=localhost;dbname=imsdatabase";
$dbusername = "root";
$dbpassword = "";

try {
    $phpDO = new PDO($dsn, $dbusername, $dbpassword);
    $phpDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}
