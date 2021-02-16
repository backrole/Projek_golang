{{define "index"}}
    {{template "_app"}}
    <!--================================
        START SEARCH AREA
    =================================-->
    <section class="search-wrapper">
        <div class="search-area2 bgimage">
            <div class="bg_image_holder">
                <img src="images/logos.png" alt="">
            </div>
            <div class="container content_above">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="search">
                            <div class="search__title">
                                <h3>
                                    <span>35,270</span> website templates from our creative community</h3>
                            </div>
                            <div class="search__field">
                                <form action="#">
                                    <div class="field-wrapper">
                                        <input class="relative-field rounded" type="text" placeholder="Search your products">
                                        <button class="btn btn--round" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="breadcrumb">
                                <ul>
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">All Products</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.search-area2 -->
    </section>
    <!--================================
        END SEARCH AREA
    =================================-->

    <!--================================
        START FILTER AREA
    =================================-->
    <div class="filter-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar">
                        <div class="filter__option filter--dropdown">
                            <a href="#" id="drop1" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories
                                <span class="lnr lnr-chevron-down"></span>
                            </a>
                            <ul class="custom_dropdown custom_drop2 dropdown-menu" aria-labelledby="drop1">
                                <li>
                                    <a href="#">Wordpress
                                        <span>35</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Landing Page
                                        <span>45</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Psd Template
                                        <span>13</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Plugins
                                        <span>08</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">HTML Template
                                        <span>34</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Components
                                        <span>78</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--dropdown">
                            <a href="#" id="drop2" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By
                                <span class="lnr lnr-chevron-down"></span>
                            </a>
                            <ul class="custom_dropdown dropdown-menu" aria-labelledby="drop2">
                                <li>
                                    <a href="#">Trending items</a>
                                </li>
                                <li>
                                    <a href="#">Popular items</a>
                                </li>
                                <li>
                                    <a href="#">New items </a>
                                </li>
                                <li>
                                    <a href="#">Best seller </a>
                                </li>
                                <li>
                                    <a href="#">Best rating </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--dropdown filter--range">
                            <a href="#" id="drop3" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Price Range
                                <span class="lnr lnr-chevron-down"></span>
                            </a>
                            <div class="custom_dropdown dropdown-menu" aria-labelledby="drop3">
                                <div class="range-slider price-range"></div>

                                <div class="price-ranges">
                                    <span class="from rounded">$30</span>
                                    <span class="to rounded">$300</span>
                                </div>
                            </div>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--select">
                            <div class="select-wrap">
                                <select name="price">
                                    <option value="low">Price : Low to High</option>
                                    <option value="high">Price : High to low</option>
                                </select>
                                <span class="lnr lnr-chevron-down"></span>
                            </div>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--select">
                            <div class="select-wrap">
                                <select name="price">
                                    <option value="12">12 Items per page</option>
                                    <option value="15">15 Items per page</option>
                                    <option value="25">25 Items per page</option>
                                </select>
                                <span class="lnr lnr-chevron-down"></span>
                            </div>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--layout">
                            <a href="all-products.html">
                                <div class="svg-icon">
                                    <img class="svg" src="images/svg/grid.svg" alt="it's just a layout control folks!">
                                </div>
                            </a>
                            <a href="all-products-list.html">
                                <div class="svg-icon">
                                    <img class="svg" src="images/svg/list.svg" alt="it's just a layout control folks!">
                                </div>
                            </a>
                        </div>
                        <!-- end /.filter__option -->
                    </div>
                    <!-- end /.filter-bar -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end filter-bar -->
        </div>
    </div>
    <!--================================
        END FILTER AREA
    =================================-->

    <!--================================
        START PRODUCTS AREA
    =================================-->
    <section class="products section--padding2">
        <!-- start container -->
        <div class="container">

            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-4 -->
                <div class="col-md-12">
                    <!-- start .single-product -->
                    <div class="product product--list">

                        <div class="product__thumbnail">
                            <img src="images/lp1.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <div class="prod_btn__wrap">
                                    <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                </div>
                                <div class="prod_btn__wrap">
                                    <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                                </div>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product__details">
                            <div class="product-desc">
                                <a href="#" class="product_title">
                                    <h4>MartPlace Extension Bundle</h4>
                                </a>
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet congue.</p>

                                <ul class="titlebtm">
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span>Plugin</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-meta">
                                <div class="author">
                                    <img class="auth-img" src="images/auth3.jpg" alt="author image">
                                    <p>
                                        <a href="#">AazzTech</a>
                                    </p>
                                </div>

                                <div class="love-comments">
                                    <p>
                                        <span class="lnr lnr-heart"></span> 90 loves</p>
                                    <p>
                                        <span class="lnr lnr-bubble"></span> 90 Comments</p>
                                </div>

                                <div class="product-tags">
                                    <span>Tags:</span>
                                    <ul>
                                        <li>
                                            <a href="#">plugins</a>
                                        </li>
                                        <li>
                                            <a href="#">wordpress</a>
                                        </li>
                                        <li>
                                            <a href="#">dynamic</a>
                                        </li>
                                        <li>
                                            <a href="#">php</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="rating product--rating">
                                    <ul>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-half-o"></span>
                                        </li>
                                    </ul>
                                    <span class="rating__count">(34)</span>
                                </div>
                            </div>
                            <!-- end product-meta -->

                            <div class="product-purchase">
                                <div class="price_love">
                                    <span>$10 - $50</span>
                                </div>
                                <div class="sell">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <span>16</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                    </div>
                    <!-- end /.single-product -->

                    <!-- start .single-product -->
                    <div class="product product--list">

                        <div class="product__thumbnail">
                            <img src="images/lp2.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <div class="prod_btn__wrap">
                                    <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                </div>
                                <div class="prod_btn__wrap">
                                    <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                                </div>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product__details">
                            <div class="product-desc">
                                <a href="#" class="product_title">
                                    <h4>Product Enquiry Extension</h4>
                                </a>
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet congue.</p>

                                <ul class="titlebtm">
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span>Plugin</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-meta">
                                <div class="author">
                                    <img class="auth-img" src="images/auth.jpg" alt="author image">
                                    <p>
                                        <a href="#">AazzTech</a>
                                    </p>
                                </div>

                                <div class="love-comments">
                                    <p>
                                        <span class="lnr lnr-heart"></span> 90 loves</p>
                                    <p>
                                        <span class="lnr lnr-bubble"></span> 90 Comments</p>
                                </div>

                                <div class="product-tags">
                                    <span>Tags:</span>
                                    <ul>
                                        <li>
                                            <a href="#">plugins</a>
                                        </li>
                                        <li>
                                            <a href="#">wordpress</a>
                                        </li>
                                        <li>
                                            <a href="#">dynamic</a>
                                        </li>
                                        <li>
                                            <a href="#">php</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="rating product--rating">
                                    <ul>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-half-o"></span>
                                        </li>
                                    </ul>
                                    <span class="rating__count">(34)</span>
                                </div>
                            </div>
                            <!-- end product-meta -->

                            <div class="product-purchase">
                                <div class="price_love">
                                    <span>$10 - $50</span>
                                </div>
                                <div class="sell">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <span>16</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                    </div>
                    <!-- end /.single-product -->

                    <!-- start .single-product -->
                    <div class="product product--list">

                        <div class="product__thumbnail">
                            <img src="images/lp3.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <div class="prod_btn__wrap">
                                    <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                </div>
                                <div class="prod_btn__wrap">
                                    <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                                </div>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product__details">
                            <div class="product-desc">
                                <a href="#" class="product_title">
                                    <h4>Visibility Manager Subscription</h4>
                                </a>
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet congue.</p>

                                <ul class="titlebtm">
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span>Plugin</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-meta">
                                <div class="author">
                                    <img class="auth-img" src="images/auth2.jpg" alt="author image">
                                    <p>
                                        <a href="#">AazzTech</a>
                                    </p>
                                </div>

                                <div class="love-comments">
                                    <p>
                                        <span class="lnr lnr-heart"></span> 90 loves</p>
                                    <p>
                                        <span class="lnr lnr-bubble"></span> 90 Comments</p>
                                </div>

                                <div class="product-tags">
                                    <span>Tags:</span>
                                    <ul>
                                        <li>
                                            <a href="#">plugins</a>
                                        </li>
                                        <li>
                                            <a href="#">wordpress</a>
                                        </li>
                                        <li>
                                            <a href="#">dynamic</a>
                                        </li>
                                        <li>
                                            <a href="#">php</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="rating product--rating">
                                    <ul>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-half-o"></span>
                                        </li>
                                    </ul>
                                    <span class="rating__count">(34)</span>
                                </div>
                            </div>
                            <!-- end product-meta -->

                            <div class="product-purchase">
                                <div class="price_love">
                                    <span>$10 - $50</span>
                                </div>
                                <div class="sell">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <span>16</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                    </div>
                    <!-- end /.single-product -->

                    <!-- start .single-product -->
                    <div class="product product--list">

                        <div class="product__thumbnail">
                            <img src="images/lp4.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <div class="prod_btn__wrap">
                                    <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                </div>
                                <div class="prod_btn__wrap">
                                    <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                                </div>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product__details">
                            <div class="product-desc">
                                <a href="#" class="product_title">
                                    <h4>Sundori toma amar tumi</h4>
                                </a>
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet congue.</p>

                                <ul class="titlebtm">
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span>Plugin</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-meta">
                                <div class="author">
                                    <img class="auth-img" src="images/auth.jpg" alt="author image">
                                    <p>
                                        <a href="#">AazzTech</a>
                                    </p>
                                </div>

                                <div class="love-comments">
                                    <p>
                                        <span class="lnr lnr-heart"></span> 90 loves</p>
                                    <p>
                                        <span class="lnr lnr-bubble"></span> 90 Comments</p>
                                </div>

                                <div class="product-tags">
                                    <span>Tags:</span>
                                    <ul>
                                        <li>
                                            <a href="#">plugins</a>
                                        </li>
                                        <li>
                                            <a href="#">wordpress</a>
                                        </li>
                                        <li>
                                            <a href="#">dynamic</a>
                                        </li>
                                        <li>
                                            <a href="#">php</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="rating product--rating">
                                    <ul>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-half-o"></span>
                                        </li>
                                    </ul>
                                    <span class="rating__count">(34)</span>
                                </div>
                            </div>
                            <!-- end product-meta -->

                            <div class="product-purchase">
                                <div class="price_love">
                                    <span>$10 - $50</span>
                                </div>
                                <div class="sell">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <span>16</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                    </div>
                    <!-- end /.single-product -->

                    <!-- start .single-product -->
                    <div class="product product--list">

                        <div class="product__thumbnail">
                            <img src="images/lp5.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <div class="prod_btn__wrap">
                                    <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                </div>
                                <div class="prod_btn__wrap">
                                    <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                                </div>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product__details">
                            <div class="product-desc">
                                <a href="#" class="product_title">
                                    <h4>WHMCS wordpress theme</h4>
                                </a>
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet congue.</p>

                                <ul class="titlebtm">
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span>Plugin</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-meta">
                                <div class="author">
                                    <img class="auth-img" src="images/auth3.jpg" alt="author image">
                                    <p>
                                        <a href="#">AazzTech</a>
                                    </p>
                                </div>

                                <div class="love-comments">
                                    <p>
                                        <span class="lnr lnr-heart"></span> 90 loves</p>
                                    <p>
                                        <span class="lnr lnr-bubble"></span> 90 Comments</p>
                                </div>

                                <div class="product-tags">
                                    <span>Tags:</span>
                                    <ul>
                                        <li>
                                            <a href="#">plugins</a>
                                        </li>
                                        <li>
                                            <a href="#">wordpress</a>
                                        </li>
                                        <li>
                                            <a href="#">dynamic</a>
                                        </li>
                                        <li>
                                            <a href="#">php</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="rating product--rating">
                                    <ul>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-half-o"></span>
                                        </li>
                                    </ul>
                                    <span class="rating__count">(34)</span>
                                </div>
                            </div>
                            <!-- end product-meta -->

                            <div class="product-purchase">
                                <div class="price_love">
                                    <span>$10 - $50</span>
                                </div>
                                <div class="sell">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <span>16</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                    </div>
                    <!-- end /.single-product -->

                    <!-- start .single-product -->
                    <div class="product product--list">

                        <div class="product__thumbnail">
                            <img src="images/lp6.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <div class="prod_btn__wrap">
                                    <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                </div>
                                <div class="prod_btn__wrap">
                                    <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                                </div>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product__details">
                            <div class="product-desc">
                                <a href="#" class="product_title">
                                    <h4>Dribble shot illustration</h4>
                                </a>
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet congue.</p>

                                <ul class="titlebtm">
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span>Plugin</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-meta">
                                <div class="author">
                                    <img class="auth-img" src="images/auth2.jpg" alt="author image">
                                    <p>
                                        <a href="#">AazzTech</a>
                                    </p>
                                </div>

                                <div class="love-comments">
                                    <p>
                                        <span class="lnr lnr-heart"></span> 90 loves</p>
                                    <p>
                                        <span class="lnr lnr-bubble"></span> 90 Comments</p>
                                </div>

                                <div class="product-tags">
                                    <span>Tags:</span>
                                    <ul>
                                        <li>
                                            <a href="#">plugins</a>
                                        </li>
                                        <li>
                                            <a href="#">wordpress</a>
                                        </li>
                                        <li>
                                            <a href="#">dynamic</a>
                                        </li>
                                        <li>
                                            <a href="#">php</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="rating product--rating">
                                    <ul>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-half-o"></span>
                                        </li>
                                    </ul>
                                    <span class="rating__count">(34)</span>
                                </div>
                            </div>
                            <!-- end product-meta -->

                            <div class="product-purchase">
                                <div class="price_love">
                                    <span>$10 - $50</span>
                                </div>
                                <div class="sell">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <span>16</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                        <!-- end /.product-desc -->
                    </div>
                    <!-- end /.single-product -->

                    <!-- start .single-product -->
                    <div class="product product--list">

                        <div class="product__thumbnail">
                            <img src="images/lp1.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <div class="prod_btn__wrap">
                                    <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                </div>
                                <div class="prod_btn__wrap">
                                    <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                                </div>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product__details">
                            <div class="product-desc">
                                <a href="#" class="product_title">
                                    <h4>MartPlace Extension Bundle</h4>
                                </a>
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet congue.</p>

                                <ul class="titlebtm">
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span>Plugin</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-meta">
                                <div class="author">
                                    <img class="auth-img" src="images/auth3.jpg" alt="author image">
                                    <p>
                                        <a href="#">AazzTech</a>
                                    </p>
                                </div>

                                <div class="love-comments">
                                    <p>
                                        <span class="lnr lnr-heart"></span> 90 loves</p>
                                    <p>
                                        <span class="lnr lnr-bubble"></span> 90 Comments</p>
                                </div>

                                <div class="product-tags">
                                    <span>Tags:</span>
                                    <ul>
                                        <li>
                                            <a href="#">plugins</a>
                                        </li>
                                        <li>
                                            <a href="#">wordpress</a>
                                        </li>
                                        <li>
                                            <a href="#">dynamic</a>
                                        </li>
                                        <li>
                                            <a href="#">php</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="rating product--rating">
                                    <ul>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-half-o"></span>
                                        </li>
                                    </ul>
                                    <span class="rating__count">(34)</span>
                                </div>
                            </div>
                            <!-- end product-meta -->

                            <div class="product-purchase">
                                <div class="price_love">
                                    <span>$10 - $50</span>
                                </div>
                                <div class="sell">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <span>16</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                    </div>
                    <!-- end /.single-product -->

                    <!-- start .single-product -->
                    <div class="product product--list">

                        <div class="product__thumbnail">
                            <img src="images/lp2.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <div class="prod_btn__wrap">
                                    <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                </div>
                                <div class="prod_btn__wrap">
                                    <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                                </div>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product__details">
                            <div class="product-desc">
                                <a href="#" class="product_title">
                                    <h4>Product Enquiry Extension</h4>
                                </a>
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet congue.</p>

                                <ul class="titlebtm">
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span>Plugin</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-meta">
                                <div class="author">
                                    <img class="auth-img" src="images/auth.jpg" alt="author image">
                                    <p>
                                        <a href="#">AazzTech</a>
                                    </p>
                                </div>

                                <div class="love-comments">
                                    <p>
                                        <span class="lnr lnr-heart"></span> 90 loves</p>
                                    <p>
                                        <span class="lnr lnr-bubble"></span> 90 Comments</p>
                                </div>

                                <div class="product-tags">
                                    <span>Tags:</span>
                                    <ul>
                                        <li>
                                            <a href="#">plugins</a>
                                        </li>
                                        <li>
                                            <a href="#">wordpress</a>
                                        </li>
                                        <li>
                                            <a href="#">dynamic</a>
                                        </li>
                                        <li>
                                            <a href="#">php</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="rating product--rating">
                                    <ul>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-half-o"></span>
                                        </li>
                                    </ul>
                                    <span class="rating__count">(34)</span>
                                </div>
                            </div>
                            <!-- end product-meta -->

                            <div class="product-purchase">
                                <div class="price_love">
                                    <span>$10 - $50</span>
                                </div>
                                <div class="sell">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <span>16</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                    </div>
                    <!-- end /.single-product -->

                    <!-- start .single-product -->
                    <div class="product product--list">

                        <div class="product__thumbnail">
                            <img src="images/lp3.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <div class="prod_btn__wrap">
                                    <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                </div>
                                <div class="prod_btn__wrap">
                                    <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                                </div>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product__details">
                            <div class="product-desc">
                                <a href="#" class="product_title">
                                    <h4>Visibility Manager Subscription</h4>
                                </a>
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet congue.</p>

                                <ul class="titlebtm">
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span>Plugin</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-meta">
                                <div class="author">
                                    <img class="auth-img" src="images/auth2.jpg" alt="author image">
                                    <p>
                                        <a href="#">AazzTech</a>
                                    </p>
                                </div>

                                <div class="love-comments">
                                    <p>
                                        <span class="lnr lnr-heart"></span> 90 loves</p>
                                    <p>
                                        <span class="lnr lnr-bubble"></span> 90 Comments</p>
                                </div>

                                <div class="product-tags">
                                    <span>Tags:</span>
                                    <ul>
                                        <li>
                                            <a href="#">plugins</a>
                                        </li>
                                        <li>
                                            <a href="#">wordpress</a>
                                        </li>
                                        <li>
                                            <a href="#">dynamic</a>
                                        </li>
                                        <li>
                                            <a href="#">php</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="rating product--rating">
                                    <ul>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-half-o"></span>
                                        </li>
                                    </ul>
                                    <span class="rating__count">(34)</span>
                                </div>
                            </div>
                            <!-- end product-meta -->

                            <div class="product-purchase">
                                <div class="price_love">
                                    <span>$10 - $50</span>
                                </div>
                                <div class="sell">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <span>16</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                    </div>
                    <!-- end /.single-product -->
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="pagination-area">
                        <nav class="navigation pagination" role="navigation">
                            <div class="nav-links">
                                <a class="prev page-numbers" href="#">
                                    <span class="lnr lnr-arrow-left"></span>
                                </a>
                                <a class="page-numbers current" href="#">1</a>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a class="next page-numbers" href="#">
                                    <span class="lnr lnr-arrow-right"></span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END PRODUCTS AREA
    =================================-->

    {{template "_foapp"}}
{{end}}