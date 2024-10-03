<?php
    @include 'navbar.php'
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



-->
    </head>
    
    <body id="top">

        <main>

            
            

            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Fillimi</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Blank</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Introduction to <br> EuroCable</h2>

                            <div class="d-flex align-items-center mt-5">
                                <a href="#topics-detail" class="btn custom-btn custom-border-btn smoothscroll me-4">Lexo më shumë</a>

                                <a href="#top" class="custom-icon bi-bookmark smoothscroll"></a>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="topics-detail-block bg-white shadow-lg">
                                <img src="images/topics/undraw_Remote_design_team_re_urdx.png" class="topics-detail-block-image img-fluid">
                            </div>
                        </div>

                    </div>
                </div>
            </header>


            <section class="topics-detail-section section-padding" id="topics-detail">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 m-auto">
                            <h3 class="mb-4">Introduction to EuroCable</h3>

                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat, eum optio voluptates vitae fugit dolorem animi voluptatem ea id quia nemo ab sequi? Ullam quo nostrum aspernatur inventore delectus sapiente?</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nobis ipsa adipisci laudantium, modi at officia commodi. Odio perspiciatis sed aut quisquam, aliquam velit alias, doloremque ea in voluptatum omnis.</p>

                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nobis ipsa adipisci laudantium
                            </blockquote>

                            <div class="row my-4">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <img src="images/businesswoman-using-tablet-analysis.jpg" class="topics-detail-block-image img-fluid">
                                </div>

                                <div class="col-lg-6 col-md-6 col-12 mt-4 mt-lg-0 mt-md-0">
                                    <img src="images/colleagues-working-cozy-office-medium-shot.jpg" class="topics-detail-block-image img-fluid">
                                </div>
                            </div>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At minus, neque nesciunt sequi illo aspernatur enim architecto eveniet ducimus libero culpa quo vel quasi! Dolorum nam sint asperiores quia dignissimos.</p>
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-5 col-12">
                            <img src="images/rear-view-young-college-student.jpg" class="newsletter-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-5 col-12 subscribe-form-wrap d-flex justify-content-center align-items-center">
                            <form class="custom-form subscribe-form" action="#" method="post" role="form">
                                <h4 class="mb-4 pb-2">Rri në kontakt</h4>

                                <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address" required="">

                                <div class="col-lg-12 col-12">
                                    <button type="submit" class="form-control">Abonohu</button>
                                </div>
                            </form>
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
        <script src="js/custom.js"></script>

    </body>
</html>