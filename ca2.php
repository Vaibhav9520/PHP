<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name = htmlspecialchars($_POST['name']);
    $company = htmlspecialchars($_POST['company']);
    $email = htmlspecialchars($_POST['email']);
    $street = htmlspecialchars($_POST['street']);
    $address2 = htmlspecialchars($_POST['address2']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Display the data (in real applications, you would store this in a database)
    echo "<h2>Registration Details:</h2>";
    echo "Name: $name <br>";
    echo "Company: $company <br>";
    echo "Email: $email <br>";
    echo "Address: $street, $address2 <br>";
}
?>
