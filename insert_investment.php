<html>

<body>

 

 

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
 

// get the variables from the URL request string
$Acct_no = $_REQUEST['Acct_no'];

$lastname = $_REQUEST['lastname'];

$firstname = $_REQUEST['firstname'];

$address = $_REQUEST["address"];

$email = $_REQUEST['email'];

$phone = $_REQUEST['phone'];

$Balance = $_REQUEST['Balance'];

$Date = $_REQUEST['Date'];

$TRansID = $_REQUEST['TRansID'];

$interest_rate = $_REQUEST['interest_rate'];

$total_amount = $_REQUEST['total_amount'];

    

$sql = "INSERT INTO investment (Acct_no, lastname, firstname, address, email, phone, Balance, Date, TRansID, interest_rate, total_amount)
  VALUES ('$Acct_no', '$lastname', '$firstname', '$address', '$email', '$phone', '$Balance', '$Date', '$TRansID', '$interest_rate', '$total_amount')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


 

</body>

</html>