<?php 
    include("header.php")
?>
<!-- slider-area -->
        <section class="slider-area warp-betwen-head">
            <div class="container">

            
            <div class="slider-active">
                <div class="single-slider slider-bg d-flex align-items-center" style="background-image:url(img/image.png)">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="slider-content">
                                    <h1 data-animation="fadeInDown" data-delay=".2s" class="" style="animation-delay: 0.2s;">Bergabung Menjadi Member Kami</h1>
                                    <p data-animation="fadeInLeft" data-delay=".4s" class="" style="animation-delay: 0.4s;">Join our Membership Today</p>
                                    <a href="#" class="bt-primer-white" data-animation="fadeInUp" data-delay=".6s" tabindex="-1" style="animation-delay: 0.6s;">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-bg d-flex align-items-center" style="background-image:url(img/image.png)">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="slider-content">
                                    <h1 data-animation="fadeInDown" data-delay=".2s" class="" style="animation-delay: 0.2s;">Bergabung Menjadi Member Kami</h1>
                                    <p data-animation="fadeInLeft" data-delay=".4s" class="" style="animation-delay: 0.4s;">Join our Membership Today</p>
                                    <a href="#" class="bt-primer-white" data-animation="fadeInUp" data-delay=".6s" tabindex="-1" style="animation-delay: 0.6s;">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- about-area -->
        <section class="about-area">
            <div class="container">
                <div class="quad-block-colors">
                    <div class="quad-block-colors-inner column-1">
                        <div class="quad-item" style="background-image:url('img/Group\ 371.png');">
                            <a class="quad-img-link" href="kategori.php" ></a>
                        </div>
                        <div class="quad-item" style="background-image:url('img/Group\ 372.png');">
                            <a class="quad-img-link" href="kategori.php" ></a>
                        </div>
                        <div class="quad-item" style="background-image:url('img/Group\ 373.png');">
                            <a class="quad-img-link" href="kategori.php" ></a>
                        </div>
                        <div class="quad-item" style="background-image:url('img/Group\ 374.png');">
                            <a class="quad-img-link" href="kategori.php" ></a>
                        </div>
                    </div>
                    <div class="quad-block-colors-inner column-2">
                        <div class="quad-item" style="background-image:url('img/Group\ 377.png');">
                            <a class="quad-img-link" href="kategori.php" ></a>
                        </div>
                        <div class="quad-item" style="background-image:url('img/Group\ 375.png');">
                            <a class="quad-img-link" href="kategori.php" ></a>
                        </div>
                        <div class="quad-item" style="background-image:url('img/Group\ 376.png');">
                            <a class="quad-img-link" href="kategori.php" ></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-area -->
        <section class="service-area">
            <div class="container">
                <span class="title-type1">
                    <span class="h-middle">
                        <a href="">Shop Our Latest Brand Product</a>
                    </span>
                    <div class="js-change-tab">
                        <span>Filter</span>
                        <select name="sort" data-m="" class="filter_select">
                            <option value="popular-asc" selected="">Terbaru</option>
                            <option value="sale-desc">По размеру скидки</option>
                            <option value="price-desc">Сначала дорогие</option>
                            <option value="price-asc">Сначала дешевые</option>
                            <option value="quantity-desc">Большой объём</option>
                            <option value="quantity-asc">Малый объём</option>
                        </select>
                    </div>
                </span>
            </div>
            <div class="container">
                <span class="title-type2">
                    <span class="h-middle">
                        <a href="">LAVR</a>
                    </span>
                    <div class="view-all-tab">
                        <a href="" target="blank" class="btn">Lihat Semua</a>
                    </div>
                </span>
                <div class="row js-tab">
                    <div class="eq_wrapper">
                        <?php 
                            for ($i = 1; $i <= 5; $i++) {
                        ?>
                                <div class="js-item view_metro product colcus-lg-1-5 colcus-md-3 colcus-sm-4 colcus-xs-6" id="bx_3966226736_1105539">
                                    <div class="product-wrapper">
                                        <div class="img col-lg-12 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                                            <a href="detail-product.php">
                                                <img class="preview-img lazyloaded" src="img/prod1.png"  alt="">
                                            </a>
                                            </div>
                                            <div class="inner">
                                                <div class="info">
                                                    <a href="detail-product.php" class="product_title">
                                                        ACTIVE FOAM COLOR 20 L ...			
                                                    </a>
                                                    <span class="product_price">RP.200.000</span>
                                                    <div class="bx-sale">
                                                        <div class="round_sale_list" title="20%"><span>-</span>15<span>%</span></div>
                                                        <span class="cur_price">RP.230.000</span>
                                                    </div>
                                                    
                                                </div>
                                                <div class="basket">
                                                    <a class="button_asg md put-goods-into-basket">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                        <?php
                            }
                        ?>
                        

                        
                    </div>
                </div>
            </div>
            <div class="container warp_pad_product">
                <span class="title-type2">
                    <span class="h-middle">
                        <a href="">Dr.ACTIVE</a>
                    </span>
                    <div class="view-all-tab">
                        <a href="" target="blank" class="btn">Lihat Semua</a>
                    </div>
                </span>
                <div class="row js-tab">
                    <div class="eq_wrapper">
                        <?php 
                            for ($i = 1; $i <= 5; $i++) {
                        ?>
                                <div class="js-item view_metro product colcus-lg-1-5 colcus-md-3 colcus-sm-4 colcus-xs-6" id="bx_3966226736_1105539">
                                    <div class="product-wrapper">
                                        <div class="img col-lg-12 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                                            <a href="detail-product.php">
                                                <img class="preview-img lazyloaded" src="img/prod2.png"  alt="">
                                            </a>
                                            </div>
                                            <div class="inner">
                                                <div class="info">
                                                    <a href="detail-product.php" class="product_title">
                                                        ACTIVE FOAM COLOR 20 L ...			
                                                    </a>
                                                    <span class="product_price">RP.200.000</span>
                                                    <div class="bx-sale">
                                                        <div class="round_sale_list" title="20%"><span>-</span>15<span>%</span></div>
                                                        <span class="cur_price">RP.230.000</span>
                                                    </div>
                                                    
                                                </div>
                                                <div class="basket">
                                                    <a class="button_asg md put-goods-into-basket">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                        <?php 
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="container view_brand">
                <a href="kategori.php" class="bt_view_brand">Lihat Brand Lainnya</a>
            </div>
        </section>
      
        <!-- cta-ads -->
        <section class="cta-ads">
            <div class="container">
                <div class="tkc-for-business-banner" style="background-image: url(img/Promo-Image.png);">
                    
                </div>
            </div>
        </section>
        <!-- cta-area -->
        <section class="cta-area" style="background-image:url(img/Image-Bottom.png)">
            
            <div class="text-container text-center">
                <div class="call-to-action">
                    <h1>Bergabung Menjadi Member Kami</h1>
                    <h2>Join our membership</h2>
                    <div class="call-to-action">
                        <a href=""  class="bt-primer-white">Daftar</a>
                        <a href="login.php" class="bt-primer-white">Masuk</a>
                    </div>
                </div>
            </div>
                
        </section>

<?php 
    include("footer.php");
?>