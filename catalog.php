<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/icon.png" type="image/x-icon">
  <meta name="description" content="Catalog Joki League of Legends, Joki LoL #1 di Google">

  <title>Catalog | eloboosting.co.vu</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>
<?php
include "config.php";
?>

<!-- Analytics -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PFK425"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PFK425');</script>
<!-- /Analytics -->

<section class="menu cid-rYnq0dppeg" once="menu" id="menu1-n">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="index.php">ELOBOOSTING.CO.VU</a></span>
            </div>
        </div>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-4" href="index.php" aria-expanded="false">HOME</a></li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="catalog.php" aria-expanded="false">CATALOG</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="order.php" aria-expanded="false">ORDER</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="contact.php" aria-expanded="false">CONTACT</a></li></ul>
        </div>
    </nav>
</section>

<section class="cid-rYnq0eCi8D mbr-fullscreen" id="header2-o">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>
    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">CATALOG</h1>
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="mbr-gallery mbr-slider-carousel cid-rYnOsxhtxA" id="gallery1-1f">
    <div class="container">
        <div><!-- Filter --><!-- Gallery --><div class="mbr-gallery-row"><div class="mbr-gallery-layout-default"><div><div>
        <?php
        $sql = "SELECT * FROM katalog";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class='mbr-gallery-item mbr-gallery-item--p5' data-video-url='false' data-tags='Awesome'><div href='#lb-gallery1-1f' data-toggle='modal'><img src='assets/images/".$row['image1']."'><span class='icon-focus'></span><span class='mbr-gallery-title mbr-fonts-style display-7'>".$row['rank']." (".$row['description'].") : ".$row['price']."</span></div></div>";
            }
        }
        else {
            echo "No Result";
        }
        ?>
        </div></div>
        <div class="clearfix"></div></div></div><!-- Lightbox --><div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-1f"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><div class="carousel-inner">
        <?php
        $sql = "SELECT * FROM katalog";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                if($row['id'] == 1){
                    echo "<div class='carousel-item active'><img src='assets/images/".$row['image1']."'></div>";
                }
                else if($row['id'] != 1){
                    echo "<div class='carousel-item'><img src='assets/images/".$row['image1']."'></div>";
                }
            }
        }
        else {
            echo "No Result";
        }
        mysqli_close($connect);
        ?>
        </div><a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery1-1f"><span class="mbri-left mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery1-1f"><span class="mbri-right mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Close</span></a></div></div></div></div></div>
    </div>
</section>

<section class="cid-rYnq0j9zrc" id="social-buttons2-s">
    <div class="container">
        <div class="media-container-row">
            <div class="col-md-8 align-center">
                <div class="social-list pl-0 mb-0">
                    <a href="https://api.whatsapp.com/send?phone=6281333138472" target="_blank">
                        <span class="px-2 mbr-iconfont mbr-iconfont-social socicon-whatsapp socicon"></span>
                    </a>
                    <a href="http://line.me/ti/p/~fvo140202" target="_blank">
                        <span class="px-2 mbr-iconfont mbr-iconfont-social socicon-line socicon"></span>
                    </a>
                    <a href="https://instagram.com/franciscusvalentinus" target="_blank">
                        <span class="px-2 mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section once="" class="cid-rYnq0jY4aa mbr-reveal" id="footer6-t">
    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">© Copyright 2020 LoL Boosting&nbsp;- All Rights Reserved</p>
            </div>
        </div>
    </div>
</section>
<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/dropdown/js/nav-dropdown.js"></script>
<script src="assets/dropdown/js/navbar-dropdown.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
<script src="assets/sociallikes/social-likes.js"></script>
<script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
<script src="assets/masonry/masonry.pkgd.min.js"></script>
<script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/theme/js/script.js"></script>
<script src="assets/slidervideo/script.js"></script>
<script src="assets/gallery/player.min.js"></script>
<script src="assets/gallery/script.js"></script>
</body>
</html>