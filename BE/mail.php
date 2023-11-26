<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = isset($_POST["name"]) ? trim($_POST["name"]) : "hi";
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $name_2 = isset($_POST["l_name"]) ? trim($_POST["l_name"]) : "hi";
    $subject = isset($_POST["subject"]) ? trim($_POST["subject"]) : "hi";
    $phone = isset($_POST["phone"]) ? trim($_POST["phone"]) : "hi";
    $company = isset($_POST["company"]) ? trim($_POST["company"]) : "hi";
    $message = isset($_POST["message"]) ? trim($_POST["message"]) : "hi";

    if (empty($name) || empty($name_2) || empty($subject) || empty($message) || empty($phone) || empty($company) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Please try again.";
        exit;
    }

    $recipient = "j.lima012@mybvc.ca";
    $sender = "New contact from $name";
    $head = " /// Theme_Pure \\\ ";
    
    $email_content = "$head\n\n\n";
    $email_content .= "Name: " . ($name_2 !== "hi" ? "$name $name_2" : $name) . "\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Subject: $subject\n\n";
    $email_content .= "Company: $company\n\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Message:\n$message\n";

    $email_headers = "From: " . ($name_2 !== "hi" ? "$name $name_2" : $name) . " <$email>";

    if (mail($recipient, $sender, $email_content, $email_headers)) {
        http_response_code(200);
        echo "Successfully sent the message.";
    } else {
        http_response_code(500);
        echo "Unable to send your message.";
    }

} else {
    http_response_code(403);
    echo "Please try again.";
}

?>
