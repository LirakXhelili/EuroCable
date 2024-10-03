<?php
    session_start();
    @include 'navbar.php';
    
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>EuroCable</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">      
<!--

EuroCable

-->
    </head>
    
    <body id="top">

        <main>

            <!-- <nav class="navbar navbar-expand-lg">
                <div class="container">
                        <a class="navbar-brand" href="index.html">
                            <img class="logo" src="images/logo.png" alt="">
                    </a>
                    

                    <div class="d-lg-none ms-auto me-4">
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Fillimi</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">Produktet</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Procesi</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">FAQs</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Kontakti</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Më shumë</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="products.html">Të gjitha</a></li>

                                    <li><a class="dropdown-item" href="contact.html">Na kontaktoni</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Account
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="accountDropdown">
                                    <li><a class="dropdown-item" href="login.html"><?php 
                                    if (isset($_SESSION['username'])) {
                                        // Redirect to login page if the user is not logged in
                                    echo "Profile";
                                    }else {
                                        echo "Login"; // Optional: Show "Guest" if not logged in
                                    }
                                ?></a></li>
                                    <li><a class="dropdown-item" href="account.html">My Account</a></li>
                                </ul>
                            </li>
                        </ul>

                        
                    </div>
                </div>
            </nav> -->
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">Kualitet. Standard. Korrektësi</h1>

                            <h6 class="text-center">Fabrika e prodhimit të kabllove</h6>

                            <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bi-search" id="basic-addon1">
                                        
                                    </span>

                                    <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Përçues..." aria-label="Search">

                                    <button type="submit" class="form-control">Kërko</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="productDetails.html">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Përçues instalimi i izoluar me lëndën e pvc-ës</h5>

                                            <p class="mb-0">Përçues bakri i jokallaisur, i izoluar me shtresë të lëndës PVC. </p>
                                        </div>

                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                    </div>

                                    <img src="images/1-1.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="images/hero1.jpg" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">Procesi i prodhimit</h5>

                                            <p class="text-white">Eurocable ka një linjë prodhimi efektive,dhe staf profesional të cilët punojnë sipas standardeve, dhe rregullave eksplicite për këtë lëmi.</p>

                                            <a href="productDetails.html" class="btn custom-btn mt-2 mt-lg-3">Mëso më shumë</a>
                                        </div>

                                        <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                    </div>

                                    

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="explore-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="mb-4">Produktet</h1>
                        </div>

                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="first-tab" data-bs-toggle="tab" data-bs-target="#first-tab-pane" type="button" role="tab" aria-controls="first-tab-pane" aria-selected="true">Përçues instalimi</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="second-tab" data-bs-toggle="tab" data-bs-target="#second-tab-pane" type="button" role="tab" aria-controls="second-tab-pane" aria-selected="false">Përçues H05vv-F</button>
                            </li>
                            
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="third-tab" data-bs-toggle="tab" data-bs-target="#third-tab-pane" type="button" role="tab" aria-controls="third-tab-pane" aria-selected="false">Përçues Instalimi Fijëzorë</button>
                            </li>
                            

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="fourth-tab" data-bs-toggle="tab" data-bs-target="#fourth-tab-pane" type="button" role="tab" aria-controls="fourth-tab-pane" aria-selected="false">NYIFY (PP/R)</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="fifth-tab" data-bs-toggle="tab" data-bs-target="#fifth-tab-pane" type="button" role="tab" aria-controls="fifth-tab-pane" aria-selected="false">H03VV-F (PP/L)</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sixth-tab" data-bs-toggle="tab" data-bs-target="#sixth-tab-pane" type="button" role="tab" aria-controls="sixth-tab-pane" aria-selected="false">NYM-J (PP/Y)</button>
                            </li>
                        </ul>
                    </div>
                </div>
<!-- /////////////// -->
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="first-tab-pane" role="tabpanel" aria-labelledby="first-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="productDetails.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">DIN VDE 0281---1</h5>

                                                            <p class="mb-0">Në të gjitha hapësirat për vendosje të përhershme në gypa të cilët munden me qenë mbi ose nën sipërfaqe të lëmuar, si dhe në trupa të izoluar.

                                                                <br>  Temperatura max. e lejuar 70°C.</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                    </div>

                                                    <img src="images/product1.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Tabela</h5>

                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">75</span>
                                                    </div>

                                                    <img src="images/tabela1.jpeg"  class="custom-block-image img-fluid" alt="">
                                                
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="second-tab-pane" role="tabpanel" aria-labelledby="second-tab" tabindex="0">   <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="productDetails.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Përçues H05vv-F-----2</h5>

                                                        <p class="mb-0">Përdorimi: Për instalime elektro energjetike në hapësira të thata për vendosje të përhershme në sipërfaqe apo nën të pa mbrojtje mekanike.</p>
                                                    </div>

                                                    <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                                </div>

                                                <img src="images/topics/undraw_Finance_re_gnv2.png" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block custom-block-overlay">
                                            <div class="d-flex flex-column h-100">
                                                <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                                                <div class="custom-block-overlay-text d-flex">
                                                    <div>
                                                        <h5 class="text-white mb-2">IEC 60 502-1</h5>

                                                        <p class="text-white">Përdorimi: Për instalime elektro energjetike në hapësira të thata për vendosje të përhershme në sipërfaqe apo nën të pa mbrojtje mekanike.</p>

                                                        <a href="productDetails.html" class="btn custom-btn mt-2 mt-lg-3">Mëso më shumë</a>
                                                    </div>

                                                    <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                                </div>

                                               

                                                <div class="section-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="third-tab-pane" role="tabpanel" aria-labelledby="third-tab" tabindex="0">   <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="productDetails.html">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">Përçues Instalimi Fijëzorë-----3</h5>

                                                    <p class="mb-0">Përdorimi: Për instalime elektro energjetike në hapësira të thata për vendosje të përhershme në sipërfaqe apo nën të pa mbrojtje mekanike.</p>
                                                </div>

                                                <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                            </div>

                                            <img src="images/topics/undraw_Finance_re_gnv2.png" class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="custom-block custom-block-overlay">
                                        <div class="d-flex flex-column h-100">
                                            <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                                            <div class="custom-block-overlay-text d-flex">
                                                <div>
                                                    <h5 class="text-white mb-2">IEC 60 502-1</h5>

                                                    <p class="text-white">Përdorimi: Për instalime elektro energjetike në hapësira të thata për vendosje të përhershme në sipërfaqe apo nën të pa mbrojtje mekanike.</p>

                                                    <a href="productDetails.html" class="btn custom-btn mt-2 mt-lg-3">Mëso më shumë</a>
                                                </div>

                                                <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                            </div>

                                           

                                            <div class="section-overlay"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        
                        

                                <div class="tab-pane fade" id="fourth-tab-pane" role="tabpanel" aria-labelledby="fourth-tab" tabindex="0">   <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="productDetails.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">NYIFY (PP/R)-----4</h5>

                                                            <p class="mb-0">Përdorimi: Për instalime elektro energjetike në hapësira të thata për vendosje të përhershme në sipërfaqe apo nën të pa mbrojtje mekanike.</p>
                                                        </div>

                                                        <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Finance_re_gnv2.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="custom-block custom-block-overlay">
                                                <div class="d-flex flex-column h-100">
                                                    <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                                                    <div class="custom-block-overlay-text d-flex">
                                                        <div>
                                                            <h5 class="text-white mb-2">IEC 60 502-1</h5>

                                                            <p class="text-white">Përdorimi: Për instalime elektro energjetike në hapësira të thata për vendosje të përhershme në sipërfaqe apo nën të pa mbrojtje mekanike.</p>

                                                            <a href="productDetails.html" class="btn custom-btn mt-2 mt-lg-3">Mëso më shumë</a>
                                                        </div>

                                                        <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                                    </div>

                                                   

                                                    <div class="section-overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="fifth-tab-pane" role="tabpanel" aria-labelledby="fifth-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="productDetails.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">H03VV-F (PP/L)----5</h5>

                                                            <p class="mb-0">Ngjyra standarde: Hirët <br>
                                                                Përdorimi: Në hapësirat e thata apo me lagështi për vendosje nën apo mbi sipërfaqe, si dhe në hapësirë të lirë.</p>
                                                        </div>

                                                        <span class="badge bg-education rounded-pill ms-auto">80</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Graduation_re_gthn.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="productDetails.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">IEC 60 502-1</h5>

                                                            <p class="mb-0">Ngjyra standarde: Hirët <br>
                                                                Përdorimi: Në hapësirat e thata apo me lagështi për vendosje nën apo mbi sipërfaqe, si dhe në hapësirë të lirë.</p>
                                                        </div>

                                                        <span class="badge bg-education rounded-pill ms-auto">75</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Educator_re_ju47.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="sixth-tab-pane" role="tabpanel" aria-labelledby="sixth-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="productDetails.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">NYM-J (PP/Y)tmp2----6</h5>

                                                            <p class="mb-0">Ngjyra standarde: Hirët <br>
                                                                Përdorimi: Në hapësirat e thata apo me lagështi për vendosje nën apo mbi sipërfaqe, si dhe në hapësirë të lirë.</p>
                                                        </div>

                                                        <span class="badge bg-education rounded-pill ms-auto">80</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Graduation_re_gthn.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="productDetails.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">IEC 60 502-1</h5>

                                                            <p class="mb-0">Ngjyra standarde: Hirët <br>
                                                                Përdorimi: Në hapësirat e thata apo me lagështi për vendosje nën apo mbi sipërfaqe, si dhe në hapësirë të lirë.</p>
                                                        </div>

                                                        <span class="badge bg-education rounded-pill ms-auto">75</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Educator_re_ju47.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="timeline-section section-padding" id="section_3">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="text-white mb-4">Si funksionon?</h1>
                        </div>

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="timeline-container">
                                <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                    <div class="list-progress">
                                        <div class="inner"></div>
                                    </div>

                                    <li>
                                        <h4 class="text-white mb-3">Kërkoni produktin tuaj</h4>

                                        <p class="text-white">Kaloni nëpër katalog dhe shikoni se çfarë produkte ju nevojiten</p>

                                        <div class="icon-holder">
                                          <i class="bi-search"></i>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <h4 class="text-white mb-3">Selektoni produktin dhe na kontaktoni</h4>

                                        <p class="text-white">Ne e kuptojmë se zgjedhja e kabllos së duhur mund të jetë një detyrë sfiduese, duke pasur parasysh opsionet e shumta në dispozicion.</p>

                                        <div class="icon-holder">
                                          <i class="bi-bookmark"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class="text-white mb-3">Pranoni porosinë</h4>

                                        <p class="text-white">Ne i japim përparësi efikasitetit dhe përpiqemi t'i dërgojmë porositë tuaja sa më shpejt që të jetë e mundur.</p>

                                        <div class="icon-holder">
                                          <i class="bi-book"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 text-center mt-5">
                            <p class="text-white">
                                Dëshironi të mësoni më shumë?
                                <a href="#" class="btn custom-btn custom-border-btn ms-3">Na shikoni në Youtube</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="faq-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Pyetjet më të shpeshta</h2>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-5 col-12">
                            <img src="images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
                        </div>

                        <div class="col-lg-6 col-12 m-auto">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Çfarë lloje kabllosh ofroni??
                                        </button>
                                    </h2>

                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Ne ofrojmë një gamë të gjerë kabllosh për të përmbushur nevojat tuaja, duke përfshirë përçues instalimi i izoluar me lëndën e pvc-ës, Përçues Instalues i sforcuar më lëndë të pvc-së etj.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            A janë kabllot tuaja të cilësisë së lartë??
                                    </button>
                                    </h2>

                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Po, ne krenohemi me ofrimin e kabllove me cilësi të lartë. Ne i furnizojmë produktet tona nga prodhues të besuar që u përmbahen standardeve të industrisë. Çdo kabllo i nënshtrohet testimit rigoroz për të siguruar performancën, qëndrueshmërinë dhe besueshmërinë optimale.                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            A ofroni garanci për kabllot tuaja??
                                    </button>
                                    </h2>

                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Po, ne qëndrojmë prapa cilësisë së kabllove tona. Shumë nga produktet tona vijnë me një garanci. Kohëzgjatja dhe kushtet e garancisë mund të ndryshojnë në varësi të produktit specifik. Ju lutemi referojuni faqes së produktit ose kontaktoni mbështetjen tonë ndaj klientit për informacion të detajuar të garancisë.                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="contact-section section-padding section-bg" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-5">Na kontaktoni</h2>
                        </div>

                        <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                            <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11769.708655624665!2d21.4949445!3d42.4824705!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1354f302e4ae7d1d%3A0x49706805daca3a2d!2sEuroCable!5e0!3m2!1sen!2s!4v1684874262340!5m2!1sen!2s" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                            <h4 class="mb-3">Zyra qendrore</h4>

                            <p>Magjistralja e Bujanocit km i 3-të
                                60000 Gjilan
                                Kosovë
                                
                                </p>

                            <hr>

                            <p class="d-flex align-items-center mb-1">
                                <span class="me-2">Phone</span>

                                <a href="tel: 305-240-9671" class="site-footer-link">
                                    +377 (0) 44 125 852
                                </a>
                            </p>

                            <p class="d-flex align-items-center">
                                <span class="me-2">Email</span>

                                <a href="mailto:info@company.com" class="site-footer-link">
                                    eurocable15@gmail.com
                                </a>
                            </p>
                        </div>

                        

                    </div>
                </div>
            </section>
        </main>
<?php @include 'footer.php';?>



        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
