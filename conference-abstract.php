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
    <title>Palaeontological Society of India | Conference Abstract</title>
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

    <style>
        .field-guide-section {
            padding: 20px 0;
        }

        .section-title {
            text-align: center;
            font-size: 32px;
            margin-bottom: 40px;
            font-weight: 600;
        }

        .field-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
        }

        .sha-book {
            background: #eeeeeeff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
            transition: 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .sha-book:hover {
            transform: translateY(-6px);
        }

        .sha-book img {
            width: 100%;
            height: 230px;
            object-fit: contain;
            border-bottom: 1px solid #ce3330;
        }

        .book-content {
            padding: 10px;
            text-align: center;
        }

        .book-content h5 {
            font-size: 16px;
            margin-bottom: 8px;
        }

        .book-content p {
            font-size: 14px;
            color: #000000ff;
            margin-bottom: 6px;
        }

        .book-content span {
            display: block;
            font-size: 13px;
            color: #515151ff;
            margin-bottom: 10px;
        }

        .book-content .btn {
            display: inline-block;
            padding: 6px 16px;
            background: #ce3330;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
        }

        .book-content .btn:hover {
            background: #008544;
        }

        .coming-soon {
            opacity: 0.85;
        }

        .coming-soon .btn {
            background: #999;
            cursor: not-allowed;
        }
    </style>
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
                        <li><a>Publications </a></li>
                        <li><a href="conference-abstract.php">Conference Abstract</a></li>
                    </ul>
                </div>
            </div>
            <section class="field-guide-section">
                <div class="container common-container">
                    <h2 class="section-title text-center">Conference Abstracts</h2>

                    <div class="field-grid">

                        <!-- Book 1 -->
                        <div class="sha-book">
                            <img src="assets/images/images1/abs1.jpg" alt="abs1">
                            <div class="book-content">
                                <h5>Conference Abstract</h5>
                                <p>Part 1</p>
                                <a href="#" class="btn">View Book</a>
                            </div>
                        </div>

                        <!-- Book 2 -->
                        <div class="sha-book">
                            <img src="assets/images/images1/abs2.jpg" alt="abs2">
                            <div class="book-content">
                                <h5>Conference Abstract</h5>
                                <p>Part 2</p>
                                <a href="#" class="btn">View Book</a>
                            </div>
                        </div>



                    </div>
                </div>
            </section>



            <?php include('includes/footer.php') ?>