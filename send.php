<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "zoomxdigitalmarketingagency@gmail.com"; // 🔁 Replace with your email
    $from = $_POST['email'];
    $subject = "New Inquiry from Website";
    $body = "You received a new message from: $from";

    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Email sent successfully ✅'); window.history.back();</script>";
    } else {
        echo "<script>alert('Failed to send email ❌'); window.history.back();</script>";
    }
}
?>
