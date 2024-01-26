<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $msg = $_POST["msg"];
    
    
    // Establish connection to the database
    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $dbname = "lost_found";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Insert the data into the 'lost_items' table
    $sql = "INSERT INTO queries (name, email ,msg) 
            VALUES ('$name', '$email', '$msg')";
    
    if ($conn->query($sql) === TRUE) {
        echo "  Query reported successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}