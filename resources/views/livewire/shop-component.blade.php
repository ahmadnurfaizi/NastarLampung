<!--main area-->
<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">home</a></li>
            <li class="item-link"><span>Product</span></li>
        </ul>
    </div>
    <div class="row">

        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

            <div class="banner-shop">
                <a href="#" class="banner-link">
                    <figure><img src="{{ asset('assets/images/Display_3.JPG') }}"height="3000" alt=""></figure>
                </a>
            </div>

            <div class="wrap-shop-control">
                <h1 class="shop-title">Makanan</h1>
            </div><!--end wrap shop control-->

            <div class="row">

                <ul class="product-list grid-products equal-container">
                    @foreach ($products as $product)
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{route('product.details',['slug'=>$product->slug])}}" title="{{$product->name}}">
                                    <figure><img src="{{ asset('assets/images/products/') }}/{{$product->image}}" alt="{{$product->name}}"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="{{route('product.details',['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
                                <div class="wrap-price"><span class="product-price">Rp.{{$product->regular_price}}</span></div>
                                <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->quantity}},{{$product->regular_price}})">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="wrap-pagination-info">
            {{ $products->links('pagination::bootstrap-4') }}
            </div>
        </div><!--end main products area-->


        <!--            <div class="widget-banner">
                        <figure><img src="{{ asset('assets/images/W-1.jpg') }}" width="270" height="331" alt=""></figure>
                    </div>
                    <div class="widget-banner">
                        <figure><img src="{{ asset('assets/images/W-1.jpg') }}" width="270" height="331" alt=""></figure>
                    </div>
                    <div class="widget-banner">
                        <figure><img src="{{ asset('assets/images/W-1.jpg') }}" width="270" height="331" alt=""></figure>
                    </div>
                    <div class="widget-banner">
                        <figure><img src="{{ asset('assets/images/W-1.jpg') }}" width="270" height="331" alt=""></figure>
                    </div>
                </div>
            -->
            </div><!-- Size -->

            <!-- brand widget-->

        </div><!--end sitebar-->

    </div><!--end row-->

</div><!--end container-->

</main>
<!--main area-->
