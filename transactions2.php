<?php
include('./includes/header.php');
include('./includes/nav2.php');
include('./includes/sidebar2.php');
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
                <th>Date</th>
              </tr>
            </thead>
            <tbody style="font-size: 14px;">
              <tr>
                <td>1.</td>
                <td>Bitcoin</td>
                <td>Litecoin</td>
                <td>€1.90</td>
                <td><span class="badge bg-success">€509.90</span></td>
                <td>16-05-2021</td>
              </tr>
              <tr>
                <td>2.</td>
                <td>Litecoin</td>
                <td>Bitcoin</td>
                <td>€5.90</td>
                <td><span class="badge bg-warning">€5,509.90</span></td>
                <td>01-11-2020</td>
              </tr>
              <tr>
                <td>3.</td>
                <td>Cardano</td>
                <td>Bitcoin</td>
                <td>€5,000.90</td>
                <td><span class="badge bg-success">€54,009.30</span></td>
                <td>09-01-2020</td>
              </tr>
              <tr>
                <td>3.</td>
                <td>Cardano</td>
                <td>Bitcoin Cash</td>
                <td>€5,000.90</td>
                <td><span class="badge bg-danger">€54,009.30</span></td>
                <td>09-01-2020</td>
              </tr>
              <tr>
                <td>2.</td>
                <td>Litecoin</td>
                <td>Bitcoin</td>
                <td>€5.90</td>
                <td><span class="badge bg-primary">€5,509.90</span></td>
                <td>01-11-2020</td>
              </tr>
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