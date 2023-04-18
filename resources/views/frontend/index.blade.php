@extends('layouts.app')
@section('content')

    <!-- Shop Cart -->
    <style type="text/css" >
        .rating{display:inline-block;position:relative;height:30px;line-height:30px;font-size:30px}.rating label{position:absolute;top:0;left:0;height:100%;cursor:pointer}.rating label:last-child{position:static}.rating label:nth-child(1){z-index:5}.rating label:nth-child(2){z-index:4}.rating label:nth-child(3){z-index:3}.rating label:nth-child(4){z-index:2}.rating label:nth-child(5){z-index:1}.rating label input{position:absolute;top:0;left:0;opacity:0}.rating label .icon{float:left;color:transparent;margin-top:10px}.rating label:last-child .icon{color:#ddd}.rating:not(:hover) label input:checked ~ .icon,.rating:hover label:hover input ~ .icon{color:#ffc107}.rating label input:focus:not(:checked) ~ .icon:last-child{color:#000;text-shadow:0 0 5px #09f}
    </style>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <div class="text-start">
                <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Shop Cart</h5>
                <small>Location in 382480</small>
            </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <div class="">
                <!-- alert -->
                <div class="alert alert-danger p-2" role="alert">
                    You’ve got FREE delivery. Start <a href="{{url('/')}}" class="alert-link">checkout now!</a>
                </div>
                <ul class="list-group list-group-flush">
                    <!-- list group -->
                    <li class="list-group-item py-3 ps-0 border-top">
                        <!-- row -->
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <!-- img --> <img src="{{asset('storage/assets/images/products/product-img-1.jpg')}}"
                                                  alt="Ecommerce"
                                                  class="img-fluid"></div>
                            <div class="col-4 col-md-6 col-lg-5">
                                <!-- title -->
                                <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                                </a>
                                <span><small class="text-muted">.98 / lb</small></span>
                                <!-- text -->
                                <div class="mt-2 small lh-1"><a href="{{url('/')}}"
                                                                class="text-decoration-none text-inherit"> <span
                                            class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
                            </div>
                            <!-- input group -->
                            <div class="col-3 col-md-3 col-lg-3">
                                <!-- input -->
                                <!-- input -->
                                <div class="input-group input-spinner  ">
                                    <input type="button" value="-" class="button-minus  btn  btn-sm "
                                           data-field="quantity">
                                    <input type="number" step="1" max="10" value="1" name="quantity"
                                           class="quantity-field form-control-sm form-input   ">
                                    <input type="button" value="+" class="button-plus btn btn-sm "
                                           data-field="quantity">
                                </div>

                            </div>
                            <!-- price -->
                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                <span class="fw-bold">$5.00</span>

                            </div>
                        </div>

                    </li>
                    <!-- list group -->
                    <li class="list-group-item py-3 ps-0">
                        <!-- row -->
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <!-- img --> <img src="{{asset('storage/assets/images/products/product-img-2.jpg')}}"
                                                  alt="Ecommerce"
                                                  class="img-fluid"></div>
                            <div class="col-4 col-md-6 col-lg-5">
                                <!-- title -->
                                <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">NutriChoice Digestive </h6>
                                </a>
                                <span><small class="text-muted">250g</small></span>
                                <!-- text -->
                                <div class="mt-2 small lh-1"><a href="{{url('/')}}"
                                                                class="text-decoration-none text-inherit"> <span
                                            class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
                            </div>
                            <!-- input group -->
                            <div class="col-3 col-md-3 col-lg-3">
                                <!-- input -->
                                <!-- input -->
                                <div class="input-group input-spinner  ">
                                    <input type="button" value="-" class="button-minus  btn  btn-sm "
                                           data-field="quantity">
                                    <input type="number" step="1" max="10" value="1" name="quantity"
                                           class="quantity-field form-control-sm form-input   ">
                                    <input type="button" value="+" class="button-plus btn btn-sm "
                                           data-field="quantity">
                                </div>
                            </div>
                            <!-- price -->
                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                <span class="fw-bold text-danger">$20.00</span>
                                <div class="text-decoration-line-through text-muted small">$26.00</div>
                            </div>
                        </div>

                    </li>
                    <!-- list group -->
                    <li class="list-group-item py-3 ps-0">
                        <!-- row -->
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <!-- img --> <img src="{{asset('storage/assets/images/products/product-img-3.jpg')}}"
                                                  alt="Ecommerce"
                                                  class="img-fluid"></div>
                            <div class="col-4 col-md-6 col-lg-5">
                                <!-- title -->
                                <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
                                </a>
                                <span><small class="text-muted">1 kg</small></span>
                                <!-- text -->
                                <div class="mt-2 small lh-1"><a href="{{url('/')}}"
                                                                class="text-decoration-none text-inherit"> <span
                                            class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
                            </div>
                            <!-- input group -->
                            <div class="col-3 col-md-3 col-lg-3">
                                <!-- input -->
                                <!-- input -->
                                <div class="input-group input-spinner  ">
                                    <input type="button" value="-" class="button-minus  btn  btn-sm "
                                           data-field="quantity">
                                    <input type="number" step="1" max="10" value="1" name="quantity"
                                           class="quantity-field form-control-sm form-input   ">
                                    <input type="button" value="+" class="button-plus btn btn-sm "
                                           data-field="quantity">
                                </div>
                            </div>
                            <!-- price -->
                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                <span class="fw-bold">$15.00</span>
                                <div class="text-decoration-line-through text-muted small">$20.00</div>
                            </div>
                        </div>

                    </li>
                    <!-- list group -->
                    <li class="list-group-item py-3 ps-0">
                        <!-- row -->
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <!-- img --> <img src="{{asset('storage/assets/images/products/product-img-4.jpg')}}"
                                                  alt="Ecommerce"
                                                  class="img-fluid"></div>
                            <div class="col-4 col-md-6 col-lg-5">
                                <!-- title -->
                                <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Onion Flavour Potato</h6>
                                </a>
                                <span><small class="text-muted">250g</small></span>
                                <!-- text -->
                                <div class="mt-2 small lh-1"><a href="{{url('/')}}"
                                                                class="text-decoration-none text-inherit"> <span
                                            class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
                            </div>
                            <!-- input group -->
                            <div class="col-3 col-md-3 col-lg-3">
                                <!-- input -->
                                <!-- input -->
                                <div class="input-group input-spinner  ">
                                    <input type="button" value="-" class="button-minus  btn  btn-sm "
                                           data-field="quantity">
                                    <input type="number" step="1" max="10" value="1" name="quantity"
                                           class="quantity-field form-control-sm form-input   ">
                                    <input type="button" value="+" class="button-plus btn btn-sm "
                                           data-field="quantity">
                                </div>
                            </div>
                            <!-- price -->
                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                <span class="fw-bold">$15.00</span>
                                <div class="text-decoration-line-through text-muted small">$20.00</div>
                            </div>
                        </div>

                    </li>
                    <!-- list group -->
                    <li class="list-group-item py-3 ps-0 border-bottom">
                        <!-- row -->
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <!-- img --> <img src="{{asset('storage/assets/images/products/product-img-5.jpg')}}"
                                                  alt="Ecommerce"
                                                  class="img-fluid"></div>
                            <div class="col-4 col-md-6 col-lg-5">
                                <!-- title -->
                                <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Salted Instant Popcorn </h6>
                                </a>
                                <span><small class="text-muted">100g</small></span>
                                <!-- text -->
                                <div class="mt-2 small lh-1"><a href="{{url('/')}}"
                                                                class="text-decoration-none text-inherit"> <span
                                            class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
                            </div>
                            <!-- input group -->
                            <div class="col-3 col-md-3 col-lg-3">
                                <!-- input -->
                                <!-- input -->
                                <div class="input-group input-spinner  ">
                                    <input type="button" value="-" class="button-minus  btn  btn-sm "
                                           data-field="quantity">
                                    <input type="number" step="1" max="10" value="1" name="quantity"
                                           class="quantity-field form-control-sm form-input   ">
                                    <input type="button" value="+" class="button-plus btn btn-sm "
                                           data-field="quantity">
                                </div>
                            </div>
                            <!-- price -->
                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                <span class="fw-bold">$15.00</span>
                                <div class="text-decoration-line-through text-muted small">$25.00</div>
                            </div>
                        </div>

                    </li>

                </ul>
                <!-- btn -->
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{url('/')}}" class="btn btn-primary">Continue Shopping</a>
                    <a href="{{url('/')}}" class="btn btn-dark">Update Cart</a>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body p-6">
                    <div class="d-flex justify-content-between align-items-start ">
                        <div>
                            <h5 class="mb-1" id="locationModalLabel">Choose your Delivery Location</h5>
                            <p class="mb-0 small">Enter your address and we will specify the offer you area. </p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="my-5">
                        <input type="search" class="form-control" placeholder="Search your area">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="mb-0">Select Location</h6>
                        <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Clear All</a>


                    </div>
                    <div>
                        <div data-simplebar style="height:300px;">
                            <div class="list-group list-group-flush">

                                <a href="#"
                                   class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action active">
                                    <span>Alabama</span><span>Min:$20</span></a>
                                <a href="#"
                                   class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                    <span>Alaska</span><span>Min:$30</span></a>
                                <a href="#"
                                   class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                    <span>Arizona</span><span>Min:$50</span></a>
                                <a href="#"
                                   class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                    <span>California</span><span>Min:$29</span></a>
                                <a href="#"
                                   class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                    <span>Colorado</span><span>Min:$80</span></a>
                                <a href="#"
                                   class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                    <span>Florida</span><span>Min:$90</span></a>
                                <a href="#"
                                   class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                    <span>Arizona</span><span>Min:$50</span></a>
                                <a href="#"
                                   class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                    <span>California</span><span>Min:$29</span></a>
                                <a href="#"
                                   class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                    <span>Colorado</span><span>Min:$80</span></a>
                                <a href="#"
                                   class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                    <span>Florida</span><span>Min:$90</span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <main>
        <div class="mt-4">
            <div class="container">
                <!-- row -->
                <div class="row ">
                    <!-- col -->
                    <div class="col-12">
                        <!-- breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="{{url('category/1')}}">Catégorie 1</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Produit 1</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="mt-8" >
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <!-- img slide -->
                        <div class="product" id="product">
                            <div class="zoom" onmousemove="zoom(event)"
                                 style="background-image: url({{asset('storage/assets/images/products/product-single-img-1.jpg')}})">
                                <!-- img -->
                                <!-- img -->
                                <img src="{{asset('storage/assets/images/products/product-single-img-1.jpg')}}" alt="">
                            </div>
                            <div>
                                <div class="zoom" onmousemove="zoom(event)"
                                     style="background-image: url({{asset('storage/assets/images/products/product-single-img-2.jpg')}})">
                                    <!-- img -->
                                    <img src="{{asset('storage/assets/images/products/product-single-img-2.jpg')}}"
                                         alt="">
                                </div>
                            </div>
                            <div>
                                <div class="zoom" onmousemove="zoom(event)"
                                     style="background-image: url({{asset('storage/assets/images/products/product-single-img-3.jpg')}})">
                                    <!-- img -->
                                    <img src="{{asset('storage/assets/images/products/product-single-img-3.jpg')}}"
                                         alt="">
                                </div>
                            </div>
                            <div>
                                <div class="zoom" onmousemove="zoom(event)"
                                     style="background-image: url({{asset('storage/assets/images/products/product-single-img-4.jpg')}})">
                                    <!-- img -->
                                    <img src="{{asset('storage/assets/images/products/product-single-img-4.jpg')}}"
                                         alt="">
                                </div>
                            </div>
                        </div>
                        <!-- product tools -->
                        <div class="product-tools">
                            <div class="thumbnails row g-3" id="productThumbnails">
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="{{asset('storage/assets/images/products/product-single-img-1.jpg')}}"
                                             alt="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="{{asset('storage/assets/images/products/product-single-img-2.jpg')}}"
                                             alt="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="{{asset('storage/assets/images/products/product-single-img-3.jpg')}}"
                                             alt="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="{{asset('storage/assets/images/products/product-single-img-4.jpg')}}"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ps-lg-10 mt-6 mt-md-0">
                            <!-- content -->
                            <a href="{{url('/')}}" class="mb-4 d-block">Bakery Biscuits</a>
                            <!-- heading -->
                            <h1 class="mb-1">Napolitanke Ljesnjak </h1>
                            <div class="mb-4">
                                <!-- rating -->
                                <!-- rating --> <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i></small><a href="#" class="ms-2">(30 reviews)</a>
                            </div>
                            <div class="fs-4">
                                <!-- price --><span class="fw-bold text-dark">$32</span> <span
                                    class="text-decoration-line-through text-muted">$35</span><span><small
                                        class="fs-6 ms-2 text-danger">26%
                  Off</small></span>
                            </div>
                            <!-- hr -->
                            <hr class="my-6">
                            <div class="mb-5">
                                <button type="button" class="btn btn-outline-secondary">250g</button>
                                <!-- btn -->
                                <button type="button" class="btn btn-outline-secondary">500g</button>
                                <!-- btn -->
                                <button type="button" class="btn btn-outline-secondary">1kg</button>
                            </div>
                            <div>


                                <!-- input -->
                                <div class="input-group input-spinner  ">
                                    <input type="button" value="-" class="button-minus  btn  btn-sm "
                                           data-field="quantity">
                                    <input type="number" step="1" max="10" value="1" name="quantity"
                                           class="quantity-field form-control-sm form-input   ">
                                    <input type="button" value="+" class="button-plus btn btn-sm "
                                           data-field="quantity">
                                </div>

                            </div>
                            <div class="mt-3 row justify-content-start g-2 align-items-center">

                                <div class="col-xxl-5 col-lg-5 col-md-5 col-5 d-grid">
                                    <!-- button -->
                                    <!-- btn -->
                                    <button type="button" class="btn btn-primary"><i
                                            class="feather-icon icon-shopping-bag me-2"></i>Ajouter au panier
                                    </button>
                                </div>
                                <div class="col-md-4 col-4">
                                    <!-- btn -->
                                    <a class="btn btn-light " href="#" data-bs-toggle="tooltip" data-bs-html="true"
                                       aria-label="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    <a class="btn btn-light " href="shop-wishlist.html" data-bs-toggle="tooltip"
                                       data-bs-html="true" aria-label="Wishlist"><i class="feather-icon icon-heart"></i></a>
                                </div>
                            </div>
                            <!-- hr -->
                            <hr class="my-6">
                            <div>
                                <!-- table -->
                                <table class="table table-borderless mb-0">

                                    <tbody>
                                    <tr>
                                        <td>Product Code:</td>
                                        <td>FBB00255</td>

                                    </tr>
                                    <tr>
                                        <td>Availability:</td>
                                        <td>In Stock</td>

                                    </tr>
                                    <tr>
                                        <td>Type:</td>
                                        <td>Fruits</td>

                                    </tr>
                                    <tr>
                                        <td>Shipping:</td>
                                        <td><small>01 day shipping.<span class="text-muted">( Free pickup today)</span></small>
                                        </td>

                                    </tr>


                                    </tbody>
                                </table>

                            </div>
                            <div class="mt-8">
                                <!-- dropdown -->
                                <div class="dropdown">
                                    <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        Share
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-facebook me-2"></i>Facebook</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-twitter me-2"></i>Twitter</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-instagram me-2"></i>Instagram</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-lg-14 mt-8 " id="avis">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills nav-lb-tab" id="myTab" role="tablist">
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <!-- btn -->
                                <button class="nav-link active" id="reviews-tab" data-bs-toggle="tab"
                                        data-bs-target="#reviews-tab-pane" type="button" role="tab"
                                        aria-controls="reviews-tab-pane"
                                        aria-selected="true">Reviews
                                </button>
                            </li>

                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <!-- btn -->
                                <button class="nav-link" id="details-tab" data-bs-toggle="tab"
                                        data-bs-target="#details-tab-pane" type="button" role="tab"
                                        aria-controls="details-tab-pane"
                                        aria-selected="false">Détails sur le produit
                                </button>
                            </li>

                        </ul>
                        <!-- tab content -->
                        <div class="tab-content" id="myTabContent">
                            <!-- tab pane -->
                            <div class="tab-pane fade" id="product-tab-pane" role="tabpanel"
                                 aria-labelledby="product-tab"
                                 tabindex="0">
                                <div class="my-8">
                                    <div class="mb-5">
                                        <!-- text -->
                                        <h4 class="mb-1">Nutrient Value & Benefits</h4>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi,
                                            tellus iaculis urna
                                            bibendum
                                            in lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit.
                                            Vel, varius
                                            habitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus
                                            adipiscing
                                            sagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class="mb-5">
                                        <h5 class="mb-1">Storage Tips</h5>
                                        <p class="mb-0">Nisi, tellus iaculis urna bibendum in lacus, integer. Id
                                            imperdiet vitae varius sed
                                            magnis eu
                                            nisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus
                                            facilisis ante ipsum
                                            netus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit.
                                        </p>
                                    </div>
                                    <!-- content -->
                                    <div class="mb-5">
                                        <h5 class="mb-1">Unit</h5>
                                        <p class="mb-0">3 units</p>
                                    </div>
                                    <div class="mb-5">
                                        <h5 class="mb-1">Seller</h5>
                                        <p class="mb-0">DMart Pvt. LTD</p>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Disclaimer</h5>
                                        <p class="mb-0">Image shown is a representation and may slightly vary from the
                                            actual product. Every
                                            effort
                                            is made to maintain accuracy of all information displayed.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- tab pane -->
                            <div class="tab-pane fade" id="details-tab-pane" role="tabpanel"
                                 aria-labelledby="details-tab" tabindex="0">
                                <div class="my-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="mb-4">Details</h4>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <table class="table table-striped">
                                                <!-- table -->
                                                <tbody>
                                                <tr>
                                                    <th>Weight</th>
                                                    <td>1000 Grams</td>
                                                </tr>
                                                <tr>
                                                    <th>Ingredient Type</th>
                                                    <td>Vegetarian</td>
                                                </tr>
                                                <tr>
                                                    <th>Brand</th>
                                                    <td>Dmart</td>
                                                </tr>
                                                <tr>
                                                    <th>Item Package Quantity</th>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <th>Form</th>
                                                    <td>Larry the Bird</td>
                                                </tr>
                                                <tr>
                                                    <th>Manufacturer</th>
                                                    <td>Dmart</td>
                                                </tr>
                                                <tr>
                                                    <th>Net Quantity</th>
                                                    <td>340.0 Gram</td>
                                                </tr>
                                                <tr>
                                                    <th>Product Dimensions</th>
                                                    <td>9.6 x 7.49 x 18.49 cm</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <table class="table table-striped">
                                                <!-- table -->
                                                <tbody>
                                                <tr>
                                                    <th>ASIN</th>
                                                    <td>SB0025UJ75W</td>
                                                </tr>
                                                <tr>
                                                    <th>Best Sellers Rank</th>
                                                    <td>#2 in Fruits</td>
                                                </tr>
                                                <tr>
                                                    <th>Date First Available</th>
                                                    <td>30 April 2022</td>
                                                </tr>
                                                <tr>
                                                    <th>Item Weight</th>
                                                    <td>500g</td>
                                                </tr>
                                                <tr>
                                                    <th>Generic Name</th>
                                                    <td>Banana Robusta</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tab pane -->
                            <div class="tab-pane fade  show active" id="reviews-tab-pane" role="tabpanel"
                                 aria-labelledby="reviews-tab" tabindex="0">
                                <div class="my-8">
                                    <!-- row -->
                                    <div class="row" >
                                        <div class="col-md-4">
                                            <div class="me-lg-12 mb-6 mb-md-0">

                                                <div class="mb-5">
                                                    <!-- title -->

                                                    <span>
                          <!-- rating --> <small class="text-warning"> <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i></small><span class="ms-3">4.1 out of 5</span><small
                                                            class="ms-3">11,130 global ratings</small></span>
                                                </div>
                                                <div class="mb-8">
                                                    <!-- progress -->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="text-nowrap me-3 text-muted"><span
                                                                class="d-inline-block align-middle text-muted">5</span><i
                                                                class="bi bi-star-fill ms-1 small text-warning"></i>
                                                        </div>
                                                        <div class="w-100">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                     style="width: 60%;"
                                                                     aria-valuenow="60" aria-valuemin="0"
                                                                     aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted ms-3">53%</span>
                                                    </div>
                                                    <!-- progress -->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="text-nowrap me-3 text-muted"><span
                                                                class="d-inline-block align-middle text-muted">4</span><i
                                                                class="bi bi-star-fill ms-1 small text-warning"></i>
                                                        </div>
                                                        <div class="w-100">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                     style="width: 50%;"
                                                                     aria-valuenow="50" aria-valuemin="0"
                                                                     aria-valuemax="50"></div>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted ms-3">22%</span>
                                                    </div>
                                                    <!-- progress -->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="text-nowrap me-3 text-muted"><span
                                                                class="d-inline-block align-middle text-muted">3</span><i
                                                                class="bi bi-star-fill ms-1 small text-warning"></i>
                                                        </div>
                                                        <div class="w-100">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                     style="width: 35%;"
                                                                     aria-valuenow="35" aria-valuemin="0"
                                                                     aria-valuemax="35"></div>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted ms-3">14%</span>
                                                    </div>
                                                    <!-- progress -->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="text-nowrap me-3 text-muted"><span
                                                                class="d-inline-block align-middle text-muted">2</span><i
                                                                class="bi bi-star-fill ms-1 small text-warning"></i>
                                                        </div>
                                                        <div class="w-100">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                     style="width: 22%;"
                                                                     aria-valuenow="22" aria-valuemin="0"
                                                                     aria-valuemax="22"></div>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted ms-3">5%</span>
                                                    </div>
                                                    <!-- progress -->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="text-nowrap me-3 text-muted"><span
                                                                class="d-inline-block align-middle text-muted">1</span><i
                                                                class="bi bi-star-fill ms-1 small text-warning"></i>
                                                        </div>
                                                        <div class="w-100">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                     style="width: 14%;"
                                                                     aria-valuenow="14" aria-valuemin="0"
                                                                     aria-valuemax="14"></div>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted ms-3">7%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col -->
                                        <div class="col-md-8"  >

                                            <div class="d-grid mb-5 p-8 rounded-3 shadow-3 border">
                                                {!! Form::open(['method' => 'POST', 'url' => '/avis', 'class' => 'd-none d-sm-inline-block','files' => true]) !!}
                                                <h5>Ecrire un avis sur ce produits</h5>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="py-4 mb-4">
                                                            <input type="hidden" name="produit_id" value="1">
                                                            <label for="note" class="text-lg pe-3"> Note :</label>
                                                            <div class="rating">
                                                                <label>
                                                                    <input type="radio" required name="note" value="1"  @checked(old('note')==1)/>
                                                                    <span class="icon">★</span>
                                                                </label>
                                                                <label>
                                                                    <input type="radio" required name="note" value="2" @checked(old('note')==2) />
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                </label>
                                                                <label>
                                                                    <input type="radio" required name="note" value="3" @checked(old('note')==3) />
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                </label>
                                                                <label>
                                                                    <input type="radio" required name="note" value="4" @checked(old('note')==4)/>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                </label>
                                                                <label>
                                                                    <input type="radio" required name="note" value="5" @checked(old('note')==5) />
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                </label>
                                                            </div>


                                                        </div>
                                                        <div class="col-12">
                                                            @if($errors->has('note'))
                                                                <div class="error text-xs">{{ $errors->first('note') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                       <div class="form-group mb-4 ">
                                                           <input type="text" required PLACEHOLDER="pseudo(John44)" class="form-control @error('pseudo') is-invalid @enderror" name="pseudo" value="{{old('pseudo')}}">
                                                           <div class="col-12">
                                                               @if($errors->has('pseudo'))
                                                                   <div class="error text-xs text-danger">{{ $errors->first('pseudo') }}</div>
                                                               @endif
                                                           </div>
                                                       </div>
                                                           </div>
                                                   <div class="col-5">
                                                <div class="form-group mb-4 ">
                                                    <input required type="email" name="email" placeholder="Votre adresse email(mail@domaine.fr)" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                                                    <div class="col-12">
                                                        @if($errors->has('email'))
                                                            <div class="error text-xs text-danger">{{ $errors->first('email') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                   </div>
                                                    <div class="col-4">
                                                        <div class="form-group mb-4  ">

                                                            <div class="fallback">
                                                                <input  name="photo"  class="form-control input-md @error('photo') is-invalid @enderror"
                                                                        type="file" accept="image/jpeg,png,jpg,gif"/>
                                                            </div>
                                                            <div class="col-12">
                                                                @if($errors->has('photo'))
                                                                    <div class="error text-xs text-danger">{{ $errors->first('photo') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4 ">
                                                    <input required type="text" name="commentaire" placeholder="Laisser un avis..." class="form-control @error('commentaire') is-invalid @enderror" value="{{old('commentaire')}}">
                                                    <div class="col-12">
                                                        @if($errors->has('commentaire'))
                                                            <div class="error text-xs text-danger">{{ $errors->first('commentaire') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                <textarea required  class="form-control @error('description') is-invalid @enderror" name="description" rows="3"
                                                          placeholder="Décrivez ce que votre avis en quelques mots...">{{(old('description'))}}</textarea>
                                                    <div class="col-12">
                                                        @if($errors->has('description'))
                                                            <div class="error text-xs text-danger">{{ $errors->first('description') }}</div>
                                                        @endif
                                                    </div>
                                                    <div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" value="Envoyer mon avis"
                                                            class="btn btn-primary mt-4 btn-block d-block text-white">

                                                    </input>
                                                </div>
                                                </div>

                                                {{ Form::close() }}
                                            </div>
                                            <div class="mb-10">
                                                <div class="d-flex justify-content-between align-items-center mb-8">
                                                    <div>
                                                        <!-- heading -->
                                                        <h4>Avis</h4>
                                                    </div>
                                                    <div>
                                                        <select class="form-select">
                                                            <option selected value="nc">Note croissant</option>
                                                            <option value="nc">Note décroissant</option>
                                                            <option value="1">au moins 1 étoile</option>
                                                            <option value="2">au moins 2 étoiles</option>
                                                            <option value="3">au moins 3 étoiles</option>
                                                            <option value="4">au moins 4 étoiles</option>
                                                            <option value="5">au moins 5 étoiles</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                @isset($avis)
                                                    @forelse($avis as $avi)

                                                        <div class="d-flex border-bottom pb-6 mb-6">
                                                        <!-- img -->
                                                        <!-- img --><img
                                                            src="{{asset($avi->getPhoto())}}"
                                                            alt=""
                                                            class="rounded-circle avatar-lg">
                                                        <div class="ms-5">
                                                            <h6 class="mb-1">
                                                                {{$avi->pseudo}}

                                                            </h6>
                                                            <!-- select option -->
                                                            <!-- content -->
                                                            <p class="small"><span
                                                                    class="text-muted">{{ \Carbon\Carbon::parse($avi->created_at)->translatedFormat('d F Y à H\hi') }}</span>
                                                                <span
                                                                    class="text-primary ms-3 fw-bold">{{$avi->status}}</span>
                                                            </p>
                                                            <!-- rating -->
                                                            <div class=" mb-2">
                                                                @for($i=1;$i<=5;$i++)
                                                                    @if($i<=intval($avi->note))
                                                                    <i class="bi bi-star-fill text-warning"></i>
                                                                    @else
                                                                        <i class="bi bi-star text-warning"></i>
                                                                        @endif
                                                                @endfor


                                                                <span class="ms-3 text-dark fw-bold">{{$avi->commentaire}}</span>
                                                            </div>
                                                            <!-- text-->
                                                            <p> {{nl2br($avi->description)}}</p>
                                                            <div>
                                                                <div class="border icon-shape icon-lg border-2 ">
                                                                    <!-- img --><img
                                                                        src="{{asset('storage/assets/images/products/product-img-1.jpg')}}"
                                                                        alt=""
                                                                        class="img-fluid ">
                                                                </div>
                                                                <div class="border icon-shape icon-lg border-2 ms-1 ">
                                                                    <!-- img --><img
                                                                        src="{{asset('storage/assets/images/products/product-img-2.jpg')}}"
                                                                        alt=""
                                                                        class="img-fluid ">
                                                                </div>
                                                                <div class="border icon-shape icon-lg border-2 ms-1 ">
                                                                    <!-- img --><img
                                                                        src="{{asset('storage/assets/images/products/product-img-3.jpg')}}"
                                                                        alt=""
                                                                        class="img-fluid ">
                                                                </div>

                                                            </div>
                                                            <!-- icon -->
                                                            <div class="d-flex justify-content-end mt-4">
                                                                <a href="#" class="text-muted"><i
                                                                        class="feather-icon icon-thumbs-up me-1"></i>Helpful</a>
                                                                <a href="#" class="text-muted ms-4"><i
                                                                        class="feather-icon icon-flag me-2"></i>Report
                                                                    abuse</a>
                                                            </div>
                                                        </div>
                                            </div>

                                        @empty
                                                        <div class="p-4 text-center">Aucun avis pour le moment !</div>
                                                    @endforelse
                                                @endisset
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{$avis->links()}}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- tab pane -->
                            <div class="tab-pane fade" id="sellerInfo-tab-pane" role="tabpanel"
                                 aria-labelledby="sellerInfo-tab"
                                 tabindex="0">...
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <!-- section -->
        <section class="my-lg-14 my-14">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <!-- heading -->
                        <h3>Produits associés</h3>
                    </div>
                </div>
                <!-- row -->
                <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-2 mt-2">
                    <!-- col -->
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <!-- badge -->

                                <div class="text-center position-relative ">
                                    <div class=" position-absolute top-0 start-0">
                                        <span class="badge bg-danger">Sale</span>
                                    </div>
                                    <a href="{{url('/')}}">
                                        <!-- img --><img
                                            src="{{asset('storage/assets/images/products/product-img-1.jpg')}}"
                                            alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                        <a href="{{url('/')}}" class="btn-action" data-bs-toggle="modal"
                                           data-bs-target="#quickViewModal"><i
                                                class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                                title="Quick View"></i></a>
                                        <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                           data-bs-html="true"
                                           title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="{{url('/')}}" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Compare"><i
                                                class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <!-- heading -->
                                <div class="text-small mb-1"><a href="{{url('/')}}"
                                                                class="text-decoration-none text-muted"><small>Snack &
                                            Munchies</small></a></div>
                                <h2 class="fs-6"><a href="{{url('/')}}" class="text-inherit text-decoration-none">Haldiram's Sev
                                        Bhujia</a></h2>
                                <div>

                                    <!-- rating --> <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small> <span
                                        class="text-muted small">4.5(149)</span>
                                </div>
                                <!-- price -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">$18</span> <span
                                            class="text-decoration-line-through text-muted">$24</span>
                                    </div>
                                    <!-- btn -->
                                    <div><a href="{{url('/')}}" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round"
                                                 class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                            Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <!-- badge -->
                                <div class="text-center position-relative"><a href="{{url('/')}}"><img
                                            src="{{asset('storage/assets/images/products/product-img-2.jpg')}}"
                                            alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                        <a href="{{url('/')}}" class="btn-action" data-bs-toggle="modal"
                                           data-bs-target="#quickViewModal"><i
                                                class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                                title="Quick View"></i></a>
                                        <a href="{{url('/')}}" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Wishlist"><i
                                                class="bi bi-heart"></i></a>
                                        <a href="{{url('/')}}" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Compare"><i
                                                class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <!-- heading -->
                                <div class="text-small mb-1"><a href="{{url('/')}}"
                                                                class="text-decoration-none text-muted"><small>Bakery &
                                            Biscuits</small></a></div>
                                <h2 class="fs-6"><a href="{{url('/')}}" class="text-inherit text-decoration-none">NutriChoice
                                        Digestive </a></h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small> <span
                                        class="text-muted small">4.5 (25)</span>
                                </div>
                                <!-- price -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">$24</span>
                                    </div>
                                    <!-- btn -->
                                    <div><a href="{{url('/')}}" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round"
                                                 class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                            Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <!-- badge -->
                                <div class="text-center position-relative"><a href="{{url('/')}}"><img
                                            src="{{asset('storage/assets/images/products/product-img-3.jpg')}}"
                                            alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                        <a href="{{url('/')}}" class="btn-action" data-bs-toggle="modal"
                                           data-bs-target="#quickViewModal"><i
                                                class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                                title="Quick View"></i></a>
                                        <a href="{{url('/')}}" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Wishlist"><i
                                                class="bi bi-heart"></i></a>
                                        <a href="{{url('/')}}" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Compare"><i
                                                class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <!-- heading -->
                                <div class="text-small mb-1"><a href="{{url('/')}}"
                                                                class="text-decoration-none text-muted"><small>Bakery &
                                            Biscuits</small></a></div>
                                <h2 class="fs-6"><a href="{{url('/')}}" class="text-inherit text-decoration-none">Cadbury 5 Star
                                        Chocolate</a></h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i></small> <span
                                        class="text-muted small">5 (469)</span>
                                </div>
                                <!-- price -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">$32</span> <span
                                            class="text-decoration-line-through text-muted">$35</span>
                                    </div>
                                    <!-- btn -->
                                    <div><a href="{{url('/')}}" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round"
                                                 class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                            Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <!-- badge -->
                                <div class="text-center position-relative"><a href="{{url('/')}}"><img
                                            src="{{asset('storage/assets/images/products/product-img-4.jpg')}}"
                                            alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                        <a href="{{url('/')}}" class="btn-action" data-bs-toggle="modal"
                                           data-bs-target="#quickViewModal"><i
                                                class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                                title="Quick View"></i></a>
                                        <a href="{{url('/')}}" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Wishlist"><i
                                                class="bi bi-heart"></i></a>
                                        <a href="{{url('/')}}" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Compare"><i
                                                class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <!-- heading -->
                                <div class="text-small mb-1"><a href="{{url('/')}}"
                                                                class="text-decoration-none text-muted"><small>Snack &
                                            Munchies</small></a></div>
                                <h2 class="fs-6"><a href="{{url('/')}}" class="text-inherit text-decoration-none">Onion Flavour
                                        Potato</a></h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <i class="bi bi-star"></i></small> <span
                                        class="text-muted small">3.5 (456)</span>
                                </div>
                                <!-- price -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">$3</span> <span
                                            class="text-decoration-line-through text-muted">$5</span>
                                    </div>
                                    <!-- btn -->
                                    <div><a href="{{url('/')}}" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round"
                                                 class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                            Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <!-- badge -->
                                <div class="text-center position-relative"><a href="{{url('/')}}"><img
                                            src="{{asset('storage/assets/images/products/product-img-9.jpg')}}"
                                            alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                        <a href="{{url('/')}}" class="btn-action" data-bs-toggle="modal"
                                           data-bs-target="#quickViewModal"><i
                                                class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                                title="Quick View"></i></a>
                                        <a href="{{url('/')}}" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Wishlist"><i
                                                class="bi bi-heart"></i></a>
                                        <a href="{{url('/')}}" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Compare"><i
                                                class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <!-- heading -->
                                <div class="text-small mb-1"><a href="{{url('/')}}"
                                                                class="text-decoration-none text-muted"><small>Snack &
                                            Munchies</small></a></div>
                                <h2 class="fs-6"><a href="{{url('/')}}" class="text-inherit text-decoration-none">Slurrp Millet
                                        Chocolate </a></h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small> <span
                                        class="text-muted small">4.5 (67)</span>
                                </div>
                                <!-- price -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">$6</span> <span
                                            class="text-decoration-line-through text-muted">$10</span>
                                    </div>
                                    <!-- btn -->
                                    <div><a href="{{url('/')}}" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round"
                                                 class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                            Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- Footer -->
    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4 py-4">
                <div class="col-12 col-md-12 col-lg-4">
                    <h6 class="mb-4">Categories</h6>
                    <div class="row">
                        <div class="col-6">
                            <!-- list -->
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Vegetables & Fruits</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link"> Breakfast & instant food</a>
                                </li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link"> Bakery & Biscuits</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Atta, rice & dal</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Sauces & spreads</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Organic & gourmet</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link"> Baby care</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Cleaning essentials</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Personal care</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <!-- list -->
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Dairy, bread & eggs</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link"> Cold drinks & juices</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link"> Tea, coffee & drinks</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Masala, oil & more</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Chicken, meat & fish</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Paan corner</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link"> Pharma & wellness</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Home & office</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Pet care</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="row g-4">
                        <div class="col-6 col-sm-6 col-md-3">
                            <h6 class="mb-4">Get to know us</h6>
                            <!-- list -->
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Company</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">About</a></li>
                                <li class="nav-item mb-2"><a href="#1" class="nav-link">Blog</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Help Center</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Our Value</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3">
                            <h6 class="mb-4">For Consumers</h6>
                            <ul class="nav flex-column">
                                <!-- list -->
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Payments</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Shipping</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Product Returns</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">FAQ</a></li>
                                <li class="nav-item mb-2"><a href="shop-checkout.html" class="nav-link">Shop
                                        Checkout</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3">
                            <h6 class="mb-4">Become a Shopper</h6>
                            <ul class="nav flex-column">
                                <!-- list -->
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Shopper Opportunities</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Become a Shopper</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Earnings</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Ideas & Guides</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">New Retailers</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3">
                            <h6 class="mb-4">Freshcart programs</h6>
                            <ul class="nav flex-column">
                                <!-- list -->
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Freshcart programs</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Gift Cards</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Promos & Coupons</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Freshcart Ads</a></li>
                                <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top py-4">
                <div class="row align-items-center">
                    <div class="col-lg-5 text-lg-start text-center mb-2 mb-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item text-dark">Payment Partners</li>
                            <li class="list-inline-item">
                                <a href="{{url('/')}}"><img src="{{asset('storage/assets/images/payment/amazonpay.svg')}}" alt=""></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{url('/')}}"><img src="{{asset('storage/assets/images/payment/american-express.svg')}}"
                                                  alt=""></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{url('/')}}"><img src="{{asset('storage/assets/images/payment/mastercard.svg')}}"
                                                  alt=""></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{url('/')}}"><img src="{{asset('storage/assets/images/payment/paypal.svg')}}"
                                                  alt=""></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{url('/')}}"><img src="{{asset('storage/assets/images/payment/visa.svg')}}" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-7 mt-4 mt-md-0">
                        <ul class="list-inline mb-0 text-lg-end text-center">
                            <li class="list-inline-item mb-2 mb-md-0 text-dark">Get deliveries with FreshCart</li>
                            <li class="list-inline-item ms-4">
                                <a href="{{url('/')}}"> <img src="{{asset('storage/assets/images/appbutton/appstore-btn.svg')}}"
                                                   alt=""
                                                   style="width: 140px;"></a></li>
                            <li class="list-inline-item">
                                <a href="{{url('/')}}"> <img src="{{asset('storage/assets/images/appbutton/googleplay-btn.svg')}}"
                                                   alt=""
                                                   style="width: 140px;"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="border-top py-4">
                <div class="row align-items-center">
                    <div class="col-md-6"><span class="small text-muted">Copyright 2023 © FreshCart eCommerce HTML Template.  All rights reserved. Powered by <a
                                href="https://codescandy.com/">Codescandy</a>.</span></div>
                    <div class="col-md-6">
                        <ul class="list-inline text-md-end mb-0 small mt-3 mt-md-0">
                            <li class="list-inline-item text-muted">Follow us on</li>
                            <li class="list-inline-item me-1">
                                <a href="{{url('/')}}" class="btn btn-xs btn-social btn-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                    </svg>
                                </a></li>
                            <li class="list-inline-item me-1">
                                <a href="{{url('/')}}" class="btn btn-xs btn-social btn-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path
                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                    </svg>
                                </a></li>
                            <li class="list-inline-item">
                                <a href="{{url('/')}}" class="btn btn-xs btn-social btn-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                    </svg>
                                </a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- modal -->
    <!-- Modal -->
    <div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-8">
                    <div class="position-absolute top-0 end-0 me-3 mt-3">
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- img slide -->
                            <div class="product productModal" id="productModal">
                                <div
                                    class="zoom"
                                    onmousemove="zoom(event)"
                                    style="
                  background-image: url({{asset('storage/assets/images/products/product-single-img-1.jpg')}});
                "
                                >
                                    <!-- img -->
                                    <img
                                        src="{{asset('storage/assets/images/products/product-single-img-1.jpg')}}"
                                        alt=""
                                    >
                                </div>
                                <div>
                                    <div
                                        class="zoom"
                                        onmousemove="zoom(event)"
                                        style="
                    background-image: url({{asset('storage/assets/images/products/product-single-img-2.jpg')}});
                  "
                                    >
                                        <!-- img -->
                                        <img
                                            src="{{asset('storage/assets/images/products/product-single-img-2.jpg')}}"
                                            alt=""
                                        >
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="zoom"
                                        onmousemove="zoom(event)"
                                        style="
                    background-image: url({{asset('storage/assets/images/products/product-single-img-3.jpg')}});
                  "
                                    >
                                        <!-- img -->
                                        <img
                                            src="{{asset('storage/assets/images/products/product-single-img-3.jpg')}}"
                                            alt=""
                                        >
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="zoom"
                                        onmousemove="zoom(event)"
                                        style="
                    background-image: url({{asset('storage/assets/images/products/product-single-img-4.jpg')}});
                  "
                                    >
                                        <!-- img -->
                                        <img
                                            src="{{asset('storage/assets/images/products/product-single-img-4.jpg')}}"
                                            alt=""
                                        >
                                    </div>
                                </div>
                            </div>
                            <!-- product tools -->
                            <div class="product-tools">
                                <div class="thumbnails row g-3" id="productModalThumbnails">
                                    <div class="col-3" class="tns-nav-active">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img
                                                src="{{asset('storage/assets/images/products/product-single-img-1.jpg')}}"
                                                alt=""
                                            >
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img
                                                src="{{asset('storage/assets/images/products/product-single-img-2.jpg')}}"
                                                alt=""
                                            >
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img
                                                src="{{asset('storage/assets/images/products/product-single-img-3.jpg')}}"
                                                alt=""
                                            >
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img
                                                src="{{asset('storage/assets/images/products/product-single-img-4.jpg')}}"
                                                alt=""
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ps-lg-8 mt-6 mt-lg-0">
                                <a href="{{url('/')}}" class="mb-4 d-block">Bakery Biscuits</a>
                                <h2 class="mb-1 h1">Napolitanke Ljesnjak</h2>
                                <div class="mb-4">
                                    <small class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small
                                    ><a href="#" class="ms-2">(30 reviews)</a>
                                </div>
                                <div class="fs-4">
                                    <span class="fw-bold text-dark">$32</span>
                                    <span class="text-decoration-line-through text-muted">$35</span
                                    ><span
                                    ><small class="fs-6 ms-2 text-danger">26% Off</small></span
                                    >
                                </div>
                                <hr class="my-6">
                                <div class="mb-4">
                                    <button type="button" class="btn btn-outline-secondary">
                                        250g
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary">
                                        500g
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary">
                                        1kg
                                    </button>
                                </div>
                                <div>
                                    <!-- input -->
                                    <!-- input -->
                                    <div class="input-group input-spinner  ">
                                        <input type="button" value="-" class="button-minus  btn  btn-sm "
                                               data-field="quantity">
                                        <input type="number" step="1" max="10" value="1" name="quantity"
                                               class="quantity-field form-control-sm form-input   ">
                                        <input type="button" value="+" class="button-plus btn btn-sm "
                                               data-field="quantity">
                                    </div>
                                </div>
                                <div
                                    class="mt-3 row justify-content-start g-2 align-items-center"
                                >

                                    <div class="col-lg-4 col-md-5 col-6 d-grid">
                                        <!-- button -->
                                        <!-- btn -->
                                        <button type="button" class="btn btn-primary">
                                            <i class="feather-icon icon-shopping-bag me-2"></i>Ajouter au panier
                                        </button>
                                    </div>
                                    <div class="col-md-4 col-5">
                                        <!-- btn -->
                                        <a
                                            class="btn btn-light"
                                            href="#"
                                            data-bs-toggle="tooltip"
                                            data-bs-html="true"
                                            aria-label="Compare"
                                        ><i class="bi bi-arrow-left-right"></i
                                            ></a>
                                        <a
                                            class="btn btn-light"
                                            href="{{url('/')}}"
                                            data-bs-toggle="tooltip"
                                            data-bs-html="true"
                                            aria-label="Wishlist"
                                        ><i class="feather-icon icon-heart"></i
                                            ></a>
                                    </div>
                                </div>
                                <hr class="my-6">
                                <div>
                                    <table class="table table-borderless">
                                        <tbody>
                                        <tr>
                                            <td>Product Code:</td>
                                            <td>FBB00255</td>
                                        </tr>
                                        <tr>
                                            <td>Availability:</td>
                                            <td>In Stock</td>
                                        </tr>
                                        <tr>
                                            <td>Type:</td>
                                            <td>Fruits</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping:</td>
                                            <td>
                                                <small
                                                >01 day shipping.<span class="text-muted"
                                                    >( Free pickup today)</span
                                                    ></small
                                                >
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
