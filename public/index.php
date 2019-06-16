<?php include_once 'views/partials/_head.php'; ?>

<body>
    <div class="container-fluid">
        <?php include_once 'views/partials/_topHeader.php';?>
        <nav class="row navbar px-5 navbar-expand-lg navbar-dark bg-dark" id="navbar">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Accordion</a>
                    </li>
                    <!-- Dropdowns -->
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">News</a></li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
                        <div class="dropdown-content">
                            <a class="nav-link" href="#">Link 1</a>
                            <a class="nav-link" href="#">Link 2</a>
                            <a class="nav-link" href="#">Link 3</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="dropbtn">Dropdown</a>
                        <div class="dropdown-content">
                            <a class="nav-link" href="#">Link 1</a>
                            <a class="nav-link" href="#">Link 2</a>
                            <a class="nav-link" href="#">Link 3</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <button class="accordion px-5">Links</button>
            <div class="panel pl-5">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aliquam ducimus quos tempora,
                    dolor illum facilis, ea explicabo doloremque aliquid quo blanditiis aut qui voluptatem ratione
                    exercitationem accusantium. Minus rerum amet odio quo hic a consequuntur modi doloribus earum.
                    Cumque dicta minus nulla nam ducimus aliquid perferendis reprehenderit culpa at blanditiis maiores
                    veniam, quos laboriosam expedita voluptatum quidem porro eius sunt doloremque alias aut! Soluta nemo
                    ducimus expedita eius inventore deserunt vel, vitae ad ipsum, illum officiis harum! Impedit nobis
                    dolor illo! Accusantium pariatur, culpa laudantium est ducimus ipsam officiis veniam! Ipsa corporis
                    doloremque numquam maiores quam et, dolorem natus?
                </p>
            </div>
        </div>
        <?php include_once 'views/partials/_topHeader.php';?>
        <?php include_once 'views/partials/_header.php';?>
        <?php include_once 'views/partials/_bottomHeader.php';?>

        <div class="row">
            <?php include_once 'views/partials/_leftSidebar.php'; ?>
            <div class="col-sm-6 middle py-2 card" data-spy="scroll" data-target=".navbar" data-offset="0">
                <!-- Add code below for middle content area-->
                <div class="bar bg-dark text-white p-2">
                    <h4>Article Posts</h4>
                </div>
                <section id="post-section">

                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <h2>First post title</h2>
                            <div class="post-details">
                                <span>Author : Bishwajit paul</span> ||
                                <span>Published on: 09 December 2018 11.00 pm</span> ||
                                Cat: <span class="badge badge-pill badge-primary"><a href="">PHP</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <img style="width:; height:110px;" src="views/images/slider_images/banner1.jpg"
                                alt="Post image" class="img-fluid">
                        </div>
                        <div class="col-sm-8">
                            <p>Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Officia vitae officiis
                                recusandae quod laudantium doloremque aut
                                repudiandae aliquid totam unde deserunt magni
                                rerum vel, sapiente facilis rem expedita est
                                reiciendis.</p>
                            <div class="read-more d-flex justify-content-end">
                                <a href="" class="btn btn-sm btn-primary ">Read more</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <h2>First post title</h2>
                            <div class="post-details">
                                <span>Author : Bishwajit paul</span> ||
                                <span>Published on: 09 December 2018 11.00 pm</span> ||
                                Cat: <span class="badge badge-pill badge-primary"><a href="">PHP</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <img style="width:; height:110px;" src="views/images/slider_images/banner1.jpg"
                                alt="Post image" class="img-fluid">
                        </div>
                        <div class="col-sm-8">
                            <p>Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Officia vitae officiis
                                recusandae quod laudantium doloremque aut
                                repudiandae aliquid totam unde deserunt magni
                                rerum vel, sapiente facilis rem expedita est
                                reiciendis.</p>

                            <div class="read-more d-flex justify-content-end">
                                <a href="" class="btn btn-sm btn-primary ">Read
                                    more</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                     <div class="row">
                        <div class="col-sm-12 mb-3">
                            <h2>First post title</h2>
                            <div class="post-details">
                                <span>Author : Bishwajit paul</span> ||
                                <span>Published on: 09 December 2018 11.00 pm</span> ||
                                Cat: <span class="badge badge-pill badge-primary"><a href="">PHP</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <img style="width:; height:110px;" src="views/images/slider_images/banner1.jpg"
                                alt="Post image" class="img-fluid">
                        </div>
                        <div class="col-sm-8">
                            <p>Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Officia vitae officiis
                                recusandae quod laudantium doloremque aut
                                repudiandae aliquid totam unde deserunt magni
                                rerum vel, sapiente facilis rem expedita est
                                reiciendis.</p>
                            <div class="read-more d-flex justify-content-end">
                                <a href="" class="btn btn-sm btn-primary ">Read more</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                     <div class="row">
                        <div class="col-sm-12 mb-3">
                            <h2>First post title</h2>
                            <div class="post-details">
                                <span>Author : Bishwajit paul</span> ||
                                <span>Published on: 09 December 2018 11.00 pm</span> ||
                                Cat: <span class="badge badge-pill badge-primary"><a href="">PHP</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <img style="width:; height:110px;" src="views/images/slider_images/banner1.jpg"
                                alt="Post image" class="img-fluid">
                        </div>
                        <div class="col-sm-8">
                            <p>Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Officia vitae officiis
                                recusandae quod laudantium doloremque aut
                                repudiandae aliquid totam unde deserunt magni
                                rerum vel, sapiente facilis rem expedita est
                                reiciendis.</p>
                            <div class="read-more d-flex justify-content-end">
                                <a href="" class="btn btn-sm btn-primary ">Read more</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                </section>

                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                        <span class="page-link"> 2
                            <span class="sr-only">(current)</span>
                        </span>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                <!-- ./Pagination -->
                <?php
                    require_once '../admin/app/start.php';
                ?>
                <!-- /Add code above for middle content area-->
            </div>
            <?php include_once 'views/partials/_rightSidebar.php'; ?>
        </div>
        <?php include_once 'views/partials/_footer.php'; ?>
        <?php include_once 'views/partials/_footerBottom.php'; ?>
    </div>
    <?php include_once 'views/partials/_scripts.php'; ?>
    <!-- Sticky navbar -->
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
    <!-- Accordion -->
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
</body>

</html>
