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


-->
    </head>
    
    <body class="topics-listing-page" id="top">

        <main>

            <


            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Fillimi</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Na Kontaktoni</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Forma Kontaktit</h2>
                        </div>

                    </div>
                </div>
            </header>


            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h3 class="mb-4 pb-2">Na shkruani për pyetjet tuaja</h3>
                        </div>

                        <div class="col-lg-6 col-12">
                            <form action="#" method="post" class="custom-form contact-form" role="form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="">
                                            
                                            <label for="floatingInput">Emri</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12"> 
                                        <div class="form-floating">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                            
                                            <label for="floatingInput">Email address</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="subject" id="name" class="form-control" placeholder="Name" required="">
                                            
                                            <label for="floatingInput">Titulli</label>
                                        </div>

                                        <div class="form-floating">
                                            <textarea class="form-control" id="message" name="message" placeholder="Tell me about the project"></textarea>
                                            
                                            <label for="floatingTextarea">Më tregoni më shumë rreth...</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-12 ms-auto">
                                        <button type="submit" class="form-control">Dërgo</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <div class="col-lg-5 col-12 mx-auto mt-5 mt-lg-0">
                            <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11769.708655624665!2d21.4949445!3d42.4824705!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1354f302e4ae7d1d%3A0x49706805daca3a2d!2sEuroCable!5e0!3m2!1sen!2s!4v1684874262340!5m2!1sen!2s" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <h4 class="mb-3">Zyra qendrore</h4>

                            <p>Magjistralja e Bujanocit km i 3-të
                                60000 Gjilan
                                Kosovë
                                
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
        <script src="js/custom.js"></script>

    </body>
</html>