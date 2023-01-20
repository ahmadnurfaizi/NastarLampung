<!--main area-->
<main id="main" class="main-site">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">home</a></li>
            <li class="item-link"><span>Checkout</span></li>
        </ul>
    </div>
    <div class=" main-content-area">
        <div class="wrap-address-billing">
            <h3 class="box-title">Detail Alamat</h3>
            <form action="#" method="get" name="frm-billing">
                <p class="row-in-form">
                    <label for="fname">Nama Depan<span>*</span></label>
                    <input id="fname" type="text" name="fname" value="" placeholder="nama depan">
                </p>
                <p class="row-in-form">
                    <label for="lname">Nama Belakang<span>*</span></label>
                    <input id="lname" type="text" name="lname" value="" placeholder="nama belakang">
                </p>
                <p class="row-in-form">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="" placeholder="email">
                </p>
                <p class="row-in-form">
                    <label for="phone">Telepon<span>*</span></label>
                    <input id="phone" type="number" name="phone" value="" placeholder="08XX">
                </p>
                <p class="row-in-form">
                    <label for="add">Alamat</label>
                    <input id="add" type="text" name="add" value="" placeholder="alamat">
                </p>
                <p class="row-in-form">
                    <label for="country">Negara<span>*</span></label>
                    <input id="country" type="text" name="country" value="" placeholder="negara">
                </p>
                <p class="row-in-form">
                    <label for="zip-code">Kode Post</label>
                    <input id="zip-code" type="number" name="zip-code" value="" placeholder="kode post">
                </p>
                <p class="row-in-form">
                    <label for="city">Kota<span>*</span></label>
                    <input id="city" type="text" name="city" value="" placeholder="kota">
                </p>
                <p class="row-in-form fill-wife">
                    <label class="checkbox-field">
                        <input name="create-account" id="create-account" value="forever" type="checkbox">
                        <span>Buat Akun?</span>
                    </label>
                    <label class="checkbox-field">
                        <input name="different-add" id="different-add" value="forever" type="checkbox">
                        <span>Pengiriman</span>
                    </label>
                </p>
            </form>
        </div>
        <div class="summary summary-checkout">
            <div class="summary-item payment-method">
                <h4 class="title-box">Metode Pembayaran</h4>
                <!--
                <p class="summary-info"><span class="title">Check / Money order</span></p>
                <p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
                -->
                <div class="choose-payment-methods">
                    <label class="payment-method">
                        <input name="payment-method" id="payment-method-bank" value="bank" type="radio">
                        <span>Bank Transder</span>
                        <span class="payment-desc">ke REK. 00000000000</span>
                    </label>
                    <!--
                    <label class="payment-method">
                        <input name="payment-method" id="payment-method-visa" value="visa" type="radio">
                        <span>visa</span>
                        <span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
                    </label>
                -->
                    <label class="payment-method">
                        <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
                        <span>COD</span>
                        <span class="payment-desc"></span>
                        <span class="payment-desc">Mohon gunakan uang pas</span>
                    </label>
                </div>
                {{-- <p class="summary-info grand-total"><span>Total</span> <span class="grand-total-price">Rp.100.000.00</span></p> --}}
                <a href="/thankyou" class="btn btn-medium">Silahkan Order</a>
            </div>
            <div class="summary-item shipping-method">
                <h4 class="title-box f-title">Metode Pengiriman</h4>
                <!--
                <p class="summary-info"><span class="title">Flat Rate</span></p>
                <p class="summary-info"><span class="title">Fixed $50.00</span></p>
                -->
                <h4 class="title-box">Kode Diskon</h4>
                <p class="row-in-form">
                    <label for="coupon-code">Pilih Kupon</label>
                    <input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">
                </p>
                {{-- <a href="#" class="btn btn-small">Cekout</a> --}}
            </div>
        </div>

        <div class="wrap-show-advance-info-box style-1 box-in-site">
            <h3 class="title-box">Most Viewed Products</h3>
            <div class="wrap-products">
                <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="{{ asset('assets/images/products/Brownis.JPG') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item sale-label">sale</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Paket 1</span></a>
                            <div class="wrap-price"><ins><p class="product-price">Rp.45000.00</p></ins> <del><p class="product-price">Rp.55000.00</p></del></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="{{ asset('assets/images/products/Putri_Salju.JPG') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item new-label">new</span>
                                <span class="flash-item sale-label">sale</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Paket 2</span></a>
                            <div class="wrap-price"><ins><p class="product-price">Rp.45000.00</p></ins> <del><p class="product-price">Rp.50000.00</p></del></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="{{ asset('assets/images/products/Nastar_Nanas.JPG') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item bestseller-label">Bestseller</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Paket 3</span></a>
                            <div class="wrap-price"><span class="product-price">Rp.75000.00</span></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="{{ asset('assets/images/products/Kacang.JPG') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Paket 4</span></a>
                            <div class="wrap-price"><span class="product-price">Rp.75000.00</span></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="{{ asset('assets/images/products/Bolu_Jadul.JPG') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item sale-label">sale</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Paket 5</span></a>
                            <div class="wrap-price"><ins><p class="product-price">Rp.85000.00</p></ins> <del><p class="product-price">Rp.65000.00</p></del></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="{{ asset('assets/images/products/Bolu_Gulung.JPG') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item new-label">new</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Paket 6</span></a>
                            <div class="wrap-price"><span class="product-price">Rp.55000.00</span></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="{{ asset('assets/images/products/Legit_Original.JPG') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item bestseller-label">Bestseller</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Paket 7</span></a>
                            <div class="wrap-price"><span class="product-price">Rp.90000.00</span></div>
                        </div>
                    </div>
                </div>
            </div><!--End wrap-products-->
        </div>

    </div><!--end main content area-->
</div><!--end container-->

</main>
<!--main area-->
