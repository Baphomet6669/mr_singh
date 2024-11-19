<?php
$filename = 'data.csv';

// Check if the file exists
if (!file_exists($filename) || !is_readable($filename)) {
    die('Error: The file does not exist or is not readable.');
}

// Open the file for reading
if (($handle = fopen($filename, 'r')) !== false) {
    echo '<table border="1">';
    echo '<tr><th>Name</th><th>Email</th><th>Phone</th><th>Message</th></tr>'; // Table headers

    // Read the CSV file line by line
    while (($data = fgetcsv($handle, 1000, ',')) !== false) {
        echo '<tr>';
        foreach ($data as $cell) {
            echo '<td>' . htmlspecialchars($cell) . '</td>'; // Output each cell
        }
        echo '</tr>';
    }
    echo '</table>';
    fclose($handle); // Close the file handle
} else {
    echo 'Error: Unable to open the file.';
}
?>
