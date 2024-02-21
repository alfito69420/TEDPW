@extends('layouts.groceries')

@section('main_content')
    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0"
                style="background-image: url(' {{ asset('assets/img/bg-header.jpg') }} ');">
                <div class="container">
                    <h1 class="pt-5">
                        {{ $products->name }}
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>
                </div>
            </div>
        </div>
        <div class="product-detail">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="slider-zoom">
                            <a href="assets/img/meats.jpg" class="cloud-zoom"
                                rel="transparentImage: 'data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==', useWrapper: false, showTitle: false, zoomWidth:'500', zoomHeight:'500', adjustY:0, adjustX:10"
                                id="cloudZoom">
                                <img alt="Detail Zoom thumbs image" src="{{ asset('assets/img/meats.jpg') }}"
                                    style="width: 100%;">
                            </a>
                        </div>

                        <div class="slider-thumbnail">
                            <ul class="d-flex flex-wrap p-0 list-unstyled">
                                <li>
                                    <a href="assets/img/meats.jpg"
                                        rel="gallerySwitchOnMouseOver: true, popupWin:'assets/img/meats.jpg', useZoom: 'cloudZoom', smallImage: 'assets/img/meats.jpg'"
                                        class="cloud-zoom-gallery">
                                        <img itemprop="image" src="assets/img/meats.jpg" style="width:135px;">
                                    </a>
                                </li>
                                <li>
                                    <a href="assets/img/fish.jpg"
                                        rel="gallerySwitchOnMouseOver: true, popupWin:'assets/img/fish.jpg', useZoom: 'cloudZoom', smallImage: 'assets/img/fish.jpg'"
                                        class="cloud-zoom-gallery">
                                        <img itemprop="image" src="assets/img/fish.jpg" style="width:135px;">
                                    </a>
                                </li>
                                <li>
                                    <a href="assets/img/vegetables.jpg"
                                        rel="gallerySwitchOnMouseOver: true, popupWin:'assets/img/vegetables.jpg', useZoom: 'cloudZoom', smallImage: 'assets/img/vegetables.jpg'"
                                        class="cloud-zoom-gallery">
                                        <img itemprop="image" src="assets/img/vegetables.jpg" style="width:135px;">
                                    </a>
                                </li>
                                <li>
                                    <a href="assets/img/frozen.jpg"
                                        rel="gallerySwitchOnMouseOver: true, popupWin:'assets/img/frozen.jpg', useZoom: 'cloudZoom', smallImage: 'assets/img/frozen.jpg'"
                                        class="cloud-zoom-gallery">
                                        <img itemprop="image" src="assets/img/frozen.jpg" style="width:135px;">
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <p>
                            <strong>Overview</strong><br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <div class="row">
                            <div class="col-sm-6">
                                <p>
                                    <strong>Price</strong> (/Pack)<br>
                                    <span class="price">Rp 100.000</span>
                                    <span class="old-price">Rp 150.000</span>
                                </p>
                            </div>
                            <div class="col-sm-6 text-right">
                                <p>
                                    <span class="stock available">In Stock: 99</span>
                                </p>
                            </div>
                        </div>
                        <p class="mb-1">
                            <strong>Quantity</strong>
                        </p>
                        <div class="row">
                            <div class="col-sm-5">
                                <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-primary"
                                    data-bts-button-up-class="btn btn-primary" value="" name="vertical-spin">
                            </div>
                            <div class="col-sm-6"><span class="pt-1 d-inline-block">Pack (250 gram)</span></div>
                        </div>

                        <button class="mt-3 btn btn-primary btn-lg">
                            <i class="fa fa-shopping-basket"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <section id="related-product">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Related Products</h2>
                        <div class="product-carousel owl-carousel">
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until 2018
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="assets/img/meats.jpg" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="detail-product.html">Product Title</a>
                                        </h4>
                                        <div class="card-price">
                                            <span class="discount">Rp. 300.000</span>
                                            <span class="reguler">Rp. 200.000</span>
                                        </div>
                                        <a href="detail-product.html" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until 2018
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="assets/img/fish.jpg" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="detail-product.html">Product Title</a>
                                        </h4>
                                        <div class="card-price">
                                            <span class="discount">Rp. 300.000</span>
                                            <span class="reguler">Rp. 200.000</span>
                                        </div>
                                        <a href="detail-product.html" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until 2018
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="assets/img/vegetables.jpg" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="detail-product.html">Product Title</a>
                                        </h4>
                                        <div class="card-price">
                                            <span class="discount">Rp. 300.000</span>
                                            <span class="reguler">Rp. 200.000</span>
                                        </div>
                                        <a href="detail-product.html" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until 2018
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="assets/img/frozen.jpg" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="detail-product.html">Product Title</a>
                                        </h4>
                                        <div class="card-price">
                                            <span class="discount">Rp. 300.000</span>
                                            <span class="reguler">Rp. 200.000</span>
                                        </div>
                                        <a href="detail-product.html" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until 2018
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="assets/img/fruits.jpg" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="detail-product.html">Product Title</a>
                                        </h4>
                                        <div class="card-price">
                                            <span class="discount">Rp. 300.000</span>
                                            <span class="reguler">Rp. 200.000</span>
                                        </div>
                                        <a href="detail-product.html" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-0">
            <div class="contact1 mb-5">
                <div class="container">
                    <div class="row mt-3">
                        <div class="col-lg-7">
                            <div class="contact-wrapper">
                                <h3 class="title font-weight-normal mt-0 text-left">Deja un comentario</h3>

                                <form action="{{ route('comments.store') }}" data-aos="fade-left"
                                    data-aos-duration="1200" method="POST">

                                    @csrf

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="nombre" value="{{ old('nombre') }}" class="form-control"
                                                    rows="3" type="text" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <!--<div class="col-lg-6">
                                                <div class="form-group">
                                                    <input name="email" value="{{ old('email') }}" class="form-control"
                                                        type="email" placeholder="Email">
                                                </div>
                                            </div>-->
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea name="comentario" value="{{ old('comentario') }}" class="form-control" rows="3"
                                                    placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-right">
                                            <input type="hidden" name="product_id" value="{{ $products->id }}">
                                            <button type="submit" class="btn btn-lg btn-primary mb-5">Send</button>
                                        </div>
                                    </div>
                                </form>

                                @if (session()->get('success'))
                                    <div class="alert alert-success text-center">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    
        
        <section class="pb-0">
            <div class="contact1 mb-5">
                <div class="container">
                    <div class="row mt-3">
                        <div class="col-lg-7">
                            <div class="contact-wrapper">

                                <h3 class="title font-weight-normal mt-0 text-left">Comentarios</h3>

                                @foreach ($comments as $comment)
                                <div class="list-group">
                                    <a href="#"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">{{$comment->nombre}}</h5>
                                            <!--<small class="text-muted">3 days ago</small>-->
                                        </div>
                                        <p class="mb-1">{{$comment->comentario}}</p>
                                        <!--<small class="text-muted">Donec id elit non mi porta.</small>-->
                                    </a>
                                </div>
                                @endforeach

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        

    </div>
@endsection
