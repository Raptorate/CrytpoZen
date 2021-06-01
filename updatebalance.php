<script type="text/javascript" src="./js/redirect.js"></script>

<?php
require_once "./config.php";
session_start();

//when the user make the transactions we insert the record to the db base and update the wallet
$user_id = $_SESSION['id'];
$b = getQuery("SELECT balance from users where id = '$user_id'");



foreach ($b as $old) {
    $oldBalance =  $old['balance'];
}



// assinging variables to the data coming from the post form
$request = $_POST['add_remove_funds'];
$amount = $_POST['amount'];


$oldAmount = floatval($oldBalance);
$postedAmount = floatval($amount);



if ($request === "withdraw") {
    if ($postedAmount > $oldAmount) {
        echo '<script>alert("transaction failed");</script>';
    } else {
        $newBalance = $oldAmount - $postedAmount;
        $sql = "UPDATE `users` SET `balance` = '$newBalance' WHERE `users`.`id` = '$user_id';";

        // check if query went through if yes show the transactions2 page 
        if ($mysqli->query($sql) === TRUE) {
            // header("location: updatebalance.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        echo '<script>alert("transaction succeeded");</script>';
    }
} else {
    $newBalance = $oldAmount + $postedAmount;
    $sql = "UPDATE `users` SET `balance` = '$newBalance' WHERE `users`.`id` = '$user_id';";

    // check if query went through if yes show the transactions2 page 
    if ($mysqli->query($sql) === TRUE) {
        // header("location: updatebalance.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    echo '<script>alert("transaction succeeded");</script>';
}

$conn->close();
?>