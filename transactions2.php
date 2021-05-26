<?php
include('./includes/header.php');
include('./includes/nav2.php');
include('./includes/sidebar2.php');
require_once "config.php";

$rows = getQuery("SELECT * from transactions where user_id = '$user_id'");
// $rows = getQuery("SELECT * from transactions");

foreach ($rows as $row) {
  $trading_currency = $row['trading_currency'];
  $traded_currency = $row['traded_currency'];
  $trading_currency = $row['trading_currency'];
  $status = $row['status'];
  $amount = $row['amount'];
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
                <th>#</th>
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
                  <td>1.</td>
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
<!-- /.content-wrapper -->
<?php
include('./includes/footer.php');
?>