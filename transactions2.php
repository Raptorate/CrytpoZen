<?php
include('./includes/header.php');
include('./includes/nav2.php');
include('./includes/sidebar2.php');
require_once "config.php";

$rows = getQuery("SELECT * from transactions where user_id = '$user_id'");
$wallet = getQuery("SELECT * from users where id = '$user_id'");
// $rows = getQuery("SELECT * from transactions");

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
}

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


  <!-- Top Header -->
  <div class="jumbotron">

    <div class="row mt-4">
      <div class="col-12">
        <div class="innerCntainer">
          <h1 class="headerText text-center">Transactions</h1>
        </div>
      </div>
    </div>

  </div>
  <!-- ./Top Header -->

  <div class="row m-0 p-0">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body recurring rounded">
          <!-- /.card-header -->
          <h3 class="card-title text-bold"> Your Cypto Bank</h3>
          <div class="card-body p-0">
            <table class="table text-nowrap">
              <thead style="font-size: 15px;">
                <tr>
                  <th>Bitcoin</th>
                  <th>Ethereum</th>
                  <th>Litecoin</th>
                  <th>Bitcoin$</th>
                  <th>ATOM</th>
                  <th>Balance</th>
                  <th>Last update was</th>
                </tr>
              </thead>
              <?php foreach ($wallet as $w) { ?>
                <tbody style="font-size: 14px;">
                  <tr>
                    <td><?php echo $w['btc'] ?></td>
                    <td><?php echo $w['eth'] ?></td>
                    <td><?php echo $w['ltc'] ?></td>
                    <td><?php echo $w['bch'] ?></td>
                    <td><?php echo $w['atom'] ?></td>
                    <td><?php echo "$ " . $w['balance'] ?></td>
                    <td><?php echo $w['created_at'] ?></td>
                  </tr>
                  <tr>
                  <?php } ?>
                </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Transaction Table -->
  <div class="row m-0 p-0">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title text-bold">Recent transactions</h3>

          <div class="card-tools">
            <ul class="pagination pagination-sm float-right">
              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table text-nowrap">
            <thead style="font-size: 15px;">
              <tr>

                <th>Transferred From</th>
                <th>Transferred To</th>
                <th>Amount</th>
                <th>Exchange Rate</th>
                <th>Date & Time</th>
              </tr>
            </thead>
            <?php foreach ($rows as $row) { ?>
              <tbody style="font-size: 14px;">
                <tr>

                  <td><?php echo $row['trading_currency'] ?></td>
                  <td><?php echo $row['traded_currency'] ?></td>
                  <td><?php echo "$ " . $row['amount'] ?></td>
                  <td><span class="badge bg-success">€509.90</span></td>
                  <td><?php echo $row['create_at'] ?></td>
                </tr>
                <tr>
                <?php } ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- ./ Transaction Table -->

</div>

<script type="text/javascript" src = "js/Transaction.js"></script>
<script type="text/javascript" src = "js/Wallet.js"></script>
<script>
  let balance = <?php echo json_encode("$balance", JSON_HEX_TAG); ?>;
  let btc = <?php echo json_encode("$btc", JSON_HEX_TAG); ?>;
  let eth = <?php echo json_encode("$eth", JSON_HEX_TAG); ?>;
  let ltc = <?php echo json_encode("$ltc", JSON_HEX_TAG); ?>;
  let atom = <?php echo json_encode("$atom", JSON_HEX_TAG); ?>;
  let bch = <?php echo json_encode("$bch", JSON_HEX_TAG); ?>;

  let trading = <?php echo json_encode("$trading_currency", JSON_HEX_TAG); ?>;
  let balance = <?php echo json_encode("$traded_currency", JSON_HEX_TAG); ?>;
  let amount = <?php echo json_encode("$amount", JSON_HEX_TAG); ?>;
  console.log("loaded ");
  console.log(balance);
  let wallet = new Wallet(balance, btc, eth, atom, ltc, bch);
  let transaction = new Transaction(trading, traded, amount);
  wallet.update(transaction);

</script>
<?php
include('./includes/footer.php');
?>
