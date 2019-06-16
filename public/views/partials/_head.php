<!doctype html>
<html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="stylesheet" type="text/css" href="views/lib/bootstrap-4.0.0/dist/css/bootstrap.min.css">
        <!-- Font-awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
            integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="icon" href="views/images/favicon/favicon1.ico" type="image/x-icon" />
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="views/lib/css/app.css">
        <link rel="stylesheet" type="text/css" href="views/lib/css/responsive.css">
        <link rel="stylesheet" type="text/css" href="views/lib/css/frontend.css">

        <style>
            .color {
                color: #FFF;
            }

            body {
                position: ;
            }

            /**====================================
            # Sticky navbar
            =======================================*/
            .sticky {
                position: fixed;
                top: 0;
                width: 100%;
            }

            .sticky+.post-section {
                padding-top: 60px;
            }

            .navbar {
                z-index: 10;
            }

            /**====================================
            # Drop down button
            ======================================*/

            li {
                float: left;
                list-style-type: none;
            }

            li a,
            .dropbtn {
                display: inline-block;
                color: #999;
                text-align: center;
                padding: 8px 0px;
                text-decoration: none;
                margin-right: 12px;
                margin-top: 4px;
            }

            li a:hover,
            .dropdown:hover .dropbtn {
                background-color: red;
            }

            li.dropdown {
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #000;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                z-index: 10;
            }

            .dropdown-content a {
                color: #000;
                padding: 8px 0px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            .dropdown-content a:hover {
                background-color: green;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }

            /**====================================
            # Accordion
            ======================================*/
            .accordion {
                background-color: #eee;
                color: #444;
                cursor: pointer;
                padding: 18px;
                width: 100%;
                border: none;
                text-align: left;
                outline: none;
                font-size: 15px;
                transition: 0.4s;
            }

            .active,
            .accordion:hover {
                background-color: #ccc;
            }

            .panel {
                padding: 0 18px;
                display: none;
                background-color: white;
                overflow: hidden;
            }

            /**====================================
            # Top header area
            ======================================*/
            .top-header-area {
                background: url(views/images/slider_images/banner5.jpg);
                height: 250px;
                background-repeat: no-repeat;
            }
        </style>
    </head>