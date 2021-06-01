<script>
  let success = <?php echo json_encode("$success", JSON_HEX_TAG); ?>;
  console.log("hello ");
  console.log(success);
</script>
<?php

require_once "../config.php";
session_start();


$user_id = $_SESSION['id'];
print_r($_POST);
$balance = $_POST["balance"];
$success = $_POST["success"];
$btc = $_POST["btc"];
$eth =  $eht + $_POST["eth"];
$atom = $_POST["atom"];
$bch = $_POST["bch"];
$ltc = $_POST["ltc"];

$transactions = getQuery("SELECT * from transactions where user_id = '$user_id'");

$arraylen = count($transactions);
echo $arraylen;
$lastId = $transactions[$arraylen - 1];
$value = $lastId['transaction_id'];

echo "the last id $lastId";
echo "the last id $value";
// foreach ($transactions as $transaction){
//     echo $transaction[];
// }
echo $success;


if ($success) {
  $sql = "UPDATE `users` SET `balance` = '$balance', `ltc` = '$ltc', `atom` = '$atom', `bch` = '$bch', `eth` = '$eth', `btc` = '$btc', `created_at` = CURRENT_TIME() WHERE `users`.`id` = '$user_id';";
  $sal = "UPDATE `transactions` SET `status` = '1' WHERE `transactions`.`transaction_id` = '$value';";
  if ($mysqli->query($sql) === TRUE) {
    if ($mysqli->query($sal) === TRUE) {
      echo "Record updated successfully";
    } else {

      echo "Error updating record: " . $conn->error;
    }
    echo "Record updated successfully";
  } else {

    echo "Error updating record: " . $conn->error;
  }
}


// echo "$balance";
// $bool = (bool)$atom;
// if ($success = true) {
//   $sql = "UPDATE `transactions` SET `status` = '1' WHERE `transactions`.`transaction_id` = 17";
//   //$sql2 = "UPDATE `users` SET `profileIconId` = '$profileIconId', `user_id` = '$id' WHERE `users`.`id` = $int;";

//   if ($mysqli->query($sql) === TRUE) {
//     echo "Record updated successfully";
//   } else {
//     echo "Error updating record: " . $conn->error;
//   }
// }
// foreach ($_POST as $key => $value) {
//     echo "{$key} => {$value} ";
// }

// Prepare an insert statement



// $sql = "UPDATE `transactions` SET `status` = '1' WHERE `transactions`.`transaction_id` = 13";
// $sql2 = "UPDATE `users` SET `profileIconId` = '$profileIconId', `user_id` = '$id' WHERE `users`.`id` = $int;";

// if ($mysqli->query($sql) === TRUE) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . $conn->error;
// } -->
?>