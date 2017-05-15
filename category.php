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


<div class="category-page">

    <div class="container">

        <div class="card subscribe m30top m30bottom">

            <div class="col-md-10 col-md-offset-1">

                <div class="input-group">
                    <span class="input-group-addon"> Filter <strong>Categories</strong></span>
                    <select class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                    </select>
                    <span class="input-group-btn">
						<button class="btn btn-tclr waves-effect waves-light" type="button">filter!</button>
					  </span>
                </div>
            </div>
        </div>
        <div class="paded">
            <h1 class="main-head nm-top small-haed"> All Categories </h1>

                <div class="main">


                    <div class="store-description nm-top">

                        <div class="row">


                            <div class="grid">
                                <?php for ($i = 1; $i <= 6; $i++): ?>
                                <div class="col-xs-4 m30bottom clear-even grid-item">
                                    <div class="cat-list  z-depth-2">
                                        <h3 class="main-head"><a href="">
                                                <p class="f20">Flowers and gifts (1369)</p>

                                                <i class="icon fa"><img src="images/icon-<?php echo $i; ?>.png"
                                                                        alt=""/></i>
                                            </a></h3>

                                        <div class="clearfix"></div>
                                        <div class="cat-wrap">
                                            <div class="row">
                                                <ul class="cat-links links-onlycol-xs-12">
                                                    <li><a href="">PETCO Grooming</a></li>
                                                    <li><a href="">Xbox One</a></li>
                                                    <li><a href="">Office 365</a></li>
                                                    <li><a href="">PlayStation 4</a></li>
                                                    <li><a href="">McAfee LiveSafe</a></li>

                                                </ul>

                                                <ul class="cat-links links-onlycol-xs-12">
                                                    <li><a href="">PETCO Grooming</a></li>
                                                    <li><a href="">Xbox One</a></li>
                                                    <li><a href="">Office 365</a></li>
                                                    <li><a href="">PlayStation 4</a></li>
                                                    <li><a href="">McAfee LiveSafe</a></li>

                                                </ul>

                                                <ul class="cat-links links-onlycol-xs-12">
                                                    <li><a href="">PETCO Grooming</a></li>
                                                    <li><a href="">Xbox One</a></li>
                                                    <li><a href="">Office 365</a></li>
                                                    <li><a href="">PlayStation 4</a></li>
                                                    <li><a href="">McAfee LiveSafe</a></li>

                                                </ul>

                                            </div>
                                        </div>


                                    </div>


                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>

                    </div>

                    <div class="clearfix"></div>


                </div>

        </div>

        <div class="clearfix"></div>

    </div>
</div>

<div class="clearfix"></div>
<?php include 'footer.php'; ?>
</body>
</html>
