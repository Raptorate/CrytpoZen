<?php

require_once "config.php";
session_start();


if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

?>

<?php
$user_id = $_SESSION['id'];

$rows = getQuery("SELECT * from transactions where user_id = '$user_id'");
$wallet = getQuery("SELECT * from users where id = '$user_id'");

foreach ($rows as $row) {
    $trading_currency = $row['trading_currency'];
    $traded_currency = $row['traded_currency'];
    $trading_currency = $row['trading_currency'];
    $status = $row['status'];
    $amount = $row['amount'];
}
foreach ($wallet as $row) {
    $balance = $row['balance'];
    $ltc = $row['ltc'];
    $btc = $row['btc'];
    $atom = $row['atom'];
    $bch = $row['bch'];
    $eth = $row['eth'];
    $id = $row['id'];
}
?>

<script type="text/javascript" src="js/redirect.js"></script>
<script type="text/javascript" src="js/Transaction.js"></script>
<script type="text/javascript" src="js/Wallet.js"></script>
<script>
    console.log("loaded");
    let user_id = <?php echo json_encode("$user_id", JSON_HEX_TAG); ?>;
    let balance = <?php echo json_encode("$balance", JSON_HEX_TAG); ?>;
    let btc = <?php echo json_encode("$btc", JSON_HEX_TAG); ?>;
    let eth = <?php echo json_encode("$eth", JSON_HEX_TAG); ?>;
    let ltc = <?php echo json_encode("$ltc", JSON_HEX_TAG); ?>;
    let atom = <?php echo json_encode("$atom", JSON_HEX_TAG); ?>;
    let bch = <?php echo json_encode("$bch", JSON_HEX_TAG); ?>;
    let id = <?php echo json_encode("$id", JSON_HEX_TAG); ?>;

    let trading = <?php echo json_encode("$trading_currency", JSON_HEX_TAG); ?>;
    let traded = <?php echo json_encode("$traded_currency", JSON_HEX_TAG); ?>;
    let amount = <?php echo json_encode("$amount", JSON_HEX_TAG); ?>;
    var a = parseFloat(btc)
    var b = parseFloat(eth)
    var c = parseFloat(ltc)
    var d = parseFloat(atom)
    var e = parseFloat(bch)
    var f = parseFloat(balance)
    var g = parseFloat(amount)
    let wallet = new Wallet(f, a, b, d, c, e);
    let transaction = new Transaction(trading, traded, g);
    wallet.update(transaction);

    let value = wallet.displayPortfolio();
</script>

<?php
require_once "config.php";
session_start();


$user_id = $_SESSION['id'];
print_r($_POST);
// print_r("calculationpage");
$balance = $_POST["balance"];
$success = $_POST["success"];
$btc = $_POST["btc"];
$eth =  $eht + $_POST["eth"];
$atom = $_POST["atom"];
$bch = $_POST["bch"];
$ltc = $_POST["ltc"];




if ($success) {
    $sql = "UPDATE `users` SET `balance` = '$balance', `ltc` = '$ltc', `atom` = '$atom', `bch` = '$bch', `eth` = '$eth', `btc` = '$btc', `created_at` = CURRENT_TIME() WHERE `users`.`id` = '$user_id';";
    if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<?php
include('./includes/footer.php');
?>