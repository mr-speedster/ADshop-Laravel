@extends('layout.main')
@section('main')
    <!-- start #main-site -->
    <main id="main-site">

        <!-- Owl-carousel -->
        <section id="banner-area">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="/assets/Banner1.png" alt="Banner1">
                </div>
                <div class="item">
                    <img src="/assets/Banner2.jpg" alt="Banner2">
                </div>
                <div class="item">
                    <img src="/assets/Banner3.jpg" alt="Banner3">
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
                            <a href="{{ route('shop') }}#category"><img src="/assets/TopSale/C1.webp" alt="product1"
                                    class="img-fluid"></a>
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

                            </div>
                        </div>
                    </div>
                    <div class="item py-2 m-2">
                        <div class="product font-rale">
                            <a href="{{ route('shop') }}#category"><img src="/assets/TopSale/J1.webp" alt="product1"
                                    class="img-fluid"></a>
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

                            </div>
                        </div>
                    </div>
                    <div class="item py-2 m-2">
                        <div class="product font-rale">
                            <a href="{{ route('shop') }}#category"><img src="/assets/TopSale/K1.webp" alt="product1"
                                    class="img-fluid"></a>
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

                            </div>
                        </div>
                    </div>
                    <div class="item py-2 m-2">
                        <div class="product font-rale">
                            <a href="{{ route('shop') }}#category"><img src="/assets/TopSale/KT1.webp" alt="product1"
                                    class="img-fluid"></a>
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

                            </div>
                        </div>
                    </div>
                    <div class="item py-2 m-2">
                        <div class="product font-rale">
                            <a href="{{ route('shop') }}#category"><img src="/assets/TopSale/R1.webp" alt="product1"
                                    class="img-fluid"></a>
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

                            </div>
                        </div>
                    </div>
                    <div class="item py-2 m-2">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="{{ route('shop') }}#category"><img src="/assets/TopSale/S1.webp"
                                        class="img-fluid" alt="pro1"></a>
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

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 m-2">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="{{ route('shop') }}#category"><img src="/assets/TopSale/T1.webp"
                                        class="img-fluid" alt="pro1"></a>
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
                        <div class="grid-item {{ $element->key }} border">
                            <div class="item py-2" style="width: 200px;">
                                <div class="product font-rale">
                                    <a href="/product/{{ $element->id }}"><img class="img-fluid p-2" src="{{ $element->image }}"
                                            alt="" class="img-fluid"></a>
                                    <div class="text-center">
                                        <h6>{{ $element->product_name }}</h6>
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>{{ $element->price }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- !Special Price -->

         <!-- Top Sale -->
         <section id="top-sale">
          <div class="container py-5">
              <h4 class="font-rubik font-size-20">Top Sale</h4>
              <hr>
              <!-- owl carousel -->
              <div class="owl-carousel owl-theme">
                  <div class="item py-2 m-2">
                      <div class="product font-rale">
                          <a href="{{ route('shop') }}#category"><img src="/assets/TopSale/C1.webp" alt="product1"
                                  class="img-fluid"></a>
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

                          </div>
                      </div>
                  </div>
                  <div class="item py-2 m-2">
                      <div class="product font-rale">
                          <a href="{{ route('shop') }}#category"><img src="/assets/TopSale/J1.webp" alt="product1"
                                  class="img-fluid"></a>
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

                          </div>
                      </div>
                  </div>
                  <div class="item py-2 m-2">
                      <div class="product font-rale">
                          <a href="{{ route('shop') }}#category"><img src="/assets/TopSale/K1.webp" alt="product1"
                                  class="img-fluid"></a>
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

                          </div>
                      </div>
                  </div>
                  <div class="item py-2 m-2">
                      <div class="product font-rale">
                          <a href="{{ route('shop') }}#category"><img src="/assets/TopSale/KT1.webp" alt="product1"
                                  class="img-fluid"></a>
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

                          </div>
                      </div>
                  </div>
                  <div class="item py-2 m-2">
                      <div class="product font-rale">
                          <a href="{{ route('shop') }}#category"><img src="/assets/TopSale/R1.webp" alt="product1"
                                  class="img-fluid"></a>
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

                          </div>
                      </div>
                  </div>
                  <div class="item py-2 m-2">
                      <div class="product font-rale">
                          <div class="d-flex flex-column">
                              <a href="{{ route('shop') }}#category"><img src="/assets/TopSale/S1.webp"
                                      class="img-fluid" alt="pro1"></a>
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

                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="item py-2 m-2">
                      <div class="product font-rale">
                          <div class="d-flex flex-column">
                              <a href="{{ route('shop') }}#category"><img src="/assets/TopSale/T1.webp"
                                      class="img-fluid" alt="pro1"></a>
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
@endsection
