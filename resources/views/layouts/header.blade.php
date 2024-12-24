<!-- Start Header Area -->
<header class="header-area">
    <div class="container bg-white rounded-5">
        <div class="row">
            <div class="col-12 header-first-col shadow" style="position: relative;">
                <div class="first-li-div position-relative">
                    <ul class="first-ul d-flex justify-between">
                        <li>
                            <a class="mobile-menu" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                                aria-controls="offcanvasExample">
                                <i class="bi bi-filter-left"></i>
                            </a>
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                                aria-labelledby="offcanvasExampleLabel">
                                <div class="offcanvas-header">
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                    @guest
                                        @if (Route::has('login'))
                                            <a href="{{ route('login') }}"
                                                style="text-decoration: none; color: var(--white);" class="offcanvas-title"
                                                id="offcanvasExampleLabel">
                                                Sign In
                                            </a>
                                        @else
                                        @endif
                                    @endguest
                                </div>

                                <div class="offcanvas-body"
                                    style="display: flex; flex-direction: column; justify-content: space-between;">

                                    <div class="for-sup">
                                        <div class="f-msp">
                                            <ul id="header-wr" class="menu">

                                                <li class="menu-item-has-children">

                                                    <a class="dropdown-item" href="/">Home</a>

                                                </li>
                                            </ul>

                                        </div>


                                    </div>
                                    <div class="social-links">
                                        <ul>
                                            <li class="text-capitalize">
                                                <a href="https://www.facebook.com/mysweetiepie.ca" title="Facebook">
                                                    <i class="fa fa fa-facebook"></i> </a>
                                            </li>
                                            <li class="text-capitalize">
                                                <a href="https://www.instagram.com/mysweetiepie.ca/" title="Instagram">
                                                    <i class="fa bi bi-instagram"></i> </a>
                                            </li>
                                            <li class="text-capitalize">
                                                <a href="https://www.tiktok.com/@mysweetiepie.ca" title="Tiktok">
                                                    <i class="fa bi bi-tiktok"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="logo">
                                <a href="/">
                                    <img src="assets/img/logo/logo.png" alt="">
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
              
                <div class="px-4">
                    <ul class="d-flex gap-3 align-items-end align-content-end m-1">
                       <li>
                        <div class="search" id="search-bar">
                            <input type="search" placeholder="Type something..." name="q" class="search__input">
                            <div class="search__button" id="search-button">
                                <i class="ri-search-2-line bi bi-search text-theme"></i>
                                <i class="ri-close-line bi bi-x"></i>
                            </div>
                        </div>
                       </li>
                        <li class="cursor-pointer">
                            <a href="menu" class="btn btn-theme btn-sm rounded-5">Order Now</a>
                        </li>
                        <li class="cursor-pointer">
                            <a href="menu" class="btn btn-theme btn-sm rounded-5">Track Now</a>
                        </li>
                        <li>
                            <a href="/cart">
                                <div class="cart-icon text-theme">
                                    <i class="bi bi-cart fs-5 fw-bold"></i>
                                    <span class="cart-count d-none">0</span>
                                </div>
                            </a>
                        </li>
                        <li class="d-md-none d-flex me-0 ms-2">
                            <a href="/cart" class="d-md-none d-inline">
                                <div class="cart-icon text-theme">
                                    <i class="bi bi-cart fs-5"></i>
                                    <span class="cart-count">0</span>
                                </div>
                            </a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="last-one">
                                    <a href="{{ route('login') }}">
                                        <i class="bi bi-person fs-5 text-theme"></i>
                                    </a>
                                </li>
                            @endif

                        @endguest
                        @auth
                            <li class="last-one" x-data="{ open: false }" @click.away="open = false">
                                <a href="#" @click="open = !open">
                                    <i class="bi bi-person fs-5 text-theme"></i>
                                </a>
                                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                    class="dropdown-menu show"
                                    style="width: auto; padding: 10px; position: absolute; z-index: 1000;">
                                    <a class="dropdown-item float-start fs-6 fw-medium text-theme" href="">
                                        <i class="bi bi-person"></i> My Account
                                    </a>
                                    <form action="{{ route('logout') }}" id="logout-form" method="POST">
                                        @method('POST') @csrf </form>
                                    <button type="submit" form="logout-form"
                                        class="dropdown-item float-start fs-6 fw-medium">
                                        <i class="bi bi-box-arrow-in-left"></i>
                                        Log Out
                                    </button>

                                </div>
                            </li>

                        @endauth


                        <li>
                            <a href="tel:(647)245-3301" class="text-theme" title="(647)245-3301">
                                <i class="bi bi-telephone-outbound fs-5" style="font-size: 19px;"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
           
            
        </div>
    </div>
    <!-- main header start -->
    <div class="main-header d-none">


        <!-- header middle area start -->
        <div class="header-main-area sticky">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <!-- start logo area -->
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="/">
                                <img src="assets/img/logo/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- start logo area -->

                    <!-- main menu area start -->
                    <div class="col-lg-8 position-static">
                        <div class="main-menu-area">
                            <div class="main-menu">
                                <!-- main menu navbar start -->
                                <nav class="desktop-menu">
                                    <ul>
                                        <li class="active"><a href="index.html">Home <i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="index.html">Home version 01</a></li>
                                                <li><a href="index-2.html">Home version 02</a></li>
                                            </ul>
                                        </li>
                                        <li class="static"><a href="#">pages <i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="megamenu dropdown">
                                                <li class="mega-title"><a href="#">column 01</a>
                                                    <ul>
                                                        <li><a href="shop.html">shop grid left
                                                                sidebar</a></li>
                                                        <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                                sidebar</a></li>
                                                        <li><a href="shop-list-left-sidebar.html">shop list left
                                                                sidebar</a></li>
                                                        <li><a href="shop-list-right-sidebar.html">shop list right
                                                                sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-title"><a href="#">column 02</a>
                                                    <ul>
                                                        <li><a href="product-details.html">product details</a></li>
                                                        <li><a href="product-details-affiliate.html">product
                                                                details affiliate</a></li>
                                                        <li><a href="product-details-variable.html">product details
                                                                variable</a></li>
                                                        <li><a href="product-details-group.html">product details
                                                                group</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-title"><a href="#">column 03</a>
                                                    <ul>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="checkout.html">checkout</a></li>
                                                        <li><a href="compare.html">compare</a></li>
                                                        <li><a href="wishlist.html">wishlist</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-title"><a href="#">column 04</a>
                                                    <ul>
                                                        <li><a href="my-account.html">my-account</a></li>
                                                        <li><a href="login-register.html">login-register</a></li>
                                                        <li><a href="contact-us.html">contact us</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">shop <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="#">shop grid layout <i
                                                            class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">shop grid left sidebar</a></li>
                                                        <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                                sidebar</a></li>
                                                        <li><a href="shop-grid-full-3-col.html">shop grid full 3
                                                                col</a></li>
                                                        <li><a href="shop-grid-full-4-col.html">shop grid full 4
                                                                col</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">shop list layout <i
                                                            class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop-list-left-sidebar.html">shop list left
                                                                sidebar</a></li>
                                                        <li><a href="shop-list-right-sidebar.html">shop list right
                                                                sidebar</a></li>
                                                        <li><a href="shop-list-full-width.html">shop list full
                                                                width</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">products details <i
                                                            class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="product-details.html">product details</a></li>
                                                        <li><a href="product-details-affiliate.html">product
                                                                details affiliate</a></li>
                                                        <li><a href="product-details-variable.html">product details
                                                                variable</a></li>
                                                        <li><a href="product-details-group.html">product details
                                                                group</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-left-sidebar.html">Blog <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                                <li><a href="blog-grid-full-width.html">blog grid no sidebar</a>
                                                </li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                                <li><a href="blog-details-audio.html">blog details audio</a></li>
                                                <li><a href="blog-details-video.html">blog details video</a></li>
                                                <li><a href="blog-details-left-sidebar.html">blog details left
                                                        sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact-us.html">Contact us</a></li>
                                    </ul>
                                </nav>
                                <!-- main menu navbar end -->
                            </div>
                        </div>
                    </div>
                    <!-- main menu area end -->

                    <!-- mini cart area start -->
                    <div class="col-lg-2">
                        <div class="header-configure-wrapper">
                            <div class="header-configure-area">
                                <ul class="nav justify-content-end">
                                    <li>
                                        <a href="#" class="offcanvas-btn">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </li>
                                    <li class="user-hover">
                                        <a href="#">
                                            <i class="ion-ios-gear-outline"></i>
                                        </a>
                                        <ul class="dropdown-list">
                                            <li><a href="login-register.html">login</a></li>
                                            <li><a href="login-register.html">register</a></li>
                                            <li><a href="my-account.html">my account</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="minicart-btn">
                                            <i class="ion-bag"></i>
                                            <div class="notification">2</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- mini cart area end -->
                </div>
            </div>
        </div>
        <!-- header middle area end -->
    </div>
    <!-- main header start -->

    <!-- mobile header start -->
    <div class="mobile-header d-none d-lg-none d-md-block sticky">
        <!--mobile header top start -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="mobile-main-header">
                        <div class="mobile-logo">
                            <a href="/">
                                <img src="assets/img/logo/logo.png" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="mobile-menu-toggler">
                            <div class="mini-cart-wrap">
                                <a href="cart.html">
                                    <i class="ion-bag"></i>
                                </a>
                            </div>
                            <div class="mobile-menu-btn">
                                <div class="off-canvas-btn">
                                    <i class="ion-navicon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile header top start -->
    </div>
    <!-- mobile header end -->
</header>
<!-- end Header Area -->
