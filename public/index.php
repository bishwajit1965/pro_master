<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="icon" href="views/images/favicon/favicon.ico" type="image/x-icon" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="views/lib/bootstrap-4.3.1/dist/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="views/lib/css/responsive.css">
        <link rel="stylesheet" href="views/lib/css/frontend.css">
        <style>
            input[type=text] {
                width: 130px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: white;
                background-image: url('views/images/logo/search6.png');
                background-position: 10px 10px;
                background-repeat: no-repeat;
                padding: 10px 10px 10px 40px;
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.4s ease-in-out;
            }

            input[type=text]:focus {
                width: 100%;
            }
        </style>
    </head>

    <body>
        <!--### Code below ###-->

        <!-- Jumbtron header area-->
        <div class="container-fluid text-center header-background py-5">
            <h1>My First Bootstrap 4 Page</h1>
            <p>Resize this responsive page to see the effect!</p>
        </div>
        <!-- ./Jumbtron header area-->


        <!-- Nav bar area-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
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

                ​<form>
                    <input type="text" name="search" placeholder="Search..">
                </form>

            </div>
        </nav>
        <!-- ./Nav bar area-->


        <!-- Main content -container- area-->
        <div class="container">
            <div class="row">
                <!-- Left sidebar area-->
                <div class="col-sm-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem aut repellendus molestias hic
                    nisi, suscipit, deleniti voluptatibus ipsa consequatur ex facere itaque repudiandae exercitationem
                    distinctio enim dolore nostrum tempore magni minima vitae tenetur quidem magnam quod quisquam.
                    Deleniti, quas quos. Error doloremque itaque, quisquam cum laudantium at omnis amet blanditiis?
                </div><!-- ./Left sidebar area-->

                <!-- Middle content area -->
                <div class="col-sm-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit nihil perferendis deserunt amet
                    facilis recusandae nisi quasi delectus. Eligendi magni quod doloribus expedita aliquid ab
                    voluptatibus accusamus fugiat ipsum, rem, in, et vero voluptatem iste. Id accusamus unde ut omnis
                    qui, minima iste ipsam tempora veniam at sunt ducimus minus, consequatur dolorem! Dolorem ad
                    praesentium vel est ipsum, ratione iusto natus dicta similique sequi, sunt veniam ut perferendis
                    ipsam voluptas officia? Fugiat consequatur vero distinctio unde maxime esse blanditiis voluptates id
                    corporis sed quas nihil ratione nam voluptas optio commodi quidem, adipisci minus reprehenderit
                    praesentium enim eaque! Nisi eligendi nesciunt tempore quibusdam, modi illum consectetur. Delectus
                    aspernatur fuga blanditiis, molestias, similique, eius dolor possimus iste fugiat necessitatibus
                    quod? Praesentium facilis officia animi vero earum doloremque dolorum dignissimos aliquam molestiae
                    asperiores quis eius atque quas officiis assumenda ad, error nisi culpa dolor recusandae, optio
                    quidem quos autem? Est excepturi quam a fugit molestias facilis at harum nobis dolores rerum quos
                    culpa provident laborum esse, assumenda asperiores ipsam aperiam. Suscipit officia eveniet at
                    magnam, quo quibusdam consequatur dolores et. Vel voluptatibus sunt exercitationem earum natus sit
                    enim placeat hic veritatis nulla, a eos ipsa obcaecati ex ducimus labore maxime nemo vitae quis.
                </div><!-- ./Middle content area -->

                <!-- Right sidebar area -->
                <div class="col-sm-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora debitis vel magnam quisquam dolor,
                    sint enim? Natus explicabo error culpa at officia recusandae minima. Odit officia unde porro odio
                    dicta excepturi, velit quis, fugiat nesciunt dolorem magni aliquid at. Quis repellendus minus illum
                    odit adipisci officia, porro laboriosam perferendis obcaecati.
                </div> <!-- ./Right sidebar area -->
            </div>
        </div>
        <!-- ./Main content -container- area-->



        <!-- Footer area-->
        <div class="container-fluid text-center footer px-5 py-5 bg-info" style="margin-bottom:0">
            <p>Footer</p>
        </div>
        <!--./ Footer area-->
        <!-- Footer bar -->
        <div class="container-fluid footer-bar px-5 bg-dark py-2">

        </div>
        <!-- ./Footer bar -->


        <!-- ### Code above ### -->

        <!--Optional JavaScript - jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <!-- <script src="views/lib/js/jquery-3.3.1.slim.min.js"></script>
        <script src="views/lib/js/popper.min.js"></script>
        <script src="views/lib/bootstrap-4.3.1/dist/js/bootstrap.min.js">
        </script> -->
    </body>

</html>
