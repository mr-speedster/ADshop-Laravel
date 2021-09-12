@extends('layout.main')
@section('main')
    <!-- start #main-site -->
        <main id="main-site">

          <!-- Owl-carousel -->
            <section id="banner-area">
              <div class="owl-carousel owl-theme">
                  <div class="item">
                    <img src="../assets/Banner1.png" alt="Banner1">
                  </div>
                  <div class="item">
                    <img src="../assets/Banner2.jpg" alt="Banner2">
                  </div>
                  <div class="item">
                    <img src="../assets/Banner3.jpg" alt="Banner3">
                  </div>
              </div>
            </section>
          <!-- !Owl-carousel -->

          <!-- Top Sale -->
          <section id="top-sale">
            <div class="container py-5">
              <h4 class="font-rubik font-size-20">Top Sale</h4>
              <hr>
              <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                  <div class="item py-2 m-2">
                    <div class="product font-rale">
                      <a href="{{route('shop')}}#category"><img src="../assets/TopSale/C1.webp" alt="product1" class="img-fluid"></a>
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
                  <div class="item py-2 m-2">
                    <div class="product font-rale">
                      <a href="{{route('shop')}}#category"><img src="../assets/TopSale/J1.webp" alt="product1" class="img-fluid"></a>
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
                  <div class="item py-2 m-2">
                    <div class="product font-rale">
                      <a href="{{route('shop')}}#category"><img src="../assets/TopSale/K1.webp" alt="product1" class="img-fluid"></a>
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
                  <div class="item py-2 m-2">
                    <div class="product font-rale">
                      <a href="{{route('shop')}}#category"><img src="../assets/TopSale/KT1.webp" alt="product1" class="img-fluid"></a>
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
                  <div class="item py-2 m-2">
                    <div class="product font-rale">
                      <a href="{{route('shop')}}#category"><img src="../assets/TopSale/R1.webp" alt="product1" class="img-fluid"></a>
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
                  <div class="item py-2 m-2">
                    <div class="product font-rale">
                      <div class="d-flex flex-column">
                        <a href="{{route('shop')}}#category"><img  src="../assets/TopSale/S1.webp" class="img-fluid" alt="pro1"></a>
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
                  <div class="item py-2 m-2">
                    <div class="product font-rale">
                      <div class="d-flex flex-column">
                        <a href="{{route('shop')}}#category"><img  src="../assets/TopSale/T1.webp" class="img-fluid" alt="pro1"></a>
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

        <!-- Special Price -->
          <section id="category">
            <div class="container">
              <h4 class="font-rubik font-size-20">Category</h4>
              <div id="filters" class="button-group text-right font-baloo font-size-16">
                <button class="btn is-checked" data-filter="*">All Product</button>
                <button class="btn" data-filter=".Men">MEN</button>
                <button class="btn" data-filter=".Women">WOMEN</button>
                <button class="btn" data-filter=".Kid">KIDS</button>
              </div>

              <div class="grid">
                @foreach ($elements as $element)
                <div class="grid-item {{$element->key}} border">
                  <div class="item py-2" style="width: 200px;">
                   <div class="product font-rale">
                     <a href="/product/{{$element->id}}"><img src="/assets/images/{{$element->image}}" alt="" class="img-fluid"></a>
                     <div class="text-center">
                       <h6>{{$element->product_name}}</h6>
                       <div class="rating text-warning font-size-12">
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="far fa-star"></i></span>
                       </div>
                       <div class="price py-2">
                         <span>{{$element->price}}</span>
                       </div>
                       <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                     </div>
                   </div>
                 </div>
                 </div>
                @endforeach
              </div>
            </div>
          </section>
        <!-- !Special Price -->

          <!-- New Phones -
          <section id="new-phones">
            <div class="container">
              <h4 class="font-rubik font-size-20">New Phones</h4>
              <hr>

                     owl carousel 
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
                   !owl carousel 

            </div>
          </section>
           !New Phones -->
        </main>
    <!-- !start #main-site -->

    <!-- start #footer -->
        <footer id="footer" class="bg-dark text-white py-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">ADshop</h4>
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
          <p class="font-rale font-size-14">&copy; Copyrights 2021. Desing By <a href="http://ajith.lovestoblog.com/" class="color-second">Ajith D</a></p>
        </div>
    <!-- !start #footer -->
@endsection