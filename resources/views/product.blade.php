@extends('layout.main')
@section('main')
    <!-- start #main-site -->
        <main id="main-site">

        <!--   product  -->
            <section id="product" class="py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="/assets/images/{{$clickId->image}}" alt="product" class="img-fluid">
                            <div class="form-row pt-4 font-size-16 font-baloo">
                                <div class="col">
                                    <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                                </div>
                                <div class="col">
                                    <form action="/cart" method="POST">
                                      @csrf
                                      <input type="hidden" name="productId" value="{{$clickId->id}}">
                                      <input type="hidden" name="productUser" value="{{session('user_email')}}">
                                      <button type="submit" class="btn btn-warning form-control">Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-5">
                            <h5 class="font-baloo font-size-20">{{$clickId->product_name}}</h5>
                            <div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                  </div>
                                  <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered questions</a>
                            </div>
                            <hr class="m-0">

                            <!---    product price       -->
                                <table class="my-3">
                                    <tr class="font-rale font-size-14">
                                        <td>M.R.P:</td>
                                        <td>{{$clickId->price}}</strike></td>
                                    </tr>
                                </table>
                            <!---    !product price       -->

                             <!--    #policy -->
                                <div id="policy">
                                    <div class="d-flex">
                                        <div class="return text-center mr-5">
                                            <div class="font-size-20 my-2 color-second">
                                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                            </div>
                                            <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                                        </div>
                                        <div class="return text-center mr-5">
                                            <div class="font-size-20 my-2 color-second">
                                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                                            </div>
                                            <a href="#" class="font-rale font-size-12">Daily Tuition <br>Deliverd</a>
                                        </div>
                                        <div class="return text-center mr-5">
                                            <div class="font-size-20 my-2 color-second">
                                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                            </div>
                                            <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                                        </div>
                                    </div>
                                </div>
                              <!--    !policy -->
                                <hr>

                            <!-- order-details -->
                                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                                    <small>Delivery by : Mar 29  - Apr 1</small>
                                    <small>Sold by <a href="#">Daily Electronics </a>(4.5 out of 5 | 18,198 ratings)</small>
                                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                                </div>
                             <!-- !order-details -->

                             <div class="row">
                                 <div class="col-6">
                                        <!-- color -->
                                            <div class="color my-3">
                                              <div class="d-flex justify-content-between">
                                                <h6 class="font-baloo">Color:</h6>
                                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                              </div>
                                            </div>
                                        <!-- !color -->
                                 </div>
                                 <div class="col-6">
                                   <!-- product qty section -->  
                                     <div class="qty d-flex">
                                         <h6 class="font-baloo">Qty</h6>
                                         <div class="px-4 d-flex font-rale">
                                             <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                             <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                             <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                         </div>
                                     </div>
                                    <!-- !product qty section -->  
                                 </div>
                             </div>

                            <!-- size -->
                                <div class="size my-3">
                                    <h6 class="font-baloo">Size :</h6>
                                    <div class="d-flex justify-content-between w-75">
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14">4GB RAM</button>
                                        </div>
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14">6GB RAM</button>
                                        </div>
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14">8GB RAM</button>
                                        </div>
                                    </div>
                                </div>
                            <!-- !size -->
                        </div>
                    </div>
                </div>
            </section>
        <!--   !product  -->


          <!-- Top Sale -->
          <section id="top-sale">
            <div class="container py-5">
              <h4 class="font-rubik font-size-20">Top Sale</h4>
              <hr>
              <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                  <div class="item py-2">
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
                  <div class="item py-2">
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
                  <div class="item py-2">
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
                  <div class="item py-2">
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
                  <div class="item py-2">
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
                  <div class="item py-2">
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
                  <div class="item py-2">
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
        <!-- !Top Sale -->

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