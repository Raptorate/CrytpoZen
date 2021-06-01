<?php
include('./includes/header.php');
include('./includes/nav2.php');
include('./includes/sidebar2.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- compiled JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <style>
        <?php include './dist/style.css'; ?>
    </style>
</head>

<body>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="text-center">TRANSACTION FORM</h1>
                        <p class="text-center text-muted text-sm">Welcome Premium Client</p>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content pb-2">
            <div class="container-fluid">

                <div class="card card-default">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="./updatebalance.php" method="POST">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div>
                                        <img src="https://img.icons8.com/fluent/100/000000/bitcoin-exchange.png" width="60" height="70" /><b>EXCHANGE CRYPTO</b>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Deposit or Withdraw Cash:</label>
                                        <select class="form-control select2" name="add_remove_funds" style="width: 100%;">
                                            <option selected disabled>Deposit/Withdraw</option>
                                            <option value="deposit">Deposit Cash </option>
                                            <option value="withdraw">Withdraw Cash</option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <div class="col-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="inputamount">Amount</label>
                                        <input type="float" class="form-control" name="amount" id="amount" value="0" placeholder="Enter Amount">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary button float-left">
                                        <a style="color: white;">Confirm</a>
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <!--
                                    <button type="submit" class="btn btn-primary button float-right">
                                        <a href="transactions2.php" style="color: white;">Confirm</a>
                                    </button> 
                                    -->
                                    <button type="button" class="btn btn-cancel button float-left">
                                        <a href="index2.php">Cancel</a>
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </section>
    </div>
</body>

</html>