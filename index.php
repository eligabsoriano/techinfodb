<?php

// Include the DbConnect class
require_once 'DbConnect.php';

try {
    $db = new DbConnect();

    $conn = $db->getConnection();

    if ($conn) {
        echo "Database connected!";
    } else {
        echo "Failed database connection.";
    }

} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}

?>
