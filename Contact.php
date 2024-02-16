<?php

require('db.php');

if(isset($_REQUEST['submit'])){

    $Massage=$_REQUEST['Massage'];
    $Name=$_REQUEST['Name'];
    $Email=$_REQUEST['Email'];
    $Subject=$_REQUEST['Subject'];

    $q="INSERT INTO contact VALUES(NULL,'$Massage','$Name','$Email','$Subject')";

    $res=$conn->query($q);

    if($res){
        header('location:index1.php');
    }else{
        echo "data not inserted";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
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
                                href="Catagori.html">Catagori</a>
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
                                href="blog.html">Blog</a>
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
        <h1 class=" catagari-sh1 text-center">Contact Us</h1>
    </section>
    <!-- section 3 -->
    <form action="" method="post">
    <section class="section container">
        <div class="row">
                <div class="col-lg-8 col-md-8 col-ms-12 col-12 p-5 ">
                    <h1>Get in Touch</h1>
                    <div class="form-floating mt-3">
                        <textarea class="form-control" name="Massage" placeholder="Leave a comment here"
                            id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Enter Massage</label>
                    </div>
                    <div class="row mt-3 g-3">
                        <div class="col">
                            <input type="text" class="form-control py-3" name="Name" placeholder="Enter Your name"
                                aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="email" class="form-control py-3" name="Email" placeholder="Enter Your Email"
                                aria-label="Last name">
                        </div>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" name="Subject" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Subject</label>
                    </div>
                    <input  class=" btn btn-outline-primary rounded-pill  py-2 px-3" type="submit"  name="submit"  value="submit">

                </div>
                <div class="col-lg-4 col-md-4 col-ms-12 col-12 p-5 ">

                    <div class="d-flex align-items-center mt-3">
                        <div class="flex-shrink-0">
                            <i class="fa-solid fa-house-chimney fa-2xl"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5>Buttonwood, California.</h5>
                            <p>Rosemead, CA 91770</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <div class="flex-shrink-0">
                            <i class="fa-solid fa-mobile-screen-button fa-2xl"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5>
                                +1 253 565 2365</h5>
                            <p>Mon to Fri 9am to 6pm

                            </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <div class="flex-shrink-0">
                            <i class="fa-regular fa-envelope fa-2xl"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5>
                                support@colorlib.com</h5>
                            <p>Send us your query</p>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    </form>
    <!-- section 4 -->
    <section class="section container">
        <div class="row">
            <div class="s8-c1 col-lg-3 col-md-6 col-ms-12 col-12 mt-3 ">
                <img src="img/gallery1.jpg" alt="" width="100%">
            </div>
            <div class="s8-c2 col-lg-3 col-md-6 col-ms-12 col-12 mt-3 ">
                <img src="img/gallery2.jpg" alt="" width="100%">
            </div>
            <div class="s8-c3 col-lg-3 col-md-6 col-ms-12 col-12 mt-3 ">
                <img src="img/gallery3.jpg" alt="" width="100%">
            </div>
            <div class="s8-c4 col-lg-3 col-md-6 col-ms-12 col-12 mt-3 ">
                <img src="img/gallery4.jpg" alt="" width="100%">
            </div>
        </div>
    </section>
    <!-- section 5 -->
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