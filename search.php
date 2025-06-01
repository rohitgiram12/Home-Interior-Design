<?php
include("connection.php");

// Get the search query from the URL
$searchQuery = $_GET['query'];

// Prepare a SQL query to search for the query in the table
$query = "SELECT * FROM `racbca`.`CLIENT` WHERE `Name:` LIKE '%$searchQuery%' OR `Email:` LIKE '%$searchQuery%' OR `Phone:` LIKE '%$searchQuery%' OR `Message:` LIKE '%$searchQuery%'";

// Execute the query
$data = mysqli_query($conn, $query);

// Display the search results in an HTML table
echo "<table id='dataTable'>";
echo "<tr><th>Name</th> <th>Email</th> <th>Phone</th> <th>Message</th></tr>";
while ($row = mysqli_fetch_assoc($data)) {
  echo "<tr>";
  echo "<td>" . $row["Name:"] . "</td>";
  echo "<td>" . $row["Email:"] . "</td>";
  echo "<td>" . $row["Phone:"] . "</td>";
  echo "<td>" . $row["Message:"] . "</td>";
  echo "</tr>";
}
echo "</table>";

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/grid.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/data.css" media="screen">
  
</head>
<body>
    
</body>
</html>