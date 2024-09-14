<?php

require_once 'DbConnect.php';

try {
    $db = new DbConnect();
    $conn = $db->getConnection();

    if ($conn) {
        $sql = file_get_contents('table.sql');
        
        if ($conn->multi_query($sql)) {
            echo "Foreign keys added successfully.";
        } else {
            echo "Error: " . $conn->error;
        }

        $db->close();
    } else {
        echo "Failed to connect to the database.";
    }

} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}

?>
