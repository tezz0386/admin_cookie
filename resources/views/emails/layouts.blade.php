<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            margin:0;
            padding: 0;
        }
        ul li{
            list-style: none;
            margin:0;
        }
        a,
        a:hover,
        a:visited,
        a:focus,
        a:active{
            text-decoration: none;
            outline: none;
        }
        html,body{
            height: 100%;
        }
        body {
            font: normal 15px 'Poppins';
            -webkit-text-size-adjust: 100%;
            height: 100%;
            color: #7a7a7a;
            letter-spacing: 0;
            -webkit-font-smoothing: subpixel-antialiased;
            -webkit-text-stroke:1px transparent;

        }
        h1{
            font:500 36px 'Poppins';
            color: #333;
            text-align: left;
            text-transform: capitalize;
        }
        h2{
            font:400 20px 'Poppins';
            color: #333;
            text-transform: capitalize;
        }
        h3{
            font:normal 18px 'Poppins';
            color: #333;
        }
        /*h1,h2,h3,h4,h5,h6,p,ul,ol{
          margin:0;
        }*/
        p{
            line-height: 26px;
        }
        .clearfix{
            clear: both;
        }



        .wrapper{
            width: 700px;
            margin: 0 auto;
        }

        .product-table{
            width: 58%;
            float: left;
        }
        .product-table-total{
            width: 38%;
            float: right;
        }

        table{
            width: 100%;
        }

        .user-other-info img{
            width: 100%;
        }

        .feature-product-list{
            width: 25%;
            float: left;
        }

        .feature-product-list figure{
            margin: 0px;
        }
        .feature-product-list img{
            width: 100%;
        }

        .user-box{
            width: 50%;
            float: left;
        }
        .deliver-img{
            text-align: center;
        }

        /*==========*/

        .feature-product-img img{
            width: 100%;
        }
        .feature-product-list img{
            width: 100%;
        }
        .feature-product-list{
            text-align: center;
        }
        .feature-product-list h2{
            text-transform: uppercase;
            margin: 5px 0;
            -webkit-transition: all 0.7s ease-in-out;
            -moz-transition: all 0.7s ease-in-out;
            -ms-transition: all 0.7s ease-in-out;
            -o-transition: all 0.7s ease-in-out;
            transition: all 0.7s ease-in-out;
            font-weight: 500;
            font-size: 17px;
        }
        .feature-product-list a{
            color: #777;
        }
        .feature-product-list a figure {
            position: relative;
            overflow: hidden;
            border: 1px solid #eadddf;
            padding: 10px;
        }
        .feature-product-list a figure img{
            -webkit-transition: all 0.7s ease-in-out;
            -moz-transition: all 0.7s ease-in-out;
            -ms-transition: all 0.7s ease-in-out;
            -o-transition: all 0.7s ease-in-out;
            transition: all 0.7s ease-in-out;
        }
        .feature-product-list a:hover figure img{
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -o-transform: scale(1.1);
        }
        .feature-product-list a:hover h2{
            color: #7e0d0d;
        }
        .feature-product-list{
            margin-bottom: 20px;
        }
        .feature-product-img{
            padding-right: 45px;
        }
        .adv-block img{
            width: 100%;
        }
        .adv-block{
            margin-top: 50px;
        }

        .product-table .table-responsive tbody tr td {
            text-align: center;
            font-size: 16px;
            padding: 30px;
            vertical-align: middle;
        }
        .product-table  .table-responsive thead tr td {
            text-align: center;
            font-size: 18px;
            color: #333;
        }
        .product-table .table-responsive tbody tr td input{
            padding: 8px;
            width: 39%;
        }
        .product-table-total tr td span{
            font-weight: bold;
        }
        .product-table-total .table > tbody > tr > td{
            padding: 15px;
        }
        .product-table-total tr td span.shipping{
            color: #d01430;
        }
        .product-table-total h2{
            margin: 0 0 20px;
        }
        .product-table table{
            border: 1px solid #efefef;
        }
        .user-other-info{
            margin: 40px auto;
            text-align: center;
        }
        .user-other-info img{
            text-align: center;
            margin: 0 auto;
        }
        .product-table-total table{
            background: #efefef;
        }
        .user-top-summary{
            background: #efefef;
            padding: 10px;
            margin: 50px 0;
        }
        .user-top-summary ul li{
            margin-bottom: 15px;
        }
        .delivery{
            text-align: center;
        }
        .deliver-img img{
            text-align: center;
            margin: 0 auto 30px;
        }
        .alert-warning h3{
            font-family: 'Dancing Script', cursive;
            font-size: 40px;
        }
        .expan-busin{
            background: #0686ec;
            padding: 20px 0;
            text-align: center;
            color: #fff;
            font-size: 30px;
            margin-bottom: 50px;
        }
        .numbe{
            float: left;
        }
        .business-text{
            overflow: hidden;
        }
        .numbe span{
            background: #3b3b3b;
            color: #fff;
            font-size: 24px;
            height: 50px;
            width: 50px;
            border-radius: 50%;
            line-height: 50px;
            display: inline-block;
            text-align: center;
            margin-right: 20px;
        }
        .business-list ul li:nth-child(n){
            background: #555;
            padding: 30px;
            color: #fff;
        }
        .business-list ul li:nth-child(2n){
            background: #0686ec;
            padding: 30px;
            color: #fff;
        }
        .confirm-btn{
            text-align: center;
        }
        .confirm-btn a{
            background: #d01430;
            color: #fff;
            padding: 10px 15px;
            line-height: 50px;
            text-transform: uppercase;
        }
        .business-text p{
            font-size: 20px;
            line-height: 30px;
            margin-bottom: 10px;
        }
        .learn-btn a{
            background: #a60055;
            padding: 10px 30px;
        }
        .welcome-patern{

            width: 100%;
            position: relative;
        }
        .welcome-img{
            position: absolute;
        }
        .top-left-img{
            top: 0;
            left: -40px;
        }
        .top-right-img{
            top: 0;
            right: -10px;
        }
        .bottom-left-img{
            bottom: 30px;
            left: -40px;
        }
        .bottom-right-img{
            bottom: 30px;
            right: 0;
        }
        .inner-bg-text{
            text-align: center;
            padding: 50px 0;
        }
        .inner-bg-text h2{
            font-family: 'Montez', cursive;
            font-size: 80px;
            color: #fff;
        }
        .inner-bg-text h3{
            font-family: 'Dancing Script', cursive;;
            color: #fff;
            font-size: 50px;
        }
        .notice-block .quali-text{
            color: #fff;
            font-size: 24px;
            line-height: 32px;
            margin: 40px 0;
        }
        .notice-block .confirm-emails p{
            color: #fff;
            font-size: 24px;
            line-height: 32px;

        }
        .confirm-emails p strong{
            display: block;
        }
        .confirm-emails .confirm-btn{
            margin-top: 30px;
        }
        .discount-off{
            margin-top: 40px;
        }
        .offer-badge span{
            background: #c31528;
            display: inline-block;
            color: #fff;
            position: relative;
            font-size: 24px;
            padding: 10px 50px;
        }
        .offer-badge{
            margin-top: 25px;
        }
        .top-offer-left:before {
            content: '';
            position: absolute;
            left: -50px;
            width: 0;
            height: 0;
            border-top: 15px solid transparent;
            border-bottom: 16px solid transparent;
            border-right: 50px solid #c31528;
            top: 0;
        }
        .bottom-offer-left:before {
            content: '';
            position: absolute;
            left: -50px;
            width: 0;
            height: 0;
            border-top: 15px solid transparent;
            border-bottom: 16px solid transparent;
            border-right: 50px solid #c31528;
            bottom: 0;
        }
        .top-offer-right:before {
            content: '';
            position: absolute;
            right: -50px;
            width: 0;
            height: 0;
            border-top: 15px solid transparent;
            border-bottom: 16px solid transparent;
            border-left: 50px solid #c31528;
            top: 0;
        }
        .bottom-offer-right:before {
            content: '';
            position: absolute;
            right: -50px;
            width: 0;
            height: 0;
            border-top: 15px solid transparent;
            border-bottom: 16px solid transparent;
            border-left: 50px solid #c31528;
            bottom: 0;
        }


        /*pg
        ===============*/
        .hidden-xs img{
            width: 50%;
        }
        .inner-bg-text h2 {
            font-size: 40px;
        }
        .notice-block .quali-text {
            font-size: 18px;
        }
        .inner-bg-text h3 {
            font-family: 'Dancing Script', cursive;
            color: #fff;
            font-size: 18px;
        }

        .offer-badge span {
            background: #c31528;
            display: inline-block;
            color: #fff;
            position: relative;
            font-size: 19px;
            padding: 9px 28px;
        }
        .inner-bg-text h3 {
            font-family: 'Dancing Script', cursive;
            color: #fff;
            font-size: 18px;
        }
        .top-left-img {
            top: 0;
            left: -23px;
        }
        .top-right-img {
            top: 0;
            right: -134px;
        }
        .bottom-left-img {
            bottom: 0;
            left: -21px;
        }
        .bottom-right-img {
            bottom: 0;
            right: -134px;
        }
        .alert-warning {
            color: #8a6d3b;
            background-color: #fcf8e3;
            border-color: #faebcc;
        }
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .alert {
            text-align: center;
            font-size: 20px;
        }


        /*custom
        =====================*/
        .product-table .table-responsive tbody tr td {
            text-align: left;
            padding: 0px;
        }

        .mf{
            float: left;
            padding-right: 0px;
        }

        .cd{
            float: left;
        }

        .product-table .table-responsive thead tr td {
            text-align: left;
        }
        .product-table .table-responsive tbody tr td {
            text-align: left;
            padding: 0px;
            vertical-align: top;
            font-size: 13px;
        }
        .product-table .table-responsive thead tr td {
            text-align: left;
            font-size: 15px;
        }
        .mf img{
            width: 80%;
        }
        .product-table table {
            padding: 5px;
        }

        .user-other-info{
            height: 115px;
            background-size: cover!important;
        }
        img.thumbnail.pull-left {
            width: 75px;
            float: left;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Dancing+Script" />
</head>
<body>
<span></span>
@yield('content')
</body>
</html>
<?php // exit; ?>
