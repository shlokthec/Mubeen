<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = 'your_email@example.com'; // Replace with your email address
  $subject = 'New message from contact form';
  $body = "Email: $email\n\n$message";
  $headers = "From: $email";
  
  if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent successfully!';
  } else {
    echo 'Failed to send message.';
  }
}
?>
