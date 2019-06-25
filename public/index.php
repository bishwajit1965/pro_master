<!doctype html>
<html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Favicon -->
        <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon" />
        <!-- Font awesome kit-->
        <script src="https://kit.fontawesome.com/1b551efcfa.js"></script>
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">

        <meta name="theme-color" content="#fafafa">
    </head>

    <body>
        <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

        <!--### Add your site or application conten below ###-->

        <!--  Header background area-->
        <div class="container-fluid  header-background">
            <div class="row bg-dark py-3 mb-3"></div>
            <div class="row">
                <div class="col-sm-2 logo-area text-white">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a href="#">
                                <img src="img/logo/images21.png" alt="Logo">
                            </a>
                        </li>
                    </ul>
                    <a href="">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam at animi delectus doloribus
                            aperiam eaque quasi quisquam ex molestiae. Ratione!</p>
                    </a>
                </div>
                <div class="col-sm-8 text-white top-navigation mb-2">
                    <ul class="nav justify-content-aropund mb-3">
                        <li class="nav-item">
                            <a href="" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a href="" class="nav-link">About me</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Another</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Another</a>
                        </li>
                    </ul>
                    <div class="blog-heading">
                        <h1>My First Bootstrap 4 Page</h1>
                        <p>Resize this responsive page to see the effect!</p>
                        <p>Working since: 2017 AD</p>
                        <hr class="top-header d-flex justify-content-center">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="top-social-links d-flex justify-content-between mb-2">
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-linkedin"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-google-plus"></i></a>
                        <a href=""><i class="fab fa-github"></i></a>
                    </div>
                    <div class="important-links text-white">
                        <h5>Important Links :</h5>
                        <p class="info-text"><i class="fas fa-address-card"></i> https://www.nmc.edu.bd</p>
                        <p class="info-text"><i class="fas fa-phone"></i> +88 01712809279</p>
                        <p class="info-text"><i class="fas fa-envelope"></i> paul.bishwajit09@gmail.com</p>

                    </div>

                </div>
            </div>
        </div>
        <!-- ./Header background area-->

        <!-- Nav bar area-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
            <a class="navbar-brand" href="#">Navbar</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Another</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>

                ​<form class="search-box">
                    <input type="text" name="search" placeholder="Search..">
                </form>
            </div>
        </nav>
        <!-- ./Nav bar area-->

        <!-- Main content -container- area-->

        <div class="container-fluid">
            <div class="row">
                <!-- Left sidebar area-->
                <?php include_once 'partials/_left-sidebar.php';?>
                <!-- ./Left sidebar area-->

                <!-- Middle content area -->
                <div class="col-sm-6 content-area  bg-white pt-3">
                    <div class="top-bar p-1 text-white">
                        <h2>Latest blog posts view</h2>
                    </div>
                    <div class="single-post mb-4">
                        <div class="post-details mb-3">
                            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                            <small>Author: Bishwajit Paul</small> ||
                            <small>Published on: 16 June, 2019, 12.00 pm</small> ||
                            <small>Category: </small> <span class="badge badge-secondary"><a href=""> PHP</a>
                            </span>
                        </div>
                        <div class="post-image mb-3">
                            <img src="img/slider_images/banner-img-8.jpg" class="img-fluid rounded" alt="Post Image">
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit nihil perferendis
                            deserunt amet facilis recusandae nisi quasi delectus. Eligendi magni quod doloribus expedita aliquid ab
                            voluptatibus accusamus fugiat ipsum, rem, in, et vero voluptatem iste. Id voluptatibus accusamus fugiat ipsuma ccusamus unde ut omnis voluptatibus accusamus fugiat ipsum...
                        </p>
                        <div class="read-more-button d-flex justify-content-end">
                            <a href="" class="btn btn-sm btn-primary"><i class="fas fa-book-open"></i> Rear more</a>
                        </div>
                        <hr class="type_7">
                    </div>
                    <div class="single-post mb-4">
                        <div class="post-details mb-3">
                            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                            <small>Author: Bishwajit Paul</small> ||
                            <small>Published on: 16 June, 2019, 12.00 pm</small> ||
                            <small>Category: </small> <span class="badge badge-secondary"><a href=""> PHP</a>
                            </span>
                        </div>
                        <div class="post-image mb-3">
                            <img src="img/slider_images/banner1.jpg" class="img-fluid rounded" alt="Post Image">
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit nihil perferendis
                            deserunt amet facilis recusandae nisi quasi delectus. Eligendi magni quod doloribus expedita aliquid ab
                            voluptatibus accusamus fugiat ipsum, rem, in, et vero voluptatem iste. Id voluptatibus accusamus fugiat ipsuma ccusamus unde ut omnis voluptatibus accusamus fugiat ipsum...
                        </p>
                        <div class="read-more-button d-flex justify-content-end">
                            <a href="" class="btn btn-sm btn-primary"><i class="fas fa-book-open"></i> Rear more</a>
                        </div>
                        <hr class="type_7">
                    </div>
                    <div class="single-post mb-4">
                        <div class="post-details mb-3">
                            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                            <small>Author: Bishwajit Paul</small> ||
                            <small>Published on: 16 June, 2019, 12.00 pm</small> ||
                            <small>Category: </small> <span class="badge badge-secondary"><a href=""> PHP</a>
                            </span>
                        </div>
                        <div class="post-image mb-3">
                            <img src="img/slider_images/banner2.jpg" class="img-fluid rounded" alt="Post Image">
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit nihil perferendis
                            deserunt amet facilis recusandae nisi quasi delectus. Eligendi magni quod doloribus expedita aliquid ab
                            voluptatibus accusamus fugiat ipsum, rem, in, et vero voluptatem iste. Id voluptatibus accusamus fugiat ipsuma ccusamus unde ut omnis voluptatibus accusamus fugiat ipsum...
                        </p>
                        <div class="read-more-button d-flex justify-content-end">
                            <a href="" class="btn btn-sm btn-primary"><i class="fas fa-book-open"></i> Rear more</a>
                        </div>
                        <hr class="type_7">
                    </div>
                    <div class="single-post mb-4">
                        <div class="post-details mb-3">
                            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                            <small>Author: Bishwajit Paul</small> ||
                            <small>Published on: 16 June, 2019, 12.00 pm</small> ||
                            <small>Category: </small> <span class="badge badge-secondary"><a href=""> PHP</a>
                            </span>
                        </div>
                        <div class="post-image mb-3">
                            <img src="img/slider_images/banner3.jpg" class="img-fluid rounded" alt="Post Image">
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit nihil perferendis
                            deserunt amet facilis recusandae nisi quasi delectus. Eligendi magni quod doloribus expedita aliquid ab
                            voluptatibus accusamus fugiat ipsum, rem, in, et vero voluptatem iste. Id voluptatibus accusamus fugiat ipsuma ccusamus unde ut omnis voluptatibus accusamus fugiat ipsum...
                        </p>
                        <div class="read-more-button d-flex justify-content-end">
                            <a href="" class="btn btn-sm btn-primary"><i class="fas fa-book-open"></i> Rear more</a>
                        </div>
                        <hr class="type_7">
                    </div>

                    <!-- Pagination -->
                    <nav aria-label="...">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                    <!--./ Pagination -->

                </div><!-- ./Middle content area -->

                <!-- Right sidebar area -->
                <?php include_once 'partials/_right-sidebar.php';?>
                <!-- ./Right sidebar area -->

            </div>
        </div>

        <!-- ./Main content -container- area-->

        <!-- Footer area-->
        <div class="container-fluid top-footer py-2 text-white" style="margin-bottom:0;background:#000;">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Location</h5>
                </div>
                <div class="col-sm-3">One</div>
                <div class="col-sm-3">One</div>
                <div class="col-sm-3">
                    <h5>Social links</h5>
                    <div class="top-social-links d-flex justify-content-between mb-3">
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-linkedin"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-google-plus"></i></a>
                        <a href=""><i class="fab fa-github"></i></a>
                    </div>
                    <div class="facebook justify-content-around">
                        <img src="img/logo/facebookProfile.jpg" class="img-fluid img-thumbnail" alt="Facebook">
                    </div>
                </div>
            </div>
        </div>
        <!--./ Footer area-->

        <!-- Footer bar -->
        <div class="container-fluid footer-bar px-5 bg-dark  py-2 text-white d-flex justify-content-center">
            &copy; 2019 All rights reserved to WWW.laraland.com.
        </div>
        <!-- ./Footer bar -->


        <!-- ### Add your site or application conten above ### -->

        <!-- Scripts -->
        <!--Optional JavaScript - jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>

        <script src="js/vendor/modernizr-3.7.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script>
            window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
        </script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/scrolltop.js"></script>
        <!-- Sticky nav bar -->
        <script>
            window.onscroll = function() {
                myFunction()
            };

            var navbar = document.getElementById("navbar");
            var sticky = navbar.offsetTop;

            function myFunction() {
                if (window.pageYOffset >= sticky) {
                    navbar.classList.add("sticky")
                } else {
                    navbar.classList.remove("sticky");
                }
            }
        </script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga = function() {
                ga.q.push(arguments)
            };
            ga.q = [];
            ga.l = +new Date;
            ga('create', 'UA-XXXXX-Y', 'auto');
            ga('set', 'transport', 'beacon');
            ga('send', 'pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async></script>
        <!-- ./Scripts -->
    </body>

</html>
