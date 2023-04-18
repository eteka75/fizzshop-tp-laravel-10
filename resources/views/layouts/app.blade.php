<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'FuzzUp')</title>
    @vite(['resources/sass/app.sscss', 'resources/js/app.js'])
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="{{asset('storage/assets/libs/dropzone/dist/min/dropzone__.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('storage/assets/libs/tiny-slider/dist/tiny-slider.css')}}" rel="stylesheet"/>
    <link href="{{asset('storage/assets/libs/slick-carousel/slick/slick__.css')}}" rel="stylesheet"/>
    <link href="{{asset('storage/assets/libs/slick-carousel/slick/slick-theme__.css')}}" rel="stylesheet"/>

    <link href="{{asset('storage/assets/libs/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet"/>
    <link href="{{asset('storage/assets/libs/feather-webfont/dist/feather-icons.css')}}" rel="stylesheet"/>
    <link href="{{asset('storage/assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('storage/assets/css/theme.min.css')}}" rel="stylesheet">

    <!-- Scripts -->
    @viteReactRefresh

</head>
<body>

<div id="app">
    <div class="border-bottom ">

        <div class="bg-light py-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12 text-center text-md-start"><span> Super Value Deals - Save more with
              coupons</span>
                    </div>
                    <div class="col-6 text-end d-none d-md-block">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-decoration-none  text-muted" href="#" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                <span class="me-1">
                  <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#selectedlang)">
                      <path d="M0 0.5H16V12.5H0V0.5Z" fill="#012169"/>
                      <path
                          d="M1.875 0.5L7.975 5.025L14.05 0.5H16V2.05L10 6.525L16 10.975V12.5H14L8 8.025L2.025 12.5H0V11L5.975 6.55L0 2.1V0.5H1.875Z"
                          fill="white"/>
                      <path
                          d="M10.6 7.525L16 11.5V12.5L9.225 7.525H10.6ZM6 8.025L6.15 8.9L1.35 12.5H0L6 8.025ZM16 0.5V0.575L9.775 5.275L9.825 4.175L14.75 0.5H16ZM0 0.5L5.975 4.9H4.475L0 1.55V0.5Z"
                          fill="#C8102E"/>
                      <path d="M6.025 0.5V12.5H10.025V0.5H6.025ZM0 4.5V8.5H16V4.5H0Z" fill="white"/>
                      <path d="M0 5.325V7.725H16V5.325H0ZM6.825 0.5V12.5H9.225V0.5H6.825Z" fill="#C8102E"/>
                    </g>
                    <defs>
                      <clipPath id="selectedlang">
                        <rect width="16" height="12" fill="white" transform="translate(0 0.5)"/>
                      </clipPath>
                    </defs>
                  </svg>
                </span>English
                            </a>

                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item " href="#"><span class="me-2">

                      <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_5543_19744)">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.5H16V12.5H0V0.5Z" fill="white"/>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.5H5.3325V12.5H0V0.5Z" fill="#002654"/>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M10.668 0.5H16.0005V12.5H10.668V0.5Z"
                                fill="#CE1126"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_5543_19744">
                            <rect width="16" height="12" fill="white" transform="translate(0 0.5)"/>
                          </clipPath>
                        </defs>
                      </svg>

                    </span>Français</a></li>
                                <li><a class="dropdown-item " href="#"><span class="me-2">

                      <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_5543_19751)">
                          <path d="M0 8.5H16V12.5H0V8.5Z" fill="#FFCE00"/>
                          <path d="M0 0.5H16V4.5H0V0.5Z" fill="black"/>
                          <path d="M0 4.5H16V8.5H0V4.5Z" fill="#DD0000"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_5543_19751">
                            <rect width="16" height="12" fill="white" transform="translate(0 0.5)"/>
                          </clipPath>
                        </defs>
                      </svg>

                    </span>Deutsch</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIN NAV TO -->
        <!-- FIN NAV-MENU -->

        <div class="py-4 pt-lg-3 pb-lg-0">
            <div class="container">
                <div class="row w-100 align-items-center gx-lg-2 gx-0">
                    <div class="col-xxl-2 col-lg-3">
                        <a class="navbar-brand d-none d-lg-block" href="{{url('/')}}">
                            <img src="{{asset('storage/assets/images/logo/logo-fizzshop.jpg')}}" height="35px"
                                 alt="FizzShop">

                        </a>
                        <div class="d-flex justify-content-between w-100 d-lg-none">
                            <a class="navbar-brand" href="{{url('/')}}">
                                <img src="{{asset('storage/assets/images/logo/logo-fizzshop.jpg')}}" alt="FizzShop">

                            </a>

                            <div class="d-flex align-items-center lh-1">

                                <div class="list-inline me-4">
                                    <div class="list-inline-item">

                                        <a href="{{url('/')}}" class="text-muted" data-bs-toggle="modal"
                                           data-bs-target="#userModal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round"
                                                 class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="list-inline-item">

                                        <a class="text-muted position-relative " data-bs-toggle="offcanvas"
                                           data-bs-target="#offcanvasRight"
                                           href="#offcanvasExample" role="button" aria-controls="offcanvasRight">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round"
                                                 class="feather feather-shopping-bag">
                                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                        1
                        <span class="visually-hidden">unread messages</span>
                      </span>
                                        </a>
                                    </div>

                                </div>
                                <!-- Button -->
                                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#navbar-default" aria-controls="navbar-default"
                                        aria-expanded="false"
                                        aria-label="Toggle navigation">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                         class="bi bi-text-indent-left text-primary" viewBox="0 0 16 16">
                                        <path
                                            d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                </button>

                            </div>
                        </div>

                    </div>
                    <div class="col-xxl-6 col-lg-5 d-none d-lg-block">

                        <form action="#">
                            <div class="input-group ">
                                <input class="form-control rounded" type="search" placeholder="Search for products">
                                <span class="input-group-append">
                  <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-search">
                      <circle cx="11" cy="11" r="8"></circle>
                      <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                  </button>
                </span>
                            </div>

                        </form>
                    </div>
                    <div class="col-md-2 col-xxl-3 d-none d-lg-block">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn  btn-outline-gray-400 text-muted" data-bs-toggle="modal"
                                data-bs-target="#locationModal">
                            <i class="feather-icon icon-map-pin me-2"></i>Location
                        </button>


                    </div>
                    <div class="col-md-2 col-xxl-1 text-end d-none d-lg-block">

                        <div class="list-inline">
                            <div class="list-inline-item">

                                <a href="shop-wishlist.html" class="text-muted position-relative">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                         fill="none"
                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round"
                                         class="feather feather-heart">
                                        <path
                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                        </path>
                                    </svg>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                    5
                    <span class="visually-hidden">unread messages</span>
                  </span>
                                </a></div>
                            <div class="list-inline-item">

                                <a href="{{url('/')}}" class="text-muted" data-bs-toggle="modal"
                                   data-bs-target="#userModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                         fill="none"
                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round"
                                         class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </a></div>
                            <div class="list-inline-item">

                                <a class="text-muted position-relative " data-bs-toggle="offcanvas"
                                   data-bs-target="#offcanvasRight"
                                   href="#offcanvasExample" role="button" aria-controls="offcanvasRight">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                         fill="none"
                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round"
                                         class="feather feather-shopping-bag">
                                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                                    </svg>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                    1
                    <span class="visually-hidden">unread messages</span>
                  </span>
                                </a>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        <nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 py-lg-4">
            <div class="container px-0 px-md-3">
                <div class="dropdown me-3 d-none d-lg-block">
                    <button class="btn btn-primary px-6 " type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
          <span class="me-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-grid">
              <rect x="3" y="3" width="7" height="7"></rect>
              <rect x="14" y="3" width="7" height="7"></rect>
              <rect x="14" y="14" width="7" height="7"></rect>
              <rect x="3" y="14" width="7" height="7"></rect>
            </svg></span> Toutes les catégories
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{url('/category/1')}}">Catégorie 1</a></li>
                        <li><a class="dropdown-item" href="{{url('/category/2')}}">Catégorie 2</a></li>
                        <li><a class="dropdown-item" href="{{url('/category/3')}}">Catégorie 3</a></li>
                        <li><a class="dropdown-item" href="{{url('/category/4')}}">Catégorie 4</a></li>
                        <li><a class="dropdown-item" href="{{url('/category/5')}}">Catégorie 5</a></li>

                    </ul>
                </div>
                <div class="offcanvas offcanvas-start p-4 p-lg-0" id="navbar-default">
                    <div class="d-flex justify-content-between align-items-center mb-2 d-block d-lg-none">
                        <a href="../index.html"><img src="{{asset('storage/assets/images/logo/logo-fizzshop.jpg')}}"
                                                     alt="eCommerce HTML Template"></a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="d-block d-lg-none my-4">
                        <form action="#">
                            <div class="input-group ">
                                <input class="form-control rounded" type="search" placeholder="Search for products">
                                <span class="input-group-append">
                                    <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="button">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                           stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                           class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                      </svg>
                                    </button>
                              </span>
                            </div>
                        </form>
                        <div class="mt-2">
                            <button type="button" class="btn  btn-outline-gray-400 text-muted w-100 "
                                    data-bs-toggle="modal"
                                    data-bs-target="#locationModal">
                                <i class="feather-icon icon-map-pin me-2"></i>Pick Location
                            </button>
                        </div>
                    </div>
                    <div class="d-block d-lg-none mb-4">
                        <a class="btn btn-primary w-100 d-flex justify-content-center align-items-center"
                           data-bs-toggle="collapse"
                           href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <span class="me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-grid">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg></span> All Departments
                        </a>
                        <div class="collapse mt-2" id="collapseExample">
                            <div class="card card-body">
                                <ul class="mb-0 list-unstyled">
                                    <li><a class="dropdown-item" href="{{url('/category/1')}}">Catégorie 1</a></li>
                                    <li><a class="dropdown-item" href="{{url('/category/2')}}">Catégorie 2</a></li>
                                    <li><a class="dropdown-item" href="{{url('/category/3')}}">Catégorie 3</a></li>
                                    <li><a class="dropdown-item" href="{{url('/category/4')}}">Catégorie 4</a></li>
                                    <li><a class="dropdown-item" href="{{url('/category/5')}}">Catégorie 5</a></li>
                                    <li><a class="dropdown-item" href="{{url('/category/6')}}">Catégorie 6</a></li>
                                    <li><a class="dropdown-item" href="{{url('/category/7')}}">Catégorie 7</a></li>
                                    <li><a class="dropdown-item" href="{{url('/category/8')}}">Catégorie 8</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-lg-block">
                        <ul class="navbar-nav align-items-center ">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{url('/')}}" role="button">
                                    Accueil
                                </a>

                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    Produits
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{url('/produits/1')}}">Produit 1</a></li>
                                    <li><a class="dropdown-item" href="{{url('/produits/2')}}">Produit 2</a></li>
                                    <li><a class="dropdown-item" href="{{url('/produits/3')}}">Produit 3</a></li>
                                    <li><a class="dropdown-item" href="{{url('/produits/4')}}">Produit 4</a></li>
                                    <li><a class="dropdown-item" href="{{url('/produits/5')}}">Produit 5</a></li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    Mon compte
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{url('/login')}}">Se connecter</a></li>
                                    <li><a class="dropdown-item" href="{{url('/register')}}">Créer un compte</a></li>
                                    <li><a class="dropdown-item" href="{{url('/password/reset')}}">Mot de passe
                                            oublié</a></li>

                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{url('/admin')}}">
                                    Tableau de bord
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="d-block d-lg-none h-100" data-simplebar="">
                        <ul class="navbar-nav ">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    Home
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../index.html">Home 1</a></li>
                                    <li><a class="dropdown-item" href="index-2.html">Home 2</a></li>
                                    <li><a class="dropdown-item" href="index-3.html">Home 3</a></li>
                                    <li><a class="dropdown-item" href="index-4.html">Home 4 <span
                                                class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    Shop
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="shop-grid.html">Shop Grid - Filter</a></li>
                                    <li><a class="dropdown-item" href="shop-grid-3-column.html">Shop Grid - 3 column</a>
                                    </li>
                                    <li><a class="dropdown-item" href="shop-list.html">Shop List - Filter</a></li>
                                    <li><a class="dropdown-item" href="shop-filter.html">Shop - Filter</a></li>
                                    <li><a class="dropdown-item" href="shop-fullwidth.html">Shop Wide</a></li>
                                    <li><a class="dropdown-item" href="shop-single.html">Shop Single</a></li>
                                    <li><a class="dropdown-item" href="shop-single-2.html">Shop Single v2<span
                                                class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
                                    <li><a class="dropdown-item" href="shop-wishlist.html">Shop Wishlist</a></li>
                                    <li><a class="dropdown-item" href="shop-cart.html">Shop Cart</a></li>
                                    <li><a class="dropdown-item" href="shop-checkout.html">Shop Checkout</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    Stores
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="store-list.html">Store List</a></li>
                                    <li><a class="dropdown-item" href="store-grid.html">Store Grid</a></li>
                                    <li><a class="dropdown-item" href="store-single.html">Store Single</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    Mega Menu
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu ">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                            Dairy, Bread & Eggs
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="shop-grid.html">Milk Drinks</a></li>
                                            <li><a class="dropdown-item" href="shop-grid.html">Curd & Yogurt</a></li>
                                            <li><a class="dropdown-item" href="shop-grid.html">Eggs</a></li>
                                            <li><a class="dropdown-item" href="shop-grid.html">Buns & Bakery</a></li>
                                            <li><a class="dropdown-item" href="shop-grid.html">Cheese</a></li>
                                            <li><a class="dropdown-item" href="shop-grid.html">Condensed Milk</a></li>
                                            <li><a class="dropdown-item" href="shop-grid.html">Dairy Products</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu ">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                            Vegetables & Fruits
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="shop-grid.html">Vegetables</a></li>
                                            <li><a class="dropdown-item" href="shop-grid.html">Fruits</a></li>
                                            <li><a class="dropdown-item" href="shop-grid.html">Exotics & Premium</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-grid.html">Fresh Sprouts</a></li>
                                            <li><a class="dropdown-item" href="shop-grid.html">Frozen Veg</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu ">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                            Cold Drinks & Juices
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="shop-grid.html">Soft Drinks</a></li>
                                            <li><a class="dropdown-item" href="shop-grid.html">Fruit Juices</a></li>
                                            <li><a class="dropdown-item" href="shop-grid.html">Coldpress</a></li>
                                            <li><a class="dropdown-item" href="shop-grid.html">Soda & Mixers</a></li>
                                            <li><a class="dropdown-item" href="shop-grid.html">Milk Drinks</a></li>
                                            <li><a class="dropdown-item" href="shop-grid.html">Health Drinks</a></li>
                                            <li><a class="dropdown-item" href="shop-grid.html">Herbal Drinks</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                    <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                                    <li><a class="dropdown-item" href="blog-category.html">Blog Category</a></li>
                                    <li><a class="dropdown-item" href="about.html">About us</a></li>
                                    <li><a class="dropdown-item" href="404error.html">404 Error</a></li>
                                    <li><a class="dropdown-item" href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    Account
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="signin.html">Sign in</a></li>
                                    <li><a class="dropdown-item" href="signup.html">Signup</a></li>
                                    <li><a class="dropdown-item" href="forgot-password.html">Forgot Password</a></li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                            My Account
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="account-orders.html">Orders</a></li>
                                            <li><a class="dropdown-item" href="account-settings.html">Settings</a></li>
                                            <li><a class="dropdown-item" href="account-address.html">Address</a></li>
                                            <li><a class="dropdown-item" href="account-payment-method.html">Payment
                                                    Method</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                   href="account-notification.html">Notification</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../dashboard/index.html">
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-flyout">
                                <a class="nav-link" href="#" id="navbarDropdownDocs2" role="button"
                                   data-bs-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    Docs
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarDropdownDocs2">
                                    <a class="dropdown-item align-items-start" href="../docs/index.html">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 fill="currentColor"
                                                 class="bi bi-file-text text-primary" viewBox="0 0 16 16">
                                                <path
                                                    d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                                                <path
                                                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                                            </svg>
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h6 class="mb-1">Documentations</h6>
                                            <p class="mb-0 small">
                                                Browse the all documentation
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item align-items-start" href="../docs/changelog.html">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 fill="currentColor"
                                                 class="bi bi-layers text-primary" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"/>
                                            </svg>
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h6 class="mb-1">
                                                Changelog <span class="text-primary ms-1">v1.1.0</span>
                                            </h6>
                                            <p class="mb-0 small">See what's new</p>
                                        </div>
                                    </a>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header border-0">
                <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Sign Up</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter Your Name" required="">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email address"
                               required="">
                    </div>

                    <div class="mb-5">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Password"
                               required="">
                        <small class="form-text">By Signup, you agree to our <a href="{{url('/')}}">Terms of Service</a>
                            & <a
                                href="{{url('/')}}">Privacy Policy</a></small>
                    </div>

                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
            <div class="modal-footer border-0 justify-content-center">

                Already have an account? <a href="#">Sign in</a>
            </div>
        </div>
    </div>
</div>

<!-- FIN NAV-MENU -->
<div>
    @include('frontend.partials._flash-message')
    <main class="main">
        @yield('content')
    </main>
</div>

<!-- Javascript-->
<script src="{{asset('storage/assets/libs/rater-js/index.js')}}"></script>
<script src="{{asset('__storage/assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>

<!-- Libs JS -->
<script src="{{asset('storage/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('__storage/assets/libs/simplebar/dist/simplebar.min.js')}}"></script>

<!-- Theme JS -->
<!--script src="{{asset('storage/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script-- src="{{asset('storage/assets/js/theme.min.js')}}"></script-->

<script src="{{asset('storage/assets/libs/tiny-slider/dist/min/tiny-slider.js')}}"></script>
<script src="{{asset('storage/assets/js/vendors/tns-slider.js')}}"></script>
<script src="{{asset('__storage/assets/js/vendors/zoom.js')}}"></script>
<script src="{{asset('storage/assets/js/vendors/increment-value.js')}}"></script>

</body>
</html>