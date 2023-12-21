<?php
// Replace these variables with your actual database details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_interview";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $region = $_POST['region'];
    $district = $_POST['district'];
    $gender = $_POST['gender'];
    $languageProficiency = $_POST['languageProficiency'];

    // Insert data into the database (adjust the table name and column names)
    $sql = "INSERT INTO your_table_name (name, email, phone, dob, region, district, gender, language_proficiency)
            VALUES ('$name', '$email', '$phone', '$dob', '$region', '$district', '$gender', '$languageProficiency')";

    if ($conn->query($sql) === TRUE) {
        echo "Data saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
