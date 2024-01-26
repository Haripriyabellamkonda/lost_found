<?php
$servername = "localhost:3308"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password

// Create a connection to the MySQL server
$conn = new mysqli($servername, $username, $password);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database if it does not exist
$sql_create_db = "CREATE DATABASE IF NOT EXISTS lost_and_found";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Database created successfully!<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the created database
$conn->select_db("lost_and_found");

// Create the 'items' table
$sql_create_table = "CREATE TABLE IF NOT EXISTS items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(255) NOT NULL,
    item_description TEXT,
    status VARCHAR(50) NOT NULL
)";
if ($conn->query($sql_create_table) === TRUE) {
    echo "Table 'items' created successfully!<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}
// Insert items into the 'items' table
$sql_insert = "INSERT INTO items (item_name, item_description, status)
VALUES ('Wallet', 'Black leather wallet', 'Lost'),
       ('Phone', 'iPhone X', 'Found'),
       ('Keys', 'House keys', 'Lost')";
if ($conn->query($sql_insert) === TRUE) {
    echo "Items inserted successfully!<br>";
} else {
    echo "Error inserting items: " . $conn->error . "<br>";
}

// Close the connection
$conn->close();
?>

