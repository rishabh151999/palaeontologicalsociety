<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no" />
    <meta name="description" content="Palaeontological Society of India">
    <meta name="author" content="Palaeontological Society of India">
    <link rel="apple-touch-icon" href="assets/images/logo/shardaMedal.gif">
    <link rel="icon" href="assets/images/logo/shardaMedal.gif">
    <title>Palaeontological Society of India | About Us</title>
    <link href="assets/css/base.css" rel="stylesheet" media="all">
    <link href="assets/css/base-responsive.css" rel="stylesheet" media="all">
    <link href="assets/css/grid.css" rel="stylesheet" media="all">
    <link href="assets/css/font.css" rel="stylesheet" media="all">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/css/flexslider.css" rel="stylesheet" media="all">
    <link href="assets/css/megamenu.css" rel="stylesheet" media="all" />
    <link href="assets/css/print.css" rel="stylesheet" media="print" />
    <link href="assets/css/megamenu.css" rel="stylesheet" media="all" />
    <link href="theme/css/site.css" rel="stylesheet" media="all">
    <link href="theme/css/site-responsive.css" rel="stylesheet" media="all">
    <link href="theme/css/ma5gallery.css" rel="stylesheet" type="text/css">
    <link href="theme/css/print.css" rel="stylesheet" type="text/css" media="print">
    <noscript>
        <link href="theme/css/no-js.css" type="text/css" rel="stylesheet">
    </noscript>
</head>

<body>
    <div id="fb-root"></div>


    <?php include('includes/navbar.php') ?>

    <div class="wrapper" id="skipCont"></div>
    <!--/#skipCont-->
    <section id="fontSize" class="wrapper body-wrapper ">
        <div class="bg-wrapper inner-wrapper">
            <div class="breadcam-bg breadcam">
                <div class="container common-container four_content ">
                    <ul>
                        <li><a href="index.php">Home </a></li>
                        <li><a href="picture-gallery.php">Picture Gallery</a></li>
                    </ul>
                </div>
            </div>

            <section class="section-common-spacing">
                <div class="container common-container">
                    <h2 class="section-title"> Picture Gallery of The Palaeontological Society of India</h2>

                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-card"
                                onclick="openImage('assets/images/picturegallery/big/bothia_crustacea.jpg','Bothia Crustacea')">
                                <img src="assets/images/picturegallery/big/bothia_crustacea.jpg" alt="">
                                <div class="bottom-title">Bothia Crustacea</div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-card"
                                onclick="openImage('assets/images/picturegallery/big/fossil_lobster_fullers_Earth__rajasthan.jpg','Fossil Lobster Fullers Earth Rajasthan')">
                                <img src="assets/images/picturegallery/big/fossil_lobster_fullers_Earth__rajasthan.jpg"
                                    alt="">
                                <div class="bottom-title">Fossil Lobster Fullers Earth Rajasthan</div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-card"
                                onclick="openImage('assets/images/picturegallery/big/insect_in_amber_vastan_52_ma.jpg','Insect in Amber vastan 52 ma')">
                                <img src="assets/images/picturegallery/big/insect_in_amber_vastan_52_ma.jpg" alt="">
                                <div class="bottom-title">Insect in Amber vastan 52 ma</div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-card"
                                onclick="openImage('assets/images/picturegallery/ultrastructure_amber_embedded_leaf_vastan.jpg','Ultrastructure Amber Embedded Leaf Vastan')">
                                <img src="assets/images/picturegallery/ultrastructure_amber_embedded_leaf_vastan.jpg" alt="">
                                <div class="bottom-title">Ultrastructure Amber Embedded Leaf Vastan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Custom Modal -->
            <div id="customModal" class="custom-modal">
                <span class="close-btn" onclick="closeModal()">&times;</span>
                <img id="modalImg" />
                <h4 id="modalTitle"></h4>
            </div>


            <script>
                function openImage(src, title) {
                    document.getElementById("modalImg").src = src;
                    document.getElementById("modalTitle").innerText = title;
                    document.getElementById("customModal").classList.add("show");
                }

                function closeModal() {
                    document.getElementById("customModal").classList.remove("show");
                }

                // Close when clicking outside image
                document.getElementById("customModal").addEventListener("click", function (e) {
                    if (e.target === this) {
                        closeModal();
                    }
                });
            </script>

            <?php include('includes/footer.php') ?>