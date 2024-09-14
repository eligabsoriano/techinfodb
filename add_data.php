<?php

require_once 'DbConnect.php';

try {
    $db = new DbConnect();
    $conn = $db->getConnection();

    if ($conn) {
        // dito mag iinsert  ng mga values data etc..
        $sql = "INSERT INTO motherboard (brand, model, cpu_max_support, socket, chipset, maximum_memory, memory_channel, sata_iii, pcie_x16, form_factor, display_connectors, usb_ports, dimension)
                VALUES ('BrandX', 'ModelX', 'Intel i9', 'LGA 1151', 'ChipsetY', '64GB', 'Dual', 6, 3, 'ATX', 'HDMI, DisplayPort', 8, '305x245 mm')";
                
        if ($conn->query($sql)) {
            echo "Record added successfully.";
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
