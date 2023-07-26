<?php
// // Replace these variables with your actual database credentials
// $servername = "localhost";
// $username = "root";
// $password = " ";
// $dbname = "done";

// Create connection
$conn = new mysqli('localhost', 'root', '', 'bg');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve data from the form
    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $admitted = $_POST["admitted"];
    $patient = $_POST["patient"];

    // Prepare the SQL statement to insert data
    $sql = "INSERT INTO data (name, address, phone, admitted, patient)
            VALUES ('$name', '$address', '$phone', '$admitted', '$patient')";

    // Check if the query is successful
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
        header("Location: http://localhost:8080/bizglobal/show.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
