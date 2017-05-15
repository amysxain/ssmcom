<?php include'header.php'; ?>
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
<div class="container">
<div class="row">
 <div class="deals m30top">
    <?php for($i=1; $i<=3; $i++):?>
     <div class="col-md-4 col-xs-12 deal m30bottom">
         <div class="offer-wrap">
             <div class="offer-image">
                 <img src="images/slide-<?php echo $i;?>.jpg" alt="">
             </div>
             <div class="offer-content">
                 <div class="padding15">
                     <div class="percent"><span class="sclr">Save</span> $68.77 </div>

                     <p>
                         <b class="extra">Wallis</b> <b>BLACK FRIDAY SALE!</b> Get 20% Off On All Orders.
                     </p>
                 </div>
                 <a href="" class="btn btn-yclr waves-effect waves-light">Show Details</a>
             </div>
         </div>
   </div>
   <?php endfor;?>

     <?php for($i=1; $i<=3; $i++):?>
         <div class="col-md-4 col-xs-12 deal m30bottom">
             <div class="offer-wrap">
                 <div class="offer-image">
                     <img src="images/slide-<?php echo $i;?>.jpg" alt="">
                 </div>
                 <div class="offer-content">
                     <div class="padding15">
                         <div class="percent"><span class="sclr">Save</span> $68.77 </div>

                         <p>
                             <b class="extra">Wallis</b> <b>BLACK FRIDAY SALE!</b> Get 20% Off On All Orders.
                         </p>
                     </div>
                     <a href="" class="btn btn-yclr waves-effect waves-light">Show Details</a>
                 </div>
             </div>
         </div>
     <?php endfor;?>
   

   
  </div>

	</div>	</div>
<div class="clearfix"></div>
<?php include('footer.php'); ?>
