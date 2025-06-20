@include('project.layout.navbar')



<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Single Product</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li>
                        <a href="{{ route('index') }}"><i class="lni lni-home"></i> Home</a>
                    </li>
                    <li><a href="{{ route('index') }}">Shop</a></li>
                    <li>Single Product</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="item-details section">
    <div class="container">
        <div class="top-area">
            @if(isset($product))
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="product-images">
                        <main id="gallery">
                            <div class="main-img">
                                @if($product->image->first())
                                <img src="{{ asset('storage/images/' . $product->image->first()->image) }}" id="current" alt="">
                                @endif
                            </div>
                            <div class="images">
                                @foreach ($product->image as $value )
                                <img src="{{ asset('storage/images/' . $value->image) }}" class="img" alt="">

                                @endforeach
                            </div>
                        </main>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="product-info">
                        <h2 class="title">{{ $product->name }}</h2>
                        <p class="category">
                            <i class="lni lni-tag"></i> Drones:<a href="javascript:void(0)">Action cameras</a>
                        </p>
                        <h3 class="price">${{ $product->price }}
                            @if($product->old_price==null)

                            @else

                            <span>${{ $product->old_price }}</span>
                            @endif
                        </h3>
                        <p class="info-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>

                </div>
                <div class="bottom-content">
                    <div class="row align-items-end">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="button cart-button justify-content-center">
                                <form action="{{ route('cart.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="type" value="product">
                                    {{-- <input type="hidden" name="user_id" value="{{ auth()->id() }}"> --}}
                                    <select class="form-control" name="Quantity">
                                        @for($i = 1; $i <= $product->count; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                    </select>

                                    <button class="btn">
                                        <i class="lni lni-cart"></i> Add to Cart
                                    </button>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <p>no Product Selected</p>
    @endif

    </div>
    <div class="product-details-info">
        <div class="single-block">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="info-body custom-responsive-margin">
                        <h4>Details</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit
                            esse cillum dolore eu fugiat.
                        </p>
                        <h4>Features</h4>
                        <ul class="features">
                            <li>Capture 4K30 Video and 12MP Photos</li>
                            <li>Game-Style Controller with Touchscreen</li>
                            <li>View Live Camera Feed</li>
                            <li>Full Control of HERO6 Black</li>
                            <li>Use App for Dedicated Camera Operation</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="info-body">
                        <h4>Specifications</h4>
                        <ul class="normal-list">
                            <li><span>Weight:</span> 35.5oz (1006g)</li>
                            <li><span>Maximum Speed:</span> 35 mph (15 m/s)</li>
                            <li>
                                <span>Maximum Distance:</span> Up to 9,840ft (3,000m)
                            </li>
                            <li><span>Operating Frequency:</span> 2.4GHz</li>
                            <li><span>Manufacturer:</span> GoPro, USA</li>
                        </ul>
                        <h4>Shipping Options:</h4>
                        <ul class="normal-list">
                            <li><span>Courier:</span> 2 - 4 days, $22.50</li>
                            <li><span>Local Shipping:</span> up to one week, $10.00</li>
                            <li>
                                <span>UPS Ground Shipping:</span> 4 - 6 days, $18.00
                            </li>
                            <li>
                                <span>Unishop Global Export:</span> 3 - 4 days, $25.00
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="single-block give-review">
                    <h4>4.5 (Overall)</h4>
                    <ul>
                        <li>
                            <span>5 stars - 38</span>
                            <i class="lni lni-star-filled"></i>
                            <i class="lni lni-star-filled"></i>
                            <i class="lni lni-star-filled"></i>
                            <i class="lni lni-star-filled"></i>
                            <i class="lni lni-star-filled"></i>
                        </li>
                        <li>
                            <span>4 stars - 10</span>
                            <i class="lni lni-star-filled"></i>
                            <i class="lni lni-star-filled"></i>
                            <i class="lni lni-star-filled"></i>
                            <i class="lni lni-star-filled"></i>
                            <i class="lni lni-star"></i>
                        </li>
                        <li>
                            <span>3 stars - 3</span>
                            <i class="lni lni-star-filled"></i>
                            <i class="lni lni-star-filled"></i>
                            <i class="lni lni-star-filled"></i>
                            <i class="lni lni-star"></i>
                            <i class="lni lni-star"></i>
                        </li>
                        <li>
                            <span>2 stars - 1</span>
                            <i class="lni lni-star-filled"></i>
                            <i class="lni lni-star-filled"></i>
                            <i class="lni lni-star"></i>
                            <i class="lni lni-star"></i>
                            <i class="lni lni-star"></i>
                        </li>
                        <li>
                            <span>1 star - 0</span>
                            <i class="lni lni-star-filled"></i>
                            <i class="lni lni-star"></i>
                            <i class="lni lni-star"></i>
                            <i class="lni lni-star"></i>
                            <i class="lni lni-star"></i>
                        </li>
                    </ul>

                    <button type="button" class="btn review-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Leave a Review
                    </button>
                </div>
            </div>
            <div class="col-lg-8 col-12">
                <div class="single-block">
                    <div class="reviews">
                        <h4 class="title">Latest Reviews</h4>

                        <div class="single-review">
                            <img src="{{asset('pro')}}/images/blog/comment1.jpg" alt="#" />
                            <div class="review-info">
                                <h4>
                                    Awesome quality for the price
                                    <span>Jacob Hammond </span>
                                </h4>
                                <ul class="stars">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                </ul>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor...
                                </p>
                            </div>
                        </div>

                        <div class="single-review">
                            <img src="{{asset('pro')}}/images/blog/comment2.jpg" alt="#" />
                            <div class="review-info">
                                <h4>
                                    My husband love his new...
                                    <span>Alex Jaza </span>
                                </h4>
                                <ul class="stars">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star"></i></li>
                                </ul>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor...
                                </p>
                            </div>
                        </div>

                        <div class="single-review">
                            <img src="{{asset('pro')}}/images/blog/comment3.jpg" alt="#" />
                            <div class="review-info">
                                <h4>
                                    I love the built quality...
                                    <span>Jacob Hammond </span>
                                </h4>
                                <ul class="stars">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                </ul>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<div class="modal fade review-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Leave a Review</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="review-name">Your Name</label>
                            <input class="form-control" type="text" id="review-name" required />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="review-email">Your Email</label>
                            <input class="form-control" type="email" id="review-email" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="review-subject">Subject</label>
                            <input class="form-control" type="text" id="review-subject" required />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="review-rating">Rating</label>
                            <select class="form-control" id="review-rating">
                                <option>5 Stars</option>
                                <option>4 Stars</option>
                                <option>3 Stars</option>
                                <option>2 Stars</option>
                                <option>1 Star</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="review-message">Review</label>
                    <textarea class="form-control" id="review-message" rows="8" required></textarea>
                </div>
            </div>
            <div class="modal-footer button">
                <button type="button" class="btn">Submit Review</button>
            </div>
        </div>
    </div>
</div>


@include('project.layout.footer')
