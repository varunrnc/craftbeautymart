@extends('layouts.master')
@section('title', 'Craft Beauty Mart | Product Details')

@section('page-css')
<style>
    .slideshow-items {
        width: 500px;
    }

    .slideshow-thumbnails {
        width: 100px;
    }

    #slideshow-items-container {
        display: inline-block;
        position: relative;
    }

    #lens {
        background-color: rgba(233, 233, 233, 0.4);
    }

    #lens,
    #result {
        position: absolute;
        display: none;
        z-index: 1;
    }

    .slideshow-items {
        display: none;
    }

    .slideshow-items.active {
        display: block;
    }

    .slideshow-thumbnails {
        opacity: 0.5;
    }

    .slideshow-thumbnails.active {
        opacity: 1;
    }

    #lens,
    .slideshow-items,
    .slideshow-thumbnails,
    #result {
        border: solid var(--light-grey-2) 1px;
    }
</style>
@endsection

@section('main-content')

<section class="my-3">
    <div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Craft Beauty Mart</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house-door"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Products Details</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div id="lens"></div>

        <div class="card">
            <div class="row g-0">
                <div class="col-md-4 text-center border-end">
                    <div id="slideshow-items-container">
                        <img class="slideshow-items active" src="{{ asset('public/assets/images/product-imgs/lg/lanoome.jpg') }}" class="img-fluid" alt="item img" style="width: 350px;" />
                        <img class="slideshow-items" src="{{ asset('public/assets/images/product-imgs/lg/eltamd.jpg') }}" class="img-fluid" alt="item img" style="width: 350px;" />
                        <img class="slideshow-items" src="{{ asset('public/assets/images/product-imgs/lg/lanoome.jpg') }}" class="img-fluid" alt="item img" style="width: 350px;" />
                    </div>

                    <div id="result"></div>

                    <div class="row ">
                    <img class="slideshow-thumbnails active" src="{{ asset('public/assets/images/product-imgs/lanoome.jpg') }}" width="70" class="border rounded cursor-pointer" alt="img" />
                    <img class="slideshow-thumbnails" src="{{ asset('public/assets/images/product-imgs/eltamd.jpg') }}" width="70" class="border rounded cursor-pointer" alt="img" />
                    <img class="slideshow-thumbnails" src="{{ asset('public/assets/images/product-imgs/lanoome.jpg') }}" width="70" class="border rounded cursor-pointer" alt="img" />
                        
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title">Tonique Confort Toner 50ml/1.69oz</h4>
                        <div class="d-flex gap-3 py-3">
                            <div class="cursor-pointer">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star text-secondary"></i>
                            </div>
                            <div>142 reviews</div>
                            <div class="text-success"><i class="bi bi-cart-check-fill"></i> 134 orders</div>
                        </div>
                        <div class="mb-3">
                            <span class="price h4"> $5.87</span>
                            <span class="text-muted">/per kg</span>
                            <span class="font-22 text-danger"><del>$7.13</del></span>
                        </div>
                        <p class="card-text fs-6">- A moisturizing & soothing facial toner</p>
                        <dl class="row">
                            <dt class="col-sm-3">Category</dt>
                            <dd class="col-sm-9">Lanoome</dd>

                            <dt class="col-sm-3">Brand</dt>
                            <dd class="col-sm-9">EltaMD</dd>

                            {{-- <dt class="col-sm-3">Delivery</dt>
                                <dd class="col-sm-9">Russia, USA, and Europe </dd> --}}
                        </dl>
                        <hr>
                        <div class="row row-cols-auto row-cols-1 row-cols-md-3 align-items-center">
                            <div class="col">
                                <label class="form-label">Quantity</label>
                                <div class="input-group input-spinner">
                                    <button class="btn btn-white" type="button" id="button-plus"> + </button>
                                    <input type="text" class="form-control" value="1">
                                    <button class="btn btn-white" type="button" id="button-minus"> − </button>
                                </div>
                            </div>
                            {{-- <div class="col">
                                    <label class="form-label">Select size</label>
                                    <div class="">
                                        <label class="form-check form-check-inline">
                                            <input type="radio"class="form-check-input" name="select_size" checked=""
                                                class="custom-control-input">
                                            <div class="form-check-label">Small</div>
                                        </label>
                                        <label class="form-check form-check-inline">
                                            <input type="radio"class="form-check-input" name="select_size" checked=""
                                                class="custom-control-input">
                                            <div class="form-check-label">Medium</div>
                                        </label>

                                        <label class="form-check form-check-inline">
                                            <input type="radio"class="form-check-input" name="select_size" checked=""
                                                class="custom-control-input">
                                            <div class="form-check-label">Large</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <label class="form-label">Select Color</label>
                                    <div class="color-indigators d-flex align-items-center gap-2">
                                        <div class="color-indigator-item bg-primary"></div>
                                        <div class="color-indigator-item bg-danger"></div>
                                        <div class="color-indigator-item bg-success"></div>
                                        <div class="color-indigator-item bg-warning"></div>
                                    </div>
                                </div> --}}
                        </div>
                        <div class="d-flex gap-3 mt-3">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <a href="#" class="btn btn-outline-primary"><span class="text">Add to cart</span>
                                <i class='bx bxs-cart-alt'></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="card-body">
                <ul class="nav nav-tabs nav-primary mb-0" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-comment-detail font-18 me-1'></i>
                                </div>
                                <div class="tab-title"> Product Description </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-bookmark-alt font-18 me-1'></i>
                                </div>
                                <div class="tab-title">Tags</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-star font-18 me-1'></i>
                                </div>
                                <div class="tab-title">Reviews</div>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content pt-3">
                    <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                        <ul>
                            <li>- A moisturizing & soothing facial toner</li>
                            <li>- Silky-soft milky pink lotion texture instantly comforts skin</li>
                            <li>- Gently removes traces of makeup & impurities</li>
                            <li>- Enriched with Sweet Almond Oil & Acacia Honey to hydrate & soothe dry skin</li>
                            <li>- Leaves skin soft, pure, clear & fresh</li>
                            <li>- Dermatologically-tested & non-comedogenic</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="primaryprofile" role="tabpanel">
                        <p></p>
                    </div>
                    <div class="tab-pane fade" id="primarycontact" role="tabpanel">
                        <p></p>
                    </div>
                </div>
            </div>

        </div>


        

        {{-- related products  --}}

        <h6 class="text-uppercase mb-0 my-4">Related Product</h6>
        <hr />
        <div class="row">
            <div class="top-specials">
                <div class="top-item owl-carousel">

                    <div class="item m-2">
                        <div class="card">
                            <div class="product-card p-2">
                                <div class="img-box">
                                    <a href="{{ route('product.view') }}">
                                        <img src="{{ asset('public/assets/images/product-imgs/product.jpg') }}" alt="product" class="img-fluid product-item-img">
                                    </a>
                                </div>
                                <div>
                                    <div class="position-absolute top-0 end-0 m-3 ">
                                        <span class=""><i class="bi bi-heart font-26"></i></span>
                                    </div>
                                    <div class="position-absolute top-0 start-0">
                                        <p class="text-white p-1 bg-danger"><strong>12%</strong> Off</p>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="d-flex align-items-center mt-3 rating">
                                        <div class="cursor-pointer mx-auto">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star text-secondary"></i>
                                        </div>
                                    </div>
                                    <small>UN Jardin</small>
                                    <a href="{{ route('product.view') }}" class="product-title">
                                        <p>UnJardin Sur Le Nil Hermes Perfume - a fragrance...</p>
                                    </a>
                                    <div class="clearfix">
                                        <p class="mb-0 float-start">
                                            <span class="me-2 text-decoration-line-through text-danger font-mb-12">$35.47
                                            </span>
                                            <span class="fw-bold font-18 font-mb-14 text-head">$30.24
                                            </span>
                                        </p>
                                    </div>
                                    <div class="text-center my-2">
                                        <button class="addtocart">
                                            <div class="pretext">
                                                <i class="bi bi-cart-plus-fill"></i> ADD TO CART
                                            </div>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item m-2">
                        <div class="card">
                            <div class="product-card p-2">
                                <div class="img-box">
                                    <a href="{{ route('product.view') }}">
                                        <img src="{{ asset('public/assets/images/product-imgs/peter.jpg') }}" alt="product" class="img-fluid product-item-img">
                                    </a>
                                </div>
                                <div>
                                    <div class="position-absolute top-0 end-0 m-3 ">
                                        <span class=""><i class="bi bi-heart font-26"></i></span>
                                    </div>
                                    <div class="position-absolute top-0 start-0">
                                        <p class="text-white p-1 bg-danger"><strong>12%</strong> Off</p>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="d-flex align-items-center mt-3 rating">
                                        <div class="cursor-pointer mx-auto">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star text-secondary"></i>
                                        </div>
                                    </div>
                                    <small>Peter Thomas Roth</small>
                                    <a href="{{ route('product.view') }}" class="product-title">
                                        <p>Peter Thomas Roth Instant Firmx Temporary Eye...</p>
                                    </a>
                                    <div class="clearfix">
                                        <p class="mb-0 float-start">
                                            <span class="me-2 text-decoration-line-through text-danger font-mb-12">$65.48
                                            </span>
                                            <span class="fw-bold font-18 font-mb-14 text-head">$57.25
                                            </span>
                                        </p>
                                    </div>
                                    <div class="text-center my-2">
                                        <button class="addtocart">
                                            <div class="pretext">
                                                <i class="bi bi-cart-plus-fill"></i> ADD TO CART
                                            </div>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="item m-2">
                        <div class="card">
                            <div class="product-card p-2">
                                <div class="img-box">
                                    <a href="{{ route('product.view') }}">
                                        <img src="{{ asset('public/assets/images/product-imgs/estee2.jpg') }}" alt="product" class="img-fluid product-item-img">
                                    </a>
                                </div>
                                <div>
                                    <div class="position-absolute top-0 end-0 m-3 ">
                                        <span class=""><i class="bi bi-heart font-26"></i></span>
                                    </div>
                                    <div class="position-absolute top-0 start-0">
                                        <p class="text-white p-1 bg-danger"><strong>15%</strong> Off</p>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="d-flex align-items-center mt-3 rating">
                                        <div class="cursor-pointer mx-auto">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star text-secondary"></i>
                                        </div>
                                    </div>
                                    <small>Estee Lauder</small>
                                    <a href="{{ route('product.view') }}" class="product-title">
                                        <p>Age Smart MultiVitamin Power Recovery...</p>
                                    </a>
                                    <div class="clearfix">
                                        <p class="mb-0 float-start">
                                            <span class="me-2 text-decoration-line-through text-danger font-mb-12">$45.29
                                            </span>
                                            <span class="fw-bold font-18 font-mb-14 text-head">$38.10
                                            </span>
                                        </p>
                                    </div>
                                    <div class="text-center my-2">
                                        <button class="addtocart">
                                            <div class="pretext">
                                                <i class="bi bi-cart-plus-fill"></i> ADD TO CART
                                            </div>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item m-2">
                        <div class="card">
                            <div class="product-card p-2">
                                <div class="img-box">
                                    <a href="{{ route('product.view') }}">
                                        <img src="{{ asset('public/assets/images/product-imgs/lanoome.jpg') }}" alt="product" class="img-fluid product-item-img">
                                    </a>
                                </div>
                                <div>
                                    <div class="position-absolute top-0 end-0 m-3 ">
                                        <span class=""><i class="bi bi-heart font-26"></i></span>
                                    </div>
                                    <div class="position-absolute top-0 start-0">
                                        <p class="text-white p-1 bg-danger">Popular</p>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="d-flex align-items-center mt-3 rating">
                                        <div class="cursor-pointer mx-auto">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star text-secondary"></i>
                                        </div>
                                    </div>
                                    <small>Lanoome</small>
                                    <a href="{{ route('product.view') }}" class="product-title">
                                        <p>Tonique Confort Toner 50ml/1.69oz</p>
                                    </a>
                                    <div class="clearfix">
                                        <p class="mb-0 float-start">
                                            <span class="me-2 text-decoration-line-through text-danger font-mb-12">$7.13
                                            </span>
                                            <span class="fw-bold font-18 font-mb-14 text-head">$5.87
                                            </span>
                                        </p>
                                    </div>
                                    <div class="text-center my-2">
                                        <button class="addtocart">
                                            <div class="pretext">
                                                <i class="bi bi-cart-plus-fill"></i> ADD TO CART
                                            </div>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="item m-2">
                        <div class="card">
                            <div class="product-card p-2">
                                <div class="img-box">
                                    <a href="{{ route('product.view') }}">
                                        <img src="{{ asset('public/assets/images/product-imgs/estee.jpg') }}" alt="product" class="img-fluid product-item-img">
                                    </a>
                                </div>
                                <div>
                                    <div class="position-absolute top-0 end-0 m-3 ">
                                        <span class=""><i class="bi bi-heart font-26"></i></span>
                                    </div>
                                    <div class="position-absolute top-0 start-0">
                                        <p class="text-white p-1 bg-danger">Recommended</p>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="d-flex align-items-center mt-3 rating">
                                        <div class="cursor-pointer mx-auto">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star text-secondary"></i>
                                        </div>
                                    </div>
                                    <small>Estee Lauder</small>
                                    <a href="{{ route('product.view') }}" class="product-title">
                                        <p>Advanced Night Repair Synchronized Multi...</p>
                                    </a>
                                    <div class="clearfix">
                                        <p class="mb-0 float-start">
                                            <span class="me-2 text-decoration-line-through text-danger font-mb-12">$13.00
                                            </span>
                                            <span class="fw-bold font-18 font-mb-14 text-head">$10.15
                                            </span>
                                        </p>
                                    </div>
                                    <div class="text-center my-2">
                                        <button class="addtocart">
                                            <div class="pretext">
                                                <i class="bi bi-cart-plus-fill"></i> ADD TO CART
                                            </div>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@section('page-script')
<script>
    $(document).ready(function() {
        $(".slideshow-thumbnails").hover(function() {
            changeSlide($(this));
        });

        $(document).mousemove(function(e) {
            var x = e.clientX;
            var y = e.clientY;

            var x = e.clientX;
            var y = e.clientY;

            var imgx1 = $(".slideshow-items.active").offset().left;
            var imgx2 = $(".slideshow-items.active").outerWidth() + imgx1;
            var imgy1 = $(".slideshow-items.active").offset().top;
            var imgy2 = $(".slideshow-items.active").outerHeight() + imgy1;

            if (x > imgx1 && x < imgx2 && y > imgy1 && y < imgy2) {
                $("#lens").show();
                $("#result").show();
                imageZoom($(".slideshow-items.active"), $("#result"), $("#lens"));
            } else {
                $("#lens").hide();
                $("#result").hide();
            }
        });
    });

    function imageZoom(img, result, lens) {
        result.width(img.innerWidth());
        result.height(img.innerHeight());
        lens.width(img.innerWidth() / 2);
        lens.height(img.innerHeight() / 2);

        result.offset({
            top: img.offset().top,
            left: img.offset().left + img.outerWidth() + 10,
        });

        var cx = img.innerWidth() / lens.innerWidth();
        var cy = img.innerHeight() / lens.innerHeight();

        result.css("backgroundImage", "url(" + img.attr("src") + ")");
        result.css(
            "backgroundSize",
            img.width() * cx + "px " + img.height() * cy + "px"
        );

        lens.mousemove(function(e) {
            moveLens(e);
        });
        img.mousemove(function(e) {
            moveLens(e);
        });
        lens.on("touchmove", function() {
            moveLens();
        });
        img.on("touchmove", function() {
            moveLens();
        });

        function moveLens(e) {
            var x = e.clientX - lens.outerWidth() / 2;
            var y = e.clientY - lens.outerHeight() / 2;
            if (x > img.outerWidth() + img.offset().left - lens.outerWidth()) {
                x = img.outerWidth() + img.offset().left - lens.outerWidth();
            }
            if (x < img.offset().left) {
                x = img.offset().left;
            }
            if (y > img.outerHeight() + img.offset().top - lens.outerHeight()) {
                y = img.outerHeight() + img.offset().top - lens.outerHeight();
            }
            if (y < img.offset().top) {
                y = img.offset().top;
            }
            lens.offset({
                top: y,
                left: x
            });
            result.css(
                "backgroundPosition",
                "-" +
                (x - img.offset().left) * cx +
                "px -" +
                (y - img.offset().top) * cy +
                "px"
            );
        }
    }

    function changeSlide(elm) {
        $(".slideshow-items").removeClass("active");
        $(".slideshow-items").eq(elm.index()).addClass("active");
        $(".slideshow-thumbnails").removeClass("active");
        $(".slideshow-thumbnails").eq(elm.index()).addClass("active");
    }
</script>
@endsection