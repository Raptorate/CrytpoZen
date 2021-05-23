<?php
include('./includes/header.php');
include('./includes/nav2.php');
include('./includes/sidebar2.php');
?>
<style>
    <?php include './dist/style.css'; ?>
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Top Header -->
    <div class="jumbotron">
        <div class="row mt-4">
            <div class="col-12">
                <div class="innerCntainer">
                    <h1 class="headerText text-center">Portfolio</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- ./Top Header -->

    <!-- Wishlist Container -->
    <!-- <div class="myChartContainer pb-4">

        <div class="row m-0 p-0">

            <div class="col-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <b>Wishlist</b>
                    </div>
                    <div class="card-body p-3">
                        <div class="row p-0 justify-content-center">

                            <div class="col-md-4 m-0 p-0">
                                <div class="card-body border">
                                    <div class="py-2 pl-2">
                                        <p class="mb-1"><i class="fab fa-bitcoin text-warning" style="font-size: 20px;"></i> Bitcoin</p>
                                        <h5>€48,187.91</h5>
                                    </div>
                                    <div>
                                        <canvas id="lineChart1" style="min-height: 100px; height: 100px; max-height: 100px; max-width: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 p-0 m-0">
                                <div class="card-body border">
                                    <div class="py-2 pl-2">
                                        <p class="mb-1"><i class="fab fa-ethereum" style="font-size: 20px; color: #627eea;"></i> Ethereum</p>
                                        <h5>€1,780.81</h5>
                                    </div>
                                    <div>
                                        <canvas id="lineChart2" style="min-height: 100px; height: 100px; max-height: 100px; max-width: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 p-0 m-0 ">
                                <div class="card-body border">
                                    <div class="py-2 pl-2">
                                        <p class="mb-1"><i class="fab fa-pagelines text-success" style="font-size: 20px;"></i> Litecoin</p>
                                        <h5>€215.20</h5>
                                    </div>
                                    <div>
                                        <canvas id="lineChart3" style="min-height: 100px; height: 100px; max-height: 100px; max-width: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 m-0 mt-3 p-0">
                                <div class="card-body border">
                                    <div class="py-2 pl-2">
                                        <p class="mb-1"><i class="fab fa-confluence text-danger" style="font-size: 20px;"></i> Cardano</p>
                                        <h5>€12,006.41</h5>
                                    </div>
                                    <div>
                                        <canvas id="lineChart4" style="min-height: 100px; height: 100px; max-height: 100px; max-width: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 p-0 m-0 mt-3">
                                <div class="card-body border">
                                    <div class="py-2 pl-2">
                                        <p class="mb-1"><i class="fab fa-bitcoin" style="font-size: 20px; color: green;"></i> Bitcoin Cash</p>
                                        <h5>€7,896.84</h5>
                                    </div>
                                    <div>
                                        <canvas id="lineChart5" style="min-height: 100px; height: 100px; max-height: 100px; max-width: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div> -->
    <cards class="cards">
        <bitcoin style="width: 30%" class="btc">
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


        <cosmos style="width: 30%" class="cosmos">
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

        <ethereum style="width: 30%" class="ethereum">
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

        <ltc style="width: 30%" class="lit">
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

        <bch style="width: 30%" class="bch">
            <card class="asset-info">
                <div class="title">
                    <img src="https://bitcoincash.org/graphics/img/green/bitcoin-cash-circle.svg" width="10%">
                    <h1>Bitcoin Cash</h1>
                </div>
                <div class="details">
                    <h2 class="asset-price" id="bchPrice"></h2>
                </div>
            </card>
            <canvas id="bchChart"></canvas>
        </bch>
    </cards>
    <!-- ./ Wishlist Container -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript" src="./dist/script.js"></script>

<?php
include('./includes/footer.php');
?>