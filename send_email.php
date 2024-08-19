<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "reikiathopecottage@gmail.com"; // Replace with your email address
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Headers
    $headers = "From: $name <$from>\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email
    $sent = mail($to, $subject, $message, $headers);

    if ($sent) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
