<?php
// use Codecourse\Repositories\Session as Session;

// Session::init();
?>
<?php include_once 'views/partials/_head.php'; ?>
    <div class="container-fluid">
        <?php include_once 'views/partials/_topHeader.php'; ?>
        <?php include_once 'views/partials/_header.php'; ?>
        <?php include_once 'views/partials/_bottomHeader.php'; ?>
        <div class="row px-5">
            <?php include_once 'views/partials/_leftSidebar.php'; ?>
            <div class="col-sm-7 main-content py-2">
                <!-- Add code below for middle content area-->
                <h1>Middle</h1>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="views/images/slider_images/banner1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="views/images/slider_images/banner2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="views/images/slider_images/banner3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
                <section id="post-section">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>First post title</h2>
                            <div class="post-details">
                                <span>Author : Bishwajit paul</span> ||
                                <span>Published on: 09 December 2018 11.00 pm</span> ||
                                Category: <span class="badge badge-pill badge-primary"><a href="">PHP</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="views/images/slider_images/banner1.jpg" alt="Post image" class="img-fluid">
                        </div>
                        <div class="col-sm-8">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia vitae officiis recusandae quod laudantium doloremque aut repudiandae aliquid totam unde deserunt magni rerum vel, sapiente facilis rem expedita est reiciendis.</p>

                            <div class="read-more d-flex justify-content-end">
                                <a href="" class="btn btn-sm btn-primary ">Read more</a>
                            </div>
                        </div>
                    </div><hr>
                </section>

                <?php
                require_once '../admin/app/start.php';

                $db = new Codecourse\Repositories\UserRepository(); ?>

                <!-- /Add code above for middle content area-->
            </div>
            <?php include_once 'views/partials/_rightSidebar.php'; ?>
        </div>
        <?php include_once 'views/partials/_footer.php'; ?>
        <?php include_once 'views/partials/_footerBottom.php'; ?>
    </div>
<?php include_once 'views/partials/_scripts.php'; ?>
