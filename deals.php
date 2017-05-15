<?php include'header.php'; ?>
<div class="clearfix"></div>





<div class="store-card sbg">
			<div class="container">
				
				<ul class="breadcrumb">
        <li><a href="">Home</a></li>
        <li><a href="">Categories</a></li>
        <li><a href="">Sub Category</a></li>
        <li><span>Store Name</span></li>
        
        </ul>
				
			</div>	
				
	</div>


<div class="clearfix"></div>
<div class="container">
<div class="row">
 <div class="deals">
    <?php for($i=1; $i<=3; $i++):?>
     <div class="col-md-4 col-xs-12 deal with-image">
     <div class="coupon-shade">
     <div class="coupon-img"><img src="images/blog-<?php echo $i;?>.jpg" class="img-responsive" alt=""/></div>
      <div class="coupon-content store-coupon">
		  <div class="col-xs-4 no-padding"><div class="percent">
Save <div class="off">$68.77 </div> </div></div>
      	<div class="col-sm-8 col-xs-12">
      	
      			<h3><a href="">Save Up to <strong>80% Off</strong> Electronics Clearance</a></h3>      			
      	
      		
      		
      	</div>
      	
      	<div class="col-xs-12 coupon ">
			<div class="date pull-left">
			
			<div class="deal-price">
				<div class="cross-text">$149.99</div>
			    <div class="org-text">$81.22</div>
    	    </div>
			
			</div>
			<div class="btn-set pull-right">
				<a href="" class="btn btn-tclr waves-effect waves-light">Show Details</a>

			</div>
      	</div>
      	
      	
      </div>
      	
      </div>
   </div>
   <?php endfor;?>
   
    <?php for($i=1; $i<=3; $i++):?>
     <div class="col-md-4 col-xs-12 deal with-image">
     <div class="coupon-shade">
     <div class="coupon-img"><img src="images/blog-<?php echo $i;?>.jpg" class="img-responsive" alt=""/></div>
      <div class="coupon-content store-coupon">
		  <div class="col-xs-4 no-padding"><div class="percent">
Save <div class="off">$68.77 </div> </div></div>
      	<div class="col-sm-8 col-xs-12">
      	
      			<h3><a href="">Save Up to <strong>80% Off</strong> Electronics Clearance</a></h3>      			
      	
      		
      		
      	</div>
      	
      	<div class="col-xs-12 coupon ">
			<div class="date pull-left">
			
			<div class="deal-price">
				<div class="cross-text">$149.99</div>
			    <div class="org-text">$81.22</div>
    	    </div>
			
			</div>
			<div class="btn-set pull-right">
				<a href="" class="btn btn-tclr waves-effect waves-light">Show Details</a>

			</div>
      	</div>
      	
      	
      </div>
      	
      </div>
   </div>
   <?php endfor;?>
   
  </div>

	</div>	</div>
<div class="clearfix"></div>
<?php include('footer.php'); ?>
