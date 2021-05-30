<?php
include('./includes/header.php');
include('./includes/nav2.php');
include('./includes/sidebar2.php');

session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index2.php");
    exit;
}
// else stay in this page 
?>

<style>
    <?php include './dist/style.css'; ?>
</style>
<div class="content-wrapper">

    <!-- Top Header -->
    <div class="jumbotron">

        <div class="row">
            <div class="col-12">
                <div class="innerCntainer">
                    <h5 class="headerText">WELCOME TO CRYPTOZEN</h5>
                    <h2 class="headerText">Your Safe Path to Digital Crypto Buy.</h2>

                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">

            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box">
                    <span class="info-box-icon"><i class="fas fa-dollar-sign text-primary"></i></span>

                    <div class="info-box-content text-dark">
                        <a href="/transaction_form.php"><span class="info-box-number text-primary">Buy Crypto</span></a>
                        <span class="info-box-text">
                            Choose from BitCoin and more
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box">
                    <span class="info-box-icon"><i class="fas fa-hand-holding-usd text-primary"></i></span>

                    <div class="info-box-content text-dark">
                        <a href="/transaction_cash.php"><span class="info-box-number text-primary">Deposit Cash</span></a>
                        <span class="info-box-text">
                            Deposit from many currencies
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box">
                    <span class="info-box-icon"><i class="fas fa-check-circle text-primary"></i></span>

                    <div class="info-box-content text-dark">
                        <a href="/transaction_form.php"><span class="info-box-number text-primary">Sell Crypto</span></a>
                        <span class="info-box-text">
                            Choose from BitCoin and more
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box">
                    <span class="info-box-icon"><i class="fas fa-minus-circle text-primary"></i></span>

                    <div class="info-box-content text-dark">
                        <a href="/transaction_cash.php"><span class="info-box-number text-primary">Withdraw Cash</span></a>
                        <span class="info-box-text">
                            Choose from BitCoin and more
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box">
                    <span class="info-box-icon"><i class="fas fa-sync-alt text-primary"></i></span>

                    <div class="info-box-content text-dark">
                        <a href="/transaction_form.php"><span class="info-box-number text-primary">Exchange Crypto</span></a>
                        <span class="info-box-text">
                            Choose from BitCoin and more
                        </span>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- ./Top Header -->

    <div class="row m-0 p-0">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body recurring rounded">
                    <h4>Get $10 in free CRYPTOZEN</h4>
                    <p>Set a recurring buy of $50 or more and get $10 after both your 4th and 8th buys.</p>
                    <a class="btn btn-primary">Set up recurring buy</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Wishlist Container -->
    <div class="myChartContainer">

        <div class="row m-0 p-0">

            <div class="col-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <b>Wishlist</b>
                    </div>

                    <cards class="cards">
                        <bitcoin style="width: 35%" class="btc">
                            <card class="asset-info">
                                <div class="title">
                                    <img src="https://s3.us-east-2.amazonaws.com/nomics-api/static/images/currencies/btc.svg" width="15%">
                                    <h1>Bitcoin</h1>
                                </div>
                                <div class="details">
                                    <h2 class="asset-price" id="btcPrice"></h2>
                                </div>
                            </card>
                            <canvas id="btcChart"></canvas>
                        </bitcoin>

                        <cosmos style="width: 35%" class="cosmos">
                            <card class="asset-info">
                                <div class="title">
                                    <img src="https://s3.us-east-2.amazonaws.com/nomics-api/static/images/currencies/atm.svg" width="15%">
                                    <h1>Cosmos</h1>
                                </div>
                                <div class="details">
                                    <h2 class="asset-price" id="atomPrice"></h2>
                                </div>
                            </card>
                            <canvas id="cosmosChart"></canvas>
                        </cosmos>

                        <ethereum style="width: 35%" class="ethereum">
                            <card class="asset-info">
                                <div class="title">
                                    <img src="https://s3.us-east-2.amazonaws.com/nomics-api/static/images/currencies/eth.svg" width="10%">
                                    <h1>Ethereum</h1>
                                </div>
                                <div class="details">
                                    <h2 class="asset-price" id="ethPrice"></h2>
                                </div>
                            </card>
                            <canvas id="ethereumChart"></canvas>
                        </ethereum>

                        <ltc style="width: 35%" class="lit">
                            <card class="asset-info">
                                <div class="title">
                                    <img src="https://s3.us-east-2.amazonaws.com/nomics-api/static/images/currencies/ltc.svg" width="15%">
                                    <h1>Litcoin</h1>
                                </div>
                                <div class="details">
                                    <h2 class="asset-price" id="litPrice"></h2>
                                </div>
                            </card>
                            <canvas id="litChart"></canvas>
                        </ltc>
                    </cards>

                </div>
            </div>
            <div class="card-footer text-center bg-white">
                <a href="portfolio.php" class="text-bold text-primary">Show More <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- ./ Wishlist Container -->
<script type="text/javascript" src="./dist/script.js"></script>

</div>
<?php
include('./includes/footer.php');
?>