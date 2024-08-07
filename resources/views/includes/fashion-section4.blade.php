

<section class="featured-product section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12 text-center">
                            <h2 class="mb-5">Featured Products</h2>
                        </div>

                        @foreach ($prods as $prod)

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.html">
                                    <img src="{{asset('assets/images/product/'.$prod['image'])}}" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <span class="product-alert me-auto">New Arrival/ Low Price</span>

                                    <a href="#" class="bi-heart-fill product-icon"></a>
                                </div>
                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="# {{--{{route('prod-details', $prod['id'])}} --}}" class="product-title-link">{{$prod['prodTitle']}}</a>
                                        </h5>

                                        <p class="product-p">{{Str::limit($prod['description'], 20, $end = ' ...')}}</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto mt-auto mb-5">{{$prod->price}} $</small>
                                </div>
                            </div>
                        </div>

                        @endforeach

                        <div class="col-12 text-center">
                            <a href="products.html" class="view-all">View All Products</a>
                        </div>

                    </div>
                </div>
            </section>