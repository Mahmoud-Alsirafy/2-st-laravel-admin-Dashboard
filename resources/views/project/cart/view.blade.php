@include('project.layout.navbar')


<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Cart</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li>
                        <a href="{{ route('index') }}"><i class="lni lni-home"></i> Home</a>
                    </li>
                    <li><a href="{{ route('index') }}">Shop</a></li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="shopping-cart section">
    <div class="container">
        <div class="cart-list-head">
            <div class="cart-list-title">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-12"></div>
                    <div class="col-lg-4 col-md-3 col-12">
                        <p>Product Name</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Price</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Old Price</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Quantity</p>
                    </div>

                    <div class="col-lg-1 col-md-2 col-12">
                        <p>Remove</p>
                    </div>
                </div>
            </div>

            @php
                $total = 0;
                $totalDiscount = 0;
            @endphp

            @forelse ($carts as $item)
                @php
                    $data = $item->product ?? $item->offer;

                    $price = floatval($data->price);
                    $old_price = floatval($data->old_price ?? 0);
                    $quantity = intval($item->Quantity ?? 1);

                    $subtotal = $price * $quantity;
                    $discount = $old_price > $price ? ($old_price - $price) * $quantity : 0;

                    $total += $subtotal;
                    $totalDiscount += $discount;
                @endphp

                <div class="cart-single-list">
                    <div class="row align-items-center">
                        <div class="col-lg-1 col-md-1 col-12">
                            @if($item->product && $item->product->image->first())
                                <img src="{{ asset('storage/images/' . $item->product->image->first()->image) }}" alt="">
                            @elseif($item->offer && $item->offer->offer_image->first())
                                <img src="{{ asset('storage/image_offer/' . $item->offer->offer_image->first()->image) }}" alt="">
                            @endif
                        </div>
                        <div class="col-lg-4 col-md-3 col-12">
                            <h5 class="product-name">
                                {{ $data->name }}
                            </h5>
                            <p class="product-des">
                                <span><em>Type:</em> {{ $data->cat }}</span>
                                <span><em>Color:</em> Black</span>
                            </p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>$ {{ number_format($price, 2) }}</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            @if($old_price > 0)
                                <p>$ {{ number_format($old_price, 2) }}</p>
                            @else
                                <p>-</p>
                            @endif
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>{{ $item->Quantity }}</p>

                        </div>
                        <div class="col-lg-1 col-md-2 col-12">
                            <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="remove-item" style="border: none"><i class="lni lni-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-warning text-center">
                    <strong>Cart is empty!</strong>
                </div>
            @endforelse
        </div>

        <div class="row">
            <div class="col-12">
                <div class="total-amount">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-12">
                            <div class="left">
                                <div class="coupon">
                                    <form action="#" target="_blank">
                                        <input name="Coupon" placeholder="Enter Your Coupon" />
                                        <div class="button">
                                            <button class="btn">Apply Coupon</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="right">
                                <ul>
                                    <li>Cart Subtotal<span>${{ number_format($total, 2) }}</span></li>
                                    <li>Shipping<span>Free</span></li>
                                    <li>You Save<span>${{ number_format($totalDiscount, 2) }}</span></li>
                                    <li class="last">You Pay<span>${{ number_format($total - $totalDiscount, 2) }}</span></li>
                                </ul>

                                <div class="button">
                                    <a href="{{ route('checkout') }}" class="btn">Checkout</a>
                                    <a href="{{ route('grid') }}" class="btn btn-alt">Continue shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('project.layout.footer')
