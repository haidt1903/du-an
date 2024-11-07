@extends('client.layouts.master')
@section('content')
<div class="page-banner-section section" style="background-image: url(jadusona/assets/images/hero/hero-1.jpg)">
    <div class="container">
        <div class="row">
            <div class="page-banner-content col">

                <h1>Wishlist</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                </ul>

            </div>
        </div>
    </div>
</div><!-- Page Banner Section End -->

<!-- Page Section Start -->
<div class="page-section section section-padding">
    <div class="container">

        <form action="#">				
            <div class="row">
                <div class="col-12">
                    <div class="cart-table table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img src="jadusona/assets/images/product/product-1.jpg" alt="" /></a></td>
                                    <td class="pro-title"><a href="#">Tmart Baby Dress</a></td>
                                    <td class="pro-price"><span class="amount">$25</span></td>
                                    <td class="pro-quantity"><div class="pro-qty"><input type="text" value="1"></div></td>
                                    <td class="pro-add-cart"><a href="#">add to cart</a></td>
                                    <td class="pro-remove"><a href="#">×</a></td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img src="jadusona/assets/images/product/product-2.jpg" alt="" /></a></td>
                                    <td class="pro-title"><a href="#">Jumpsuit Outfits</a></td>
                                    <td class="pro-price"><span class="amount">$09</span></td>
                                    <td class="pro-quantity"><div class="pro-qty"><input type="text" value="1"></div></td>
                                    <td class="pro-add-cart"><a href="#">add to cart</a></td>
                                    <td class="pro-remove"><a href="#">×</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div><!-- Page Section End -->

<!-- Brand Section Start -->
<div class="brand-section section section-padding pt-0">
    <div class="container-fluid">
        <div class="row">
            <div class="brand-slider">

                <div class="brand-item col">
                    <img src="jadusona/assets/images/brands/brand-1.png" alt="">
                </div>

                <div class="brand-item col">
                    <img src="jadusona/assets/images/brands/brand-2.png" alt="">
                </div>

                <div class="brand-item col">
                    <img src="jadusona/assets/images/brands/brand-3.png" alt="">
                </div>

                <div class="brand-item col">
                    <img src="jadusona/assets/images/brands/brand-4.png" alt="">
                </div>

                <div class="brand-item col">
                    <img src="jadusona/assets/images/brands/brand-5.png" alt="">
                </div>

                <div class="brand-item col">
                    <img src="jadusona/assets/images/brands/brand-6.png" alt="">
                </div>

            </div>
        </div>
    </div>
</div><!-- Brand Section End -->
@endsection