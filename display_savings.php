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
    $acct_no = $_POST["Acct_no"];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT * FROM savings_accounts WHERE id = ?");
    
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
            echo "Account ID: " . htmlspecialchars($row["id"]) . "<br>";
            echo "Account Name: " . htmlspecialchars($row["account_name"]) . "<br>";
            echo "Last Name: " . htmlspecialchars($row["lastname"]) . "<br>";
            echo "First Name: " . htmlspecialchars($row["firstname"]) . "<br>";
            echo "Address: " . htmlspecialchars($row["address"]) . "<br>";
            echo "Phone Number: " . htmlspecialchars($row["phone"]) . "<br>";
            echo "Email: " . htmlspecialchars($row["email"]) . "<br>";
            echo "Balance: " . htmlspecialchars($row["balance"]) . "<br>";
            echo "Interest Rate: " . htmlspecialchars($row["interest_rate"]) . "<br>";
        }
    } else {
        echo "No account found with that ID.";
    }

    $stmt->close();
}

$conn->close();
?>
