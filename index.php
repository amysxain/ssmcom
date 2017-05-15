<?php include'header.php'; ?>
<div id="carousel-first" class="carousel slide" data-ride="carousel">
 <div class="container">
 <h1 class="pull-left main-head small-haed">POPULAR TODAY.</h1>
  <!-- Wrapper for slides -->
  <div class="carousel-control-2 pull-right">
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-first" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-first" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 <div class="row">
  <div class="carousel-inner" role="listbox">
   
    <div class="item active">
    <?php for($i=1; $i<=3; $i++):?>
     <div class="col-md-4 col-xs-12">
      <div class="coupon-content">
      	<div class="col-xs-2 no-padding"><a href=""><img src="images/logo1.jpg" class="img-responsive" alt=""></a></div>
      	<div class="col-sm-10 col-xs-12">
      	<div class="row">
      		<div class="col-xs-9 no-padding-right">
      			<h3><a href="">BLACK FRIDAY SALE! <strong>Get 20%</strong> Off On All Orders.</a></h3>      			
      		</div>
      		<div class="col-xs-3 no-padding">
      			<a href="" class="btn btn-pclr waves-effect waves-light code-btn">CODE</a>
      		</div>
      	</div>
      		
      		
      	</div>
      	
      	
      </div>
   </div>
   <?php endfor;?>
   
  </div>
  
  
  <div class="item">
    <?php for($i=1; $i<=3; $i++):?>
     <div class="col-md-4 col-xs-12">
      <div class="coupon-content">
      	<div class="col-xs-2 no-padding"><a href=""><img src="images/logo1.jpg" class="img-responsive" alt=""></a></div>
      	<div class="col-sm-10 col-xs-12">
      	<div class="row">
      		<div class="col-xs-9 no-padding-right">
      			<h3><a href="">BLACK FRIDAY SALE! <strong>Get 20%</strong> Off On All Orders.</a></h3>      			
      		</div>
      		<div class="col-xs-3 no-padding">
      			<a href="" class="btn btn-pclr waves-effect waves-light code-btn">CODE</a>
      		</div>
      	</div>
      		
      		
      	</div>
      	
      	
      </div>
   </div>
   <?php endfor;?>
   
  </div>
  </div>
  </div>



</div>
</div>


<div id="carousel-two" class="carousel slide" data-ride="carousel">
 <div class="container">
 <h1 class="pull-left main-head small-haed">POPULAR TODAY.</h1>
  <!-- Wrapper for slides -->
  <div class="carousel-control-2 pull-right">
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-two" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-two" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 <div class="row">
  <div class="carousel-inner" role="listbox">
   
    <div class="item active">
    <?php for($i=1; $i<=3; $i++):?>
     <div class="col-md-4 col-xs-12 with-image">
     <div class="coupon-shade">
     <div class="coupon-img"><img src="images/slide-<?php echo $i;?>.jpg" class="img-responsive" alt=""/></div>
      <div class="coupon-content">
      	<div class="col-xs-2 no-padding"><a href=""><img src="images/logo<?php echo $i;?>.jpg" class="img-responsive" alt=""></a></div>
      	<div class="col-sm-10 col-xs-12">
      	<div class="row">
      		<div class="col-xs-9 no-padding-right">
      			<h3><a href="">BLACK FRIDAY SALE! <strong>Get 20%</strong> Off On All Orders.</a></h3>      			
      		</div>
      		<div class="col-xs-3 no-padding">
      			<a href="" class="btn btn-pclr waves-effect waves-light code-btn">CODE</a>
      		</div>
      	</div>
      		
      		
      	</div>
      	</div>
      	
      </div>
   </div>
   <?php endfor;?>
   
  </div>
  
  
  <div class="item">
    <?php for($i=1; $i<=3; $i++):?>
     <div class="col-md-4 col-xs-12 with-image">
     <div class="coupon-shade">
     <div class="coupon-img"><img src="images/slide-<?php echo $i;?>.jpg" class="img-responsive" alt=""/></div>
      <div class="coupon-content">
      	<div class="col-xs-2 no-padding"><a href=""><img src="images/logo<?php echo $i;?>.jpg" class="img-responsive" alt=""></a></div>
      	<div class="col-sm-10 col-xs-12">
      	<div class="row">
      		<div class="col-xs-9 no-padding-right">
      			<h3><a href="">BLACK FRIDAY SALE! <strong>Get 20%</strong> Off On All Orders.</a></h3>      			
      		</div>
      		<div class="col-xs-3 no-padding">
      			<a href="" class="btn btn-pclr waves-effect waves-light code-btn">CODE</a>
      		</div>
      	</div>
      		
      		
      	</div>
      	</div>
      	
      </div>
   </div>
   <?php endfor;?>
   
  </div>
  </div>
  </div>



</div>
</div>
<div class="clearfix"></div>
<main class="main">
	
	<div class="main">
	
	
	
		<div class="container">
		
		
		<div class="card subscribe m30bottom">
			<div class="col-md-10 col-md-offset-1">
				
				<div class="input-group">
				  <span class="input-group-addon"> sign-up to <strong>enjoy the perks!</strong></span>
				  <input type="text" class="form-control" placeholder="enter email address">
				    <span class="input-group-btn">
						<button class="btn btn-tclr waves-effect waves-light" type="button">Subscribe!</button>
					  </span>
				</div>
			</div>
		</div>
		
		
			
			<h1 class="main-head text-center">Recommended Coupon and codes</h1>
			<div class="coupons">
			<div class="row">
			 <?php for($i=1; $i<=6; $i++):?>
			<div class="col-md-6 col-xs-12">
				
				
				
		<div class="coupon-content coupon">
      	<div class="col-xs-3 no-padding-left coupon-logo"><a href=""><img src="images/logo<?php echo $i;?>.jpg" class="img-responsive" alt=""></a></div>
      	<div class="col-sm-9 col-xs-12 no-padding-left coupon-main">
      	<div class="row">
      		<div class="col-xs-10 no-padding-right coupon-text">
      			<h3><a href="">BLACK FRIDAY SALE! <strong>Get 20%</strong> Off On All Orders.</a></h3>      			
      		</div>
      		<div class="col-xs-2 no-padding">
      			<a href="" class="btn btn-tclr waves-effect waves-light code-btn">CODE</a>
      		</div>
      	</div>
      	
      	<div class="clearfix"></div>
      	
      	
      	<div class="date pull-left"> Dec-30-2016</div>
      	<div class="btn-set pull-right">
      		<a href="" class="btn btn-sclr waves-effect waves-light">Exclusive</a>
      		<a href="" class="btn btn-pclr waves-effect waves-light">Verified</a>
      		
      	</div>
      		
      		
      	</div>
      	<hr>
      	</div>
				
				
			</div>
			<?php endfor;?>
			
			</div>
			
			
			
		</div>
		
	</div>	
	
	<div class="clearfix"></div>
<div class="banner-middle">
<div class="container">
<img src="images/banner.jpg" alt="" class="img-responsive radius">
</div>
</div>
<div class="clearfix"></div>
	
	
	<div class="container">
			
			<h1 class="main-head text-center">Recommended Coupon and codes</h1>
			<div class="coupons">
			<div class="row">
			 <?php for($i=1; $i<=6; $i++):?>
			<div class="col-md-6 col-xs-12">
				
				
				
		<div class="coupon-content coupon">
      	<div class="col-xs-3 no-padding-left coupon-logo"><a href=""><img src="images/logo<?php echo $i;?>.jpg" class="img-responsive" alt=""></a></div>
      	<div class="col-sm-9 col-xs-12 no-padding-left coupon-main">
      	<div class="row">
      		<div class="col-xs-10 no-padding-right coupon-text">
      			<h3><a href="">BLACK FRIDAY SALE! <strong>Get 20%</strong> Off On All Orders.</a></h3>      			
      		</div>
      		<div class="col-xs-2 no-padding">
      			<a href="" class="btn btn-tclr waves-effect waves-light code-btn">CODE</a>
      		</div>
      	</div>
      	
      	<div class="clearfix"></div>
      	
      	
      	<div class="date pull-left"> Dec-30-2016</div>
      	<div class="btn-set pull-right">
      		<a href="" class="btn btn-sclr waves-effect waves-light">Exclusive</a>
      		<a href="" class="btn btn-pclr waves-effect waves-light">Verified</a>
      		
      	</div>
      		
      		
      	</div>
      	<hr>
      	</div>
				
				
			</div>
			<?php endfor;?>
			
			</div>
			
			
			
		</div>
		

	
	
	<div class="clearfix"></div>
	
	
	
		
		
		
		<div class="about-content text-center redius white padding30 mtop-10 m30bottom z-depth-2">
			<h2 class="main-head nm-top">Recommended Coupon and codes</h2>
			
			<h4 class="pclr">Where the saving begins!</h4>
			
			<p class="nm-bottom">

Super Saver Mama, a young coupon aggregator, works for the legitimacy with vigorous zeal. We bring the fresh coupon codes and discounts from all brands, making it an exclusive deal that a buyer won’t find anywhere else. Debuting ourselves in the vouchers and coupons industry, with the spirit of serving the best and nothing less than the best.  </p>
			
		</div>
		
		
		
		
	</div>
	
		
	</div>


</main>



<?php include'footer.php'; ?>