<?php
$servername = "localhost";
$username = "quickme1_4211";
$password = "csci4211";
$dbname = "dbvpny1qngaxgp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Acct_no = $_POST["Acct_no"];
$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$balance = $_POST["balance"];
$date = $_POST["date"];
$transID = $_POST["transID"];

$sql = "INSERT INTO checking (Acct_no, lastname, firstname, address, phone, email, balance, date, transID)
        VALUES ('$account_number', '$lastname', '$firstname', '$address', '$phone', '$email', '$balance', '$date', '$transID')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
