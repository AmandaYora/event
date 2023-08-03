<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive bootstrap landing template">
    <meta name="author" content="Themesdesign">

    <link rel="shortcut icon" href="images/favicon.ico">

    <title><?= $title; ?>
</title> 


    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/landingpage/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- tiny slider -->
    <link href="<?= base_url('assets/landingpage/css/tiny-slider.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/landingpage/css/swiper.min.css'); ?>" type="text/css" />


    <!-- Materialdesign icons css -->
    <link href="<?= base_url('assets/landingpage/css/materialdesignicons.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/landingpage/css/style.css'); ?>" rel="stylesheet">
    
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-navlist" data-bs-offset="71">

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
        <div class="container-fluid custom-container">
            <a class="navbar-brand logo text-uppercase" href="index.html">
                <img src="<?= base_url('assets/landingpage/images/logo-dark.png'); ?>" class="logo-light" alt="" height="32">
                <!-- <img src="images/logo-light.png" class="logo-dark" alt="" height="28"> -->
            </a>

            <button class="navbar-toggler me-3 order-2 ms-4" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto navbar-center">
                    <?php foreach ($nav_items as $item): ?>
                        <li class="nav-item">
                            <a href="<?= $item['href'] ?>" class="nav-link"><?= $item['name'] ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!--end navabar-collapse-->
            <div class="header-menu list-inline d-flex align-items-center mb-0 order-1">
                <div class="Account ">
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="mdi mdi-account-box-outline f-24 text-black"></i>
                    </a>

                </div>
            </div>
            <!--end header-menu-->
        </div>
        <!--end container-->
    </nav>
    <!-- Navbar End -->


    <!-- start home section -->
    <section class="home" id="home">
        <div class="container" id="ani-round">
            <div class="home-content">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="title mt-5 mt-lg-0">
                        PT Humanage Solutions
                        </h2>
                        <p class="f-16 my-4 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Numquam soluta eius illo, recusandae tenetur saepe, eaque voluptate.</p>
                        <!-- <button class="btn btn-primary"><i class="mdi mdi-cloud-download f-20 align-middle me-2"></i>
                            Download free guide</button> -->

                        <!-- <div class="get-link mt-4">
                            <a href="" class="text-primary font-weight-600 f-14"><span
                                    class="text-muted font-weight-500">Have questions?</span><span>Get Free From<i
                                        class="mdi mdi-arrow-right"></i></span> </a>
                        </div> -->
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="animation-image" id="home-animation">
                            <div class="main-image mt-5 mt-lg-0 ms-lg-5 position-relative">
                                <img src="<?= base_url('assets/landingpage/images/home/home-bg.png'); ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end section -->


    <!-- client section -->
    <section class="section pt-0 clients">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="client-slider text-center">
                        <div class="tiny-slide">
                            <img src="<?= base_url('assets/landingpage/images/clients/logo1.png'); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="tiny-slide">
                            <img src="<?= base_url('assets/landingpage/images/clients/logo2.png'); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="tiny-slide">
                            <img src="<?= base_url('assets/landingpage/images/clients/logo3.png'); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="tiny-slide">
                            <img src="<?= base_url('assets/landingpage/images/clients/logo4.png'); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="tiny-slide">
                            <img src="<?= base_url('assets/landingpage/images/clients/logo5.png'); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="tiny-slide">
                            <img src="<?= base_url('assets/landingpage/images/clients/logo6.png'); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="tiny-slide">
                            <img src="<?= base_url('assets/landingpage/images/clients/logo7.png'); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="tiny-slide">
                            <img src="<?= base_url('assets/landingpage/images/clients/logo8.png'); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="tiny-slide">
                            <img src="<?= base_url('assets/landingpage/images/clients/logo9.png'); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="tiny-slide">
                            <img src="<?= base_url('assets/landingpage/images/clients/logo10.png'); ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                    <!--end client-slider-->
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- start service -->
    <section class="section bg-light" id="service">
        <div class="container">
            <div class="row justify-content-center mb-4 pb-2">
                <div class="col-lg-12">
                    <div class="heading text-center">
                    <h2 class="title mt-5 mt-lg-0">
                        PT Humanage Solutions
                        </h2>
                        <h2 class="mb-3"><span class="text-primary fw-normal">"Find Your Event Match"</span>
                        </h2>
                        <p class="text-muted para-p mx-auto mb-0">Merupakan perusahaan yang resmi berdiri pada tahun 2023. 
                            di Indonesia yang sudah tersertifikasi dan sesuai dengan kebutuhan pasar.
                            Menyediakan wadah berbasis teknologi web aplikasi bernama Talent Event, PT Humanage Solutions memiliki 
                            tujuan untuk menjadi penghubung antara PCE/PEO dan Event Outsource</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 mt-4 pt-2">
                    <div class="service-box text-center text-lg-start">
                        <div class="service-image">
                            <img src="<?= base_url('assets/landingpage/images/service/img-1.png'); ?>" alt="img-fluid">
                        </div>
                        <h5 class="fw-bold mt-4 mb-3">VISI</h5>
                        <p>Learners are given the right to arrange and customize their study schedule and timetable
                            based on preferences.</p>
                        <div class="button-link mt-2">
                            <a href="" class="f-14 fw-bold">Start hear <i
                                    class="mdi mdi-arrow-right align-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 pt-2">
                    <div class="service-box text-center text-lg-start">
                        <div class="service-image">
                            <img src="<?= base_url('assets/landingpage/images/service/img-2.png'); ?>" alt="img-fluid">
                        </div>
                        <h5 class="fw-bold mt-4 mb-3">MISI</h5>
                        <p>Learners are given the right to arrange and customize their study schedule and timetable
                            based on preferences.</p>
                        <div class="button-link mt-2">
                            <a href="" class="f-14 fw-bold">Get Free Quote <i
                                    class="mdi mdi-arrow-right align-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 pt-2">
                    <div class="service-box text-center text-lg-start">
                        <div class="service-image">
                            <img src="<?= base_url('assets/landingpage/images/service/img-3.png'); ?>" alt="img-fluid">
                        </div>
                        <h5 class="fw-bold mt-4 mb-3">WHY CHOOSE US?</h5>
                        <p>Learners are given the right to arrange and customize their study schedule and timetable
                            based on preferences.</p>
                        <div class="button-link mt-2">
                            <a href="" class=" f-14 fw-bold">Start hear <i
                                    class="mdi mdi-arrow-right align-middle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end service -->

    <!-- start features -->
    <section class="section " id="features">
        <div class="container">
            <div class="row align-items-center" id="part1">
                <div class="col-lg-7">
                    <div class="sec-image position-relative " id="sec-image">
                        <div class="bg-img overflow-hidden border-radius">
                            <img src="<?= base_url('assets/landingpage/images/features/img-1.png'); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="youtube-icon ">
                            <a href="#watchvideomodal" data-bs-toggle="modal">
                                <img src="<?= base_url('assets/landingpage/images/features/youtube.png'); ?>" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div id="imgcontainer-1">
                            <div id="inner-2">
                                <div class="demo-img">
                                    <div class="demo-overlay">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 mt-5 mt-lg-0">
                    <h6 class="text-muted fw-normal">Your profit <span class="fw-bold">grows & enjoy</span></h6>
                    <h1 class="fw-bold mt-2">Get Awesome <span class="text-primary fw-normal">Companionship</span></h1>
                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus qui, pariatur nulla,
                        sint
                        voluptatibus explicabo voluptates aliquid dolorem suscipit nostrum expedita itaque nesciunt
                        autem ?</p>
                    <div class="get-link mt-4">
                        <a href="" class="text-primary font-weight-600"> Download free feedback <i
                                class="mdi mdi-arrow-right"></i></a>
                    </div>

                </div>
            </div>

            <div class="features-2" id="part2">
                <div class="row align-items-center">
                    <div class="col-lg-4 order-2 order-lg-1 mt-5 mt-lg-0">
                        <h6 class="text-muted fw-normal">Get started <span class="fw-bold">available courses</span></h6>
                        <h1 class="fw-bold mt-2">your success <span class="text-primary fw-normal">plan now!</span>
                        </h1>
                        <p class="mt-3"> Temporibus quasi adipisci eligendi quaerat iste debitis numquam deleniti labore
                            corporis
                            architecto, voluptas cupiditate distinctio?</p>
                        <div class="get-link mt-4">
                            <a href="" class="text-primary font-weight-600"> Download free feedback <i
                                    class="mdi mdi-arrow-right"></i></a>
                        </div>

                    </div>
                    <div class="col-lg-7 offset-lg-1 order-1 order-lg-2">
                        <div class="sec-image-2 position-relative " id="sec-image-2">
                            <div class="bg-img overflow-hidden border-radius">
                                <img src="<?= base_url('assets/landingpage/images/features/img-2.png'); ?>" alt="" class="img-fluid">
                            </div>
                            <div id="imgcontainer-2">
                                <div id="inner-3">
                                    <div class="demo-img-2">
                                        <div class="demo-overlay">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                <div class="modal-content hero-modal-0 bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <video id="VisaChipCardVideo" class="w-100" controls="">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                        <!--Browser does not support <video> tag -->
                    </video>
                </div>
            </div>
        </div>
    </section>
    <!-- end features -->


    <!-- start cta -->
    <section class="cta section" id="cta-ani">
        <div class="cta-image position-relative">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center">
                            <h5 class="text-dark ">A simple and smart design grow <span class="text-primary">your
                                    business </span> </h5>
                            <h2 class="mt-3 fw-bold">Our mission Ultimate features to Grow Your Business.</h2>
                            <button class=" btn-lg btn-primary mt-4 f-14">Get started for free</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end cta -->




    <!-- counter section-->
    <section class="counter ">
        <div class="container">
            <div class="row" id="counter">
                <div class="col-lg-3 p-lg-0">
                    <div class="counter-box py-0 py-lg-5 text-center position-relative">
                        <div class="side-border-left"></div>
                        <div class="py-5 pb-0">
                            <div class="counter-image">
                                <img src="<?= base_url('assets/landingpage/images/counter/support.png'); ?>" alt="">
                            </div>
                            <h2 class="counter_value fw-bold mt-2 text-primary" data-bs-target="1789">0</h2>
                            <h5 class="counter-caption mb-0 mt-3">Awesome Support</h5>
                        </div>
                        <div class="side-border-right"></div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-3 p-lg-0">
                    <div class="counter-box py-0 py-lg-5 text-center">
                        <div class="py-5 pb-0">
                            <img src="<?= base_url('assets/landingpage/images/counter/project-running.png'); ?>" alt="">
                            <h2 class="counter_value fw-bold mt-2 text-primary" data-bs-target="19">0</h2>
                            <h5 class="counter-caption mb-0 mt-3">Project Running</h5>
                        </div>
                        <div class="side-border-right"></div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-3 p-lg-0">
                    <div class="counter-box py-0 py-lg-5 text-center side-border">
                        <div class="py-5 pb-0">
                            <img src="<?= base_url('assets/landingpage/images/counter/check.png'); ?>" alt="">
                            <h2 class="counter_value fw-bold mt-2 text-primary" data-bs-target="24">0</h2>
                            <h5 class="counter-caption mb-0 mt-3">Project Complate</h5>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-3 p-lg-0">
                    <div class="counter-box py-0 py-lg-5 text-center side-border">
                        <div class="side-border-left"></div>
                        <div class="py-5">
                            <img src="<?= base_url('assets/landingpage/images/counter/idea.png'); ?>" alt="">
                            <h2 class="counter_value fw-bold mt-2 text-primary" data-bs-target="1090">0</h2>
                            <h5 class="counter-caption mb-0 mt-3">Strategy Solution</h5>
                        </div>
                        <div class="side-border-right"></div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end counter -->

    <!-- start faq  -->
    <section class="section faq" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h6 class="text-muted fw-normal">quickly find the help you need</h6>
                        <h2 class="mb-3">Our <span class="text-primary fw-normal">Frequently Ask Question</span> <br>
                            support center </h2>
                        <p class="text-muted para-p mx-auto mb-0">consectetur adipisicing elit. Eius, praesentium,
                            dignissimos placeat ad fugiat illum iusto dolorum nobis fuga, ut nemo.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="accordion mt-5" id="accordionExample">
                        <div class="faq-collaps faq-collaps-2">
                            <!-- start 1 -->
                            <div class="card mt-4">
                                <a data-bs-toggle="collapse" href="#collapse1" class="faq collapsed">
                                    <div class="card-header p-4" id="heading1">
                                        <h5 class="mb-0 text-dark">Pharetra convallis magna mattis?</h5>
                                    </div>
                                </a>
                                <div id="collapse1" class="collapse show" aria-labelledby="heading1"
                                    data-parent="#accordionExample">
                                    <div class="card-body pt-1">
                                        <p class="mb-0 text-muted">Vulputate lobortis tincidunt porttitor massa morbi
                                            suscipit mollis luctus ullamcorper phasellus ante finibus facilisis
                                            .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end 1 -->

                            
                            <!-- start 2 -->
                            <div class="card mt-4">
                                <a data-bs-toggle="collapse" href="#collapse2" class="faq collapsed">
                                    <div class="card-header p-4" id="heading2">
                                        <h5 class="mb-0 text-dark">Condimentum porttitor at magna?</h5>
                                    </div>
                                </a>
                                <div id="collapse2" class="collapse" aria-labelledby="heading2"
                                    data-parent="#accordionExample">
                                    <div class="card-body pt-1">
                                        <p class="mb-0 text-muted">Quisque tincidunt the malesuada aliquet ullamcorper
                                            Suspendisse lectus congue iaculis vitae purus Nullam.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end 2 -->

                            <!-- start 3 -->

                            <div class="card mt-4">
                                <a data-bs-toggle="collapse" href="#collapse3" class="faq collapsed">
                                    <div class="card-header p-4" id="heading3">
                                        <h5 class="mb-0 text-dark">Nullya lectus feugiat placerat?</h5>
                                    </div>
                                </a>
                                <div id="collapse3" class="collapse" aria-labelledby="heading3"
                                    data-parent="#accordionExample">
                                    <div class="card-body pt-1">
                                        <p class="mb-0 text-muted">Pellentesque tincidunt imperdiet metus interdum
                                            ligula tristique aenean facilisis congue congue libero interdum venenatis
                                            scelerisque sed massa elit pulvinar gravida.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end 3 -->

                            <!-- start 4 -->
                            <div class="card mt-4">
                                <a data-bs-toggle="collapse" href="#collapse4" class="faq collapsed"
                                    aria-expanded="false" aria-controls="collapse4">
                                    <div class="card-header p-4" id="heading4">
                                        <h5 class="mb-0 text-dark">Manage catch one your coupens?</h5>
                                    </div>
                                </a>
                                <div id="collapse4" class="collapse" aria-labelledby="heading4"
                                    data-parent="#accordionExample">
                                    <div class="card-body pt-1">
                                        <p class="mb-0 text-muted">Vestibulum sodales turpis vestibulum praesent
                                            consectetur magna tortor interdum neque. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end 4 -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?= base_url('assets/landingpage/images/faq/Questions.png'); ?>" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </section>
    <!-- end faq -->


    <!-- start blog -->
    <section class="section bg-light" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center">
                        <h6 class="text-muted fw-normal">Latest on Our Blogs</h6>
                        <h2 class="mb-3">Increase <span class="text-primary fw-normal">conversion </span>with help our
                            images</h2>
                        <p class="text-muted para-p mx-auto mb-0"> ratione iure laborum, voluptatum iusto pariatur ipsa
                            vero debitis dolore, eaque natus, itaque perferendis eveniet voluptatem omnis nemo.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 mt-4 mt-2">
                    <div class="blog-image overflow-hidden">
                        <img src="<?= base_url('assets/landingpage/images/blog/img-1.jpg'); ?>" alt="" class="img-fluid w-100">
                    </div>
                    <div class="blog-content mb-2">
                        <a href="">
                            <h6 class="mt-4 mb-2 text-uppercase f-14">Health</h6>
                        </a>
                        <a href="">
                            <h4>You need weightlose shoes?</h4>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center text-muted">
                            <i class="mdi mdi-account-outline f-22 "></i>
                            <p class="mb-0 ms-2">Md Shohel</p>
                        </div>
                        <div class="d-flex align-items-center text-muted ms-4">
                            <i class="mdi mdi-calendar-blank f-22 "></i>
                            <p class="mb-0 ms-2">September 25 2021</p>
                        </div>
                    </div>
                    <div class="blog-link">
                        <a href="" class="fw-bold f-14">Read more <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mt-2">
                    <div class="blog-image overflow-hidden">
                        <img src="<?= base_url('assets/landingpage/images/blog/img-2.jpg'); ?>" alt="" class="img-fluid w-100">
                    </div>
                    <div class="blog-content mb-2">
                        <a href="">
                            <h6 class="mt-4 mb-2 text-uppercase f-14">food</h6>
                        </a>
                        <a href="">
                            <h4>We Don't Mack It Until You Order It.</h4>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center text-muted">
                            <i class="mdi mdi-account-outline f-22 "></i>
                            <p class="mb-0 ms-2">Md Shohel</p>
                        </div>
                        <div class="d-flex align-items-center text-muted ms-4">
                            <i class="mdi mdi-calendar-blank f-22 "></i>
                            <p class="mb-0 ms-2">october 16 2020</p>
                        </div>
                    </div>
                    <div class="blog-link">
                        <a href="" class="fw-bold f-14">Read more <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  mt-4 mt-2">
                    <div class="blog-image overflow-hidden">
                        <img src="<?= base_url('assets/landingpage/images/blog/img-3.jpg'); ?>" alt="" class="img-fluid w-100">
                    </div>
                    <div class="blog-content">
                        <a href="">
                            <h6 class="mt-4 lh-1 text-uppercase f-14">Fitness</h6>
                        </a>
                        <a href="">
                            <h4 class="mt-3 fw-bold">Daily Workout With Fitness.</h4>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center text-muted">
                            <i class="mdi mdi-account-outline f-22 "></i>
                            <p class="mb-0 ms-2">Md Shohel</p>
                        </div>
                        <div class="d-flex align-items-center text-muted ms-4">
                            <i class="mdi mdi-calendar-blank f-22 "></i>
                            <p class="mb-0 ms-2">october 16 2020</p>
                        </div>
                    </div>
                    <div class="blog-link">
                        <a href="" class="fw-bold f-14">Read more <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end blog -->


    <!-- start footer -->
    <section class="footer py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="address-content fw-bold">
                        <h5 class="text-black">Address</h5>
                        <p class="mt-5  f-14 ">River Way behind Salt Lake City, UT 8402</p>
                        <p class="mt-3 f-14 ">+(540)801-468-2313 (10am - 6pm, Monday - Saturday)</p>
                        <a href="" class=" f-14">info@example.com</a>
                    </div>
                    <div class="social-icon d-flex mt-4 mb-4 mb-lg-0">
                        <div class="facebook">
                            <a href=""><i class="mdi mdi-facebook-box f-30"></i></a>
                        </div>
                        <div class="twitter ms-4">
                            <a href=""><i class="mdi mdi-twitter f-30"></i></a>
                        </div>
                        <div class="twitter ms-4">
                            <a href=""><i class="mdi mdi-instagram f-30"></i></a>
                        </div>
                        <div class="twitter ms-4">
                            <a href=""><i class="mdi mdi-linkedin-box f-30"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-black">Explore</h5>
                    <ul class="menu list-unstyled mt-5">
                        <li class="menu-item"><a href="">Start here</a></li>
                        <li class="menu-item"><a href="">Services</a></li>
                        <li class="menu-item"><a href="">Features</a></li>
                        <li class="menu-item"><a href="">Client</a></li>
                        <li class="menu-item"><a href="">Pricing</a></li>
                        <li class="menu-item"><a href="">support center</a></li>
                        <li class="menu-item"><a href="">Blogs</a></li>
                        <li class="menu-item"><a href="">Newsletters</a></li>
                    </ul>

                </div>
                <div class="col-lg-2">
                    <h5 class="text-black">Explore</h5>
                    <ul class="menu mt-5 list-unstyled d-block">
                        <li class="info-item"><a href="">Membership</a></li>
                        <li class="info-item"><a href="">Purchase guide</a></li>
                        <li class="info-item"><a href="">Privacy policy</a></li>
                        <li class="info-item"><a href="">Terms of service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end footer -->

    <div class="bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="copy-right mb-5 text-center text-muted">
                        <script>document.write(new Date().getFullYear())</script> <span class="fw-bold"><?= $title; ?></span> .
                        Design with <i class="mdi mdi-heart text-danger"></i> by <a
                            href="https://themeforest.net/search/themesdesign" target="_blank" class="text-reset"><span
                                class="fw-bold">Themesdesign</span></a>.
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- bootstrap -->
    <script src="<?= base_url('assets/landingpage/js/bootstrap.bundle.min.js'); ?>"></script>

    <script src="<?= base_url('assets/landingpage/js/tiny-slider.js'); ?>"></script>
    <script src="<?= base_url('assets/landingpage/js/swiper.min.js'); ?>"></script>
    <!-- Pastikan jQuery telah dimuat sebelum script ini -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- counter -->
    <script src="<?= base_url('assets/landingpage/js/counter.init.js'); ?>"></script>

    <!-- Custom -->
    <script src="<?= base_url('assets/landingpage/js/app.js'); ?>"></script>

    <script>
        $(document).mousemove(function(e) {
            let _w = window.innerWidth / 2;
            let _h = window.innerHeight / 2;
            let _mouseX = e.clientX;
            let _mouseY = e.clientY;
            let _depth1 = `${50 - (_mouseX - _w) * 0.01}% ${50 - (_mouseY - _h) * 0.01}%`;
            let _depth2 = `${50 - (_mouseX - _w) * 0.02}% ${50 - (_mouseY - _h) * 0.02}%`;
            let _depth3 = `${50 - (_mouseX - _w) * 0.06}% ${50 - (_mouseY - _h) * 0.06}%`;
            let x = `${_depth3}, ${_depth2}, ${_depth1}`;
            $("#home-animation").css('backgroundPosition', x);
        });

    </script>


</body>

</html>