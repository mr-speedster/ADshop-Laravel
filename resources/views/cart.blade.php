@extends('layout.main')

@section('main')
    <!-- start #main-site -->
    <main id="main-site">
        <!-- Shopping cart section  -->
        <section id="cart" class="py-3">
            <div class="container-fluid w-75">
                <h5 class="font-baloo font-size-20">Shopping Cart</h5>

                <!--  shopping cart items   -->
                <div class="row">
                    <div class="col-sm-9">
                        <!-- cart item -->
                        @foreach ($cartProducts as $cartProduct)
                            <div class="row border-top py-3 mt-3">
                                <div class="col-sm-2">
                                    <a href="/product/{{ $cartProduct->product_id }}"><img
                                            src="{{ $cartProduct->cart_image }}" style="height: 120px;"
                                            alt="cart1" class="img-fluid"></a>

                                </div>
                                <div class="col-sm-8">
                                    <h5 class="font-baloo font-size-20">{{ $cartProduct->product_name }}</h5>

                                    <!-- product rating -->
                                    <div class="d-flex">
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                    </div>
                                    <!--  !product rating-->
                                    <a href="/delete/cart/{{ $cartProduct->id }}">Delete</a>
                                </div>
                                <div class="col-sm-2 text-right">
                                    <div class="font-size-20 text-danger font-baloo">
                                        $<span class="product_price">{{ $cartProduct->price }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- !cart item -->
                    </div>
                    <!-- subtotal section-->
                    <div class="col-sm-3">
                        <div class="sub-total border text-center mt-2">
                            <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order
                                is eligible for FREE Delivery.</h6>
                            <div class="border-top py-4">
                                <h5 class="font-baloo font-size-20">Subtotal (2 item):&nbsp; <span
                                        class="text-danger">$<span class="text-danger" id="deal-price">152.00</span>
                                    </span> </h5>
                                <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                            </div>
                        </div>
                    </div>
                    <!-- !subtotal section-->
                </div>
                <!--  !shopping cart items   -->
            </div>
        </section>
        <!-- !Shopping cart section  -->

        <!-- New Phones -->
        <section id="new-phones">
            <div class="container py-5">
                <h4 class="font-rubik font-size-20">New Phones</h4>
                <hr>

                <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/1.png" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy 10</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/2.png" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Readme Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/3.png" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Readme Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/6.png" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy 10</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="/assets/products/1.png" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Readme Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="/assets/products/1.png" class="img-fluid" alt="pro1"></a>
                                <div class="text-center">
                                    <h6>Readme Note 7</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$122</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="/assets/products/2.png" class="img-fluid" alt="pro1"></a>
                                <div class="text-center">
                                    <h6>Readme Note 7</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$122</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- !owl carousel -->

            </div>
        </section>
        <!-- !New Phones -->

    </main>
    <!-- !start #main-site -->
@endsection
