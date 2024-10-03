<nav class="navbar navbar-expand-lg">
    <div class="container">
            <a class="navbar-brand" href="index.php">
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
                        <li><a class="dropdown-item" href="products.php">Katalogu</a></li>

                        <li><a class="dropdown-item" href="contact.php">Na kontaktoni</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="accountDropdown">
                        <li><a class="dropdown-item" href="<?php echo isset($_SESSION['username']) ? 'logout.php' : 'login.php'; ?>">
                                 <?php 
                                    if (isset($_SESSION['username'])) {
                                            echo "Logout";
                                        } else {
                                            echo "Login";
                                        }
                                        ?>       
                            </a>
                        
                        <li><a class="dropdown-item" href="myAccount.php">My Account</a></li>
                    </ul>
                </li>
            </ul>

            
        </div>
    </div>
</nav>
