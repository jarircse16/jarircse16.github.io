<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['textarea'];

    // Create a unique filename based on the sender's name and current time
    $filename = 'messages/' . $name . '_' . time() . '.txt';

    // Format the message content
    $content = "Name: $name\n";
    $content .= "Email: $email\n";
    $content .= "Message: $message\n";

    // Save the message to a text file
    if (file_put_contents($filename, $content) !== false) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to store the message.";
    }
} else {
    echo "Invalid request.";
}
?>
