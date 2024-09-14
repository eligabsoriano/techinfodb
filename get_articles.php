<?php
// Include the DbConnect class
include 'DbConnect.php';

// Create a new instance of DbConnect
$db = new DbConnect();
$conn = $db->getConnection();

if ($conn) {
    // Prepare and execute a query to get articles
    $query = 'SELECT title, content FROM troubleshoot_articles';
    $result = $conn->query($query);
    
    if ($result) {
        $articles = $result->fetch_all(MYSQLI_ASSOC);
        // Free result set
        $result->free();
    } else {
        $articles = ['error' => 'Query failed: ' . $conn->error];
    }
    
    // Close the connection
    $db->close();
} else {
    $articles = ['error' => 'Failed to connect to the database.'];
}

// Returning the result as JSON
header('Content-Type: application/json');
echo json_encode($articles);
?>
