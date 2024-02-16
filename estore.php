
<?php
require('db.php');
if(isset($_REQUEST['submit'])){
    $Name=$_REQUEST['Name'];
    $Email=$_REQUEST['Email'];
    $Mobile=$_REQUEST['Mobile'];
    $Massage=$_REQUEST['Massage'];
    $q="INSERT INTO user VALUES(NULL,'$Name','$Email','$Mobile','$Massage')";
    $res= $conn->query($q);
if($res){
    header('location:index.php');
// echo"  <script>alert('Successfully Submitted' );</script> ";
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
    <title>Estore</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/116af2a26d.js" crossorigin="anonymous"></script>
   
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,700;1,400&family=PT+Serif:ital,wght@0,700;1,400;1,700&family=Sixtyfour&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
 
</style>

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
                            <a class="s1-a text-decoration-none active pe-4 " aria-current="page" href="">Home</a>
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
    <section class="section2 pt-5">
        <div class=" container pt-5">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-ms-12 col-12">
                    <img src="img/hero_man.png" alt="" width="100%">
                </div>
                <div class="col-lg-6 col-md-12 col-ms-12 col-12 ">
                    <div class="p-5">
                        <h2 class="s2-h2 text-primary" id="typing-animation"> <i> </i></h2>
                        <h1 class="s2-h1">Winter <br> Collection</h1>
                        <h5 class="pb-5"><i>Best Cloth Collection By 2020!</i> </h5>
                        <button class="btn btn-primary px-4 py-2 fs-5 rounded-pill" type="submit">Show Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 3 -->
    <section class="section3 container my-5">
        <h1 class="text-center py-5">Shop by Category</h1>
        <div class=" row">
            <div class="col-lg-4 col-md-4 col-ms-12 col-12 mt-3">
                <div class="">
                    <img src="img/g1.png" alt="" width="100%">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-ms-12 col-12 mt-3">
                <div class="">
                    <img src="img/g2.png" alt="" width="100%">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-ms-12 col-12 mt-3">
                <div class="">
                    <img src="img/m1.png" alt="" width="100%">
                </div>
            </div>

        </div>
    </section>
    <!-- section 4 -->
    <section class="section container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-ms-6 col-12">
                <h1 class="pt-5">Latest Products
                </h1>
            </div>
            <div class="col-lg-6 col-md-6 col-ms-6 col-12">
                <div class="text-end my-5 ">
                    <button type="button" class="btn btn-light rounded-pill ms-3  mt-3" onclick="fun1()">All</button>
                    <button type="button" class="btn btn-light rounded-pill ms-3  mt-3" onclick="New()">New</button>
                    <button type="button" class="btn btn-light rounded-pill  ms-3  mt-3"
                        onclick="Featured()">Featured</button>
                    <button type="button" class="btn btn-light rounded-pill ms-3   mt-3"
                        onclick="Offer()">Offer</button>
                </div>
            </div>
            <hr class="pb-5">
        </div>
    </section>
    <!-- section 5 -->
    <section class="section container">
        <div class="row">
            <div class=" s5col col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product1.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <h5 class="btn card-title rounded-pill" style="background-color: rgb(255, 0, 60);">New</h5>
                        </div>
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star " style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class="s5col col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product2.png" class="card-img" alt="..." width="100%">

                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class="s5col col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product3.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <h5 class="btn card-title rounded-pill" style="background-color: rgb(255, 0, 60);">New</h5>
                        </div>
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class="s5col col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product4 (1).png" class="card-img" alt="..." width="100%">
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class="s5col col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product5.png" class="card-img" alt="..." width="100%">
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class="s5col col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product6.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <h5 class="btn card-title rounded-pill" style="background-color: rgb(255, 0, 60);">New</h5>
                        </div>
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <!-- *****2 -->
            <div class="s5col1 col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product2.png" class="card-img" alt="..." width="100%">

                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class="s5col1 col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product6.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <h5 class="btn card-title rounded-pill" style="background-color: rgb(255, 0, 60);">New</h5>
                        </div>
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class="s5col1 col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product4.png" class="card-img" alt="..." width="100%">
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class="s5col1 col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product5.png" class="card-img" alt="..." width="100%">
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class="s5col1 col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product3.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <h5 class="btn card-title rounded-pill" style="background-color: rgb(255, 0, 60);">New</h5>
                        </div>
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class=" s5col1 col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product1.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <h5 class="btn card-title rounded-pill" style="background-color: rgb(255, 0, 60);">New</h5>
                        </div>
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star " style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <!-- ***3 -->
            <div class="s5col2 col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product4 (1).png" class="card-img" alt="..." width="100%">
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class="s5col2 col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product5.png" class="card-img" alt="..." width="100%">
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class="s5col2 col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product6.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <h5 class="btn card-title rounded-pill" style="background-color: rgb(255, 0, 60);">New</h5>
                        </div>
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>

            <div class="s5col2 col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product2.png" class="card-img" alt="..." width="100%">

                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class="s5col2 col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product3.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <h5 class="btn card-title rounded-pill" style="background-color: rgb(255, 0, 60);">New</h5>
                        </div>
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class=" s5col2 col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product1.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <h5 class="btn card-title rounded-pill" style="background-color: rgb(255, 0, 60);">New</h5>
                        </div>
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star " style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <!-- *****4 -->
            <div class="s5col3 col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product3.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <h5 class="btn card-title rounded-pill" style="background-color: rgb(255, 0, 60);">50%</h5>
                        </div>
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class="s5col3 col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product4 (1).png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <h5 class="btn card-title rounded-pill" style="background-color: rgb(255, 0, 60);">40%</h5>
                        </div>
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class="s5col3 col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product5.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <h5 class="btn card-title rounded-pill" style="background-color: rgb(255, 0, 60);">80%</h5>
                        </div>
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class="s5col3 col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product2.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <h5 class="btn card-title rounded-pill" style="background-color: rgb(255, 0, 60);">85%</h5>
                        </div>

                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class=" s5col3 col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product1.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <h5 class="btn card-title rounded-pill" style="background-color: rgb(255, 0, 60);">75%</h5>
                        </div>
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star " style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
            <div class="s5col3 col-lg-4 col-md-6 col-ms-12 col-12 mt-3">
                <div class="">
                    <div class="card  text-light">
                        <img src="img/product6.png" class="card-img" alt="..." width="100%">
                        <div class="card-img-overlay">
                            <h5 class="btn card-title rounded-pill" style="background-color: rgb(255, 0, 60);">60%</h5>
                        </div>
                    </div>
                    <div class="card-body text-center py-4">
                        <p> <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(255, 203, 62);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                            <span><i class="fa-regular fa-star" style="color: rgb(211, 211, 211);"></i></span>
                        </p>
                        <h5 class="fw-normal">Green Dress with details</h5>
                        <h5>$40.00 <span class=" text-decoration-line-through" style="color: rgb(254, 0, 60);">
                                $60.00</span> </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 6 -->
    <section class="section6 container my-5">
        <div class="row">
            <div class="col-lg-2 col-md-6 col-ms-12 col-12 mt-3 ">
                <img src="img/card-man.png" alt="" width="100%">
            </div>
            <div class="s6-c1 col-lg-7 col-md-6 col-ms-12 col-12 mt-3">
                <h1 class="s6-h1">Find The Best Product
                    from Our Shop</h1>
                <h5 class="py-3">Designers who are interesten creating state ofthe.</h5>
                <button type="button" class="btn btn-dark rounded-pill px-5 py-3 ">Shop Now</button>
            </div>
            <div class="s6-c  col-lg-3 col-md-6 col-ms-12 col-12 my-3 ">
                <img class="p-5" src="img/card-shape.png" alt="" width="100%">
            </div>
        </div>
    </section>

    <!-- section 7 -->
    <section class="section7 container ">
        <div class="row py-4">
            <div class="s5-c col-lg-5 col-md-6 col-ms-12 col-12 my-3 pt-5">
                <h1>Best Collection of This Month</h1>
                <h5 class="py-3">Designers who are interesten crea. </h5>
                <button type="button" class="btn btn-primary rounded-pill ">Shop Now</button>
                <p> <img class="mt-4" src="img/collection1.png" alt="" width="50%"></p>
            </div>
            <div class=" col-lg-3 col-md-6 col-ms-12 col-12 my-3 ">
                <img src="img/collection2.png" alt="" width="100%">

            </div>
            <div class="s5-c col-lg-4 col-md-6 col-ms-12 col-12 my-3 ">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 ms-3 text-end pe-4">
                        <h4>Menz Winter <br>
                            Jacket
                        </h4>
                    </div>
                    <div class="flex-shrink-0">
                        <img src="img/collection3.png" alt="...">
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 ms-3 text-end bg-primary text-light rounded-3 ms-5 pe-4 me-4 ">
                        <h4>Menz Winter <br>
                            Jacket
                        </h4>
                    </div>
                    <div class="flex-shrink-0">
                        <img src="img/collection4.png" alt="...">
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 ms-3 text-end pe-4">
                        <h4>Menz Winter <br>
                            Jacket
                        </h4>
                    </div>
                    <div class="flex-shrink-0">
                        <img src="img/collection5.png" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 8 -->
  
    <form action="" method="post">
        <section class="section7 container">
            <div class="row">
                <div class=" col-lg-6 col-md-6 col-ms-12 col-12 py-5 ps-5">
                    <div class=" text-center">
                        <h1 style="s8-h1">Get Our <br>
                            Latest Offers News</h1>
                        <h4 class="pt-2">Subscribe news latter</h4>
                    </div>
                    <img src="img/offer.png" alt="" width="100%">
                </div>

                <div class=" col-lg-6 col-md-6 col-ms-12 col-12 p-5">
                    <div class="px-5 shadow py-5 rounded-3" style="background-color: white;">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Full Name</label>
                            <input type="text" name="Name" class="form-control rounded-pill" id="formGroupExampleInput"
                                placeholder="Your name" >
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Email Address</label>
                            <input type="email" name="Email" class="form-control rounded-pill"
                                id="formGroupExampleInput2" placeholder="Yor Email"  >
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Mobile Number</label>
                            <input type="text" name="Mobile" class="form-control rounded-pill"
                                id=" formGroupExampleInput2" placeholder="Mobile Number"  >
                        </div>
                        <div class="">
                            <label for="formGroupExampleInput2" class="form-label">Massage</label>
                            <textarea name="Massage" class="form-control rounded-3" placeholder="massage.."
                                id="floatingTextarea2" style="height: 100px"  ></textarea>

                        </div>
                        <div class="text-center py-4">

                        <input  class=" btn btn-outline-primary rounded-pill  py-2 px-3" type="submit"  name="submit"  value="submit">
                           
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>
    </form>
    <!-- section 9 -->
    <section class="section container my-5 py-5">
        <div class="row">
            <div class=" col-lg-4 col-md-6 col-ms-12 col-12 p-5 ">
                <p><i class="fa-solid fa-box-open fa-2xl"></i></p>
                <h4>Free Shipping Method</h4>
                <p style="color: rgb(119, 118, 118);">aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
            </div>
            <div class=" col-lg-4 col-md-6 col-ms-12 col-12 p-5 ">
                <p><i class="fa-solid fa-lock fa-2xl"></i></p>
                <h4>Free Shipping Method</h4>
                <p style="color: rgb(119, 118, 118);">aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
            </div>
            <div class=" col-lg-4 col-md-6 col-ms-12 col-12 p-5 ">
                <p><i class="fa-solid fa-arrows-rotate fa-2xl"></i></p>
                <h4>Free Shipping Method</h4>
                <p style="color: rgb(119, 118, 118);">aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
            </div>
        </div>
    </section>
    <!-- section 10 -->
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
    <!-- section 11 -->
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