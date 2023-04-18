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
                            <h1 class="mb-1">Napolitanke </h1>
                            <div class="mb-4">
                                <!-- rating -->
                                <!-- rating --> <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i></small><a href="#" class="ms-2">(30 avis)</a>
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
                                <button class="nav-link active" id="avis-tab" data-bs-toggle="tab"
                                        data-bs-target="#avis-tab-pane" type="button" role="tab"
                                        aria-controls="avis-tab-pane"
                                        aria-selected="true">avis
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
                            <div class="tab-pane fade  show active" id="avis-tab-pane" role="tabpanel"
                                 aria-labelledby="avis-tab" tabindex="0">
                                <div class="my-8">
                                    <!-- row -->
                                    <div class="row" >
                                        <div class="col-md-4">
                                            <div class="me-lg-12 mb-6 mb-md-0">

                                                <div class="mb-5">
                                                    <!-- title -->

                                                    <span>
                          <!-- rating --> {!!  Helper::displayStar($moyenne)!!}
                                                        <span class="ms-3">{{isset($moyenne)?$moyenne:0}} sur 5</span><small
                                                            class="ms-3 badge bg-secondary">{{$nb_avis}} avis au total</small></span>
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
                                                                     style="width: {{$p_nb_avis5}}%;"
                                                                     aria-valuenow="{{$p_nb_avis5}}" aria-valuemin="0"
                                                                     aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted ms-3">{{$p_nb_avis5}}%</span>
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
                                                                     style="width: {{$p_nb_avis4}}%;"
                                                                     aria-valuenow="{{$p_nb_avis4}}" aria-valuemin="0"
                                                                     aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted ms-3">{{$p_nb_avis4}}%</span>
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
                                                                     style="width: {{$p_nb_avis3}}%;"
                                                                     aria-valuenow="{{$p_nb_avis3}}" aria-valuemin="0"
                                                                     aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted ms-3">{{$p_nb_avis3}}%</span>
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
                                                                     style="width: {{$p_nb_avis2}}%;"
                                                                     aria-valuenow="{{$p_nb_avis2}}" aria-valuemin="0"
                                                                     aria-valuemax="{{$p_nb_avis2}}"></div>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted ms-3">{{$p_nb_avis2}}%</span>
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
                                                                     style="width: {{$p_nb_avis1}}%;"
                                                                     aria-valuenow="{{$p_nb_avis1}}" aria-valuemin="0"
                                                                     aria-valuemax="{{$p_nb_avis1}}"></div>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted ms-3">{{$p_nb_avis1}}%</span>
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
                                                    <div class="col-md-4">
                                                        <!-- heading -->
                                                        <h4>Avis</h4>
                                                    </div>
                                                    <div class="col-md-5 text-sm text-muted text-end">{{$msg??$msg}}</div>
                                                    <div >

                                                        <form action="{{url('')}}" method="GET">
                                                            <input type="hidden" name="page" value="{{Request::get('page')>1?Request::get('page'):1}}">

                                                            <select name="orderby" class="form-select" onchange="this.form.submit()">
                                                            <option value="date_asc" @selected($keyword=="date_asc")>Date croissant</option>
                                                            <option value="date_desc" @selected($keyword=="date_desc")>Date décroissant</option>
                                                            <option  value="star_asc" @selected($keyword=="star_asc")>Note croissant</option>
                                                            <option value="star_desc" @selected($keyword=="star_desc")>Note décroissant</option>

                                                            <option value="1" @selected($keyword=="1")> 1 étoile</option>
                                                            <option value="2" @selected($keyword=="2")> 2 étoiles</option>
                                                            <option value="3" @selected($keyword=="3")> 3 étoiles</option>
                                                            <option value="4" @selected($keyword=="4")> 4 étoiles</option>
                                                            <option value="5" @selected($keyword=="5")> 5 étoiles</option>
                                                        </select>
                                                        </form>
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
                                                                {!!  Helper::displayStar($avi->note)!!}


                                                                <span class="ms-3 text-dark fw-bold">{{$avi->commentaire}}</span>
                                                            </div>
                                                            <!-- text-->
                                                            <p> {{($avi->description)}}</p>

                                                            <!-- icon -->
                                                            <div class="d-flex justify-content-end mt-4">
                                                                <a href="#" class="text-muted"><i
                                                                        class="feather-icon icon-thumbs-up mx-2"></i></a>
                                                                <a href="#" class="text-muted"><i
                                                                        class="feather-icon icon-thumbs-down mx-2"></i></a>

                                                            </div>
                                                        </div>
                                            </div>

                                        @empty
                                                        <div class="p-4 bg-light rounded-2 shadow-1 text-center">Aucun avis pour le moment !</div>
                                                    @endforelse
                                                @endisset
                                                <div class="row">
                                                    <div class="col-md-12 text-end">
                                                        {{$avis->withQueryString()->links() }}
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
                                                                class="text-decoration-none text-muted"><small>
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
                                <h2 class="mb-1 h1">Napolitanke </h2>
                                <div class="mb-4">
                                    <small class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small
                                    ><a href="#" class="ms-2">(30 avis)</a>
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
