<?php include 'header.php'; ?>
    <div class="clearfix"></div>
    <main class="main">
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 pull-right">
                        <h1 class="pull-left main-head small-haed mbottom-10">Search Result <b>Loft Coupon</b></h1>
                        <div class="clearfix"></div>
                        <div class="coupons">
                            <div class="row">
                                <?php for ($i = 1;
                                           $i <= 6;
                                           $i++): ?>
                                    <div class="col-md-6 col-xs-12">


                                        <div class="coupon-content coupon">

                                            <div class="col-sm-9 col-xs-12 coupon-text">
                                                <div class="padding15">
                                                    <div class="coupon-logo pull-right"><a href=""><img
                                                                    src="images/logo<?php echo $i; ?>.jpg"
                                                                    class="img-responsive"
                                                                    alt=""></a></div>
                                                    <div class="coupon-text">
                                                        <a href="">
                                                            <h3>Exclusive <b>20% OFF</b></h3>
                                                            <p>3, 6 or 12 Months Gift Subscriptions for
                                                                Valentine's at Birchbox</p>
                                                        </a>
                                                        <div class="coupon-footer mtop-10 pull-left">
                                            <span class="date">
                                            <i class="fa fa-clock-o"></i> 31-03-2017
</span>
                                                            <a href="" class="verified"><i
                                                                        class="fa fa-check"></i> Verified</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-xs-12 coupon-main no-padding">
                                                <a href=""
                                                   class="btn btn-yclr waves-effect waves-light code-btn"><span>Get
                                        Code</span></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>


                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </main>
<?php include 'footer.php'; ?>