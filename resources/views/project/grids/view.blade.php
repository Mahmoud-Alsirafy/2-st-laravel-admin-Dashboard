@include('project.layout.navbar')

<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Shop Grid</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li>
                        <a href="{{ route('index') }}"><i class="lni lni-home"></i> Home</a>
                    </li>
                    <li><a href="javascript:void(0)">Shop</a></li>
                    <li>Shop Grid</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="product-grids section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="product-sidebar">
                    <div class="single-widget search">
                        <h3>Search Product</h3>
                        <form action="#">
                            <input type="text" placeholder="Search Here..." />
                            <button type="submit">
                                <i class="lni lni-search-alt"></i>
                            </button>
                        </form>
                    </div>

                    <div class="single-widget">
                        <h3>All Categories</h3>
                        <ul class="list">
                            <li>
                                <a href="{{ route('grid') }}">Computers & Accessories </a><span>(1138)</span>
                            </li>
                            <li>
                                <a href="{{ route('grid') }}">Smartphones & Tablets</a><span>(2356)</span>
                            </li>
                            <li>
                                <a href="{{ route('grid') }}">TV, Video & Audio</a><span>(420)</span>
                            </li>
                            <li>
                                <a href="{{ route('grid') }}">Cameras, Photo & Video</a><span>(874)</span>
                            </li>
                            <li>
                                <a href="{{ route('grid') }}">Headphones</a><span>(1239)</span>
                            </li>
                            <li>
                                <a href="{{ route('grid') }}">Wearable Electronics</a><span>(340)</span>
                            </li>
                            <li>
                                <a href="{{ route('grid') }}">Printers & Ink</a><span>(512)</span>
                            </li>
                        </ul>
                    </div>

                    <div class="single-widget range">
                        <h3>Price Range</h3>
                        <input type="range" class="form-range" name="range" step="1" min="100" max="10000" value="10" onchange="rangePrimary.value=value" />
                        <div class="range-inner">
                            <label>$</label>
                            <input type="text" id="rangePrimary" placeholder="100" />
                        </div>
                    </div>

                    <div class="single-widget condition">
                        <h3>Filter by Price</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" />
                            <label class="form-check-label" for="flexCheckDefault1">
                                $50 - $100L (208)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" />
                            <label class="form-check-label" for="flexCheckDefault2">
                                $100L - $500 (311)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" />
                            <label class="form-check-label" for="flexCheckDefault3">
                                $500 - $1,000 (485)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4" />
                            <label class="form-check-label" for="flexCheckDefault4">
                                $1,000 - $5,000 (213)
                            </label>
                        </div>
                    </div>

                    <div class="single-widget condition">
                        <h3>Filter by Brand</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11" />
                            <label class="form-check-label" for="flexCheckDefault11">
                                Apple (254)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault22" />
                            <label class="form-check-label" for="flexCheckDefault22">
                                Bosh (39)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault33" />
                            <label class="form-check-label" for="flexCheckDefault33">
                                Canon Inc. (128)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault44" />
                            <label class="form-check-label" for="flexCheckDefault44">
                                Dell (310)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault55" />
                            <label class="form-check-label" for="flexCheckDefault55">
                                Hewlett-Packard (42)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault66" />
                            <label class="form-check-label" for="flexCheckDefault66">
                                Hitachi (217)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault77" />
                            <label class="form-check-label" for="flexCheckDefault77">
                                LG Electronics (310)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault88" />
                            <label class="form-check-label" for="flexCheckDefault88">
                                Panasonic (74)
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-12">
                <div class="product-grids-head">
                    <div class="product-grid-topbar">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-8 col-12">
                                <div class="product-sorting">
                                    <label for="sorting">Sort by:</label>
                                    <select class="form-control" id="sorting">
                                        <option>Popularity</option>
                                        <option>Low - High Price</option>
                                        <option>High - Low Price</option>
                                        <option>Average Rating</option>
                                        <option>A - Z Order</option>
                                        <option>Z - A Order</option>
                                    </select>
                                    <h3 class="total-show-product">
                                        Showing: <span>1 - 12 items</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 col-12">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true">
                                            <i class="lni lni-grid-alt"></i>
                                        </button>
                                        <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false">
                                            <i class="lni lni-list"></i>
                                        </button>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                            <div class="row">
                                @forelse ( $product as $value )
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-product">
                                        <div class="product-image">
                                            @if($value->image->first())
                                            <img src="{{ asset('storage/images/' . $value->image->first()->image) }}" alt="">
                                            @endif
                                            <div class="button">
                                                <form action="{{ route('details.show',$value->id) }}" method="POST">
                                                    @csrf
                                                    @method('GET')
                                                    <button class="btn"> <i class="lni lni-cart"></i> Add to Cart</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <span class="category">{{ $value->cat }}</span>
                                            <h4 class="title">
                                                <a href="{{ route('grid') }}">{{ $value->name }}</a>
                                            </h4>
                                            <ul class="review">
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star"></i></li>
                                                <li><span>4.0 Review(s)</span></li>
                                            </ul>
                                            <div class="price">
                                                <span>${{ $value->price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="alert alert-warning text-center">
                                    <strong>NoProducts Found!</strong>
                                </div>
                                @endforelse


                                @forelse ( $offer as $value )
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-product">
                                        <div class="product-image">
                                            @if($value->offer_image->first())
                                            <img src="{{ asset('storage/image_offer/' . $value->offer_image->first()->image) }}" alt="">
                                            @endif
                                            <div class="button">
                                                <form action="{{ route('offer_Details.show',$value->id) }}" method="POST">
                                                    @csrf
                                                    @method('GET')
                                                    <button class="btn"> <i class="lni lni-cart"></i> Add to Cart</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <span class="category">{{ $value->cat }}</span>
                                            <h4 class="title">
                                                <a href="{{ route('grid') }}">{{ $value->name }}</a>
                                            </h4>
                                            <ul class="review">
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star"></i></li>
                                                <li><span>4.0 Review(s)</span></li>
                                            </ul>
                                            <div class="price">
                                                <span>${{ $value->price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="alert alert-warning text-center">
                                    <strong>NoProducts Found!</strong>
                                </div>
                                @endforelse

                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="pagination left">
                                        <ul class="pagination-list">
                                            <li><a href="javascript:void(0)">1</a></li>
                                            <li class="active">
                                                <a href="javascript:void(0)">2</a>
                                            </li>
                                            <li><a href="javascript:void(0)">3</a></li>
                                            <li><a href="javascript:void(0)">4</a></li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="{{asset('pro')}}/images/products/product-1.jpg" alt="#" />
                                                    <div class="button">
                                                        <a href="{{ route('details.index') }}" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Watches</span>
                                                    <h4 class="title">
                                                        <a href="{{ route('grid') }}">Xiaomi Mi Band 5</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star"></i></li>
                                                        <li><span>4.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>$199.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="{{asset('pro')}}/images/products/product-2.jpg" alt="#" />
                                                    <span class="sale-tag">-25%</span>
                                                    <div class="button">
                                                        <a href="{{ route('details.index') }}" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Speaker</span>
                                                    <h4 class="title">
                                                        <a href="{{ route('grid') }}">Big Power Sound Speaker</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><span>5.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>$275.00</span>
                                                        <span class="discount-price">$300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="{{asset('pro')}}/images/products/product-3.jpg" alt="#" />
                                                    <div class="button">
                                                        <a href="{{ route('details.index') }}" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Camera</span>
                                                    <h4 class="title">
                                                        <a href="{{ route('grid') }}">WiFi Security Camera</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><span>5.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>$399.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="{{asset('pro')}}/images/products/product-4.jpg" alt="#" />
                                                    <span class="new-tag">New</span>
                                                    <div class="button">
                                                        <a href="{{ route('details.index') }}" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Phones</span>
                                                    <h4 class="title">
                                                        <a href="{{ route('grid') }}">iphone 6x plus</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><span>5.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>$400.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="{{asset('pro')}}/images/products/product-7.jpg" alt="#" />
                                                    <span class="sale-tag">-50%</span>
                                                    <div class="button">
                                                        <a href="{{ route('details.index') }}" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Headphones</span>
                                                    <h4 class="title">
                                                        <a href="{{ route('grid') }}">PX7 Wireless Headphones</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star"></i></li>
                                                        <li><span>4.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>$100.00</span>
                                                        <span class="discount-price">$200.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="pagination left">
                                        <ul class="pagination-list">
                                            <li><a href="javascript:void(0)">1</a></li>
                                            <li class="active">
                                                <a href="javascript:void(0)">2</a>
                                            </li>
                                            <li><a href="javascript:void(0)">3</a></li>
                                            <li><a href="javascript:void(0)">4</a></li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                                            </li>
                                        </ul>
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


@include('project.layout.footer')
