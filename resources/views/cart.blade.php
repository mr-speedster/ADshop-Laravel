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
                                        <div class="row border-top py-3 mt-3">
                                            <div class="col-sm-2">
                                                <img src="../assets/products/1.png" style="height: 120px;" alt="cart1" class="img-fluid">
                                            </div>
                                            <div class="col-sm-8">
                                                <h5 class="font-baloo font-size-20">Samsung Galaxy 10</h5>
                                                <small>by Samsung</small>
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

                                                <!-- product qty -->
                                                    <div class="qty d-flex pt-2">
                                                        <div class="d-flex font-rale w-25">
                                                            <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                                            <input type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                                            <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                                        </div>
                                                        <button type="submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                                        <button type="submit" class="btn font-baloo text-danger">Save for Later</button>
                                                    </div>
                                                <!-- !product qty -->

                                            </div>

                                            <div class="col-sm-2 text-right">
                                                <div class="font-size-20 text-danger font-baloo">
                                                    $<span class="product_price">152</span>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- !cart item -->
                                    <!-- cart item -->
                                    <div class="row border-top py-3 mt-3">
                                        <div class="col-sm-2">
                                            <img src="../assets/products/2.png" style="height: 120px;" alt="cart1" class="img-fluid">
                                        </div>
                                        <div class="col-sm-8">
                                            <h5 class="font-baloo font-size-20">Samsung Galaxy 10</h5>
                                            <small>by Samsung</small>
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

                                            <!-- product qty -->
                                                <div class="qty d-flex pt-2">
                                                    <div class="d-flex font-rale w-25">
                                                        <button class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                                        <input type="text" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                                        <button class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                                    </div>
                                                    <button type="submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                                    <button type="submit" class="btn font-baloo text-danger">Save for Later</button>
                                                </div>
                                            <!-- !product qty -->

                                        </div>

                                        <div class="col-sm-2 text-right">
                                            <div class="font-size-20 text-danger font-baloo">
                                                $<span class="product_price">152</span>
                                            </div>
                                        </div>
                                    </div>
                                <!-- !cart item -->
                                </div>
                                <!-- subtotal section-->
                                <div class="col-sm-3">
                                    <div class="sub-total border text-center mt-2">
                                        <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                                        <div class="border-top py-4">
                                            <h5 class="font-baloo font-size-20">Subtotal (2 item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price">152.00</span> </span> </h5>
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
                              <a href="#"><img src="../assets/products/1.png" alt="product1" class="img-fluid"></a>
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
                              <a href="#"><img src="../assets/products/2.png" alt="product1" class="img-fluid"></a>
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
                              <a href="#"><img src="../assets/products/3.png" alt="product1" class="img-fluid"></a>
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
                              <a href="#"><img src="../assets/products/6.png" alt="product1" class="img-fluid"></a>
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
                              <a href="#"><img src="../assets/products/1.png" alt="product1" class="img-fluid"></a>
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
                                <a href="#"><img src="../assets/products/1.png" class="img-fluid" alt="pro1"></a>
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
                                <a href="#"><img src="../assets/products/2.png" class="img-fluid" alt="pro1"></a>
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

    <!-- start #footer -->
        <footer id="footer" class="bg-dark text-white py-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">Mobile Shopee</h4>
                <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
              </div>
              <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20">Newslatter</h4>
                <form class="form-row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Email *">
                  </div>
                  <div class="col">
                    <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                  </div>
                </form>
              </div>
              <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                </div>
              </div>
              <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <div class="copyright text-center bg-dark text-white py-2">
          <p class="font-rale font-size-14">&copy; Copyrights 2020. Desing By <a href="#" class="color-second">Daily Tuition</a></p>
        </div>
    <!-- !start #footer -->
@endsection