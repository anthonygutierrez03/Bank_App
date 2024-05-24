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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $transid = $_POST["transid"];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT * FROM investment_transactions WHERE id = ?");
    
    // Check if prepare() failed
    if ($stmt === false) {
        die("Error preparing the statement: " . $conn->error);
    }
    
    $stmt->bind_param("s", $acct_no);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<h2>Account Details:</h2>";
            echo "Transaction ID: " . htmlspecialchars($row["transid"]) . "<br>";
            echo "Transaction Type: " . htmlspecialchars($row["trans_type"]) . "<br>";
            echo "Transaction Date: " . htmlspecialchars($row["trans_date"]) . "<br>";
            echo "Transaction Amount: " . htmlspecialchars($row["trans_amount"]) . "<br>";
            echo "Last Name: " . htmlspecialchars($row["lastname"]) . "<br>";
            echo "First Name: " . htmlspecialchars($row["firstname"]) . "<br>";
            echo "Phone Number: " . htmlspecialchars($row["phone"]) . "<br>";
            
        }
    } else {
        echo "No account found with that ID.";
    }

    $stmt->close();
}

$conn->close();
?>