<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = 'info@tshidilethwane.co.za'; // Replace with your email address
  $subject = 'Website Contact Form';
  $message = "First Name: $firstName\n"
             . "Last Name: $lastName\n"
             . "Email: $email\n"
             . "Subject: $subject\n"
             . "Message: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    // Display the success message template
    echo <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>Form Submitted Successfully</title>

    <!-- Custom fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiko:wght@400;600;700&family=Yantramanav:wght@300;400;500&display=swap" rel="stylesheet">
    
    <style>
        /* Styles for the template here */
        /* ... */
        .container {
            padding: 20em 0;
        }
        .header {
            font-family: 'Yantramanav', sans-serif;
            text-align: center;
        }
        .message {
            font-family: 'Yantramanav', sans-serif;
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="header">Form Submitted Successfully</div>
        <div class="message">Thanks for contacting us! We will be in touch with you shortly.</div>
    </div>
</body>
</html>
HTML;
  } else {
    // Display an error message
    echo 'An error occurred. Please try again later.';
  }
}
?>
