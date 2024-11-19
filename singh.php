<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Open or create the CSV file
    $file = fopen('data.csv', 'a');
    
    // Save data to the CSV file
    fputcsv($file, [$name, $email, $phone, $message]);
    
    // Close the file
    fclose($file);
    
    // Redirect to another page
    header("Location: /");
    exit();
}
?>
