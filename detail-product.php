<?php 
    include("header.php")
?>
        <!-- service-area -->
        <section class="service-area wrap-pading-top">
            <div class="container">
                <span class="breadcumb-kategori">
                    Home > Kategori > <strong> Foam & Manual Wash Shampoo </strong>
                </span>
            </div>
            <div class="container">
                <div class="row wrap-pading-top">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        <div class="text-center main-detail-product"> 

                            <figure id="imageZoom" class="zoom"  style="background-image: url(img/prod-detail.png);">
                                    <img id="ImageShow" src="img/prod-detail.png">
                            </figure>
                        </div>

                        <div class="d-flex">
                            <div class="img-gallery-product me-2 d-flex align-items-center justify-content-center overflow-hidden">
                                <img src="img/prod-detail.png"  onclick="gantiGambar(this);">
                            </div>   
                            <div class="img-gallery-product me-2 bg-hijau rounded d-flex align-items-center justify-content-center overflow-hidden" >
                                <img src="img/prod-detail.png"  onclick="gantiGambar(this);">
                            </div>   
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  ">
                        <div class="desc-detail-product">
                            <div class="title-dt-prod ">
                                <h1>ACTIVE FOAM COLOR 20 L</h1>
                                <span>Terjual 5</span>
                            </div>
                            <div class="sum-dt-prod">
                                LAVR ACTIVE FOAM COLOR 20 Liter. <br><br>
                                Konsentrat busa aktif dengan formula yang telah diperkuat dan busa berwarna. Busa merah muda memungkinkan aplikasi yang akurat proses pencucian.
                            </div>
                            <div class="share-dt-prod">
                                <img src="img/icon-share.png" alt="">
                                <span>Share</span>
                                <a href="#"><img src="img/Whatsapp.png" alt=""></a>
                                <a href="#"><img src="img/Telegram.png" alt=""></a>
                                <a href="#"><img src="img/Twitter.png" alt=""></a>
                                <a href="#"><img src="img/Facebook.png" alt=""></a>
                                <a href="#"><img src="img/Linkedin.png" alt=""></a>
                            </div>
                            <div class="order-dt-prod">
                                <p>Harga Produk</p>
                                <div class="info">
                                    <span class="product_price">RP.200.000</span>
                                    <div class="bx-sale">
                                        <div class="round_sale_list" title="20%"><span>-</span>15<span>%</span></div>
                                        <span class="cur_price">RP.230.000</span>
                                    </div>
                                    <span class="min-order">Minimal order 1</span>
                                </div>
                                <div class="bx-btn-order">
                                    <a href="" target="blank" class="btx primer-border mr-3">Add to Cart</a>
                                    <a href="cart.php"  class="btx primer-solid">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="container wrap-top-70">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Informasi Produk</a>
                    </li>
                </ul>
                <div class="tab-content mt-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                       
                        <p>
                            LAVR ACTIVE FOAM COLOR 20 Liter. <br><br>
                            Konsentrat busa aktif dengan formula yang telah diperkuat dan busa berwarna. Busa merah muda memungkinkan aplikasi yang akurat proses pencucian. Menghilangkan kotoran yang telah terakumulasi pada permukaan kendaraan. Mudah dibilas, memiliki aroma netral, dapat digunakan pada bahan plastik, karet dan paduan logam non-besi.
                            <br><br>
                            Petunjuk Penggunaan : 
                            <br><br>
                            Kocok sebelum digunakan. Takaran pencampuran dengan menggunakan tabung generator busa pada stasiun cuci kendaraan adalah 10 - 20 ml shampoo per 1 Liter air. 
                            <br><br>
                            Sedangkan takaran pencampuran dengan tabung busa pada penggunaan rumah tangga adalah 125 ml - 340 ml shampoo per 1 Liter air. 
                            <br><br>
                            Bersihkan kotoran membandel dengan air bertekanan tinggi. Aplikasikan Shampoo secara merata ke permukaan kendaraan mulai dari bawah ke atas. 
                            <br><br>
                            Biarkan selama 2-3 menit. Bilas dengan air bertekanan tinggi. Jangan biarkan sampo mengering pada permukaan kendaraan dan jangan diaplikasikan pada permukaan kendaraan yang panas. 
                            <br><br>
                            Note : Gunakan Peralatan dengan sepesifikasi sbb 
                            <br><br>
                            Mesin High Pressure Washer. <br>
                            Min 100 Bar ~ Maksimal 180 Bar <br>
                            Flow Rate 9 Liter s/d 15 Liter Permenit <br>
                            Min 1,8 Kwh s/d 2.2 Kwh 
                            <br><br>
                            Foam Lance khusus yang dapat menghasilkan foam tebal dengan mesin yang High Pressure Washer.

                        </p>
                    </div>
                </div>
            </div>
            <div class="container wrap-btm-footer">
                <span class="title-type2">
                    <span class="h-middle">
                        <a href="">Produk Terkait</a>
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
           
        </section>
      
       
        
<?php 
    include("footer.php")
?>