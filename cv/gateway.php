<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $org = htmlspecialchars($_POST['org']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    $message = htmlspecialchars($_POST['message']);

    // Open or create the CSV file
    $file = fopen('data.csv', 'a');
    
    // Save data to the CSV file
    fputcsv($file, [$name, $org, $email, $tel, $message]);
    
    // Close the file
    fclose($file);
    
    // Redirect to another page
    header("Location: Shivam Singh.pdf");
    exit();
}
?>
