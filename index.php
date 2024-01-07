<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glamwave</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-6 fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="index.php">
                <img src="images/icon.png" alt="site icon" style="width: 35px;">
                <img src="images/logoname.png" alt="site name" style="width: 135px;">
            </a>

            <div class="order-lg-2 nav-btns">
                <button type="button" class="btn position-relative">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
                </button>
                <button type="button" class="btn position-relative" id="form-open">
                    <i class="fa fa-user"></i>
                </button>

                <button type="button" class="btn position-relative">
                    <i class="fa fa-search"></i>
                </button>
            </div>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="#header">home</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="#collection">collection</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="#special">specials</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="#blogs">vendors</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="#about">about us</a>
                    </li>
                    <li class="nav-item px-2 py-2 border-0">
                        <a class="nav-link text-uppercase text-dark" href="#newsletter">contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->



    <!-- Home -->
    <section class="home">
        <div class="form_container">
            <i class="uil uil-times form_close"></i>
            <!-- Login From -->
            <div class="form login_form">
                <form action="#">
                    <h2>Login</h2>
                    <div class="input_box">
                        <input type="email" placeholder="Enter your email" required />
                        <i class="uil uil-envelope-alt email"></i>
                    </div>
                    <div class="input_box">
                        <input type="password" placeholder="Enter your password" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>
                    <div class="option_field">
                        <span class="checkbox">
                            <input type="checkbox" id="check" />
                            <label for="check">Remember me</label>
                        </span>
                        <a href="#" class="forgot_pw">Forgot password?</a>
                    </div>
                    <button class="button">Login Now</button>
                    <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
                </form>
            </div>
            <!-- Signup From -->
            <div class="form signup_form">
                <form action="#">
                    <h2>Signup</h2>
                    <div class="input_box">
                        <input type="email" placeholder="Enter your email" required />
                        <i class="uil uil-envelope-alt email"></i>
                    </div>
                    <div class="input_box">
                        <input type="password" placeholder="Create password" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>
                    <div class="input_box">
                        <input type="password" placeholder="Confirm password" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>
                    <button class="button">Signup Now</button>
                    <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
                </form>
            </div>
        </div>
    </section>






    <!-- header -->
    <header id="header" class="vh-100 carousel slide" data-bs-ride="carousel" style="padding-top: 104px;">
        <div class="container h-100 d-flex align-items-center carousel-inner">
        <div class="text-center carousel-item active">
                <h2 class="text-capitalize text-white">best price & offer</h2>
                <h1 class="text-uppercase py-2 fw-bold text-white"> new arrivals</h1>
                <a class="btn mt-3 text-uppercase" href="#collection">buy now</a>
            </div>
            <div class="text-center carousel-item">
                <h2 class="text-capitalize text-white">special collection</h2>
                <h1 class="text-uppercase py-2 fw-bold text-white">new season</h1>
                <a class="btn mt-3 text-uppercase" href="#special">shop now</a>
            </div>
            
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#header" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </header>
    <!-- end of header -->

    <!-- collection -->
    <section id="collection" class="py-5">
        <br>
        <br>
        <div class="container">
            <div class="title text-center">
                <h2 class="position-relative d-inline-block">New Collection</h2>
            </div>

            <div class="row g-0">
                <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <button type="button" class="btn m-2 text-dark active-filter-btn" data-filter="*">All</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".best">Best Sellers</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".feat">Featured</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".new">New Arrival</button>
                </div>
                <br>

                <div class="collection-list mt-4 row gx-0 gy-3">
                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class="collection-img position-relative">
                            <img src="images/c_formal_gray_shirt.png" class="w-100">
                            <span
                                class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">Rs. 4500.00</span>
                            <br>
                            <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
                        </div>

                    </div>
                    <br>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class="collection-img position-relative">
                            <img src="images/c_pant_girl.png" class="w-100">
                            <span
                                class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">Rs. 7500.00</span>
                            <br>
                            <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>
                    <br>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
                        <div class="collection-img position-relative">
                            <img src="images/c_polo-shirt.png" class="w-100">
                            <span
                                class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">Rs. 3000.00</span>
                            <br>
                            <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>
                    <br>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class="collection-img position-relative">
                            <img src="images/c_shirt-girl.png" class="w-100">
                            <span
                                class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">Rs. 2500.00</span>
                            <br>
                            <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>
                    <br>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class="collection-img position-relative">
                            <img src="images/c_t-shirt_men.png" class="w-100">
                            <span
                                class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">Rs. 2000.00</span>
                            <br>
                            <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>
                    <br>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
                        <div class="collection-img position-relative">
                            <img src="images/c_tunic-shirt_girl.png" class="w-100">
                            <span
                                class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">Rs. 5000.00</span>
                            <br>
                            <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>
                    <br>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class="collection-img position-relative">
                            <img src="images/c_undershirt.png" class="w-100">
                            <span
                                class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">Rs. 4200.00</span>
                            <br>
                            <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>
                    <br>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class="collection-img position-relative">
                            <img src="images/c_western-shirt.png" class="w-100">
                            <span
                                class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">Rs. 3700.00</span>
                            <br>
                            <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- end of collection -->

    <!-- special products -->
    <section id="special" class="py-5">
        <div class="container">
            <div class="title text-center py-5">
                <h2 class="position-relative d-inline-block">Special Selection</h2>
            </div>

            <div class="special-list row g-0">
                <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="images/special_product_1.jpg" class="w-100">
                        <span
                            class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class="fas fa-heart"></i>
                        </span>
                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class="fw-bold d-block">$ 45.50</span>
                        <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="images/special_product_2.jpg" class="w-100">
                        <span
                            class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class="fas fa-heart"></i>
                        </span>
                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class="fw-bold d-block">$ 45.50</span>
                        <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="images/special_product_3.jpg" class="w-100">
                        <span
                            class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class="fas fa-heart"></i>
                        </span>
                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class="fw-bold d-block">$ 45.50</span>
                        <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="images/special_product_4.jpg" class="w-100">
                        <span
                            class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class="fas fa-heart"></i>
                        </span>
                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class="fw-bold d-block">$ 45.50</span>
                        <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of special products -->
    <br>
    <br>
    <!-- blogs -->
    <section id="offers" class="py-5">
        <div class="container">
            <div
                class="row d-flex align-items-center justify-content-center text-center justify-content-lg-start text-lg-start">
                <div class="offers-content">
                    <span class="text-white">Discount Up To 40%</span>
                    <h2 class="mt-2 mb-4 text-white">Grand Sale Offer!</h2>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- end of blogs -->

    <!-- blogs -->
    <section id="blogs" class="py-5">
        <div class="container">
            <div class="title text-center py-5">
                <h2 class="position-relative d-inline-block">Our Vendors</h2>
            </div>

            <div class="row g-3">
                <div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
                    <img src="images/blog_1.jpg" alt="">
                    <div class="card-body px-0">
                        <h4 class="card-title">Lorem ipsum, dolor sit amet consectetur adipisicing</h4>
                        <p class="card-text mt-3 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eveniet aspernatur repudiandae nostrum dolorem molestias odio. Sit fugit adipisci omnis quia
                            itaque ratione iusto sapiente reiciendis, numquam officiis aliquid ipsam fuga.</p>
                        <p class="card-text">
                            <small class="text-muted">
                                <span class="fw-bold">Author: </span>John Doe
                            </small>
                        </p>
                        
                    </div>
                </div>

                <div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
                    <img src="images/blog_2.jpg" alt="">
                    <div class="card-body px-0">
                        <h4 class="card-title">Lorem ipsum, dolor sit amet consectetur adipisicing</h4>
                        <p class="card-text mt-3 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eveniet aspernatur repudiandae nostrum dolorem molestias odio. Sit fugit adipisci omnis quia
                            itaque ratione iusto sapiente reiciendis, numquam officiis aliquid ipsam fuga.</p>
                        <p class="card-text">
                            <small class="text-muted">
                                <span class="fw-bold">Author: </span>John Doe
                            </small>
                        </p>
                        
                    </div>
                </div>

                <div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
                    <img src="images/blog_3.jpg" alt="">
                    <div class="card-body px-0">
                        <h4 class="card-title">Lorem ipsum, dolor sit amet consectetur adipisicing</h4>
                        <p class="card-text mt-3 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eveniet aspernatur repudiandae nostrum dolorem molestias odio. Sit fugit adipisci omnis quia
                            itaque ratione iusto sapiente reiciendis, numquam officiis aliquid ipsam fuga.</p>
                        <p class="card-text">
                            <small class="text-muted">
                                <span class="fw-bold">Author: </span>John Doe
                            </small>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of blogs -->

    <!-- about us -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row gy-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class="title pt-3 pb-5">
                        <h2 class="position-relative d-inline-block ms-4">About Us</h2>
                    </div>
                    <p class="lead text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, ipsam.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fuga blanditiis, modi
                        exercitationem quae quam eveniet! Minus labore voluptatibus corporis recusandae accusantium
                        velit, nemo, nobis, nulla ullam pariatur totam quos.</p>
                </div>
                <div class="col-lg-6 order-lg-0">
                    <img src="images/about_us.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- end of about us -->

    <br>
    <br>
    <br>

    <!-- newsletter -->
    <section id="newsletter" class="py-5">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="title text-center pt-3 pb-5">
                    <h2 class="position-relative d-inline-block ms-4">Newsletter Subscription</h2>
                </div>

                <p class="text-center text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus rem
                    officia accusantium maiores quisquam dolorum?</p>
                <div class="input-group mb-3 mt-3">
                    <input type="text" class="form-control" placeholder="Enter Your Email ...">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                </div>
            </div>
        </div>
    </section>
    <!-- end of newsletter -->

    <!-- footer -->
    <footer class="bg-dark py-5">
        <div class="container">
            <div class="row text-white g-4">
                <div class="col-md-6 col-lg-3">
                    <a class="text-uppercase text-decoration-none brand text-white" href="index.php">Attire</a>
                    <p class="text-white text-muted mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Nostrum mollitia quisquam veniam odit cupiditate, ullam aut voluptas velit dolor ipsam?</p>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light">Links</h5>
                    <ul class="list-unstyled">
                        <li class="my-3">
                            <a href="#" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i> Home
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="#" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i> Collection
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="#" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i> Blogs
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="#" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i> About Us
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light mb-3">Contact Us</h5>
                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="fas fa-map-marked-alt"></i>
                        </span>
                        <span class="fw-light">
                            Albert Street, New York, AS 756, United States of America
                        </span>
                    </div>
                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <span class="fw-light">
                            attire.support@gmail.com
                        </span>
                    </div>
                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="fas fa-phone-alt"></i>
                        </span>
                        <span class="fw-light">
                            +9786 6776 236
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light mb-3">Follow Us</h5>
                    <div>
                        <ul class="list-unstyled d-flex">
                            <li>
                                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->




    <!-- jquery -->
    <script src="js/jquery-3.6.0.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src="js/script.js"></script>
</body>

</html>