<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);
    
    // Prepare the data to be written to the file
    $formData = "Name: $name\n";
    $formData .= "Email: $email\n";
    $formData .= "Phone: $phone\n";
    $formData .= "Message:\n$message\n";
    $formData .= "------------------------\n";

    // Define the file path
    $filePath = 'submissions.txt';

    // Open the file in append mode
    $fileHandle = fopen($filePath, 'a');

    // Write the data to the file
    fwrite($fileHandle, $formData);

    // Close the file handle
    fclose($fileHandle);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission - Your Brand</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Your</span> Brand</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="content container">
        <h1>Contact Form Submission</h1>
        <p>Thank you for contacting us. Here is the information you submitted:</p>
        <ul>
            <li><strong>Name:</strong> <?php echo $name; ?></li>
            <li><strong>Email:</strong> <?php echo $email; ?></li>
            <li><strong>Phone:</strong> <?php echo $phone; ?></li>
            <li><strong>Message:</strong> <?php echo nl2br($message); ?></li>
        </ul>
        <a href="home.html" class="button">Back to Home</a>
    </section>

    <footer>
        <p>© 2024 Your Brand. All rights reserved.</p>
    </footer>
</body>
</html>



