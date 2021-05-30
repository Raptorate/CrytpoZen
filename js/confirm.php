<?php

require_once "../config.php";
session_start();


$user_id = $_SESSION['id'];
print_r($_POST);
$balance = $_POST["balance"];
$success = $_POST["success"];
$btc = $_POST["btc"];
$eth = $_POST["eth"];
$atom = $_POST["atom"];
$bch = $_POST["bch"];
$ltc = $_POST["ltc"];

echo "$balance";
$bool = (bool)$atom;
// if ($success = true) {
//   $sql = "UPDATE `transactions` SET `status` = '1' WHERE `transactions`.`transaction_id` = 17";
//   //$sql2 = "UPDATE `users` SET `profileIconId` = '$profileIconId', `user_id` = '$id' WHERE `users`.`id` = $int;";

//   if ($mysqli->query($sql) === TRUE) {
//     echo "Record updated successfully";
//   } else {
//     echo "Error updating record: " . $conn->error;
//   }
// }


$sql = "UPDATE `users` SET `balance` = '$balance', `ltc` = '$ltc', `atom` = '$bool', `bch` = '$bch', `eth` = '$eth', `btc` = '$btc', `created_at` = CURRENT_TIME() WHERE `users`.`id` = '$user_id';";
if ($mysqli->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
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
// }
?>
<script>
  window.location.replace("http://www.w3schools.com");
</script>
