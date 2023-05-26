<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:00:09 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Title -->
    <title>Unknown | Beranda</title>


    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/bootstrap.min.css") }}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/fonts/style.css") }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/dashboard.css") }}">


    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/megamenu/css/megamenu.css") }}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/search-filter.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/custom-search-filter.css") }}">

		<!-- Date Range CSS -->
		<link rel="stylesheet" href="{{ asset("vendor/daterange/daterange.css") }}">

</head>

<body>

    <!-- Loading wrapper start -->
    <div id="loading-wrapper" role="status">
        <div class="spinner-border"></div>
        Sabar Ngentod...
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
        <div class="main-container">

            <!-- Page header starts -->
            @include('layouts.header')
            <!-- Page header ends -->

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="">
                            <div class="card-title">
                                <div class="d-flex flex-wrap">
                                    <h1 class="card-title col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12" style="font-size: 20px;">Dashboard

                                    </h1>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<div class="input-group">
														<input type="text" class="form-control datepicker-range-auto-apply">
														<span class="input-group-text">
															<i class="icon-calendar1"></i>
														</span>
													</div>
													<div class="field-placeholder">Date Range Auto Apply</div>
												</div>
												<!-- Field wrapper end -->

											</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Row end -->

                    <!-- Row start -->

                    <!-- Row end -->

                </div>
                <!-- Content wrapper end -->

                <!-- App footer start -->
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
    <script src="{{ asset("Gmbslagi/js/dropdown.js") }}"></script>


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
    <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/salesGraph.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/ordersGraph.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/earningsGraph.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/visitorsGraph.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/customersGraph.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/sparkline.js") }}"></script>

    <!-- Circleful Charts -->
    <script src="{{ asset("Gmbslagi/vendor/circliful/circliful.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/circliful/circliful.custom.js") }}"></script>

    <!-- Date Range JS -->
    <script src="{{ asset("Gmbslagi/vendor/daterange/daterange.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/daterange/custom-daterange.js") }}"></script>
    <!-- Main Js Required -->
    <script src="{{ asset("Gmbslagi/js/main.js") }}"></script>

</body>


	</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:01:19 GMT -->

</html>
