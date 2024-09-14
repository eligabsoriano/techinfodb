<?php

require_once 'DbConnect.php';

try {
    $db = new DbConnect();
    $conn = $db->getConnection();

    if ($conn) {
        // Example SQL to remove a record
        $sql = "DELETE FROM motherboard WHERE id = 1";
                
        if ($conn->query($sql)) {
            echo "Record deleted successfully.";
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
