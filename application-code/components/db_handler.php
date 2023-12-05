<?php

$endpoint = getenv('RDS_ENDPOINT');
$username = getenv('RDS_USERNAME');
$password = getenv('RDS_PASSWORD');
$database = getenv('RDS_DATABASE');


function validateFormData($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


function handleFormData($name, $email, $serviceType, $phoneNumber, $message)
{
    // Connect to your MySQL RDS database
    $conn = new mysqli($endpoint, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = validateFormData($name);
    $email = validateFormData($email);
    $serviceType = validateFormData($serviceType);
    $phoneNumber = validateFormData($phoneNumber);
    $message = validateFormData($message);

    // SQL query to insert data into the database
    $sql = "INSERT INTO your_table_name (name, email, service_type, phone_number, message) 
            VALUES ('$name', '$email', '$serviceType', '$phoneNumber', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
