<?php

require_once 'DbConnect.php';

try {
    $db = new DbConnect();
    $conn = $db->getConnection();

    if ($conn) {
        // Example SQL query to get data from joined tables
        $sql = "SELECT 
                    m.id AS motherboard_id, 
                    m.brand AS motherboard_brand, 
                    mem.model AS memory_model,
                    proc.brand AS processor_brand
                FROM 
                    motherboard m
                LEFT JOIN 
                    memory mem ON m.id = mem.motherboard_id
                LEFT JOIN 
                    processor proc ON m.id = proc.motherboard_id";
                
        $result = $conn->query($sql);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo "Motherboard ID: " . $row['motherboard_id'] . "<br>";
                echo "Motherboard Brand: " . $row['motherboard_brand'] . "<br>";
                echo "Memory Model: " . $row['memory_model'] . "<br>";
                echo "Processor Brand: " . $row['processor_brand'] . "<br><br>";
            }
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
