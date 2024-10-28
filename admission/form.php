<?php

// Access form data
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$course = $_POST["course"];

// Store data in PHP variables
$applicant_name = $name;
$applicant_email = $email;
$applicant_phone = $phone;
$applied_course = $course;

// Display data (as an example)
echo "<h2>Application Submitted</h2>";
echo "<p>Name: $applicant_name</p>";
echo "<p>Email: $applicant_email</p>";
echo "<p>Phone: $applicant_phone</p>";
echo "<p>Course: $applied_course</p>";


// Additional steps:
// * Validate form data before storing (e.g., using filters, regular expressions)
// * Connect to a database and store information securely
// * Send confirmation email to applicant
// * Implement error handling and user feedback

?>
