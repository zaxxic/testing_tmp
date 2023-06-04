<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:53 GMT -->

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
    <link rel="stylesheet" href="{{ asset('Gmbslagi/css/bootstrap.min.css') }}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/fonts/style.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/css/main.css') }}">


    <!-- *************
   ************ Vendor Css Files *************
  ************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/megamenu/css/megamenu.css') }}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/search-filter/search-filter.css') }}">
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/search-filter/custom-search-filter.css') }}">

    <!-- Data Tables -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/datatables/dataTables.bs4.css') }}" />
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/datatables/dataTables.bs4-custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/datatables/buttons.bs.css') }}" />
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/dropzone/dropzone.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/daterange/daterange.css')}}">
    <style>
    .hidden-menu {
    display: none;
    background-color: #f2f2f2;
    font-size: 20px;
    padding: 20px;
  }

  .hidden-menu a {
    display: inline-block;
    padding: 6px;
    transition: transform 0.3s;
    position: relative;
  }

  .hidden-menu a:hover {
    transform: scale(1.2);
  }

        .text {
            text-align: center;
            color: #5e6973;
        }

        @media (min-width: 576px) {
            .box1 {
                margin-left: 32%;
            }
        }

        .empty-box2 {
            color: #f26861;
            border-color: #f26861;
            outline: 1px solid #f26861;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box2.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #f26861;
            border-color: #f26861;
            outline: 1px solid #f26861;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box2:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #f26861;
            border-color: #f26861;
            outline: 1px solid #f26861;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box1 {
            color: #f26861;
            border-color: #f26861;
            outline: 1px solid #f26861;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 5px 0px 0px 5px;
        }

        .empty-box1.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #f26861;
            border-color: #f26861;
            outline: 1px solid #f26861;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box1:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #f26861;
            border-color: #f26861;
            outline: 1px solid #f26861;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 160px;
            z-index: 1;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 10px;
            border-radius: 4px;
            right: 0;
            /* Mengarahkan dropdown ke arah kiri */
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            display: block;
            padding: 5px 0;
            text-decoration: none;
            color: #333;
        }

        .searchcontainer {
            width: 90%;
            font-size: 20px;

            .icon-search {
                display: inline-block;
                margin-right: 50px;
                color: rgba(255, 255, 255, 0.5);
            }

            .search {
                width: 111%;
                display: inline-block;
                background-color: rgba(255, 255, 255, 0);
                border: 0px;
                color: grey;
                font-size: 16px;
                padding: 10px 0px;
                padding-left: 25px;
                border-bottom: 1px solid grey;

                &:focus {
                    outline: 0px;
                    border-bottom: 1px solid #ccc;
                }
            }
        }
    </style>

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
        <div class="main-container">

            <!-- Page header starts -->
            <div class="page-header">

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9">



                    </div>

                </div>
                <!-- Row end -->

            </div>
            <!-- Page header ends -->

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <!-- Card start -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-6">
                                        <div class="card-title">
                                            <h3>Faktur<button type="button" style="border: none; background:transparent;">☆</button></h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-6">
                                        <div class="graph-day-selection" role="group" style="margin-left: 68%">
                                            <a href="{{url('add_invoice')}}">
                                                <button type="button" class="btn active" style="background: transparent">Tambah Faktur</button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dropdown icon-dots-three-vertical">
                                        <span></span>
                                        <div class="dropdown-content">
                                            <a href="#">
                                                <button type="button" style="border: none; background-color: white; color:#333; background:transparent" class="icon-download" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">
                                                    Impor
                                                </button>
                                            </a>
                                            <a href="#" class="icon-folder" style="color: #333">
                                                <button type="button" style="border: none; background-color: white; color:#333; background:transparent">
                                                    Ekspor</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Row start -->
                                    <div class="row gutters" style="margin-left: 10%; margin-bottom: -5%">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="stats-tile">
                                                <div class="sale-icon">
                                                    <p><b><i>Rp</i></b></p>
                                                </div>
                                                <div class="sale-details">
                                                    <h2>25</h2>
                                                    <p>Jatuh Tempo</p>
                                                </div>
                                                <div class="sale-graph">
                                                    <div id="sparklineLine1"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="stats-tile">
                                                <div class="sale-icon">
                                                    <p><b><i>Rp</i></b></p>
                                                </div>
                                                <div class="sale-details">
                                                    <h2>32</h2>
                                                    <p>Terbuka</p>
                                                </div>
                                                <div class="sale-graph">
                                                    <div id="sparklineLine2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                            <div class="stats-tile">
                                                <div class="sale-icon">
                                                    <p><b><i>Rp</i></b></p>
                                                </div>
                                                <div class="sale-details">
                                                    <h2>19</h2>
                                                    <p>Konsep</p>
                                                </div>
                                                <div class="sale-graph">
                                                    <div id="sparklineLine3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row end -->
                                    <div class="d-flex">
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box1" style="margin-top: 8%;">
                                            <div class="hr-switch">
                                                <a href="{{ url('invoice') }}">
                                                    <div class="empty-box1 active">
                                                        <h6 class="">Faktur</h6>
                                                    </div	>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box2" style="margin-top: 8%;">
                                            <div class="hr-switch">
                                                <a href="{{ url('recurring_invoice') }}">
                                                    <div class="empty-box2">
                                                        <h6 class="">Rutin</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="searchcontainer">
                                            <i class="icon-search"></i><input class="search " type="text" placeholder="Cari atau seleksi hasil.." style="
                                              margin-bottom: 2%; font-size:10pt " />
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="hidden-menu" style="display: none; background-color: #f2f2f2; font-size: 12pt; padding: 10px;">
                                            <p style="display: inline" id="count-display">&emsp;</p>
                                            &emsp;<a  href="#" title="Batal"> <i class="icon-x-circle" style="color:#424242 "></i> </a>
                                            &emsp;<a  href="#" title="Hapus"> <i class="icon-trash-2"></i> </a>
                                        </div>
                                        <table class="table table-hover caption-top">
                                            <thead>
                                                <tr>
                                                    <th scope="col"> <input type="checkbox" id="select-all-checkbox"> </th>
                                                    <th scope="col">Tanggal Jatuh Tempo</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Pelanggan</th>
                                                    <th scope="col">Jumlah</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Data 1 -->
                                                <tr class="table-row">
                                                    <td><input type="checkbox" class="other-checkbox"></td>
                                                    <td>12 mei 2023</td>
                                                    <td>konsep</td>
                                                    <td>koirul</td>
                                                    <td>91.000.000,00</td>
                                                    <td>
                                                        <div class="menu-icons" style="font-size: 15px;">
                                                            <a href="{{ url('edit_supplier') }}" class="menu-icon icon-edit-2"></a>
                                                            <button type="button" style="border: none; background:none" data-bs-toggle="modal" data-bs-target="#payment">
                                                                <i class="icon-attach_money"></i>
                                                            </button>
                                                            <a href="#" class="menu-icon delete-icon"><i class="icon-trash"></i></a>
                                                            <a href="{{ url('details') }}" class="menu-icon icon-eye1"></a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Data 2 -->
                                                <tr class="table-row">
                                                    <td><input type="checkbox" class="other-checkbox"></td>
                                                    <td>12 mei 2024</td>
                                                    <td>konsep</td>
                                                    <td>choirul</td>
                                                    <td>80.000.000,00</td>
                                                    <td>
                                                        <div class="menu-icons" style="font-size: 15px;">
                                                            <a href="{{ url('edit_supplier') }}" class="menu-icon icon-edit-2"></a>
                                                            <button type="button" style="border: none; background:none" data-bs-toggle="modal" data-bs-target="#payment">
                                                                <i class="icon-attach_money"></i>
                                                            </button>
                                                            <a href="#" class="menu-icon delete-icon"><i class="icon-trash"></i></a>
                                                            <a href="#" class="menu-icon icon-eye1"></a>
                                                        </div>
                                                    </td>
                                                </tr>


                                                <!-- Data 3 -->
                                                <tr class="table-row">
                                                    <td><input type="checkbox" class="other-checkbox"></td>
                                                    <td>14 mei 2023</td>
                                                    <td>konsep</td>
                                                    <td>rudi</td>
                                                    <td>100.000.000,00</td>
                                                    <td>
                                                        <div class="menu-icons" style="font-size: 15px;">
                                                            <a href="{{ url('edit_supplier') }}" class="menu-icon icon-edit-2"></a>
                                                            <button type="button" style="border: none; background:none" data-bs-toggle="modal" data-bs-target="#payment">
                                                                <i class="icon-attach_money"></i>
                                                            </button>
                                                            <a href="#" class="menu-icon delete-icon"><i class="icon-trash"></i></a>
                                                            <a href="#" class="menu-icon icon-eye1"></a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class="table-row">
                                                    <td><input type="checkbox" class="other-checkbox"></td>
                                                    <td>15 mei 2023</td>
                                                    <td>sebagian</td>
                                                    <td>slemet</td>
                                                    <td>20.000.000,00</td>
                                                    <td>
                                                        <div class="menu-icons" style="font-size: 15px;">
                                                            <a href="{{ url('edit_supplier') }}" class="menu-icon icon-edit-2"></a>
                                                            <button type="button" style="border: none; background:none" data-bs-toggle="modal" data-bs-target="#payment">
                                                                <i class="icon-attach_money"></i>
                                                            </button>
                                                            <a href="#" class="menu-icon delete-icon"><i class="icon-trash"></i></a>
                                                            <a href="#" class="menu-icon icon-eye1"></a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class="table-row">
                                                    <td><input type="checkbox" class="other-checkbox"></td>
                                                    <td>25 mei 2023</td>
                                                    <td>dibayar</td>
                                                    <td>wahyu</td>
                                                    <td>45.000.000,00</td>
                                                    <td>
                                                        <div class="menu-icons" style="font-size: 15px;">
                                                            <a href="{{ url('edit_supplier') }}" class="menu-icon icon-edit-2"></a>
                                                            <button type="button" style="border: none; background:none" data-bs-toggle="modal" data-bs-target="#payment">
                                                                <i class="icon-attach_money"></i>
                                                            </button>
                                                            <a href="#" class="menu-icon delete-icon"><i class="icon-trash"></i></a>
                                                            <a href="#" class="menu-icon icon-eye1"></a>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <!-- Card start -->
                                        <div class="card">
                                            <div class="card-body col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination" style="float: right;">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true">&laquo;</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true">&raquo;</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>

                                            </div>
                                        </div>
                                        <!-- Card end -->
                                    </div>
                                    <div class="modal fade" id="payment" tabindex="-1" aria-labelledby="paymentTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content" style="margin-top: -10%">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="paymentTitle">Pembayaran</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                        <div class="field-wrapper">
                                                            <label for="subjudul" class="field-label">Kategori<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control datepicker" style="border-radius: 10px">
                                                        </div>
                                                        <div class="field-wrapper">
                                                            <label for="subjudul" class="field-label">Jumlah<span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control datepicker" style="border-radius: 10px">
                                                        </div>
                                                        <div class="field-wrapper">
                                                            <label for="subjudul" class="field-label">Metode Pembayaran<span class="text-danger">*</span></label>
                                                            <select class="select-single js-states" title="Select Product Category" data-live-search="true" style="border-radius: 10px">
                                                                <option>Cash</option>
                                                                <option>Transfer</option>
                                                            </select>
                                                        </div>
                                                        <div class="field-wrapper">
                                                            <label for="subjudul" class="field-label">Akun<span class="text-danger">*</span></label>
                                                            <select class="select-single js-states" title="Select Product Category" data-live-search="true" style="border-radius: 10px">
                                                                <option>Adi</option>
                                                                <option>Rudi</option>
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="text-white" style="background-color:rgb(255, 0, 0); border:none; border-radius:10px; width:20%; height:25px; color:white" data-bs-dismiss="modal">Batal</button>
                                                    <button type="button" class="text-white" style="background-color: #55be0e; border:none; border-radius:10px; width:30%; height:25px; color:white">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal start -->
                                    <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">
                                                        Impor Faktur</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="dropzone">
                                                        <form action="https://www.kodingwife.com/upload" class="dropzone needsclick dz-clickable" id="demo-upload">

                                                            <div class="dz-message needsclick">
                                                                <button type="button" class="dz-button" style="border:none; margin-right:20%; margin-left:20%; margin-top: 12%">Pilih
                                                                    berkas di sini untuk mengunggah.</button><br>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="margin-top:2%">
                                                    <a href="" onclick="window.location.reload()" style="margin-right: 2%" data-bs-dismiss="modal">Batal</a>
                                                    <button type="button" class="btn btn-primary" style="border-radius: 20px">Upload</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end -->
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
    <script src="{{ asset('Gmbslagi/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/js/modernizr.js') }}"></script>
    <script src="{{ asset('Gmbslagi/js/moment.js') }}"></script>

    <!-- *************
   ************ Vendor Js Files *************
  ************* -->

    <!-- Megamenu JS -->
    <script src="{{ asset('Gmbslagi/vendor/megamenu/js/megamenu.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/megamenu/js/custom.js') }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('Gmbslagi/vendor/slimscroll/slimscroll.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/slimscroll/custom-scrollbar.js') }}"></script>

    <!-- Search Filter JS -->
    <script src="{{ asset('Gmbslagi/vendor/search-filter/search-filter.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/search-filter/custom-search-filter.js') }}"></script>

    <!-- Data Tables -->
    <script src="{{ asset('Gmbslagi/vendor/datatables/dataTables.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/datatables/dataTables.bootstrap.min.js') }}"></script>

    <!-- Custom Data tables -->
    <script src="{{ asset('Gmbslagi/vendor/datatables/custom/custom-datatables.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/datatables/custom/fixedHeader.js') }}"></script>

    <!-- Download / CSV / Copy / Print -->
    <script src="{{ asset('Gmbslagi/vendor/datatables/buttons.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/datatables/html5.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/dropzone/dropzone.min.js') }}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset('Gmbslagi/js/main.js') }}"></script>
    <script>
     const checkboxes = document.querySelectorAll('.other-checkbox');
		const selectAllCheckbox = document.querySelector('#select-all-checkbox');
		const hiddenMenu = document.querySelector('.hidden-menu');
		const countDisplay = document.querySelector('#count-display');

		// Function to count the number of checked checkboxes
		function countCheckedCheckboxes() {
		const checkedCheckboxes = document.querySelectorAll('.other-checkbox:checked');
		return checkedCheckboxes.length;
		}

		// Function to update the count display
		function updateCountDisplay() {
		const totalCount = countCheckedCheckboxes();
		countDisplay.textContent =  totalCount + ' Item Yang dipilih : ' ;
		}

		// Add event listener to each checkbox
		checkboxes.forEach(function(checkbox) {
		checkbox.addEventListener('change', function() {
			if (this.checked) {
			hiddenMenu.style.display = 'block'; // Show the hidden menu
			} else {
			const checkedCount = countCheckedCheckboxes();
			if (checkedCount === 0) {
				hiddenMenu.style.display = 'none'; // Hide the hidden menu if no checkboxes are checked
			}
			}
			
			updateCountDisplay(); // Update the count display
		});
		});

		// Add event listener to the "Select All" checkbox
		selectAllCheckbox.addEventListener('change', function() {
		checkboxes.forEach(function(checkbox) {
			checkbox.checked = selectAllCheckbox.checked; // Set the state of each checkbox based on the "Select All" checkbox
		});
		
		if (this.checked) {
			hiddenMenu.style.display = 'block'; // Show the hidden menu
		} else {
			hiddenMenu.style.display = 'none'; // Hide the hidden menu
		}
		
		updateCountDisplay(); // Update the count display
		});
    </script>
    <script src="{{ asset('Gmbslagi/vendor/daterange/custom-daterange.js')}}"></script>

</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:54 GMT -->

</html>
