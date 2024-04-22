<?php
require_once 'config.php';


$query = $_GET['query'];


$stmt = $connection->prepare("SELECT * FROM Property WHERE address LIKE ? OR city LIKE ?");
$search_term = "%$query%";
$stmt->bind_param("ss", $search_term, $search_term);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {
    echo "<h2>Search Results:</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "<p>Address: " . $row['address'] . ", City: " . $row['city'] . ", State: " . $row['state'] . "</p>";
        
    }
} else {
    echo "No properties found matching your search criteria.";
}

$stmt->close();
$connection->close();

