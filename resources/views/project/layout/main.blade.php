@include('project.layout.navbar')
{{-- @include('project.layout.body') --}}
<section class="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 custom-padding-right">
                <div class="slider-head">
                    <div class="hero-slider">
                        <div class="single-slider" style="
                  background-image: url({{asset('pro')}}/images/hero/slider-bg1.jpg);
                ">
                            <div class="content">
                                <h2>
                                    <span>No restocking fee ($35 savings)</span>
                                    M75 Sport Watch
                                </h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur elit, sed do
                                    eiusmod tempor incididunt ut labore dolore magna aliqua.
                                </p>
                                <h3><span>Now Only</span> $320.99</h3>
                                <div class="button">
                                    <a href="{{route('grid')}}" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="single-slider" style="
                  background-image: url({{asset('pro')}}/images/hero/slider-bg2.jpg);
                ">
                            <div class="content">
                                <h2>
                                    <span>Big Sale Offer</span>
                                    Get the Best Deal on CCTV Camera
                                </h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur elit, sed do
                                    eiusmod tempor incididunt ut labore dolore magna aliqua.
                                </p>
                                <h3><span>Combo Only:</span> $590.00</h3>
                                <div class="button">
                                    <a href="{{route('grid')}}" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-12 md-custom-padding">
                        <div class="hero-small-banner" style="
                  background-image: url('{{asset('pro')}}/images/hero/slider-bnr.jpg');
                ">
                            <div class="content">
                                <h2>
                                    <span>New line required</span>
                                    iPhone 12 Pro Max
                                </h2>
                                <h3>$259.99</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="hero-small-banner style2">
                            <div class="content">
                                <h2>Weekly Sale!</h2>
                                <p>
                                    Saving up to 50% off all online store items this week.
                                </p>
                                <div class="button">
                                    <a class="btn" href="{{route('grid')}}">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="featured-categories section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Featured Categories</h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-category">
                    <h3 class="heading">TV & Audios</h3>
                    <ul>
                        <li><a href="{{route('grid')}}">Smart Television</a></li>
                        <li><a href="{{route('grid')}}">QLED TV</a></li>
                        <li><a href="{{route('grid')}}">Audios</a></li>
                        <li><a href="{{route('grid')}}">Headphones</a></li>
                        <li><a href="{{route('grid')}}">View All</a></li>
                    </ul>
                    <div class="images">
                        <img src="{{asset('pro')}}/images/featured-categories/fetured-item-1.png" alt="#" />
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-category">
                    <h3 class="heading">Desktop & Laptop</h3>
                    <ul>
                        <li><a href="{{route('grid')}}">Smart Television</a></li>
                        <li><a href="{{route('grid')}}">QLED TV</a></li>
                        <li><a href="{{route('grid')}}">Audios</a></li>
                        <li><a href="{{route('grid')}}">Headphones</a></li>
                        <li><a href="{{route('grid')}}">View All</a></li>
                    </ul>
                    <div class="images">
                        <img src="{{asset('pro')}}/images/featured-categories/fetured-item-2.png" alt="#" />
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-category">
                    <h3 class="heading">Cctv Camera</h3>
                    <ul>
                        <li><a href="{{route('grid')}}">Smart Television</a></li>
                        <li><a href="{{route('grid')}}">QLED TV</a></li>
                        <li><a href="{{route('grid')}}">Audios</a></li>
                        <li><a href="{{route('grid')}}">Headphones</a></li>
                        <li><a href="{{route('grid')}}">View All</a></li>
                    </ul>
                    <div class="images">
                        <img src="{{asset('pro')}}/images/featured-categories/fetured-item-3.png" alt="#" />
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-category">
                    <h3 class="heading">Dslr Camera</h3>
                    <ul>
                        <li><a href="{{route('grid')}}">Smart Television</a></li>
                        <li><a href="{{route('grid')}}">QLED TV</a></li>
                        <li><a href="{{route('grid')}}">Audios</a></li>
                        <li><a href="{{route('grid')}}">Headphones</a></li>
                        <li><a href="{{route('grid')}}">View All</a></li>
                    </ul>
                    <div class="images">
                        <img src="{{asset('pro')}}/images/featured-categories/fetured-item-4.png" alt="#" />
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-category">
                    <h3 class="heading">Smart Phones</h3>
                    <ul>
                        <li><a href="{{route('grid')}}">Smart Television</a></li>
                        <li><a href="{{route('grid')}}">QLED TV</a></li>
                        <li><a href="{{route('grid')}}">Audios</a></li>
                        <li><a href="{{route('grid')}}">Headphones</a></li>
                        <li><a href="{{route('grid')}}">View All</a></li>
                    </ul>
                    <div class="images">
                        <img src="{{asset('pro')}}/images/featured-categories/fetured-item-5.png" alt="#" />
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-category">
                    <h3 class="heading">Game Console</h3>
                    <ul>
                        <li><a href="{{route('grid')}}">Smart Television</a></li>
                        <li><a href="{{route('grid')}}">QLED TV</a></li>
                        <li><a href="{{route('grid')}}">Audios</a></li>
                        <li><a href="{{route('grid')}}">Headphones</a></li>
                        <li><a href="{{route('grid')}}">View All</a></li>
                    </ul>
                    <div class="images">
                        <img src="{{asset('pro')}}/images/featured-categories/fetured-item-6.png" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="trending-product section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Trending Product</h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">

            @forelse ($product as $value )
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-product">
                    <div class="product-image">

                        @if($value->image->first())
                        <img src="{{ asset('storage/images/' . $value->image->first()->image) }}" alt="">
                        @endif
                        <div class="button ">
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
                            <a href="{{route('grid')}}">{{ $value->name }}</a>
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
                            <span>{{ $value->price }}</span>
                        </div>

                    </div>
                </div>
            </div>
            @empty
            <p>No product found</p>
            @endforelse


            {{ $product->links() }}
        </div>
    </div>
</section>

<section class="banner section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="single-banner" style="
              background-image: url('{{asset('pro')}}/images/banner/banner-1-bg.jpg');
            ">
                    <div class="content">
                        <h2>Smart Watch 2.0</h2>
                        <p>
                            Space Gray Aluminum Case with <br />Black/Volt Real Sport Band
                        </p>
                        <div class="button">
                            <a href="{{route('grid')}}" class="btn">View details.index</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="single-banner custom-responsive-margin" style="
              background-image: url('{{asset('pro')}}/images/banner/banner-2-bg.jpg');
            ">
                    <div class="content">
                        <h2>Smart Headphone</h2>
                        <p>
                            Lorem ipsum dolor sit amet, <br />eiusmod tempor incididunt ut
                            labore.
                        </p>
                        <div class="button">
                            <a href="{{route('grid')}}" class="btn">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="trending-product section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Special Offer</h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">

            @forelse ( $offer as $value)
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-product">
                    <div class="product-image">

                        @if($value->offer_image->first())
                        <img src="{{ asset('storage/image_offer/' . $value->offer_image->first()->image) }}" alt="">
                        @endif
                        <div class="button ">
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
                            <a href="{{route('grid')}}">{{ $value->name }}</a>
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
                            <span>{{ $value->price }}</span>
                        </div>

                    </div>
                </div>
            </div>
            @empty

            @endforelse


            {{-- {{ $offer->links() }} --}}
        </div>
    </div>
</section>

<section class="home-product-list section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
                <h4 class="list-title">Best Sellers</h4>

                <div class="single-list">
                    <div class="list-image">
                        <a href="{{route('grid')}}"><img src="{{asset('pro')}}/images/home-product-list/01.jpg" alt="#" /></a>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="{{route('grid')}}">GoPro Hero4 Silver</a>
                        </h3>
                        <span>$287.99</span>
                    </div>
                </div>

                <div class="single-list">
                    <div class="list-image">
                        <a href="{{route('grid')}}"><img src="{{asset('pro')}}/images/home-product-list/02.jpg" alt="#" /></a>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="{{route('grid')}}">Puro Sound Labs BT2200</a>
                        </h3>
                        <span>$95.00</span>
                    </div>
                </div>

                <div class="single-list">
                    <div class="list-image">
                        <a href="{{route('grid')}}"><img src="{{asset('pro')}}/images/home-product-list/03.jpg" alt="#" /></a>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="{{route('grid')}}">HP OfficeJet Pro 8710</a>
                        </h3>
                        <span>$120.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
                <h4 class="list-title">New Arrivals</h4>

                <div class="single-list">
                    <div class="list-image">
                        <a href="{{route('grid')}}"><img src="{{asset('pro')}}/images/home-product-list/04.jpg" alt="#" /></a>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="{{route('grid')}}">iPhone X 256 GB Space Gray</a>
                        </h3>
                        <span>$1150.00</span>
                    </div>
                </div>

                <div class="single-list">
                    <div class="list-image">
                        <a href="{{route('grid')}}"><img src="{{asset('pro')}}/images/home-product-list/05.jpg" alt="#" /></a>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="{{route('grid')}}">Canon EOS M50 Mirrorless Camera</a>
                        </h3>
                        <span>$950.00</span>
                    </div>
                </div>

                <div class="single-list">
                    <div class="list-image">
                        <a href="{{route('grid')}}"><img src="{{asset('pro')}}/images/home-product-list/06.jpg" alt="#" /></a>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="{{route('grid')}}">Microsoft Xbox One S</a>
                        </h3>
                        <span>$298.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <h4 class="list-title">Top Rated</h4>

                <div class="single-list">
                    <div class="list-image">
                        <a href="{{route('grid')}}"><img src="{{asset('pro')}}/images/home-product-list/07.jpg" alt="#" /></a>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="{{route('grid')}}">Samsung Gear 360 VR Camera</a>
                        </h3>
                        <span>$68.00</span>
                    </div>
                </div>

                <div class="single-list">
                    <div class="list-image">
                        <a href="{{route('grid')}}"><img src="{{asset('pro')}}/images/home-product-list/08.jpg" alt="#" /></a>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="{{route('grid')}}">Samsung Galaxy S9+ 64 GB</a>
                        </h3>
                        <span>$840.00</span>
                    </div>
                </div>

                <div class="single-list">
                    <div class="list-image">
                        <a href="{{route('grid')}}"><img src="{{asset('pro')}}/images/home-product-list/09.jpg" alt="#" /></a>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="{{route('grid')}}">Zeus Bluetooth Headphones</a>
                        </h3>
                        <span>$28.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="brands">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                <h2 class="title">Popular Brands</h2>
            </div>
        </div>
        <div class="brands-logo-wrapper">
            <div class="brands-logo-carousel d-flex align-items-center justify-content-between">
                <div class="brand-logo">
                    <img src="{{asset('pro')}}/images/brands/01.png" alt="#" />
                </div>
                <div class="brand-logo">
                    <img src="{{asset('pro')}}/images/brands/02.png" alt="#" />
                </div>
                <div class="brand-logo">
                    <img src="{{asset('pro')}}/images/brands/03.png" alt="#" />
                </div>
                <div class="brand-logo">
                    <img src="{{asset('pro')}}/images/brands/04.png" alt="#" />
                </div>
                <div class="brand-logo">
                    <img src="{{asset('pro')}}/images/brands/05.png" alt="#" />
                </div>
                <div class="brand-logo">
                    <img src="{{asset('pro')}}/images/brands/06.png" alt="#" />
                </div>
                <div class="brand-logo">
                    <img src="{{asset('pro')}}/images/brands/03.png" alt="#" />
                </div>
                <div class="brand-logo">
                    <img src="{{asset('pro')}}/images/brands/04.png" alt="#" />
                </div>
            </div>
        </div>
    </div>
</div>

<section class="blog-section section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Our Latest News</h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="blog-single-sidebar.html">
                            <img src="{{asset('pro')}}/images/blog/blog-1.jpg" alt="#" />
                        </a>
                    </div>
                    <div class="blog-content">
                        <a class="category" href="javascript:void(0)">eCommerce</a>
                        <h4>
                            <a href="blog-single-sidebar.html">What information is needed for shipping?</a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt.
                        </p>
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="blog-single-sidebar.html">
                            <img src="{{asset('pro')}}/images/blog/blog-2.jpg" alt="#" />
                        </a>
                    </div>
                    <div class="blog-content">
                        <a class="category" href="javascript:void(0)">Gaming</a>
                        <h4>
                            <a href="blog-single-sidebar.html">Interesting fact about gaming consoles</a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt.
                        </p>
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="blog-single-sidebar.html">
                            <img src="{{asset('pro')}}/images/blog/blog-3.jpg" alt="#" />
                        </a>
                    </div>
                    <div class="blog-content">
                        <a class="category" href="javascript:void(0)">Electronic</a>
                        <h4>
                            <a href="blog-single-sidebar.html">Electronics, instrumentation & control engineering
                            </a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt.
                        </p>
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="shipping-info">
    <div class="container">
        <ul>
            <li>
                <div class="media-icon">
                    <i class="lni lni-delivery"></i>
                </div>
                <div class="media-body">
                    <h5>Free Shipping</h5>
                    <span>On order over $99</span>
                </div>
            </li>

            <li>
                <div class="media-icon">
                    <i class="lni lni-support"></i>
                </div>
                <div class="media-body">
                    <h5>24/7 Support.</h5>
                    <span>Live Chat Or Call.</span>
                </div>
            </li>

            <li>
                <div class="media-icon">
                    <i class="lni lni-credit-cards"></i>
                </div>
                <div class="media-body">
                    <h5>Online Payment.</h5>
                    <span>Secure Payment Services.</span>
                </div>
            </li>

            <li>
                <div class="media-icon">
                    <i class="lni lni-reload"></i>
                </div>
                <div class="media-body">
                    <h5>Easy Return.</h5>
                    <span>Hassle Free Shopping.</span>
                </div>
            </li>
        </ul>
    </div>
</section>
@include('project.layout.footer')
