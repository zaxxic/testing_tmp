<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/layout-tabs-tooltip.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:01:56 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Title -->
    <title>Uni Pro Admin Template - Admin Dashboard</title>


    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/bootstrap.min.css") }}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/fonts/style.css") }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/show_report.css") }}">


    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/megamenu/css/megamenu.css") }}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/search-filter.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/custom-search-filter.css") }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- Loading wrapper start -->
    <div id="loading-wrapper">
        <div class="spinner-border"></div>
        Loading...
    </div>
    <!-- Loading wrapper end -->

    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- Sidebar wrapper start -->
        @include('layouts.sidebar')

        <!-- Sidebar wrapper end -->

        <!-- *************
				************ Main container start *************
			************* -->
        <div class="main-container" style="background-color: #FFFFFF;">

            <!-- Page header starts -->
            @include('layouts.header')
            <!-- Page header ends -->

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-12">
                            <!-- Card start -->
                            <div class="">
                                <div class="card-title">
                                    <div class="d-flex flex-wrap">
                                        <h1 class="card-title col-xl-11 col-lg-11 col-md-10 col-sm-8 col-8" style="font-size: 20px;">Ringkasan Pengeluaran <i class="icon-star2 " style="padding-left: 10px; font-size: 19px;"></i> </h1>
                                    </div>
                                </div>

                            </div>

                            <div class="d-flex flex-column flex-sm-row">
                                <div class=" col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                                    <div class="d-flex">
                                        <div class="col-8 mt-2">
                                            <h5 class="">Biaya</h5>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="">Rp.2.000.000</h5>
                                        </div>
                                    </div>
                                    <hr class=" col-11">
                                    <H5 class="">lainnya</H5>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                                    <div class="d-flex">
                                        <div class="col-12">
                                            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                                                <h6 class="col-8" style="display: flex; align-items: center;">linimasa</h6>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                                                </li>
                                            </ul>
                                            <hr>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                                    <div>
                                                        <canvas id="myBarChart" width="623" height="168" style="display: block; box-sizing: border-box; height: 389px; width: 554px;"    ></canvas>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                                    <div>
                                                        <canvas id="myDoughnutChart" height="398" style="display: block;box-sizing: border-box;height: 354px;width: 554px;"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- Card end -->
            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper end -->

    <!-- App Footer start -->
    <div class="app-footer">© Uni Pro Admin 2021</div>
    <!-- App footer end -->

    </div>
    <!-- Content wrapper scroll end -->

    </div>
    <!-- *************
				************ Main container end *************
			************* -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
			************ Required JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset("Gmbslagi/js/jquery.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/js/modernizr.js") }}"></script>
    <script src="{{ asset("Gmbslagi/js/moment.js") }}"></script>

    <!-- *************
			************ Vendor Js Files *************
            ************* -->

    <!-- Megamenu JS -->
    <script src="{{ asset("Gmbslagi/vendor/megamenu/js/megamenu.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/megamenu/js/custom.js") }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset("Gmbslagi/vendor/slimscroll/slimscroll.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/slimscroll/custom-scrollbar.js") }}"></script>

    <!-- Search Filter JS -->
    <script src="{{ asset("Gmbslagi/vendor/search-filter/search-filter.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/search-filter/custom-search-filter.js") }}"></script>

    <!-- Apex Charts -->
    <script src="{{ asset("Gmbslagi/vendor/apex/apexcharts.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/apex/custom/sales/revenue.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/apex/custom/sales/tickets.js") }}"></script>

    <!-- Circleful Charts -->
    <script src="{{ asset("Gmbslagi/vendor/circliful/circliful.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/circliful/circliful.custom.js") }}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset("Gmbslagi/js/main.js") }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset("Gmbslagi/js/show_laporan_bar.js") }}"></script>
    <script src="{{ asset("Gmbslagi/js/show_laporan_pie.js") }}"></script>

</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/layout-tabs-tooltip.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:01:56 GMT -->

</html>
