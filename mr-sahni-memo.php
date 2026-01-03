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
    <title>Palaeontological Society of India | M.R. Sahni Memorial</title>
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
                        <li><a href="mr-sahni-memo.php">M.R. Sahni Memorial</a></li>
                    </ul>
                </div>
            </div>
            <section class="team-section">
                <div class="container common-container">
                    <h2 class="section-title">M.R. Sahni Memorial</h2>

                    <!-- ================= BIO DATA (PDF) ================= -->
                    <div class="accordion-box">
                        <div class="accordion-header-custom" onclick="toggleAccordion(this)">
                            <h3>Bio Data</h3>
                            <span class="icon">+</span>
                        </div>

                        <div class="accordion-content">
                            <iframe src="assets/pdf/mr-sahni-biodata.pdf" width="100%" height="600" frameborder="0">
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
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>1</td>
                                            <td>01.03.1983</td>
                                            <td>Prof. G.W. Chiplonkar, Pune</td>
                                            <td><a href="assets/pdf/1983.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>01.03.1984</td>
                                            <td>Prof. S.R.K. Chopra, Patiala <strong>(Cancelled)</strong></td>
                                            <td>—</td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>18.03.1985</td>
                                            <td>Prof. S.B. Bhatia, Chandigarh</td>
                                            <td><a href="assets/pdf/1985.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>01.03.1986</td>
                                            <td>Sri C. Tripathi, Lucknow</td>
                                            <td><a href="assets/pdf/1986.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>01.03.1987</td>
                                            <td>Prof. D.P. Agarwal, Ahmedabad</td>
                                            <td><a href="assets/pdf/1987.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>6</td>
                                            <td>01.03.1988</td>
                                            <td>Sri M.V.A. Sastry, Bangalore</td>
                                            <td><a href="assets/pdf/1988.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>7</td>
                                            <td>01.03.1989</td>
                                            <td>Prof. M.S. Srinivasan, Varanasi</td>
                                            <td><a href="assets/pdf/1989.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>8</td>
                                            <td>02.03.1990</td>
                                            <td>Dr. S.K. Biswas, Dehradun</td>
                                            <td><a href="assets/pdf/1990.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>9</td>
                                            <td>01.03.1991</td>
                                            <td>Dr. S.K. Shah, Jammu</td>
                                            <td><a href="assets/pdf/1991.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>10</td>
                                            <td>04.03.1992</td>
                                            <td>Sri Ravi Shankar, Lucknow</td>
                                            <td><a href="assets/pdf/1992.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>11</td>
                                            <td>01.03.1993</td>
                                            <td>Dr. K.S. Valdiya, Nainital</td>
                                            <td><a href="assets/pdf/1993.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>12</td>
                                            <td>01.03.1994</td>
                                            <td>Sri Madan Mohan, Baroda</td>
                                            <td><a href="assets/pdf/1994.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>13</td>
                                            <td>01.03.1995</td>
                                            <td>Dr. S.L. Jain, Lucknow</td>
                                            <td><a href="assets/pdf/1995.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>14</td>
                                            <td>28.10.1996</td>
                                            <td>Prof. V.N. Mishra, Pune</td>
                                            <td><a href="assets/pdf/1996.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>15</td>
                                            <td>01.03.1997</td>
                                            <td>Dr. O.N. Bhargava, Chandigarh</td>
                                            <td><a href="assets/pdf/1997.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>16</td>
                                            <td>09.03.1998</td>
                                            <td>Dr. Jagdish Pandey, Dehradun</td>
                                            <td><a href="assets/pdf/1998.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>17</td>
                                            <td>15.03.1999</td>
                                            <td>Dr. R.S. Tewari, Bhopal</td>
                                            <td><a href="assets/pdf/1999.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>18</td>
                                            <td>01.03.2000</td>
                                            <td>Dr. G.L. Badam, Pune</td>
                                            <td><a href="assets/pdf/2000.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>19</td>
                                            <td>01.03.2001</td>
                                            <td>Prof. A. Sahni, Chandigarh</td>
                                            <td><a href="assets/pdf/2001.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>20</td>
                                            <td>01.03.2002</td>
                                            <td>Dr. Amitabha Chakrabarti, Kharagpur</td>
                                            <td><a href="assets/pdf/2002.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>21</td>
                                            <td>05.03.2003</td>
                                            <td>Dr. M.M. Mohanti, Bhubaneswar</td>
                                            <td><a href="assets/pdf/2003.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>22</td>
                                            <td>01.03.2004</td>
                                            <td>Dr. Jai Krishna, Varanasi</td>
                                            <td><a href="assets/pdf/2004.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>23</td>
                                            <td>01.03.2005</td>
                                            <td>Dr. Rajiv Nigam, Goa</td>
                                            <td><a href="assets/pdf/2005.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>24</td>
                                            <td>01.03.2006</td>
                                            <td>Prof. S.K. Tandon, Delhi</td>
                                            <td><a href="assets/pdf/2006.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>25</td>
                                            <td>01.03.2007</td>
                                            <td>Prof. Vishwas S. Kale, Pune</td>
                                            <td><a href="assets/pdf/2007.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>26</td>
                                            <td>01.03.2008</td>
                                            <td>Prof. P.K. Saraswati, Bombay</td>
                                            <td><a href="assets/pdf/2008.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>27</td>
                                            <td>27.03.2009</td>
                                            <td>Prof. A.K. Singhvi, Ahmedabad</td>
                                            <td><a href="assets/pdf/2009.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>28</td>
                                            <td>08.03.2010</td>
                                            <td>Prof. Anil K. Gupta, Dehradun</td>
                                            <td><a href="assets/pdf/2010.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>29</td>
                                            <td>01.03.2011</td>
                                            <td>Dhananjay M. Mohabey, Nagpur</td>
                                            <td><a href="assets/pdf/2011.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>30</td>
                                            <td>03.03.2012</td>
                                            <td>Prof. G.V.R. Prasad, Delhi</td>
                                            <td><a href="assets/pdf/2012.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>31</td>
                                            <td>01.03.2013</td>
                                            <td>Prof. S.P. Mohan, Chennai</td>
                                            <td><a href="assets/pdf/2013.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>32</td>
                                            <td>10.03.2014</td>
                                            <td>Dr. Indra Bir Singh, Lucknow</td>
                                            <td><a href="assets/pdf/2014.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>33</td>
                                            <td>02.03.2015</td>
                                            <td>
                                                Prof. H.T. Fürsich<br>
                                                Emeritus Professor, Erlangen University, Germany
                                            </td>
                                            <td><a href="assets/pdf/2015.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>34</td>
                                            <td>01.03.2016</td>
                                            <td>Prof. D.K. Pandey, Rajasthan University, Jaipur</td>
                                            <td><a href="assets/pdf/2016.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>35</td>
                                            <td>01.03.2017</td>
                                            <td>Prof. Jere H. Lipps, California University, U.S.A.</td>
                                            <td><a href="assets/pdf/2017.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>36</td>
                                            <td>12.03.2018</td>
                                            <td>Prof. Devesh Sinha, Delhi University, Delhi</td>
                                            <td><a href="assets/pdf/2018.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>37</td>
                                            <td>06.03.2019</td>
                                            <td>
                                                Prof. Sunil Bajpai<br>
                                                IIT Roorkee
                                            </td>
                                            <td><a href="assets/pdf/2019.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>38</td>
                                            <td>20.10.2020</td>
                                            <td>
                                                Prof. A.D. Singh<br>
                                                CAS in Geology, B.H.U., Varanasi
                                            </td>
                                            <td><a href="assets/pdf/2020.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>39</td>
                                            <td>27.01.2022</td>
                                            <td>
                                                Dr. R.K. Srivastava<br>
                                                Director (Exploration), ONGC, Dehradun
                                            </td>
                                            <td><a href="assets/pdf/2022.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>40</td>
                                            <td>28.04.2023</td>
                                            <td>
                                                Prof. Mukund Sharma<br>
                                                Birbal Sahni Institute of Palaeosciences, Lucknow
                                            </td>
                                            <td><a href="assets/pdf/2023.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>41</td>
                                            <td>11.03.2024</td>
                                            <td>Prof. Rajeev Patnaik <br><small>(Abstract available)</small></td>
                                            <td><a href="assets/pdf/2024.pdf" class="pdf-btn"><i
                                                        class="fa fa-file-pdf-o"></i> PDF</a></td>
                                        </tr>

                                        <tr>
                                            <td>42</td>
                                            <td>28.03.2025</td>
                                            <td>
                                                Dr. S.K. Parcha<br>
                                                Wadia Institute of Himalayan Geology, Dehradun
                                            </td>
                                            <td><a href="assets/pdf/2025.pdf" class="pdf-btn"><i
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