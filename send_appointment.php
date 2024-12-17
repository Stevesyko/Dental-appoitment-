<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $service = $_POST['service'];
    $doctor = $_POST['doctor'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    
    $to = "gerophilemon@gmail.com";
    $subject = "Appointment Scheduled";
    $message = "Service: $service\n";
    $message .= "Doctor: $doctor\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Date: $date\n";
    $message .= "Time: $time\n";

    
    if (mail($to, $subject, $message)) {
        echo "Appointment scheduled successfully. You will receive a confirmation email shortly.";
    } else {
        echo "Failed to schedule appointment. Please try again later.";
    }
} else {
    
    header("Location: appointment.html");
    exit;
}
