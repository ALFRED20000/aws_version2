<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Process the data (e.g., save to database, send an email, etc.)
    // For demonstration, we'll just display the data
    echo "<h2>Form Data Received</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
} else {
    echo "Invalid request method.";
}
?>
