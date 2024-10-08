<?php include 'header.php'; ?>

<section class="banner-tems text-center">
    <div class="container">
        <div class="banner-content">
            <h2>Checkout</h2>
            <p></p>
        </div>
    </div>
</section>
<!-- BODY-ROOM-5 -->
<section class="check-out">
    <div class="container">
        <p class="check-p">Returning customer? <a href="#" title=""> Click here to login</a></p>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="check-left ">
                    <h2>BILLING DETAILS</h2>
                    <p></p>
                    <div class="form-group">
                        <label>Company &nbsp;<span>*</span></label>
                        <div class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown"
                                class="dropdown-toggle form-control" href="#">
                                <span id="selected" class="color">India</span><i
                                    class="ion-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="active">India</li>
                                <li>Viet Nam (VN)</li>
                                <li>Spanish(TBN)</li>
                                <li>Thai Lan</li>
                                <li>United States</li>
                                <li>United Kingdom</li>
                                <li>United Arab Emirates</li>

                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>First Name <span>*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Last Name <span>*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" name="Name" class="form-control" value="" required="required" pattern=""
                            title="">
                    </div>
                    <div class="form-group">
                        <label>Address <span>*</span></label>
                        <input type="text" name="Address" class="form-control" value="" required="required" pattern=""
                            title="" placeholder="Street Address">
                        <input type="text" name="Address" class="form-control" value="" required="required" pattern=""
                            title="" placeholder="Apartment, suite, unit etc. (Optional)">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Town / City &nbsp;<span>*</span></label>
                                <input type="text" class="form-control" placeholder="Street Address">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Country &nbsp;<span>*</span></label>
                                <input type="text" class="form-control" placeholder="Country">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Email Address &nbsp; <span>*</span></label>
                                <input type="email" name="Email" class="form-control" value="" required="required"
                                    title="" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Phone &nbsp;<span>*</span></label>
                                <input type="text" class="form-control" placeholder="Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Order Notes</label>
                        <textarea name="textarea" class="form-control" rows="3" required="required"
                            placeholder="Notes about your order, eg. special notes for delivery"></textarea>
                    </div>
                    <div class="radio b">
                        <label>
                            <input type="radio" name="optradio1"> Create an account?</label>
                    </div>
                    <div class="click form-control">You have a coupon? <a href="#" title="">Click here to enter your
                            code</a>
                    </div>
                </div>
                <!-- item-right -->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 col-lg-offset-1">
                <div class="check-right ">
                    <h2 class="text-uppercase">Your payment details</h2>
                    <div class="checkout_cart">
                        <!-- ITEM -->
                        <div class="cart-item">
                            <div class="img">
                                <a href="#"><img src="images/Checkout/checkout.jpg" alt="#"></a>
                            </div>
                            <div class="text">
                                <a href="#">Luxury Room</a>
                                <p><span>2 days - 3 rooms</span> <b>&#8377;240</b></p>
                            </div>
                            <a href="#" class="remove"> <i class="ion-close-round" aria-hidden="true"></i></a>
                        </div>
                        <!-- END / ITEM -->
                        <!-- ITEM -->
                        <div class="cart-item">
                            <div class="img">
                                <a href="#"><img src="images/Checkout/checkou-1t.jpg" alt="#"></a>
                            </div>
                            <div class="text">
                                <a href="#">Standard Room</a>
                                <p><span>2 days - 2 rooms</span> <b>&#8377;360</b></p>
                            </div>
                            <a href="#" class="remove"> <i class="ion-close-round" aria-hidden="true"></i></a>
                        </div>
                        <!-- END / ITEM -->
                        <!-- ITEM -->
                        <div class="cart-item">
                            <div class="img">
                                <a href="#"><img src="images/Checkout/checkou-3t.jpg" alt="#"></a>
                            </div>
                            <div class="text">
                                <a href="#">Couple Room</a>
                                <p><span>4 days - 1 rooms</span> <b>&#8377;480</b></p>
                            </div>
                            <a href="#" class="remove"><i class="ion-close-round" aria-hidden="true"></i></a>
                        </div>
                        <!-- END / ITEM -->
                    </div>
                    <div class="checkout-cartinfo">
                        <p><span>Cart Subttotal:</span>&#8377;1080</p>
                        <p><span>Shipping:</span>Free Shipping</p>
                        <p><span>Order Total:</span><strong>&#8377;1080</strong></p>
                    </div>
                    <div class="checkout-option">
                        <div class="radio">
                            <label>
                                <input type="radio" name="optradio">Direct Bank Transfer
                                <span>Make your payment directly into our bank account. Please use your Order ID as the
                                    payment reference. Your order won’t be shipped until the funds have cleared in our
                                    account.</span>
                            </label>
                        </div>
                        <div class="radio margin-bottom">
                            <label>
                                <input type="radio" name="optradio">Cheque Payment</label>
                        </div>
                        <div class="radio ">
                            <label class="padding-right">
                                <input type="radio" name="optradio">Credit Card</label>
                            <div class="card">
                                <img src="images/Checkout/ex.png" alt="#" class="img-responsive">
                                <img src="images/Checkout/mas.png" alt="#" class="img-responsive">
                                <img src="images/Checkout/o.png" alt="#" class="img-responsive">
                                <img src="images/Checkout/pay.png" alt="#" class="img-responsive">
                                <img src="images/Checkout/visa.png" alt="#" class="img-responsive">
                                <img src="images/Checkout/2co.png" alt="#" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="checkout-btn btn">PLACE ORDER </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
</section>
<!-- END/BODY-ROOM-5-->

<?php include 'footer.php'; ?>