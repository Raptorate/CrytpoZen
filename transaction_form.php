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
        <link rel="stylesheet" href="transaction_form.css">
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

    <!-- Top Header -->
    <div class="jumbotron">
        <div class="row mt-4">
            <div class="col-12">
                <div class="innerCntainer">
                    <h1 class="headerText text-center" style="color: blue;">TRANSACTION FORM</h1>
                </div>
            </div>
        </div>
    </div>




    <div class="container d-flex justify-content-center mt-5">
        <div class="card">
            <div>
                <div class="d-flex pt-3 pl-3">
                    <div><img src="https://img.icons8.com/fluent/100/000000/bitcoin-exchange.png" width="60" height="80" /></div>
                    <div class="mt-3 pl-2"><span class="name">EXCHANGE CRYPTO</span>
                        <div><span class="title2">WELCOME</span><span class="pin ml-2">Premium Client</span></div>
                    </div>
                </div>

                <div class="py-2 px-3">
                    <div class="first pl-2 d-flex py-2">
                        <div class="form-check" ><form action = ""></div>
                        <div class="border-left pl-2"><span class="head"><label for="trading"> <b>Trading Currency:</b> </label></span>
                            <div><span class="crypto"><input list="trading"></span><span class="amount"><datalist id="trading">
                                <option value="USD">
                                <option value="BTC">
                                <option value="ETH">
                                <option value="LTC">
                                <option value="ATOM">
                                <option value="BCH">
                              </datalist><br></span></div>
                        </div>
                    </div>
                </div>
                
                <div class="py-2 px-3">
                    <div class="second pl-2 d-flex py-2">
                        <div class="form-check"><form action = ""></div>
                        <div class="border-left pl-2"><span class="head"><label for="traded"> <b>Traded Currency:</b></label></span>
                            <div><span class="crypto"><input list="traded"></span><span class="amount"><datalist id="traded">
                                <option value="USD">
                                <option value="BTC">
                                <option value="ETH">
                                <option value="LTC">
                                <option value="ATOM">
                                <option value="BCH">
                              </datalist><br>
                        </div>
                    </div>
                </div>


                <div class="d-flex justify-content-between px-3 pt-4 pb-3">
                    <button type="button" class="btn btn-cancel button">
                        <a href="index2.php">Cancel</a>
                    </button>
                    
                    <button type="button" class="btn btn-primary button">
                        <a href="transactions2.php" style="color: white;">Trade</a>
                    </button>
                    
                    <!--
                 <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-secondary ml-2" value="Reset">
                </div>
                    <p>Already have an account? <a href="login.php">Login here</a>.</p>
                -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>