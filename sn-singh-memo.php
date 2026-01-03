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
    <title>Palaeontological Society of India | S. N. Singh Memorial</title>
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
        .custom-table {
            width: 100%;
            border-collapse: collapse;
        }

        .custom-table th,
        .custom-table td {
            border: 1px solid #ddd;
            padding: 10px;
            vertical-align: top;
        }

        .custom-table th {
            background: #333;
            font-weight: 600;
        }

        .pdf-btn {
            display: inline-block;
            padding: 6px 10px;
            background: #c62828;
            color: #fff;
            border-radius: 4px;
            text-decoration: none;
            font-size: 13px;
        }

        .pdf-btn i {
            margin-right: 6px;
        }

        .pdf-btn:hover {
            background: #a91d1d;
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
                        <li><a href="">Lectures</a></li>
                        <li><a href="sn-singh-memo.php">S. N. Singh Memorial</a></li>
                    </ul>
                </div>
            </div>
            <section class="team-section">
                <div class="container common-container">
                    <h2 class="section-title">S. N. Singh Memorial</h2>

                    <!-- ================= BIO DATA (PDF) ================= -->
                    <div class="accordion-box">
                        <div class="accordion-header-custom" onclick="toggleAccordion(this)">
                            <h3>Bio Data</h3>
                            <span class="icon">+</span>
                        </div>

                        <div class="accordion-content">
                            <iframe src="assets/pdfs/singhBioData.pdf" width="100%" height="600" frameborder="0">
                            </iframe>
                        </div>
                    </div>

                    <!-- ================= PREVIOUS SPEAKERS ================= -->
                    <div class="accordion-box">
                        <div class="accordion-header-custom" onclick="toggleAccordion(this)">
                            <h3>Previous Speakers</h3>
                            <span class="icon">+</span>
                        </div>

                        <div class="accordion-content">
                            <div class="table-responsive ">
                                <table class="custom-table">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Date</th>
                                            <th>Delivered By</th>
                                            <th>Image</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>1</td>
                                            <td>14.12.1995</td>
                                            <td>Dr. S.A. Jafar, Lucknow</td>
                                            <td>
                                                <img src="assets/images/common/user-placeholder.jpg"
                                                    alt="Dr. S.A. Jafar" class="speaker-img">
                                            </td>
                                            <td>
                                                <a href="assets/pdf/1995.pdf" class="pdf-btn">
                                                    <i class="fa fa-file-pdf-o"></i> PDF
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>23.10.2000</td>
                                            <td>Shri P.C. Shrivastava, Kolkata</td>
                                            <td>
                                                <img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img">
                                            </td>
                                            <td>
                                                <a href="assets/pdf/2000.pdf" class="pdf-btn">
                                                    <i class="fa fa-file-pdf-o"></i> PDF
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>09.09.2001</td>
                                            <td>Shri Y.B. Sinha, Dehradun</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2001.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>24.09.2002</td>
                                            <td>Dr. Avinash Chandra, New Delhi</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2002.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>15.10.2003</td>
                                            <td>Dr. N.P. Singh, Baroda</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2003.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>6</td>
                                            <td>22.09.2004</td>
                                            <td>Mr. Jokhan Ram, Dehradun</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2004.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>7</td>
                                            <td>21.09.2005</td>
                                            <td>Dr. A.C. Nanda, Dehradun</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2005.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>8</td>
                                            <td>20.09.2006</td>
                                            <td>Prof. S. Bardhan, Kolkata</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2006.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>9</td>
                                            <td>06.10.2007</td>
                                            <td>Dr. B.R. Arora, Dehradun</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2007.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>10</td>
                                            <td>06.10.2008</td>
                                            <td>Dr. K. Ayyasami, GSI, Delhi</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2008.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>11</td>
                                            <td>15.09.2009</td>
                                            <td>Dr. D.M. Banerjee, Delhi</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2009.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>12</td>
                                            <td>10.02.2010</td>
                                            <td>Dr. Rahul Garg, Lucknow</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2010.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>13</td>
                                            <td>27.11.2011</td>
                                            <td>Dr. A.K. Jain, Sr. INSA, WIHG, Dehradun</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2011.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>14</td>
                                            <td>26.09.2012</td>
                                            <td>Dr. Ashwagosha Ganju, Director, SASE, Chandigarh</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2012.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>15</td>
                                            <td>10.09.2013</td>
                                            <td>Dr. Mrinal Sen, Director, NGRI, Hyderabad</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2013.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>16</td>
                                            <td>08.09.2014</td>
                                            <td>Dr. S.W.A. Naqvi, Director, NIO, Goa</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2014.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>17</td>
                                            <td>24.09.2015</td>
                                            <td>Mr. N.K. Verma, MD & CEO, ONGC Videsh</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2015.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>18</td>
                                            <td>21.10.2016</td>
                                            <td>Prof. Somnath Das Gupta, FNA</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2016.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>19</td>
                                            <td>21.10.2017</td>
                                            <td>Prof. Talat Ahmad, Vice Chancellor, Jamia Millia Islamia University, New
                                                Delhi</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2017.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>20</td>
                                            <td>06.09.2018</td>
                                            <td>Prof. D.C. Srivastava, FNA, IIT Roorkee</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2018.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>21</td>
                                            <td>19.09.2019</td>
                                            <td>Prof. Javed N. Malik, IIT Kanpur</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2019.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>22</td>
                                            <td>05.10.2020</td>
                                            <td>Dr. V.M. Tiwari, Director, NGRI, Hyderabad</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2020.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>23</td>
                                            <td>16.09.2021</td>
                                            <td>Dr. S.K. Wadhawan, Former DG, GSI, Jaipur</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2021.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>24</td>
                                            <td>28.09.2022</td>
                                            <td>Dr. Ravi Mishra, Executive Director, ONGC, Dehradun</td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2022.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>25</td>
                                            <td>09.10.2024</td>
                                            <td>
                                                Prof. Dhruv Sen Singh,<br>
                                                Head, Department of Geology,<br>
                                                University of Lucknow, Lucknow
                                            </td>
                                            <td><img src="assets/images/common/user-placeholder.jpg"
                                                    class="speaker-img"></td>
                                            <td><a href="assets/pdf/2024.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>

                </div>
            </section>


            <script>
                function toggleAccordion(el) {
                    const content = el.nextElementSibling;
                    const icon = el.querySelector(".icon");

                    if (content.classList.contains("open")) {
                        content.classList.remove("open");
                        icon.textContent = "+";
                    } else {
                        content.classList.add("open");
                        icon.textContent = "−";
                    }
                }
            </script>



            <?php include('includes/footer.php') ?>