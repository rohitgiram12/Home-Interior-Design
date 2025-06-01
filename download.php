<?php
require_once("connection.php");
$sql = "SELECT * FROM `racbca`.`CLIENT`";
$result = mysqli_query($conn, $sql);

// Check if there are any rows
if (mysqli_num_rows($result) > 0) {
    // Create a CSV file
    $filename = "data.csv";
    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename=$filename");

    // Output the CSV headers
    $headers = array("Name", "Email", "Phone", "Message");
    fputcsv(fopen($filename, "w"), $headers);

    // Output the data rows
    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv(fopen($filename, "a"), $row);
    }

    // Close the database connection
    mysqli_close($conn);

    // Download the CSV file
    echo "Content-Type: application/force-download\r\n";
    echo "Content-Disposition: attachment; filename=$filename\r\n";
    readfile($filename);

} else {
    echo "No data found.";
}
?>