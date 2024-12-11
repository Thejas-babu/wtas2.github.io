<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Registration Submitted</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="thank-you-container">
        <h1>Thank You for Your Submission!</h1>
        <p>Your details have been successfully submitted. Below are the details you provided:</p>

        <div class="submitted-data">
            <ul>
                <li><strong>Name:</strong> <?php echo $name; ?></li>
                <li><strong>Email:</strong> <?php echo $email; ?></li>
                <li><strong>Phone:</strong> <?php echo $phone; ?></li>
                <li><strong>Message:</strong> <?php echo nl2br($message); ?></li>
            </ul>
        </div>
        <a href="index.html" class="back-button">Go Back</a>
    </div>
</body>
</html>