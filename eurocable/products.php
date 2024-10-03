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
        <link href="css/addToCartStyle.css" rel="stylesheet">      

<!--


-->
    </head>
    
    <body class="topics-listing-page" id="top">

        <main>

            


            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Fillimi</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Blank</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Title Eurocable</h2>
                        </div>

                    </div>
                </div>
            </header>


            <section class="section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h3 class="mb-4">Produktet Kryesore</h3>
                        </div>

                        <div class="col-lg-8 col-12 mt-3 mx-auto">
                            <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                <div class="d-flex">
                                    <img src="images/NYM-J 3x1.5.png" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-topics-listing-info d-flex">
                                        <div>
                                            <h5 class="mb-2">NYM-J 3x1.5</h5>

                                            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit animi necessitatibus</p>

                                            <!-- <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="25.99">Shto në shportë</a> -->
                                            <a href="productDetails.php" class="btn custom-btn mt-3 mt-lg-4 cd-add-to-cart js-cd-add-to-cart "
                                                data-id="1"
                                                data-name="NYM-J 3x1.5"
                                                data-price="25.99"
                                                data-image="images/NYM-J 3x1.5.png"
                                                onclick="addProduct(this)">Shto në shportë</a>
                                                

                                            
                                            <a href="productDetails.php" class="btn custom-btn mt-3 mt-lg-4">Mëso më shumë</a>
                                            <!-- <a href="javascript:void(0)" class="btn custom-btn mt-3 cd-add-to-cart js-cd-add-to-cart"
                                                data-id="1"
                                                data-name="NYM-J 3x1.5"
                                                data-price="25.99"
                                                data-image="path_to_image.png">
                                                Shto në shportë
                                            </a> -->


                                        </div>

                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                    </div>
                                </div>
                            </div>

                            <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                <div class="d-flex">
                                    <img src="images/H05VV-F.webp" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-topics-listing-info d-flex">
                                        <div>
                                            <h5 class="mb-2">H05VV-F 3x1.5</h5>

                                            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit animi necessitatibus</p>

                                            <!-- <a href="productDetails.php" class="btn custom-btn mt-3 mt-lg-4 cd-add-to-cart js-cd-add-to-cart">Shto në shportë</a> -->
                                            <a href="productDetails.php" class="btn custom-btn mt-3 mt-lg-4 cd-add-to-cart js-cd-add-to-cart "
                                                data-id="1"
                                                data-name="NYM-J 3x2.5"
                                                data-price="20.99"
                                                data-image="images/H05VV-F.webp"
                                                onclick="addProduct(this)">Shto në shportë</a>

                                            <a href="productDetails.php" class="btn custom-btn mt-3 mt-lg-4">Mëso më shumë</a>
                                        </div>

                                        <span class="badge bg-advertising rounded-pill ms-auto">30</span>
                                    </div>
                                </div>
                            </div>

                            <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                <div class="d-flex">
                                    <img src="images/H07V-U.webp" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-topics-listing-info d-flex">
                                        <div>
                                            <h5 class="mb-2">H07V-U 1x1.5</h5>

                                            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit animi necessitatibus</p>
                                            <!-- <a href="productDetails.php" class="btn custom-btn mt-3 mt-lg-4 cd-add-to-cart js-cd-add-to-cart">Shto në shportë</a> -->
                                            <a href="productDetails.php" class="btn custom-btn mt-3 mt-lg-4 cd-add-to-cart js-cd-add-to-cart "
                                                data-id="1"
                                                data-name="NYM-J 3x1.5"
                                                data-price="15.99"
                                                data-image="images/H07V-U.webp"
                                                onclick="addProduct(this)">Shto në shportë</a>
                                            <a href="productDetails.php" class="btn custom-btn mt-3 mt-lg-4">Mëso më shumë</a>
                                        </div>

                                        <span class="badge bg-music rounded-pill ms-auto">20</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">Pas</span>
                                        </a>
                                    </li>

                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">5</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">Para</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </section>


            <!-- <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h3 class="mb-4">Produktet në Trend</h3>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mt-3 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="productDetails.php">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">EuroCable</h5>

                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                        </div>

                                        <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                    </div>

                                    <img src="images/topics/undraw_Finance_re_gnv2.png" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mt-lg-3">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">EuroCable</h5>

                                            <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint animi necessitatibus aperiam repudiandae nam omnis</p>

                                            <a href="productDetails.php" class="btn custom-btn mt-2 mt-lg-3">Mëso më shumë</a>
                                        </div>

                                        <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                    </div>

                                    

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section> -->
        </main>
<div class="cd-cart cd-cart--empty js-cd-cart">

	<a href="#0" class="cd-cart__trigger text-replace">
        
		<ul class="cd-cart__count"> <!-- cart items count -->
			<li>0</li>
			<li>0</li>
		</ul> <!-- .cd-cart__count -->
	</a>

	<div class="cd-cart__content">
		<div class="cd-cart__layout">
			<header class="cd-cart__header">
				<h2>Cart</h2>
				<span class="cd-cart__undo">Item removed. <a href="#0">Undo</a></span>
			</header>
			
			<div class="cd-cart__body">
				<ul>
					<!-- products added to the cart will be inserted here using JavaScript -->
				</ul>
			</div>

			<footer class="cd-cart__footer">
				<a href="#0" class="cd-cart__checkout">
          <em>Checkout - $<span>0</span>
            <svg class="icon icon--sm" viewBox="0 0 24 24"><g fill="none" stroke="currentColor"><line stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="3" y1="12" x2="21" y2="12"/><polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="15,6 21,12 15,18 "/></g>
            </svg>
          </em>
        </a>
			</footer>
		</div>
	</div> <!-- .cd-cart__content -->
 </div> <!-- cd-cart -->

	

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/addToCart_util.js"></script>
        <script src="js/addToCart_main.js"></script>

        

    </body>
</html>