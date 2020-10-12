<div id="site-menu">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul id="mobile-nav" class="nav navbar-nav">
                    <li class=" first">
                        <a href="/collections/for-her.php">For Her</a>
                    </li>

                    <li class="">
                        <a href="/collections/for-him.php">For Him</a>
                    </li>

                    <li class=" last">
                        <a href="/collections/kids.php">Kids</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<nav id="navigation" class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div id="mobile-navigation" class="navbar-header">

            <a href="#" id="menu-toggle" class="collapsed navbar-btn left" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars open-nav"></i>
                <i class="fa fa-close close-nav"></i>
            </a>

            <a href="#" id="open-mobile-search" class="collapsed navbar-btn right" aria-expanded="false">
                <span class="sr-only">Toggle Search</span>
                <i class="fa fa-search"></i>
            </a>

            <a href="/cart" class="navbar-btn"><i class="fa fa-shopping-cart"></i></a>



        </div>

        <div id="navbar-collapse" class="collapse navbar-collapse">


            <ul class="nav navbar-nav navbar-right">

                <li class="has-dropdown">
                    <a href="#" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"><i class="fa fa-newspaper-o"></i> </a>
                    <ul class="dropdown-menu" role="menu" style="display: none;">
                        <li>Newsletter</li>
                        <li>
                            Latest news from us in your inbox.
                            <form action="" method="post" target="_blank">
                                <div class="form-group">
                                    <input type="email" placeholder="E-mail address" name="EMAIL" class="form-control" aria-label="E-mail address">
                                    <input type="submit" value="Subscribe" class="form-control">
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>

                <li class="has-dropdown">
                    <a id="CartDropdown" href="/cart" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-cart"></i> <span id="CartCount">0</span> items (<span id="CartCost">$0.00</span>)</a>
                    <ul id="CartContainer" class="dropdown-cart dropdown-menu" role="menu" style="display: none;">
                        <li></li>
                        <li>

                            <div>Your cart is currently empty.</div>


                        </li>
                    </ul>
                </li>

            </ul>
        </div>

    </div>
</nav>

<div id="header" class="container-fluid slideshow_type_fullscreen">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 navbar-brand-wrap">
                    <form action="/search" method="get" class="mobile-search-form hidden" role="search">
                        <a href="#" class="close-search"><i class="fa fa-close"></i></a>
                        <input name="q" type="search" id="search-field" class="form-control input-lg" placeholder="Search our store" value="">
                    </form>

                    <a class="navbar-brand" href="/">
                        <img src="//cdn.shopify.com/s/files/1/0021/6933/9965/t/2/assets/logo.png?v=16552205837167994230" class="logo-image">
                        <img src="//cdn.shopify.com/s/files/1/0021/6933/9965/t/2/assets/logo@2.png?v=16552205837167994230" class="logo-image-retina" height="50px">
                    </a>
                </div>

                <div class="col-sm-6 text-right navbar-shipping-search-wrap ">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9 free-shipping-wrap">
                            <div class="free-shipping">
                                <form action="/search" method="get" class="search-form" role="search" style="display:none">
                                    <input name="q" type="search" id="search-field" class="form-control input-lg" placeholder="Search our store" value="">
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-3 text-center search-activate hidden-xs">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="menu" class="navbar">
    <div class="container">
        <div class="row">
            <nav class="navbar-collapse collapse">
                <ul id="main-navigation" class="nav navbar-nav">
                    <li class="  first">
                        <a href="/collections/for-her.php">For Her</a>

                        <ul class="dropdown-menu" role="menu">

                        </ul>
                    </li>

                    <li class=" ">
                        <a href="/collections/for-him.php">For Him</a>

                        <ul class="dropdown-menu" role="menu">

                        </ul>
                    </li>

                    <li class="  last">
                        <a href="/collections/kids.php">Kids</a>
                        <ul class="dropdown-menu" role="menu">

                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- /templates/index.liquid -->