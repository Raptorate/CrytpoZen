<?php
include('./includes/header.php');
include('./includes/nav.php');
include('./includes/sidebar.php');
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

        <bitcoin style="width: 120%">

            <div id="mychart"></div>
            <!-- <card class="asset-info">
        <div id="mychart"></div>
        <div class="details">
            <div id="mychart"></div>
        </div>  -->
            </card>
        </bitcoin>

    </cards>
    <!-- ./ Wishlist Container -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript" src="./dist/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/cryptocharts"></script>
<script src="./js/main.js"></script>
<!-- ./ Wishlist Container -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript" src="./dist/script.js"></script>

<?php
include('./includes/footer.php');
?>