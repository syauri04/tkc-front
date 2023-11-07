<?php 
    include("header.php")
?>
        <!-- service-area -->
        <section class="service-area wrap-pading-top">
            <div class="container wrap-bottom-30">
                <span class="breadcumb-kategori">
                    Home > <strong> Daftar Distributor </strong>
                </span>
            </div>
            <div class="bg-red">
                <div class="container">
                    <h1>Daftar Sebagai Distributor</h1>
                    <span>Bakal banyak untung jadi Distributor TOKOKANGCUCI</span>
                    <div class="bg-ilusi">
                        <img src="img/Ilustrasi2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="container wrap-btm-footer">
                <div class="row">
                    <form action="" class="form-primerer">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">  
                        <div class="box-regis pr-right">
                            <span class="cart-title-head">Data Primer Seller</span>
                            <div class="form-primer">
                                <div class="form-group">
                                    <label for="nama">Brand<span class="t-red">*</span></label>
                                    <input type="text" class="form-control" id="nama" placeholder="Nama Brand Seller">
                                </div>
                                <div class="form-group">
                                    <label for="handphone">Seller ID</label>
                                    <input type="text" disabled class="form-control" id="handphone" placeholder="Seller ID">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap<span class="t-red">*</span></label>
                                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                                </div>
                                
                                <div class="form-group">
                                    <label for="provinsi">Status Seller<span class="t-red">*</span></label>
                                    <select class="form-control" id="provinsi">
                                        <option value="">Pilih Status Seller</option>
                                        <option value="">Jawa Tengah</option>
                                        <option value="">Jawa Timur</option>
                                        <option value="">Jawa Selatan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama">No.Handphone<span class="t-red">*</span></label>
                                    <input type="text" class="form-control" id="nama" placeholder="e.g 081234567890">
                                </div>
                                <div class="form-group">
                                    <label for="nama">No.Handphone Admin<span class="t-red">*</span></label>
                                    <input type="text" class="form-control" id="nama" placeholder="e.g 081234567890">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Email<span class="t-red">*</span></label>
                                    <input type="email" class="form-control" id="nama" placeholder="e.g seller1234@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Kewarganegaraan<span class="t-red">*</span></label>
                                    <select class="form-control" id="provinsi">
                                        <option value="">Indonesia</option>
                                        <option value="">Jawa Tengah</option>
                                        <option value="">Jawa Timur</option>
                                        <option value="">Jawa Selatan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Identitas<span class="t-red">*</span></label>
                                    <div class="group-input">
                                        <select class="form-control grupy-l" id="provinsi">
                                            <option value="">KTP/Indonesian ID</option>
                                            <option value="">Pasport</option>
                                        </select>
                                        <input type="text" class="form-control grupy-r" id="nama" placeholder="e.g +6281234567890">
                                    </div>
                                    
                                </div>
                                <div class="form-group f-upload">
                                    <label for="gambar">Upload Foto Identitas<span class="t-red">*</span></label>
                                    <div class="bx-file">
                                        <div class="img-load">
                                            <img id="thumbnail" src="img/bx-file.png" alt="Thumbnail">
                                        </div>
                                        <div class="for-file">
                                            <!-- <label for="gambar">Pilih Gambar:</label> -->
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar" accept="image/*">
                                                <label class="custom-file-label" for="gambar">Upload Foto Identitas</label>
                                            </div>
                                            <div class="for-info-file">
                                                <span>
                                                    <strong>Image Requirements</strong><br>
                                                    File format: JPG/JPEG/PNG<br>
                                                    Max file size: 1 MB<br>
                                                    Rasio: 3:4
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama">No.Kartu Keluarga</label>
                                    <input type="text" class="form-control" id="nama" placeholder="No Kartu Keluarga">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Tempat Lahir">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Tempat Lahir<span class="t-red">*</span></label>
                                    <input type="date" class="form-control" id="nama" placeholder="Tanggal Lahir">
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Agama</label>
                                    <select class="form-control" id="provinsi">
                                        <option value="">Islam</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pos">Jenis Kelamin <span class="t-red">*</span></label>
                                    <div class="form-check">
                                        <input type="radio" name="gender" value="male"><span>Pria / Male</span>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="gender" value="female"> <span>Wanita / Female</span>
                                    </div>
                                </div>

                                <div class="bx-jas-send">
                                    <span class="cart-title-head">Data Lokasi Seller</span>
                                </div>
                                
                                <div class="form-group">
                                    <label for="provinsi">Negara Domosili<span class="t-red">*</span></label>
                                    <select class="form-control" id="provinsi">
                                        <option value="">Pilih Negara</option>
                                        <option value="">Jawa Tengah</option>
                                        <option value="">Jawa Timur</option>
                                        <option value="">Jawa Selatan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Provinsi Domisili<span class="t-red">*</span></label>
                                    <select class="form-control" id="provinsi">
                                        <option value="">Pilih Provinsi</option>
                                        <option value="">Jawa Tengah</option>
                                        <option value="">Jawa Timur</option>
                                        <option value="">Jawa Selatan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Kota / Kabupaten Domisili<span class="t-red">*</span></label>
                                    <select class="form-control" id="provinsi">
                                        <option value="">Pilih Kota/Kabupaten</option>
                                        <option value="">Jawa Tengah</option>
                                        <option value="">Jawa Timur</option>
                                        <option value="">Jawa Selatan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Kecamatan Domisili<span class="t-red">*</span></label>
                                    <select class="form-control" id="provinsi">
                                        <option value="">Pilih Kecamatan</option>
                                        <option value="">Jawa Tengah</option>
                                        <option value="">Jawa Timur</option>
                                        <option value="">Jawa Selatan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pengiriman">Alamat Domisili<span class="t-red">*</span></label>
                                    <textarea class="form-control" id="pengiriman" rows="3" placeholder="Alamat Lengkap Domisili"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="pos">Kode Pos Domisili<span class="t-red">*</span></label>
                                    <input type="text" class="form-control" id="pos" placeholder="Kode Pos">
                                </div>
                                
                                <div class="form-group">
                                    <label for="pos">Titik Lokasi Usaha Domisili</label>
                                    <div class="form-group-cus">
                                        <label for="pos">Lintang :</label>
                                        <input type="text" class="form-control-cus" id="latitude" placeholder="41.40338">
                                    </div>
                                    <div class="form-group-cus">
                                        <label for="pos">Bujur :</label>
                                        <input type="text" class="form-control-cus" id="longitude" placeholder="2.17403">
                                    </div>
                                    
                                </div>
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        
                        <div class="box-regis pl-cus">
                            <span class="cart-title-head">Data Pembayaran</span>
                            <div class="form-primer">
                                <div class="form-group">
                                    <label for="pos">No.Rekening</label>
                                    <input type="text" class="form-control" id="pos" placeholder="Isi No. Rekening Pembayaran">
                                </div>
                                <div class="form-group">
                                    <label for="pos">NPWP<span class="t-red">*</span></label>
                                    <input type="text" class="form-control" id="pos" placeholder="Isi NPWP">
                                </div>
                                <div class="bx-jas-send">
                                    <span class="cart-title-head">Profil</span>
                                </div>
                                <div class="form-group f-upload">
                                    <label for="gambar">Upload Foto Profil Seller<span class="t-red">*</span></label>
                                    <div class="bx-file">
                                        <div class="img-load">
                                            <img id="thumbnail2" src="img/bx-file.png" alt="Thumbnail">
                                        </div>
                                        <div class="for-file">
                                            <!-- <label for="gambar">Pilih Gambar:</label> -->
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar2" accept="image/*">
                                                <label class="custom-file-label label-2" for="gambar2">Upload Foto Profil</label>
                                            </div>
                                            <div class="for-info-file">
                                                <span>
                                                    <strong>Image Requirements</strong><br>
                                                    File format: JPG/JPEG/PNG<br>
                                                    Max file size: 1 MB<br>
                                                    Rasio: 3:4
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                

                                <div class="bx-jas-send">
                                    <span class="cart-title-head">Data Social Media</span>
                                </div>
                                <div class="form-group">
                                    <label for="pos">Account Facebook<span class="t-red">*</span></label>
                                    
                                    <div class="group-input">
                                        <img src="img/uil_facebook.png" alt="">
                                        <input type="text" class="form-control" id="pos" placeholder="Masukan Nama Profil Facebook Jualan Anda">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pos">Account Instagram<span class="t-red">*</span></label>
                                    
                                    <div class="group-input">
                                        <img src="img/uii-ig.png" alt="">
                                        <input type="text" class="form-control" id="pos" placeholder="Masukan username Instagram tanpa @">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pos">Account Tiktok<span class="t-red">*</span></label>
                                    
                                    <div class="group-input">
                                        <img src="img/uii-x.png" alt="">
                                        <input type="text" class="form-control" id="pos" placeholder="Masukan username Tiktok tanpa @">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pos">Link Website</label>
                                    
                                    <div class="group-input">
                                        <img src="img/uii-web.png" alt="">
                                        <input type="text" class="form-control" id="pos" placeholder="Masukan Link website jualan anda">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pos">Link Marketplace</label>
                                    
                                    <div class="group-input">
                                        <img src="img/uii-marketplace.png" alt="">
                                        <input type="text" class="form-control" id="pos" placeholder="Masukan link e-commerce jualan anda (Shopee, Tokped)">
                                    </div>
                                </div>
                                

                               
                                
                                <div class="bx-jas-send">
                                    <div class="cart-note">
                                        <span>*Wajib diisi</span>
                                    </div>
                                    <div class="cart-privacy">
                                        <span>Dengan mendaftar, Anda menyetujui pemrosesan data pribadi Anda oleh TOKOKANGCUCI, sebagaimana tercantum dalam Kebijakan Privasi Kami.</a></span>
                                    </div>
                                    
                                </div>
                                <button type="submit" class="btx primer-border">Kirim Pendaftaran Distributor</button>
                            </div>
                        </div>
                        
                        
                   
                    <   /div>
                    </form>
                </div>
            </div>  
            
        </section>

        <section class="cta-area" style="background-image:url(img/bg-distributor.png)">
            
            <!-- <div class="text-container text-center">
                <div class="call-to-action">
                    <h1>Bergabung Menjadi Member Kami</h1>
                    <h2>Join our membership</h2>
                    <div class="call-to-action">
                        <a href="" target="blank" class="bt-primer-white">Daftar</a>
                        <a href="" target="blank" class="bt-primer-white">Masuk</a>
                    </div>
                </div>
            </div> -->
                
        </section>
        <script>
        document.getElementById('gambar').addEventListener('change', function() {
            var file = this.files[0];
            // var fileName = file.name;
            if (file.name.length > 10) {
                var fileName = file.name.slice(0, 20);
            }
            console.log(fileName);
            var label = document.querySelector('.custom-file-label');
            label.innerHTML = fileName;
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('thumbnail').src = e.target.result;
                document.getElementById('thumbnail').style.display = 'block';
            }
            reader.readAsDataURL(file);
        });

        document.getElementById('gambar2').addEventListener('change', function() {
            var file = this.files[0];
            // var fileName = file.name;
            if (file.name.length > 10) {
                var fileName = file.name.slice(0, 20);
            }
            console.log(fileName);
            var label = document.querySelector('.label-2');
            label.innerHTML = fileName;
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('thumbnail2').src = e.target.result;
                document.getElementById('thumbnail2').style.display = 'block';
            }
            reader.readAsDataURL(file);
        });


    </script>
   <?php 
include("footer.php");
   ?>