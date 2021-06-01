<?php
include('./includes/header.php');
include('./includes/nav2.php');
include('./includes/sidebar2.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOW TO</title>
</head>
<body>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Top Header -->
    <div class="jumbotron">
        <div class="row mt-4">
            <div class="col-12">
                <div class="innerCntainer">
                    <h1 class="headerText text-center">WELCOME TO OUR HOW TO PAGE</h1>
                    <p class="headerText text-center">
                        Here you learn how to buy and sell crypto.  
                        How to deposit and withdraw cash and crypto. 
                    </p>
                </div>
            </div>
        </div>
    </div>

    
<div class="content text-center mt-5">
    <div class="row mb-5">
        <div class="col-md-6">
            <iframe class="rounded" width="100%" height="300" src="https://www.youtube.com/embed/ss7mNhumlu0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;"></iframe>
        </div>
        <div class="col-md-6">
            <iframe class="rounded" width="100%" height="300" src="https://www.youtube.com/embed/1newgMTWeWA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;"></iframe>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6">
            <iframe class="rounded" width="100%" height="300" src="https://www.youtube.com/embed/opnmfC0efKQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;"></iframe>
        </div>
        <div class="col-md-6">
            <iframe class="rounded" width="100%" height="300" src="https://www.youtube.com/embed/aSJDEizhzGw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;"></iframe>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6">
            <iframe class="rounded" width="100%" height="300" src="https://www.youtube.com/embed/UsP1hFVEkt8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;"></iframe>
        </div>
        <div class="col-md-6">
            <iframe class="rounded" width="100%" height="300" src="https://www.youtube.com/embed/ZJjzX6vUQsg" title="YouTube video player" frameborder="0" allow="accelerometer; gyroscope;">BUY CRYTPO</iframe>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6">
            <iframe class="rounded" width="100%" height="300" src="https://www.youtube.com/embed/Qf_in1hCOlA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;"></iframe>
        </div>
        <div class="col-md-6">
            <iframe class="rounded" width="100%" height="300" src="https://www.youtube.com/embed/6Gu2QMTAkEU" title="YouTube video player" frameborder="0" allow="accelerometer; gyroscope;">BUY CRYTPO</iframe>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6">
            <iframe class="rounded" width="100%" height="300" src="https://www.youtube.com/embed/gJIv5Fp_85s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;"></iframe>
        </div>
        <div class="col-md-6">
            <iframe class="rounded" width="100%" height="300" src="https://www.youtube.com/embed/v8OZJhZIi80" title="YouTube video player" frameborder="0" allow="accelerometer; gyroscope;">BUY CRYTPO</iframe>
        </div>
    </div>

</div>
</div>

<style>
#back-to-top {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 13px;
  border-radius: 4px;
}
</style>
<button type="button" class="btn btn-primary" onclick="topFunction()" id="back-to-top" title="Go to top"><i class="fa fa-arrow-up"></i></button>

<script>
//Get the button
var mybutton = document.getElementById("back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    scroll({
    top: 0,
    behavior: "smooth"
  });
}
</script>

</body>
</html>

<?php
include('./includes/footer.php');
?>
