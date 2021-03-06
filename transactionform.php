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
    <div class="content-wrapper" style="background-image: url('http://i.imgur.com/GHr12sH.jpg');">
    
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
                        <form action="./insertdata.php" method="POST">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div>
                                        <img src="https://img.icons8.com/fluent/100/000000/bitcoin-exchange.png" width="60" height="70" /><b>EXCHANGE CRYPTO</b>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Trading Currency:</label>
                                        <select class="form-control select2" name="trading_currency" style="width: 100%;">
                                            <option selected disabled>Select here</option>
                                            <option value="usd">usd</option>
                                            <option value="btc">btc</option>
                                            <option value="eth">eth</option>
                                            <option value="ltc">ltc</option>
                                            <option value="atom">atom</option>
                                            <option value="bch">bch</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Traded Currency:</label>
                                        <select class="form-control select2" name="traded_currency" style="width: 100%;">
                                            <option selected disabled>Select here</option>
                                            <option value="usd">usd</option>
                                            <option value="btc">btc</option>
                                            <option value="eth">eth</option>
                                            <option value="ltc">ltc</option>
                                            <option value="atom">atom</option>
                                            <option value="bch">bch</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Amount</label>
                                        <input type="number" class="form-control" name="amount" id="amount" value="0" placeholder="Enter Amount">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-md-6">
                                   <!--  <button type="submit" class="btn btn-primary button float-left">
                                        Submit
                                    </button>
                                    -->
                                    <button type="button" class="btn btn-cancel button ">
                                        <a href="index2.php">Cancel</a>
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary button float-right">
                                        <a href="transactions2.php" style="color: white;">Trade</a>
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