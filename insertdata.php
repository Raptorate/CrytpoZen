<?php
$servername = "ID329156_cryptozen.db.webhosting.be";
$username = "ID329156_cryptozen";
$password = "Thomasmore2021";
$dbname = "ID329156_cryptozen";


$trading_currency = $_POST['trading_currency'];
$traded_currency = $_POST['traded_currency'];
$amount = $_POST['amount'];
$user_id = $user_id;
$param_status = $status;



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `transactions` (`user_id`, `trading_currency`, `traded_currency`, `amount`, `status`) VALUES ( '1', '$trading_currency', '$traded_currency', $amount, '2')";



if ($conn->query($sql) === TRUE) {
    header("location: index2.php");
    echo " $trading_currency";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


//when the user make the transactions we insert the record to the db base and update the wallet
