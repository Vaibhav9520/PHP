
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
        h3 {
            color: #4CAF50;
        }
        .details {
            background-color: #fff;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .details p {
            margin: 5px 0;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $company = htmlspecialchars($_POST['company']);
    $email = htmlspecialchars($_POST['email']);
    $street = htmlspecialchars($_POST['street']);
    $address2 = htmlspecialchars($_POST['address2']);

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Invalid Details";
        exit;
    }
?>

    <h3>Registration Details</h3>
    <div class="details">
        <p class="label">Name:</p>
        <p><?php echo "$fname $lname"; ?></p>

        <p class="label">Company:</p>
        <p><?php echo $company; ?></p>

        <p class="label">Email:</p>
        <p><?php echo $email; ?></p>

        <p class="label">Street:</p>
        <p><?php echo $street; ?></p>

        <p class="label">Address Line 2:</p>
        <p><?php echo $address2; ?></p>
    </div>

<?php
}
?>

</body>
</html>

