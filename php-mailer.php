<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

/* =====================
   DEFAULT VALUES
===================== */
$nameErr = $emailErr = $phoneErr = $subjectErr = $messageErr = '';
$name = $email = $phone = $subject = $message = '';

/* =====================
   FORM SUBMIT
===================== */
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Sanitize
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $phone   = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $hasError = false;

    // NAME
    if ($name === '') {
        $nameErr = "Name is required";
        $hasError = true;
    } elseif (!preg_match("/^[A-Za-z ]{2,30}$/", $name)) {
        $nameErr = "Only letters (2–30 characters)";
        $hasError = true;
    }

    // EMAIL
    if ($email === '') {
        $emailErr = "Email is required";
        $hasError = true;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email address";
        $hasError = true;
    }

    // PHONE
    if ($phone === '') {
        $phoneErr = "Phone number is required";
        $hasError = true;
    } elseif (!preg_match("/^[6-9][0-9]{9}$/", $phone)) {
        $phoneErr = "Enter valid 10-digit mobile number";
        $hasError = true;
    }

    // SUBJECT
    if ($subject === '') {
        $subjectErr = "Subject is required";
        $hasError = true;
    } elseif (strlen($subject) > 60) {
        $subjectErr = "Subject too long";
        $hasError = true;
    }

    // MESSAGE
    if ($message === '') {
        $messageErr = "Message is required";
        $hasError = true;
    } elseif (strlen($message) > 500) {
        $messageErr = "Message must be under 500 characters";
        $hasError = true;
    }

    /* =====================
       SEND MAIL
    ===================== */
    if (!$hasError) {

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'shivampal.hovermedia@gmail.com';
            $mail->Password   = 'fhltoiupggjbnzeg';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom('shivampal.hovermedia@gmail.com', 'The Nurture Hub');
            $mail->addAddress('cdc.thenurture@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = "New Contact Enquiry";
            $mail->Body = "
                <h3>New Enquiry</h3>
                <p><b>Name:</b> $name</p>
                <p><b>Email:</b> $email</p>
                <p><b>Phone:</b> $phone</p>
                <p><b>Subject:</b> $subject</p>
                <p><b>Message:</b><br>$message</p>
            ";

            $mail->send();
            header("Location: thank-you.php");
            exit;
            
            } catch (Exception $e) {
                header("Location: error.php");
                exit;
            }
    }
}