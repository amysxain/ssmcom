<?php include'header.php'; ?>
<div class="clearfix"></div>
<div class="sbg nm-bottom">         <div class="container">             <div class="row">                 <ul class="breadcrumb">                     <li><a href="">Home</a></li>                     <li>»</li>                     <li><a href="">Categories</a></li>                     <li>»</li>                     <li><a href="">Sub Category</a></li>                     <li>»</li>                     <li><span>Store Name</span></li>                 </ul>             </div>         </div>     </div>


<div class="clearfix"></div>
<main class="main">
	
	<div class="main">
	

		<div class="container">
		
		
		<div class="card mtop-10">
		<div class="four-0-4"> <h1 class="no-margin tclr"><i aria-hidden="true" class="fa fa-frown-o"></i> 404&mdash;Sorry!</h1> <p>Sorry! We can't seem to find that page. But since you're here, check out some of our best deals below.</p> </div>
		</div>
		
		
		
		<div class="row">
			
		
			
			<div class="col-md-12 pull-right">
			<h1 class="pull-left main-head small-haed mbottom-10">Top Promo Codes & Deals</h1>
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
	</div>


</main>



<?php include'footer.php'; ?>