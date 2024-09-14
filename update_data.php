<?php

require_once 'DbConnect.php';

try {
    $db = new DbConnect();
    $conn = $db->getConnection();

    if ($conn) {
        // Example SQL to update a record
        $sql = "UPDATE motherboard
                SET brand = 'UpdatedBrand', model = 'UpdatedModel'
                WHERE id = 1";
                
        if ($conn->query($sql)) {
            echo "Record updated successfully.";
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
