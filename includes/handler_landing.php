<?php

// Set the default timezone to Asia/Kolkata
date_default_timezone_set('Asia/Kolkata');
$environment = 'testing'; // Change this to 'production' for the production environment

// Get previous page URL
$previousPageUrl = $_SERVER['HTTP_REFERER'];

// Get the current date and time
$dateUpdated = date('Y-m-d H:i:s');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $fullName = $_POST['full_name'];
    $emailAddress = $_POST['email_address'];
    $companyName = $_POST['company_name'];
    $typeOfContract = $_POST['type_of_contract'];
    $numberGenerator = $_POST['number_generator'];
    $query = $_POST['query'];

    // Validate the form data (you can add your own validation logic here)

    // Connect to the MySQL database
   // Set the configuration based on the environment
    if ($environment === 'testing') {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "eamotdb";
    } else if ($environment === 'production') {
        $servername = "localhost";
        $username = "eamot_user";
        $password = "eam0tdb!";
        $dbname = "eamot_db";
    }
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        // Set session variable for error

        session_start();
        $_SESSION['amc_error'] = true;

        header("Location: $previousPageUrl");
        exit;
    }

    // Prepare the SQL statement
    $sql = "INSERT INTO amc_contacts (full_name, email_address, company_name, type_of_contract, number_generator, customer_query, date_updated)
        VALUES ('$fullName', '$emailAddress', '$companyName', '$typeOfContract', '$numberGenerator', '$query', '$dateUpdated')";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        // Set session variable for success
        session_start();
        $_SESSION['amc_success'] = true;

        // Redirect to the original page
        $conn->close();
        header("Location: $previousPageUrl");
        exit;
    } else {
        // Set session variable for error
        session_start();
        $_SESSION['amc_error'] = true;
        $conn->close();

        // Redirect to the original page
        header("Location: $previousPageUrl");
        exit;
    }

    // Close the database connection
  
}
?>
