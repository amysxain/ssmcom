<?php include 'header.php'; ?>
<div class="clearfix"></div>

<div class="sbg nm-bottom">
    <div class="container">
        <div class="row">
            <ul class="breadcrumb">
                <li><a href="">Home</a></li>
                <li>»</li>
                <li><a href="">Categories</a></li>
                <li>»</li>
                <li><a href="">Sub Category</a></li>
                <li>»</li>
                <li><span>Store Name</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="clearfix"></div>
<div class="container m30top">
    <div class="row">
        <?php for ($i = 1; $i <= 6; $i++): ?>
        <div class="col-md-4 col-xs-12">
        <div class="offer-wrap special-offer">
            <div class="offer-image">
                <img src="images/logo<?php echo $i; ?>.jpg" alt="">
            </div>
            <div class="offer-content">
                <div class="padding15">
                    <h3 class="nm-top">20% OFF</h3>
                    <p>
                        <b class="extra">Wallis</b> <b>BLACK FRIDAY SALE!</b> Get 20% Off On All Orders.
                    </p>
                </div>
                <a href="" class="btn btn-yclr waves-effect waves-light">Get Discount</a>
            </div>
        </div>
        </div>
        <?php endfor; ?>
    </div>
</div>
<div class="clearfix"></div>
<?php include('footer.php'); ?>
