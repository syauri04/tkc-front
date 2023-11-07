<?php 
    include("header.php")
?>
        <!-- service-area -->
        <section class="service-area wrap-pading-top">
            <div class="container wrap-bottom-30">
                <span class="breadcumb-kategori">
                    Home > <strong> Login </strong>
                </span>
            </div>
            <div class="bg-red">
                <div class="container">
                    <h1>Masuk ke akunmu</h1>
                    <!-- <span>Bakal banyak untung jadi Distributor TOKOKANGCUCI</span> -->
                    <div class="bg-ilusi">
                        <img src="img/Ilustrasi1.png" alt="">
                    </div>
                </div>
            </div>

        </section>
        <section class="log-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pad-log">
                        <form action="" class="form-primer">
                            <div class="form-group">
                                <label for="nama">Email<span class="t-red">*</span></label>
                                <input type="text" class="form-control" id="nama" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="nama">Password<span class="t-red">*</span></label>
                                <input type="email" class="form-control" id="nama" placeholder="Password">
                            </div>
                            <div class="form-cap">
                                <div class="inner-l">
                                    <span>Belum punya akun? <a href="register-member.php">Daftar</a> </span>
                                </div>
                                <div class="inner">
                                     <a href="register-member.php">Lupa Password?</a>
                                </div>
                            </div>
                            <div class="log-btn">
                                <a type="submit" href="dashboard-member.php" class="btx primer-solid">Masuk</a>
                            </div>
                            <div class="log-msg">
                                <span>Masuk ke akunmu gagal, periksa kembali Email & Password mu</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           
        </section>
       
<?php 
    include("footer.php")
?>