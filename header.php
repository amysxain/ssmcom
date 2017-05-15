<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Super Saver Mama</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet"
          href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/material-buttons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="favicon.png" type="image/png">
    <script src="js/jquery.min.js"></script>
</head>

<body>
<header>

    <nav class="navbar">
        <div class="nav-wrap">

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="mainNav">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="top-header">
                    <div class="container">


                        <ul class="nav navbar-nav full-width">
                            <li class="special-btn" ><a href="#" class="btn btn-yclr waves-effect waves-light">Sammy
                                    Dress</a></li>

                            <li><a href="#" class=" waves-effect waves-light"><b> Top 20 Coupons</b></a>
                            </li>
                            <li><a href="#" class=" waves-effect waves-light" class=" waves-effect waves-light">Weekly Top Coupons</a></li>

                            <li><a href="#" class=" waves-effect waves-light"> Share A
                                    Coupon</a></li>
                            <li><a href="#" class=" waves-effect waves-light"> Blog</a>
                            </li>

                        </ul>


                    </div>

                </div>
                <div class="main-nav">
                    <div class="container relative">
                        <div class="row">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#mainNav"><span class="sr-only">Toggle navigation</span><span
                                            class="icon-bar"></span><span class="icon-bar"></span><span
                                            class="icon-bar"></span></button>
                                <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""/></a></div>

                            <div class="header-right">

                            <ul class="header-actions">
                                <!--Please hide search from h-->
                                <li> <a href="" class="btn btn-tclr btn-pblack waves-effect waves-light"><i class="fa fa-search"></i></a>

                                    <form class="navbar-form navbar-left searchjs"  id="mainSearch" role="search">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="afterborder"></div>
                                        </div>


                                        <div class="clearfix"></div>
                                        <div id="resultContainer" class="resultContainer">
                                            <div id="searchResults" class="searchResults">
                                                <ul>
                                                    <li><a href="http://google.com" title="Nijmegen"><strong>Nij</strong>megen,
                                                            Gelderland</a></li>
                                                    <li><a href="http://google.com" title="Nijkerk"><strong>Nij</strong>kerk,
                                                            Gelderland</a></li>
                                                    <li><a href="http://google.com" title="Nijemirdum"><strong>Nij</strong>emirdum,
                                                            Friesland</a></li>
                                                    <li><a href="http://google.com" title="Nijega"><strong>Nij</strong>ega,
                                                            Friesland</a></li>
                                                    <li><a href="http://google.com" title="Nijon"><strong>Nij</strong>on,
                                                            Champagne-Ardenne</a></li>
                                                    <li><a href="http://google.com" title="Nijehaske"><strong>Nij</strong>ehaske,
                                                            Friesland</a></li>
                                                    <li><a href="http://google.com" title="Nij Altoenae"><strong>Nij</strong>
                                                            Altoenae, Friesland</a></li>
                                                    <li><a href="http://google.com" title="Nij Beets"><strong>Nij</strong>
                                                            Beets, Friesland</a></li>
                                                    <li><a href="http://google.com" title="Nijang"><strong>Nij</strong>ang, Nusa
                                                            Tenggara Barat</a></li>
                                                    <li><a href="http://google.com" title="Nijar"><strong>Nij</strong>ar,
                                                            Andalusia</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </form>
                                </li>
                                <li> <a href="" class="btn btn-pclr btn-pblack waves-effect waves-light">Login</a></li>
                                <li><a href="" class="btn btn-yclr btn-pblack waves-effect waves-light cat-trigger">Categories <i class="fa fa-angle-double-down"></i></a></li>
                            </ul>

                            </div>
                        </div>

                    </div>


                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->


    </nav>

    <div class="categories-dropdown">

        <div class="container">
            <h3 class="main-head small-head">Top Categoires</h3>
            <ul>
                <?php for($i=1; $i<=8; $i++):?>
                    <li class="col-md-3 col-sm-4 col-xs-3">
                        <a href="" class="cat-top-image"><img src="images/icon-<?php echo $i;?>.png" alt=""></a>
                        <div class="cat-top-title">Category name</div>
                        <ul class="bulleted">
                            <li><a href="">Lulus</a></li>
                            <li><a href="">Wallis UK</a></li>
                            <li><a href="">Ebookers.com (USA)</a></li>
                            <li><a href="">Banggood.com</a></li>
                            <li><a href="">Wallis UK</a></li>
                        </ul>
                    </li>
                <?php endfor;?>
            </ul>
        </div>
    </div>

</header>
