<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/myStyle.css') }}">

    <title>Trang chu @yield('title')</title>
</head>

<body>
    <div class="app">
    <!-- header -->
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-0 pl-0">
                <a class=" logo text-white m-0" href="#">\\\FBOX</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse pl-3" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-nav" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-nav" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-nav" href="#">Contact</a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link" href="#" id="navbarDropdownBrand" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Brand
                            </a>
                            <div class="dropdown-menu cover-drop dropdown-menu-right " aria-labelledby="navbarDropdownBrand">
                                <a class="dropdown-item text-white">
                                    Nike
                                </a>
                                <a class="dropdown-item text-white" href="#">
                                    Adidas
                                </a>
                                <a class="dropdown-item text-white" href="#">
                                    BQ
                                </a>
							</div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-nav" href="#">
                                <i class="fas fa-search"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown active">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-gift"></i>
                                <span class="text-dark ml-2">2</span>
                            </a>
                            <div class="dropdown-menu cover-drop dropdown-menu-right " aria-labelledby="navbarDropdown">
                                <div class="dropdown-item">
                                    <span class="text-white">Card Subtotal</span>
                                    <span class="float-right text-white">$750.00</span>
                                </div>
                                <div class="dropdown-item">
                                    <button type="button" class="btn btn-warning bg-btn col-12 rounded-0">GO TO CHECKOUT</button>
                                </div>

                                <a class="dropdown-item" href="#">
                                    <div class="media border-bottom border-secondary">
                                        <img class="mr-3 img-media" src="images/bg1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p class="text-white m-0">CLASS APTENT TACITY</p>
                                            <small class="text-white">$750.00</small>
                                            <br>
                                            <small class="text-white">Qty:
                                                <span class="bg-white text-dark">1</span>
                                            </small>
                                            <br>
                                            <span class="float-right">
                                                <i class="fas fa-edit mr-2 text-white"></i>
                                                <i class="fas fa-trash-alt text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </a>

                                <a class="dropdown-item" href="#">
                                    <button type="button" class="btn btn-warning bg-btn col-12 rounded-0">VIEW AND EDIT CART</button>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-nav" href="#">Login
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    </ul>
                    </div>
            </nav>
           
        </div>
        {{--  đóng header  --}}

        <!-- contain -->
        @yield('content')
        {{--  đóng content  --}}
        <!-- footer -->
        <div class="footer">
                <div class="row px-5 py-3">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h6 class="font-weight-bold">Information</h6>

                        <p class="mb-0">
                            <span class="color">About us</span> Colection, man, woman, Shop, Contact us</p>
                        <small class="mb-1"> @ CopyRights Reserved by FBOX FASHION </small>
                    </div>
                    <div class="col-lg-2  col-md-6 col-sm-6">
                        <p class="pt-4 mb-2">Colection, man, woman, Shop, Contact us man, woman, Shop, Contact us</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h6 class="font-weight-bold">sight up for newlatter</h6>
                        <p class="mb-0">Colection, man, woman, Shop, Contact us man, </p>
                        <input class="effect-2 color-form border-0 text-white mb-3" type="text" placeholder="Enter email here...">
                        <span class="focus-border"></span>
                    </div>
                    <div class="col-lg-2  col-md-6 col-sm-6">
                        <i class="fab fa-cc-visa text-muted mr-2 hover-icon mt-4"></i>
                        <i class="fab fa-cc-paypal text-muted mr-2 hover-icon mt-4"></i>
                        <i class="fab fa-cc-mastercard text-muted mr-2 hover-icon mt-4"></i>
                    </div>
                    <div class="col-lg-2  col-md-6 col-sm-6">
                        <h6 class="font-weight-bold ">Find us on</h6>
                        <i class="fab fa-facebook-square  mr-2 contact-hover"></i>
                        <i class="fab fa-twitter-square  mr-2 contact-hover"></i>
                        <i class="fab fa-google-plus-square  mr-2 contact-hover"></i>
                        <i class="fab fa-linkedin  mr-2 contact-hover"></i>

                    </div>
                </div>
            </div>
            {{--  đóng footer  --}}
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ"
            crossorigin="anonymous"></script>
</body>

</html>