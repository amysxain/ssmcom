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
    <div class="container m30bottom">
        <div class="row">
            <div class="col-md-9 col-xs-12 m30top">
                <div class="row">
                <?php for ($i = 1; $i <= 6; $i++): ?>

                    <a href="" class="col-md-4 col-sm-6 col-xs-12">
                        <div class="panel panel-default panel-profile">
                            <div class="panel-heading" style="background-image: url(images/slide-<?php echo $i;?>.jpg);"></div>
                            <div class="panel-body">
                                <!--<div class="text-center">
                                <img class="panel-profile-img"
                                     src="images/user.jpg">
                                </div>-->
                                <h3 class="main-head small-haed mbottom-10 mtop-10">Increase in water charges –
                                    ouch!</h3>
                                <div class="post-custom-wrap">
                                    <div class="entry-summary">
                                        <p>It took 17 years for Singapore to increase water prices and many people,
                                            perhaps this includes you, are dreading that...</p>
                                        <div class="meta-date"><i class="fa fa-calendar"></i> March 12, 2017</div>
                                    </div><!-- .entry-summary -->
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endfor; ?>
            </div>
            </div>
            <div class="col-md-3 m30top sidebar">
                <div class="ad m30bottom">
                    <img src="images/ad.jpg" class="img-responsive" alt="">
                </div>
                <div class="card">
                    <h3 class="small-haed">Categories</h3>
                    <ul class="bulleted filter">
                        <li><a href="">Lulus</a></li>
                        <li><a href="">Clarks UK</a></li>
                        <li><a href="">Modells</a></li>
                        <li><a href="">Wallis UK</a></li>
                        <li><a href="">Bebe</a></li>
                        <li><a href="">The White Company UK</a></li>
                        <li><a href="">Mothercare</a></li>

                    </ul>
                    



                    <h3 class="small-haed">Related posts</h3>


                    <ul class="relate-post ">
                        <li><a href="" class="white radius">

                                <img class="media-object img-responsive" src="images/blog-1.jpg" alt="...">

                                <div class="relate-post-content"><h4 class="media-heading">Here is the ultimate reading
                                        list summer 2016</h4>
                                    <p><strong style="pclr">Body decor</strong> - Aug 1, 2016</p></div>

                            </a></li>

                        <li><a href="" class="white radius">

                                <img class="media-object img-responsive" src="images/blog-2.jpg" alt="...">

                                <div class="relate-post-content"><h4 class="media-heading">Here is the ultimate reading
                                        list summer 2016</h4>
                                    <p><strong style="pclr">Body decor</strong> - Aug 1, 2016</p></div>

                            </a></li>
                    </ul>

                </div>
            </div>


        </div>
    </div>
    <div class="clearfix"></div>
<?php include('footer.php'); ?>