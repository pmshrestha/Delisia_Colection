<?php
// Get form data
$name = $_POST['Name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

// Your Zoho Mail details (replace with yours)
$smtp_host = "smtp.zoho.com";  // Replace with actual hostname
$smtp_port = 587;              // Replace if using a different port
$smtp_username = "noreply@delisiacollection.com.np";  // Replace with your Zoho Mail email
$smtp_password = "Dcollection1107";           // Replace with your Zoho Mail password

// Email content
$body = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

// Set headers for sending from your email address
$headers = "From: $smtp_username \r\n";
$headers .= "Reply-To: $email \r\n";
$headers .= "Content-Type: text/plain; charset=
