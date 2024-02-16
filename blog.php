<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/116af2a26d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- section 1 -->
    <section class="section1">
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top py-4">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" width="100%"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item nav-link">
                            <a class="s1-a text-decoration-none active pe-4 " aria-current="page"
                                href="estore.php">Home</a>
                        </li>
                        <li class="nav-item nav-link">
                            <a class="s1-a text-decoration-none active pe-4" aria-current="page"
                                href="Catagori.php">Catagori</a>
                        </li>
                        <li class="nav-item">
                            <span type="button" class="btn me-4 position-relative">
                                <a class=" s1-a text-decoration-none   " href="#">Latest</a>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    Hot
                                    <span class="visually-hidden ">unread messages</span>
                                </span>
                            </span>

                        </li>
                        <li class="nav-item nav-link">
                            <a class="s1-a text-decoration-none active pe-4" aria-current="page"
                                href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item nav-link">
                            <a class=" s1-a text-decoration-none active pe-4" aria-current="page" href="#">Pages</a>
                        </li>
                        <li class="nav-item nav-link">
                            <a class=" s1-a text-decoration-none active pe-4" aria-current="page"
                                href="Contact.php">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <span type="button" class="btn  position-relative">
                                <a class="s1-a pe-4" aria-current="page" href="#"><i
                                        class="fa-solid fa-heart fa-lg"></i></a>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                                    02
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </span>
                        </li>
                        <li class="nav-item">
                            <span type="button" class="btn  position-relative">
                                <a class="s1-a  pe-4" aria-current="page" href="#"><i
                                        class="fa-solid fa-cart-shopping  fa-lg"></i></a>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                                    02
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </span>
                        </li>
                    </ul>
                    <div class="">
                        <div class="input-group ms-4  ">
                            <input type="text" class="form-control" placeholder="Search Products"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-primary text me-4" type="button" id="button-addon2"><i
                                    class="fa-solid fa-magnifying-glass" style="color: #979595;"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <!-- section 2 -->
    <section class="section catagari-s2">
        <h1 class=" catagari-sh1 text-center">Product Catagori</h1>
    </section>
    <!-- section 3 -->
    <section class="section container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-ms-12 col-12 p-5 ">
                <div class="shadow mb-3 ">
                    <div class="card text-bg-dark">
                        <img src="img/single_blog_1.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <button type="button" class="blog-b text-light  px-4 fs-4 py-3">15
                                <br>Jan</button>

                        </div>
                    </div>
                    <div class="card-body pt-5 px-4 pb-4">
                        <h4 class="card-title pt-3">Google inks pact for new 35-storey office</h4>
                        <p class="blog-p card-text fs-5 py-2">This is a wider card with supporting text below as a
                            natural
                            lead-in
                            to
                            additional content. This content is a little bit longer.</p>
                        <p class="blog-p"><i class="fa-solid fa-user"></i> Travel, Lifestyle | <i
                                class="fa-solid fa-comments"></i>
                            03 Comments </p>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-ms-12 col-12 p-5 ">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" aria-label="Recipient's username"
                        aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2"><i
                            class="fa-solid fa-magnifying-glass fa-lg"></i></button>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button">Search</button>
                </div>
                <h4 class="pt-5 mt-5 pb-3 border-bottom">Category</h4>

                <p class="pb-3 border-bottom"><a class="fs-5 s1-a  text-decoration-none" href="#">Resaurant food
                        (37)</a></p>

                <p class="pb-3 border-bottom"><a class="fs-5 s1-a   text-decoration-none" href="#">Travel new (10)</a>
                </p>

                <p class="pb-3 border-bottom"><a class="fs-5 s1-a  text-decoration-none" href="#">Modern technology
                        (03)</a>
                </p>

                <p class="pb-3 border-bottom"><a class="fs-5 s1-a   text-decoration-none" href="#">Product (11)</a></p>

                <p class="pb-3 border-bottom"><a class="fs-5 s1-a   text-decoration-none" href="#">Inspiration 21</a>
                </p>

                <p class="pb-3 border-bottom"><a class="fs-5 s1-a   text-decoration-none" href="#">Health Care (21)
                        09</a></p>

            </div>
        </div>
    </section>
    <!-- section 4 -->
    <section class="section container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-ms-12 col-12 p-5 ">
                <div class="shadow mb-3 ">
                    <div class="card text-bg-dark">
                        <img src="img/single_blog_2.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <button type="button" class="blog-b text-light  px-4 fs-4 py-3">15
                                <br>Jan</button>

                        </div>
                    </div>
                    <div class="card-body pt-5 px-4 pb-4">
                        <h4 class="card-title pt-3">Google inks pact for new 35-storey office</h4>
                        <p class="blog-p card-text fs-5 py-2">That dominion stars lights dominion divide years for
                            fourth have
                            don't stars is that he earth it first without heaven in place seed it second morning saying.
                        </p>
                        <p class="blog-p"><i class="fa-solid fa-user"></i> Travel, Lifestyle | <i
                                class="fa-solid fa-comments"></i>
                            03 Comments </p>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-ms-12 col-12 p-5 ">
                <h5 class="pt-5 pb-3 border-bottom">Recent Post</h5>
                <div class="d-flex align-items-center mt-3">
                    <div class="flex-shrink-0">
                        <img src="img/post_1.png" alt="..." width="100%">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5>From life was you fish...</h5>
                        <p>January 12, 2019</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <div class="flex-shrink-0">
                        <img src="img/post_2.png" alt="..." width="100%">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5>The Amazing Hubble</h5>
                        <p>02 Hours ago</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <div class="flex-shrink-0">
                        <img src="img/post_3.png" alt="..." width="100%">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5>Astronomy Or Astrology</h5>
                        <p>03 Hours ago</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <div class="flex-shrink-0">
                        <img src="img/post_4.png" alt="..." width="100%">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5>Asteroids telescope</h5>
                        <p>01 Hours ago</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- section 5 -->
    <section class="section container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-ms-12 col-12 p-5 ">
                <div class="shadow mb-3 ">
                    <div class="card text-bg-dark">
                        <img src="img/single_blog_3.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <button type="button" class="blog-b text-light  px-4 fs-4 py-3">15
                                <br>Jan</button>

                        </div>
                    </div>
                    <div class="card-body pt-5 px-4 pb-4">
                        <h4 class="card-title pt-3">Google inks pact for new 35-storey office</h4>
                        <p class="blog-p card-text fs-5 py-2">That dominion stars lights dominion divide years for
                            fourth have
                            don't stars is that he earth it first without heaven in place seed it second morning saying.
                        </p>
                        <p class="blog-p"><i class="fa-solid fa-user"></i> Travel, Lifestyle | <i
                                class="fa-solid fa-comments"></i>
                            03 Comments </p>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-ms-12 col-12 p-5 ">
                <h5 class=" pb-3 mb-5 border-bottom">Recent Post</h5>
                <button type="button" class="btn btn-outline-danger ">project</button>
                <button type="button" class="btn btn-outline-danger">love</button>
                <button type="button" class="btn btn-outline-danger">technology</button>
                <button type="button" class="btn btn-outline-danger">travel</button>
                <button type="button" class="btn btn-outline-danger">restaurant </button>
                <button type="button" class="btn btn-outline-danger">life style</button>
                <button type="button" class="btn btn-outline-danger">design</button>
                <button type="button" class="btn btn-outline-danger">illustration</button>
                <h5 class=" pb-3 mt-5 mb-5 border-bottom">Instagram Feeds</h5>

                <div class="row">
                    <div class="col">
                        <img class="mt-3" src="img/post_5.png" alt="" width="">
                    </div>
                    <div class="col">
                        <img class="mt-3" src="img/post_6.png    " alt="" width="">
                    </div>
                    <div class="col">
                        <img class="mt-3" src="img/post_7.png" alt="" width="">
                    </div>
                    <div class="col">
                        <img class="mt-3" src="img/post_8.png" alt="" width="">
                    </div>
                    <div class="col">
                        <img class="mt-3" src="img/post_9.png" alt="" width="">
                    </div>
                    <div class="col">
                        <img class="mt-3" src="img/post_10.png" alt="" width="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 6 -->
    <section class="section container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-ms-12 col-12 p-5 ">
                <div class="shadow mb-3 ">
                    <div class="card text-bg-dark">
                        <img src="img/single_blog_4.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <button type="button" class="blog-b text-light  px-4 fs-4 py-3">15
                                <br>Jan</button>

                        </div>
                    </div>
                    <div class="card-body pt-5 px-4 pb-4">
                        <h4 class="card-title pt-3">Google inks pact for new 35-storey office</h4>
                        <p class="blog-p card-text fs-5 py-2">That dominion stars lights dominion divide years for
                            fourth have
                            don't stars is that he earth it first without heaven in place seed it second morning saying.
                        </p>
                        <p class="blog-p"><i class="fa-solid fa-user"></i> Travel, Lifestyle | <i
                                class="fa-solid fa-comments"></i>
                            03 Comments </p>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-ms-12 col-12 p-5 ">
                <h4 class="pt-5 mt-5 pb-3 border-bottom">Newsletter</h4>
                <div class="mb-3 mt-5">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Email">
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button">SUBSCRIBE</button>
                </div>

            </div>
        </div>
    </section>
    <!-- section 7 -->
    <section class="section container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-ms-12 col-12 p-5 ">
                <div class="shadow mb-3 ">
                    <div class="card text-bg-dark">
                        <img src="img/single_blog_5.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <button type="button" class="blog-b text-light  px-4 fs-4 py-3">15
                                <br>Jan</button>

                        </div>
                    </div>
                    <div class="card-body pt-5 px-4 pb-4">
                        <h4 class="card-title pt-3">Google inks pact for new 35-storey office</h4>
                        <p class="blog-p card-text fs-5 py-2">That dominion stars lights dominion divide years for
                            fourth have
                            don't stars is that he earth it first without heaven in place seed it second morning saying.
                        </p>
                        <p class="blog-p"><i class="fa-solid fa-user"></i> Travel, Lifestyle | <i
                                class="fa-solid fa-comments"></i>
                            03 Comments </p>

                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- section 8 -->
    <section class="section container my-5 py-5">
        <div class="row">
            <div class=" col-lg-3 col-md-6 col-ms-12 col-12 mt-3 ">
                <a class="" href="#"> <img src="img/logo.png" alt=""> </a>
                <h6 class="s9-h6 pt-4" style="color: rgb(119, 118, 118);">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit sed do eiusmod tempor
                    incididunt ut
                    labore.</h6>

            </div>
            <div class=" col-lg-3 col-md-6 col-ms-12 col-12 mt-3 ">
                <h4>Quick Links</h4>
                <h6><a class="text-decoration-none" href="#" style="color: rgb(119, 118, 118);">About</a></h6>
                <h6><a class="text-decoration-none" href="#" style="color: rgb(119, 118, 118);">Offers & Discounts</a>
                </h6>
                <h6><a class="text-decoration-none" href="#" style="color: rgb(119, 118, 118);">Get Coupon</a></h6>
                <h6><a class="text-decoration-none" href="#" style="color: rgb(119, 118, 118);">Contact Us</a></h6>

            </div>
            <div class=" col-lg-3 col-md-6 col-ms-12 col-12 mt-3 ">
                <h4>New Products</h4>
                <h6><a class="text-decoration-none" href="#" style="color: rgb(119, 118, 118);">Woman Cloth</a></h6>
                <h6><a class="text-decoration-none" href="#" style="color: rgb(119, 118, 118);">Fashion Accessories</a>
                </h6>
                <h6><a class="text-decoration-none" href="#" style="color: rgb(119, 118, 118);">Man Accessories</a></h6>
                <h6><a class="text-decoration-none" href="#" style="color: rgb(119, 118, 118);">Rubber made Toys</a>
                </h6>

            </div>
            <div class=" col-lg-3 col-md-6 col-ms-12 col-12 mt-3 ">
                <h4>Support</h4>
                <h6><a class="text-decoration-none" href="#" style="color: rgb(119, 118, 118);">Frequently Asked
                        Questions</a></h6>
                <h6><a class="text-decoration-none" href="#" style="color: rgb(119, 118, 118);">Terms & Conditions</a>
                </h6>
                <h6><a class="text-decoration-none" href="#" style="color: rgb(119, 118, 118);">Privacy Policy</a></h6>
                <h6><a class="text-decoration-none" href="#" style="color: rgb(119, 118, 118);">Privacy Policy</a>
                </h6>
                <h6><a class="text-decoration-none" href="#" style="color: rgb(119, 118, 118);">Report a Payment
                        Issue</a></h6>
            </div>
        </div>
        <div class="row my-3 pt-4">
            <div class=" col-lg-6 col-md-12 col-ms-12 col-12 mt-3">
                <h6 style="color: rgb(119, 118, 118);">Copyright ©2024 All rights reserved | This template is made with
                    <span class="text-primary"><i class="fa-regular fa-heart"></i></span> by
                    <span class="text-primary">Colorlib</span>
                </h6>
            </div>
            <div class=" col-lg-6 col-md-12 col-ms-12 col-12  text-end pe-5 mt-3  ">
                <span><i class="fa-brands fa-twitter"></i></span>
                <span class="px-3"><i class="fa-brands fa-facebook-f"></i></span>
                <span><i class="fa-brands fa-behance"></i></span>
                <span class="pe-5 ps-3"><i class="fa-solid fa-globe"></i></span>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="js.js"></script>
</body>

</html>