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
    <title>Unknown | Transaksi</title>


    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/css/bootstrap.min.css")}}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/fonts/style.css")}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/css/main.css")}}">


    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/megamenu/css/megamenu.css")}}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/search-filter/search-filter.css")}}">
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/search-filter/custom-search-filter.css")}}">

    <!-- Data Tables -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/datatables/dataTables.bs4.css")}}" />
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/datatables/dataTables.bs4-custom.css")}}" />
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/datatables/buttons.bs.css")}}" />
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

        .sidebar-menu ul li a.current-dropdown {
            color: #5957b1;
            background: #ffffff;

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

        .empty-box19 {
            color: #1FBAC0;
            border-color: #1FBAC0;
            outline: 1px solid #1FBAC0;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box19.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #1FBAC0;
            border-color: #1FBAC0;
            outline: 1px solid #1FBAC0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box19:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #1FBAC0;
            border-color: #1FBAC0;
            outline: 1px solid #1FBAC0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box18 {
            color: #1FBAC0;
            border-color: #1FBAC0;
            outline: 1px solid #1FBAC0;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box18.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #1FBAC0;
            border-color: #1FBAC0;
            outline: 1px solid #1FBAC0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box18:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #1FBAC0;
            border-color: #1FBAC0;
            outline: 1px solid #1FBAC0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box17 {
            color: #02457A;
            border-color: #02457A;
            outline: 1px solid #02457A;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box17.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #02457A;
            border-color: #02457A;
            outline: 1px solid #02457A;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box17:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #02457A;
            border-color: #02457A;
            outline: 1px solid #02457A;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box16 {
            color: #02457A;
            border-color: #02457A;
            outline: 1px solid #02457A;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box16.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #02457A;
            border-color: #02457A;
            outline: 1px solid #02457A;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box16:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #02457A;
            border-color: #02457A;
            outline: 1px solid #02457A;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box15 {
            color: #001B48;
            border-color: #001B48;
            outline: 1px solid #001B48;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box15.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #001B48;
            border-color: #001B48;
            outline: 1px solid #001B48;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box15:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #001B48;
            border-color: #001B48;
            outline: 1px solid #001B48;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box14 {
            color: #001B48;
            border-color: #001B48;
            outline: 1px solid #001B48;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box14.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #001B48;
            border-color: #001B48;
            outline: 1px solid #001B48;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box14:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #001B48;
            border-color: #001B48;
            outline: 1px solid #001B48;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box13 {
            color: #595D2B;
            border-color: #595D2B;
            outline: 1px solid #595D2B;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box13.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #595D2B;
            border-color: #595D2B;
            outline: 1px solid #595D2B;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box13:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #595D2B;
            border-color: #595D2B;
            outline: 1px solid #595D2B;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box12 {
            color: #A24502;
            border-color: #A24502;
            outline: 1px solid #A24502;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box12.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #A24502;
            border-color: #A24502;
            outline: 1px solid #A24502;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box12:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #A24502;
            border-color: #A24502;
            outline: 1px solid #A24502;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box11 {
            color: #A24502;
            border-color: #A24502;
            outline: 1px solid #A24502;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box11.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #A24502;
            border-color: #A24502;
            outline: 1px solid #A24502;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box11:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #A24502;
            border-color: #A24502;
            outline: 1px solid #A24502;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box10 {
            color: #D59D80;
            border-color: #D59D80;
            outline: 1px solid #D59D80;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box10.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #D59D80;
            border-color: #D59D80;
            outline: 1px solid #D59D80;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box10:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #D59D80;
            border-color: #D59D80;
            outline: 1px solid #D59D80;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box9 {
            color: #D59D80;
            border-color: #D59D80;
            outline: 1px solid #D59D80;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box9.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #D59D80;
            border-color: #D59D80;
            outline: 1px solid #D59D80;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box9:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #D59D80;
            border-color: #D59D80;
            outline: 1px solid #D59D80;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box8 {
            color: #9DB5B2;
            border-color: #9DB5B2;
            outline: 1px solid #9DB5B2;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box8.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #9DB5B2;
            border-color: #9DB5B2;
            outline: 1px solid #9DB5B2;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box8:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #9DB5B2;
            border-color: #9DB5B2;
            outline: 1px solid #9DB5B2;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box7 {
            color: #9DB5B2;
            border-color: #9DB5B2;
            outline: 1px solid #9DB5B2;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box7.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #9DB5B2;
            border-color: #9DB5B2;
            outline: 1px solid #9DB5B2;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box7:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #9DB5B2;
            border-color: #9DB5B2;
            outline: 1px solid #9DB5B2;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box6 {
            color: #57737A;
            border-color: #57737A;
            outline: 1px solid #57737A;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box6.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #57737A;
            border-color: #57737A;
            outline: 1px solid #57737A;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box6:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #57737A;
            border-color: #57737A;
            outline: 1px solid #57737A;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box5 {
            color: #57737A;
            border-color: #57737A;
            outline: 1px solid #57737A;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box5.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #57737A;
            border-color: #57737A;
            outline: 1px solid #57737A;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box5:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #57737A;
            border-color: #57737A;
            outline: 1px solid #57737A;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box4 {
            color: #314641;
            border-color: #314641;
            outline: 1px solid #314641;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box4.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #314641;
            border-color: #314641;
            outline: 1px solid #314641;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box4:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #314641;
            border-color: #314641;
            outline: 1px solid #314641;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box3 {
            color: #314641;
            border-color: #314641;
            outline: 1px solid #314641;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box3.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #314641;
            border-color: #314641;
            outline: 1px solid #314641;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box3:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #314641;
            border-color: #314641;
            outline: 1px solid #314641;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box2 {
            color: #f26861;
            border-color: #f26861;
            outline: 1px solid #f26861;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 0px 0px 0px;
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
            border-radius: 0px 0px 0px 0px;
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

        .lingkaran-warna1 {

            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: red;

        }

        .lingkaran-warna2 {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: blue;

        }

        .lingkaran-warna3 {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: green;

        }

        .lingkaran-warna4 {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: purple;

        }

        .lingkaran-warna5 {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: pink;

        }

        .icon-no {
            padding-top: 90px;
            font-size: 3rem;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-right: auto;
            margin-left: auto;
        }

        #dropdown-menu {
            display: none;
            position: relative;
        }

        .dropdown-toggle {
            padding: 5px;
            font-size: 20px;
            border: none;
            background-color: transparent;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content button {
            display: block;
            width: 100%;
            text-align: left;
            padding: 8px 16px;
            border: none;
            background-color: transparent;
            cursor: pointer;
        }

        /* Tampilkan dropdown saat tombol titik tiga diklik */
        #dropdown-menu.show .dropdown-content {
            display: block;
        }

        /* Atur tampilan tombol untuk ukuran layar yang lebih kecil */
        @media screen and (max-width: 1024px) {
            .button-container {
                justify-content: flex-end;
            }

            #dropdown-menu {
                display: block;
            }

            .dropdown-toggle {
                display: block;
            }

            .dropdown-content {
                position: static;
                min-width: unset;
                box-shadow: none;
            }

            .dropdown-content button {
                display: none;
            }

            /* Tampilkan tombol dropdown saat layar kecil */
            #dropdown-menu.show .dropdown-content button {
                display: block;
            }

            .button-container {
                /* justify-content: flex-end; */
                display: none;
            }
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
        @include('layouts.header')



        <!-- *************
				************ Main container start *************
			************* -->
        <div class="main-container">



            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="card-body">
                        <div class="row gutters">

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <!-- Card start -->
<div class="card">
                                <!-- <div class="card-header"> -->
                                <div class="card-header">
                                    <div class=" col-xl-5 col-lg-5 col-md-2 col-sm-2 col-12 d-flex">

                                        <h3 class="card-title">Transaksi<button type="button" style="border: none; background:none;">☆</button></h3>

                                    </div>

                                    <!-- <div class="text-end">
											<a href="create-invoice.html" class="btn btn-primary">Create Invoice</a>
										</div> -->
                                        <div class="col-xl-5 col-lg-5 col-md-2 col-sm-2 col-12 button-container" style="margin-left: 17%; justify-items: center; justify-content: end;">
                                            <a href="http://127.0.0.1:8000/add_income">
                                                <button type="button" class="btn btn-secondary" style="margin-right: 10px;">Tambah Pendapatan</button>
                                            </a>
                                            <a href="http://127.0.0.1:8000/add_expenditure">
                                                <button type="button" class="btn btn-secondary" style="margin-right: 10px;">Tambah Pengeluaran</button>
                                            </a>
                                        <div class="dropdown">
                                            <a class="btn btn-ekspor-primary dropdown icon-dots-three-vertical" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-lg-end" style="z-index: 100;">
                                                <li><a class="dropdown-item" href="#">Impor</a></li>
                                                <li><a class="dropdown-item" href="#">Expor</a></li>

                                            </ul>
                                        </div>
                                        </div>

                                </div>
                                <div id="dropdown-menu">
                                    <button class="dropdown-toggle">&#8942;</button>
                                    <div class="dropdown-content">
                                        <a href="{{url('add_income')}}">Pendapatan</a>
                                        <a href="{{url('add_expenditure')}}">Pengeluaran</a>
                                        <a href="path/to/excel/file.xlsx" download>Ekspor</a>
                                    </div>
                                </div>

                                <!-- <div class="button-container">
                                        <button id="income-button">Pendapatan</button>
                                        <button id="expense-button">Pengeluaran</button>
                                        <button id="export-button">Ekspor</button>
                                        <div id="dropdown-menu">
                                            <button class="dropdown-toggle">&#8942;</button>
                                            <div class="dropdown-content">
                                                <button id="income-button-mobile">Pendapatan</button>
                                                <button id="expense-button-mobile">Pengeluaran</button>
                                                <button id="export-button-mobile">Ekspor</button>
                                            </div>
                                        </div>
                                    </div> -->

                                <!-- </div> -->






                                <!-- </div> -->

                                <!-- Row start -->
                                <div class="row gutters" style="margin-left: 5%; margin-bottom: -5%; margin-top: 3%;">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                        <div class="stats-tile">
                                            <div class="sale-icon">
                                                <p><b><i>Rp</i></b></p>
                                            </div>
                                            <div class="sale-details">
                                                <h2>25.5M</h2>
                                                <p>Pendapatan</p>
                                            </div>
                                            <div class="sale-graph">
                                                <div id="sparklineLine1"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-6 col-12" style="margin-top: 2%;">

                                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 5px;" height="43" viewBox="0 -960 960 960" width="40">
                                            <path d="M200-450v-60h560v60H200Z" />
                                        </svg>

                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                        <div class="stats-tile">
                                            <div class="sale-icon">
                                                <p><b><i>Rp</i></b></p>
                                            </div>
                                            <div class="sale-details">
                                                <h2>32.3M</h2>
                                                <p>Pengeluaran</p>
                                            </div>
                                            <div class="sale-graph">
                                                <div id="sparklineLine2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-6 col-12" style="margin-top: 2%;">

                                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 10px;" height="30" viewBox="0 -960 960 960" width="48">
                                            <path d="M160-290v-100h640v100H160Zm0-280v-100h640v100H160Z" />
                                        </svg>


                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <div class="stats-tile">
                                            <div class="sale-icon">
                                                <p><b><i>Rp</i></b></p>
                                            </div>
                                            <div class="sale-details">
                                                <h2>19,9M</h2>
                                                <p>Keuntungan</p>
                                            </div>
                                            <div class="sale-graph">
                                                <div id="sparklineLine3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->

                                <div class="d-flex">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box1"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('transactions')}}">
                                                <div class="empty-box1 active">
                                                    <h6 class="">Normal</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box2"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('recurring_transactions')}}">
                                                <div class="empty-box2">
                                                    <h6 class="">Rutin</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box1"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('transactions')}}">
                                                <div class="empty-box3 active">
                                                    <h6 class="">Normal</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box2"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('recurring_transactions')}}">
                                                <div class="empty-box4">
                                                    <h6 class="">Rutin</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box1"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('transactions')}}">
                                                <div class="empty-box5 active">
                                                    <h6 class="">Normal</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box2"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('recurring_transactions')}}">
                                                <div class="empty-box6">
                                                    <h6 class="">Rutin</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box1"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('transactions')}}">
                                                <div class="empty-box7 active">
                                                    <h6 class="">Normal</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box2"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('recurring_transactions')}}">
                                                <div class="empty-box8">
                                                    <h6 class="">Rutin</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box1"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('transactions')}}">
                                                <div class="empty-box9 active">
                                                    <h6 class="">Normal</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box2"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('recurring_transactions')}}">
                                                <div class="empty-box10">
                                                    <h6 class="">Rutin</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box1"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('transactions')}}">
                                                <div class="empty-box11 active">
                                                    <h6 class="">Normal</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box2"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('recurring_transactions')}}">
                                                <div class="empty-box12">
                                                    <h6 class="">Rutin</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box1"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('transactions')}}">
                                                <div class="empty-box13 active">
                                                    <h6 class="">Normal</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box2"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('recurring_transactions')}}">
                                                <div class="empty-box13">
                                                    <h6 class="">Rutin</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box1"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('transactions')}}">
                                                <div class="empty-box14 active">
                                                    <h6 class="">Normal</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box2"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('recurring_transactions')}}">
                                                <div class="empty-box15">
                                                    <h6 class="">Rutin</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box1"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('transactions')}}">
                                                <div class="empty-box16 active">
                                                    <h6 class="">Normal</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box2"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('recurring_transactions')}}">
                                                <div class="empty-box17">
                                                    <h6 class="">Rutin</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box1"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('transactions')}}">
                                                <div class="empty-box18 active">
                                                    <h6 class="">Normal</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box2"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('recurring_transactions')}}">
                                                <div class="empty-box19">
                                                    <h6 class="">Rutin</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                </div>

                                <div class="content">
                                    <div class="searchcontainer">
                                        <i class="icon-search"></i><input class="search " type="text" placeholder="Cari Disini..." style="
                                              margin-bottom: 2%; font-size:10pt " />
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <div class="hidden-menu" style="display: none; background-color: #f2f2f2; font-size: 12pt; padding: 10px;">
                                        <p style="display: inline" id="count-display">&emsp;</p>
                                        &emsp;<a  href="#" title="Hapus"> <i class="icon-trash-2"></i> </a>
                                    </div>
                                    <table class="table table-hover">

                                        <thead>
                                            <tr>
                                                <th scope="col"> <input type="checkbox" id="select-all-checkbox"></th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Nomor</th>
                                                <th scope="col">Jenis</th>
                                                <th scope="col">Kategori</th>
                                                <th></th>

                                                <th scope="col">Akun</th>
                                                <th scope="col">Jumlah</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td name="item" id="checkbox1"><input type="checkbox" class="other-checkbox"></td>
                                                <td>16 Mei 2023</th>
                                                <td>TRA-00038</td>
                                                <td>Pengeluaran</td>
                                                <td>
                                                    <div class="lingkaran-warna1">
                                                        &emsp;&emsp;Biaya Lain-L...
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td>Naura Dewi</td>
                                                <td>Rp900.000.000</td>
                                                <th>
                                                    <div class="menu-icons" style="font-size: 15px;">
                                                        <a href="{{url('edit_income')}}" class="menu-icon icon-edit-2"></a>
                                                        <a href="{{url('delete_income')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deleteincome"></a>
                                                        <a href="{{url('show_income')}}" class="menu-icon icon-eye1"></a>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td name="item" id="checkbox2"><input type="checkbox" class="other-checkbox"></td>
                                                <td>13 Mei 2023</th>
                                                <td>TRA-00037</td>
                                                <td>Pendapatan</td>
                                                <td>
                                                    <div class="lingkaran-warna2">
                                                        &emsp;&emsp;Penjualan W...
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td>Bpk Yanto</td>
                                                <td>Rp700.000.000</td>
                                                <th>
                                                    <div class="menu-icons" style="font-size: 15px;">
                                                        <a href="{{url('edit_expenditure')}}" class="menu-icon icon-edit-2"></a>
                                                        <a href="{{url('delete_income')}}" class="menu-icon icon-trash"></a>
                                                        <a href="{{url('show_expenditure')}}" class="menu-icon icon-eye1"></a>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td name="item" id="checkbox3"><input type="checkbox" class="other-checkbox"></td>
                                                <td>23 Mei 2023</th>
                                                <td>TRA-00039</td>
                                                <td>Pendapatan</td>
                                                <td>
                                                    <div class="lingkaran-warna3">
                                                        &emsp;&emsp;Penjualan
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td>Ugud Budiman</td>
                                                <td>Rp200.000.000</td>
                                                <th>
                                                    <div class="menu-icons" style="font-size: 15px;">
                                                        <a href="{{url('edit_income')}}" class="menu-icon icon-edit-2"></a>
                                                        <a href="{{url('delete_income')}}" class="menu-icon icon-trash"></a>
                                                        <a href="{{url('show_income')}}" class="menu-icon icon-eye1"></a>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td name="item" id="checkbox4"><input type="checkbox" class="other-checkbox"></td>
                                                <td>34 Mei 2023</th>
                                                <td>TRA-00040</td>
                                                <td>Pendapatan</td>
                                                <td>
                                                    <div class="lingkaran-warna4">
                                                        &emsp;&emsp;Penjualan W...
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td>Louis Gunawan</td>
                                                <td>Rp1.000.000.000</td>
                                                <th>
                                                    <div class="menu-icons" style="font-size: 15px;">
                                                        <a href="{{url('edit_income')}}" class="menu-icon icon-edit-2"></a>
                                                        <a href="{{url('delete_income')}}" class="menu-icon icon-trash"></a>
                                                        <a href="{{url('show_income')}}" class="menu-icon icon-eye1"></a>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td name="item" id="checkbox5"><input type="checkbox" class="other-checkbox"></td>
                                                <td>34 Mei 2023</th>
                                                <td>TRA-00041</td>
                                                <td>Pengeluaran</td>
                                                <td>
                                                    <div class="lingkaran-warna5">
                                                        &emsp;&emsp;Biaya Listik
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td>Melati Handoko</td>
                                                <td>Rp1.000.000.000</td>
                                                <th>
                                                    <div class="menu-icons" style="font-size: 15px;">
                                                        <a href="{{url('edit_income')}}" class="menu-icon icon-edit-2"></a>
                                                        <a href="{{url('delete_income')}}" class="menu-icon icon-trash"></a>
                                                        <a href="{{url('show_income')}}" class="menu-icon icon-eye1"></a>
                                                    </div>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- Card end -->
                                </div>
                            </div>
                            <!-- Card start -->


                        </div>
                        <div class="card">
                            <div class="card-body" style="margin-left: -2.1%">

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination" style="justify-content: flex-end;">
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
                        <!-- Row end -->

                    </div>
                    <!-- Content wrapper end -->
                    <!-- Modal start -->
                    <div class="modal fade" id="deleteincome" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteincome" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="padding: 0px">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Hapus Transaksi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Anda Yakin Ingin Menghapus Transaksi Ini?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal end -->

                    <!-- App Footer start -->
                    <div class="app-footer">© Uni Pro Admin 2021</div>
                    <!-- App footer end -->

                </div>
                <!-- Content wrapper scroll end -->

            </div>
            <!-- *************
				************ Main container end *************
			************* -->

            </divkolaja>
            <!-- Page wrapper end -->

            <!-- *************
			************ Required JavaScript Files *************
		************* -->
            <!-- Required jQuery first, then Bootstrap Bundle JS -->
            <script src="{{ asset ("Gmbslagi/js/jquery.min.js")}}"></script>
            <script src="{{ asset ("Gmbslagi/js/bootstrap.bundle.min.js")}}"></script>
            <script src="{{ asset ("Gmbslagi/js/modernizr.js")}}"></script>
            <script src="{{ asset ("Gmbslagi/js/moment.js")}}"></script>
            <script src="{{ asset ("Gmbslagi/js/main.js")}}"></script>
            <script src="Gmbslagi/js/dropdown.js"></script>

            <!-- *************
			************ Vendor Js Files *************
		************* -->

            <!-- Megamenu JS -->
            <script src="{{ asset ("Gmbslagi/vendor/megamenu/js/megamenu.js")}}"></script>
            <script src="{{ asset ("Gmbslagi/vendor/megamenu/js/custom.js")}}"></script>

            <!-- Slimscroll JS -->
            <script src="{{ asset ("Gmbslagi/vendor/slimscroll/slimscroll.min.js")}}"></script>
            <script src="{{ asset ("Gmbslagi/vendor/slimscroll/custom-scrollbar.js")}}"></script>

            <!-- Search Filter JS -->
            <script src="{{ asset ("Gmbslagi/vendor/search-filter/search-filter.js")}}"></script>
            <script src="{{ asset ("Gmbslagi/vendor/search-filter/custom-search-filter.js")}}"></script>

            <!-- Data Tables -->
            <script src="{{ asset ("Gmbslagi/vendor/datatables/dataTables.min.js")}}"></script>
            <script src="{{ asset ("Gmbslagi/vendor/datatables/dataTables.bootstrap.min.js")}}"></script>

            <script src="{{ asset ("Gmbslagi/js/main.js")}}"></script>

            <!-- Custom Data tables -->
            <script src="{{ asset ("Gmbslagi/vendor/datatables/custom/custom-datatables.js")}}"></script>
            <script src="{{ asset ("Gmbslagi/vendor/datatables/custom/fixedHeader.js")}}"></script>

            <!-- Download / CSV / Copy / Print -->
            <script src="{{ asset ("Gmbslagi/vendor/datatables/buttons.min.js")}}"></script>
            <script src="{{ asset ("Gmbslagi/vendor/datatables/jszip.min.js")}}"></script>
            <script src="{{ asset ("Gmbslagi/vendor/datatables/pdfmake.min.js")}}"></script>
            <script src="{{ asset ("Gmbslagi/vendor/datatables/vfs_fonts.js")}}"></script>
            <script src="{{ asset ("Gmbslagi/vendor/datatables/html5.min.js")}}"></script>
            <script src="{{ asset ("Gmbslagi/vendor/datatables/buttons.print.min.js")}}"></script>

            <!-- Main Js Required -->
            <script src="{{ asset ("Gmbslagi/js/main.js")}}"></script>
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


</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:54 GMT -->

</html>
