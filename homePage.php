<?php   
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-commerce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg customPageHeaderFooter">
        <a class="navbar-brand ml-5" href="homePage.php">E-Commerce</a>
        <button class="navbar-toggler bg-light" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ml-3">
                    <a class="nav-link" href="homePage.php">Home</a>
                </li>
                <li class="nav-item dropdown ml-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link1</a>
                        <a class="dropdown-item" href="#">Link2</a>
                        <a class="dropdown-item" href="#">Link3</a>
                    </div>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            <form class="form-inline">
                <?php      
                    if (isset($_SESSION['IsLoggedIn']) == true)
                    {
                        echo "<a class='nav-link formNav' href='performLogout.php'>";
                        echo "<i class='fas fa-user-circle'></i>";
                        echo " ". $_SESSION['UserName'];
                        echo "</a>";                       
                    }
                    else{                        
                        echo "<a class='nav-link formNav' href='loginPage.html'>";
                        echo "<i class='fas fa-user-circle'></i> "; 
                        echo 'Login';
                        echo "</a>";                        
                    }                                   
                ?>      
                <a class="nav-link formNav" href="cartPage.html">
                    <i class="fas fa-cart-arrow-down"></i>
                    Cart
                </a>
            </form>
        </div>
    </nav>
    <div class="jumbotron text-light text-center rounded-0">
        <form class="form-row justify-content-center mt-3">
            <div class="col-md-6 mb-3">
                <div class="input-group input-group-lg shadow-lg ">
                    <div class="input-group-prepend input-group-text">
                        <a href="productList.html" class="fas fa-search text-dark"></a>
                    </div>
                    <input type="text" class="form-control" id="inputSearch" placeholder="Product Name, Category..."
                        required>
                </div>
            </div>
        </form>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <h2 class="display-4 text-dark">Popular Items</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-4 mt-3">
            <div class="col-md-3 mb-5">
                <div class="card h-100 shadow">
                    <img src="images/avast.png" class="card-img-top img-responsive" alt="Avast Antivirus">
                    <div class="card-body">
                        <h5 class="card-title"> Avast Antivirus</h5>
                        <p class="card-text">Avast Antivirus secures your PC/laptop from malwares</p>
                        <div class="row">
                            <div class="col-6">
                                <h4>$199.99</h4>
                            </div>
                            <div class="col-6">
                                <a href="#" class="btn text-warning star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <a href="productDescription.html" class="btn moreDetails rounded border border-dark">
                                        <span class="input-group-addon">
                                            <i class="fas fa-list"></i>
                                        </span>
                                        More Details
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <a href="cartPage.html" class="btn stretched-link cart border border-dark">
                                    <i class="fas fa-cart-plus"></i>
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="card h-100 shadow">
                    <img src="images/ms-office.png" class="card-img-top" alt="MS Office 2016">
                    <div class="card-body">
                        <h5 class="card-title">MS Office</h5>
                        <p class="card-text">MS Office provides you with the bundles of Word, Excel, Powerpoint...
                        </p>
                        <div class="row">
                            <div class="col-6">
                                <h4>$149.99</h4>
                            </div>
                            <div class="col-6">
                                <a href="#" class="btn text-warning star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-6 ">
                                <div class="input-group">
                                    <a href="productDescription.html" class="btn moreDetails  rounded border border-dark">
                                        <span class="input-group-addon">
                                            <i class="fas fa-list"></i>
                                        </span>
                                        More Details
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <a href="cartPage.html" class="btn stretched-link cart border border-dark">
                                    <i class="fas fa-cart-plus"></i>
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="card h-100 shadow">
                    <img src="images/VisualStudio.jpg" class="card-img-top" alt="VisualStudio">
                    <div class="card-body">
                        <h5 class="card-title">Visual Studio 2019</h5>
                        <p>Visual Studio is an IDE for developing Web, Desktop and Mobile Apps </p>
                        <div class="row">
                            <div class="col-6">
                                <h4>$249.99</h4>
                            </div>
                            <div class="col-6">
                                <a href="#" class="btn text-warning star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <a href="productDescription.html" class="btn moreDetails rounded border border-dark">
                                        <span class="input-group-addon">
                                            <i class="fas fa-list"></i>
                                        </span>
                                        More Details
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <a href="cartPage.html" class="btn stretched-link cart border border-dark">
                                    <i class="fas fa-cart-plus"></i>
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="card h-100 shadow">
                    <img src="images/adobe-xd.png" class="card-img-top" alt="AdobeXd">
                    <div class="card-body">
                        <h5 class="card-title">Adobe XD</h5>
                        <p>Adobe XD is a design tool for web apps and mobile apps</p>
                        <div class="row">
                            <div class="col-6">
                                <h4>$249.99</h4>
                            </div>
                            <div class="col-6">
                                <a href="#" class="btn text-warning star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <a href="productDescription.html" class="btn moreDetails rounded border border-dark">
                                        <span class="input-group-addon">
                                            <i class="fas fa-list"></i>
                                        </span>
                                        More Details
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <a href="cartPage.html" class="btn stretched-link cart border border-dark">
                                    <i class="fas fa-cart-plus"></i>
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-3 customPageHeaderFooter text-light">
        <div class="row">
            <div class="col-md-3 mb-3">
                <section class="ml-5 mr-3">
                    <h5 class="font-weight-bolder">
                        <u>Contact Us</u>
                    </h5>
                    <i class="fas fa-copyright"></i>
                    <span>2020 OnlineShopping Ltd.</span>
                    <br>
                    <i class="fas fa-map-marker"></i>
                    <span>Bangalore,India.</span>
                    <br>
                    <i class="fas fa-phone"></i>
                    <span>+91 xxxxxxxxxx</span>
                    <br>
                    <i class="fas fa-envelope"></i>
                    <span>info@onlineshopping.com</span>
                </section>
            </div>
            <div class="col-md-3 mb-3">
                <section class="ml-5">
                    <h5 class="font-weight-bolder">
                        <u>Quick Links</u>
                    </h5>
                    <a href="#">About E-commerce</a>
                    <br>
                    <a href="#">Contact Us</a>
                    <br>
                    <a href="#">E-commerce Team</a>
                    <br>
                    <a href="#">Blog</a>
                    <br>
                    <a href="#">Privacy Policy</a>
                </section>
            </div>
            <div class="col-md-3 mb-3">
                <section class="ml-5 mr-0">
                    <h5 class="font-weight-bolder">
                        <u>Site Maps</u>
                    </h5>
                    <a href="#">PC Software</a>
                    <br>
                    <a href="#">Mobile software</a>
                    <br>
                    <a href="#">Antivirus</a>
                    <br>
                    <a href="#">MS Office</a>
                </section>
            </div>
            <div class="col-md-3 mb-3">
                <section class="ml-5 mr-0">
                    <h5 class="font-weight-bolder">
                        <u>Connect</u>
                    </h5>
                    <a href="#">
                        <i class="fab fa-facebook-square mr-1"></i>
                        Facebook
                    </a>
                    <br>
                    <a href="#">
                        <i class="fab fa-twitter mr-1"></i>
                        Twitter
                    </a>
                    <br>
                    <a href="#">
                        <i class="fab fa-instagram mr-1"></i>
                        Instagram
                    </a>
                    <br>
                    <a href="#">
                        <i class="fab fa-youtube-square mr-1"></i>
                        YouTube
                    </a>
                </section>
            </div>
        </div>
    </div>
</body>

</html>