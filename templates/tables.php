<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table one to many
$tableUsers = "CREATE TABLE Users (
id INT AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
psw VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
dateOfBirth DATE,
gender VARCHAR(30),
contactNumber VARCHAR(15),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);";

$tableInsurances = "CREATE TABLE Insurances (
    id INT AUTO_INCREMENT PRIMARY KEY,
    userID INT,
    typeOfInsurance VARCHAR(30),
    startingDate DATE,
    expirationDate DATE,
    coverage INT(8),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (userID) REFERENCES Users(id)
    );";

if ($conn->query($tableUsers) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($tableInsurances) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
