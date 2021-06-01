<?php
define('DB_SERVER', 'ID329156_cryptozen.db.webhosting.be');
define('DB_USERNAME', 'ID329156_cryptozen');
define('DB_PASSWORD', 'Thomasmore2021');
define('DB_NAME', 'ID329156_cryptozen');

$servername = "ID329156_cryptozen.db.webhosting.be";
$username = "ID329156_cryptozen";
$password = "Thomasmore2021";
$dbname = "ID329156_cryptozen";




//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function GetQuery($sql)
{
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    $result = $link->query($sql);
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    $link->close();
    return $rows;
}
// $rows = GetQuery("SELECT * from users ");
// foreach ($rows as $row) {
//     $user_id = $row['id'];
// }
session_start();

//when the user make the transactions we insert the record to the db base and update the wallet
$user_id = $_SESSION['id'];


// assinging variables to the data coming from the post form
$trading_currency = $_POST['trading_currency'];
$traded_currency = $_POST['traded_currency'];
$amount = $_POST['amount'];
$sql = "INSERT INTO `transactions` (`user_id`, `trading_currency`, `traded_currency`, `amount`, `status`) VALUES ( '$user_id', '$trading_currency', '$traded_currency', $amount, '0')";

// check if query went through if yes show the transactions2 page 
if ($conn->query($sql) === TRUE) {
    header("location: calculationpage.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
