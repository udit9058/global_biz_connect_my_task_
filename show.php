<?php

// Create connection
$conn = new mysqli('localhost', 'root', '', 'bg');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the 'data' table
$sql = "SELECT * FROM data";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>

<head>
  <title>Patient Data</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      /* Add the background image path here */
      background-image: url('a.jpg');
      /* Set background image size and repeat properties as needed */
      background-size: cover;
      background-repeat: no-repeat;
    }

    .card {
      background-color: rgba(255, 255, 255, 0.7); /* Adjust opacity here (0.7 = 70% transparent) */
      border: none; /* Remove the default card border */
      margin-top: 50px; /* Add some top margin to the card to position it nicely */
    }

    .card-header {
      background-color: #007bff; /* Set the header background color */
    }

    .card-header h4 {
      margin: 0; /* Remove any margin to center the text */
    }

    .table {
      background-color: rgba(255, 255, 255, 0.8); /* Adjust opacity for the table background */
    }

    .table th, .table td {
      border: none; /* Remove table cell borders */
    }

    .btn-primary {
      background-color: #007bff; /* Set the button background color */
      border: none; /* Remove the default button border */
    }

    .btn-primary:hover {
      background-color: #0056b3; /* Change button background color on hover */
    }
  </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Patient Data</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone No</th>
                                <th>Admitted Date</th>
                                <th>Patient ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Loop through the fetched data and display it in the table
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['name'] . "</td>";
                                    echo "<td>" . $row['address'] . "</td>";
                                    echo "<td>" . $row['phone'] . "</td>";
                                    echo "<td>" . $row['admitted'] . "</td>";
                                    echo "<td>" . $row['patient'] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5'>No data found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
